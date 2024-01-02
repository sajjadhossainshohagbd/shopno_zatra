<?php

namespace App\Livewire\Backend\News\Post;

use Livewire\Component;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $category_id;
    public $thumbnail;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required'
        ]);

        $post = new Post();
        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->description = $this->description;
        $post->category_id = $this->category_id;
        $post->thumbnail = $this->thumbnail->store('uploads/news-media/posts/thumbnail','public');
        $post->save();

        session()->flash('success','Post added successfully!');

        return $this->redirectRoute('post.index');
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    #[Title('Add Post')]
    public function render()
    {
        return view('backend.news.post.add',[
            'categories' => Category::all()
        ]);
    }
}
