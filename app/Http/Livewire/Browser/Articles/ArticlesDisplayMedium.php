<?php

namespace App\Http\Livewire\Browser\Articles;

use Livewire\Component;

class ArticlesDisplayMedium extends Component
{
  public $articles;

  public function mount($articles)
  {
    $this->articles = $articles;
  }

  public function render()
  {
      return view('livewire.browser.articles.articles-display-medium', [
        'articles' => $this->articles,
      ]);
  }
}
