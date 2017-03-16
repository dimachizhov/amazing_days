@extends('layouts.app-admin')

@section('content')
    {{ link_to_action('ArticleController@create', 'ADD NEW ARTICLE', NULL, ['class' => 'btn btn-success btn-add-article col-xs-12']) }}
    @foreach($articles as $article)
    <div class="col-xs-12 panel admin-article-item">
        <img src="http://www.apicius.es/wp-content/uploads/2012/07/IMG-20120714-009211.jpg" class="thumbnail col-xs-3" >
        <div class="col-xs-8">
            {{ link_to_action('ArticleController@edit', $article->title, $article->id, ['class' => 'admin-article-item-title']) }}
            <div>
                {{ $article->description }}
            </div>
        </div>
        <div class="col-xs-1 admin-article-item-toolbar">
        </div>
    </div>
    @endforeach
    {{ $articles->links() }}
@endsection