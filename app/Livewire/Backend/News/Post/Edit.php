<?php

namespace App\Livewire\Backend\News\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;

class Edit extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $category_id;
    public $thumbnail;

    public $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
        $this->title = $this->post->title;
        $this->slug = $this->post->slug;
        $this->description = $this->post->description;
        $this->category_id = $this->post->category_id;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,'.$this->post->id,
            'description' => 'required',
            'thumbnail' => 'nullable|mimes:jpg,png,jpeg',
            'category_id' => 'required'
        ]);

        $post = $this->post;
        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->description = $this->description;
        $post->category_id = $this->category_id;
        if($this->thumbnail){
            $post->thumbnail = $this->thumbnail->store('uploads/news-media/posts/thumbnail','public');
        }
        $post->save();

        session()->flash('success','Post updated successfully!');

        return $this->redirectRoute('post.index');
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    #[Title('Update Post')]
    public function render()
    {
        return view('backend.news.post.edit',[
            'categories' => Category::all()
        ]);
    }
}
