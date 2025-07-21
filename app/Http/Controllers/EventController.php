<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // ==== PUBLIC ====
    public function index()
    {
        $eventItems = Event::latest('published_at')->paginate(5);

        return view('event.index', compact('eventItems'));
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    // ==== ADMIN ====
    public function adminIndex()
    {
        $eventItems = Event::orderByDesc('published_at')->get();
        return view('admin.event.index', compact('eventItems'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'excerpt' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = Str::slug($request->title);

        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->body,
            'excerpt' => $request->excerpt ?? Str::limit(strip_tags($request->body), 150),
            'published_at' => Carbon::now(),
        ];

        if ($request->hasFile('image')) {
            $filename = $slug . '.' . $request->image->extension();
            $request->image->storeAs('public/events', $filename);
            $data['image'] = 'events/' . $filename;
        }

        Event::create($data);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ];

        if ($request->hasFile('image')) {
            if ($event->image && Storage::disk('public')->exists($event->image)) {
                Storage::disk('public')->delete($event->image);
            }

            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil dihapus.');
    }
}
