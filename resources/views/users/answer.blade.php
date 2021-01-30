@extends('layouts.app')

@section('title', 'ユーザーページ')

@section('content')

<div class="p-main">
  <div class="p-main__container p-user">

    @include('layouts.sidebar')

    <div class="p-mytheme">
      <div class="p-user__head">
        <a class="c-post__theme__head c-theme__head--yet" href="{{ route('users.show', ['id' => $user->id]) }}">
          投稿したテーマ
        </a>
        <a class="c-answer__theme__head c-theme__head--select" href="{{ route('users.answer', ['id' => $user->id]) }}">
          回答したテーマ
        </a>
      </div>

      <ul class="p-theme__list__user">
        @foreach($answers as $answer)

        <li class="p-theme__one p-theme__one__user">
          <p class="c-theme__one__title">{{ $answer->theme->title }}</p>
          <div class="p-theme__list__answer">
            <div class="p-theme__list__answer__one">
              <div class="p-list__answer__area p-answer__area--a">
                <img src="{{ asset('/storage/selects/'.$answer->theme->pic_a) }}" class="c-list__answer__img">
                <p class="c-list__answer__title c-answer--a">{{ $answer->theme->answer_a }}</p>
              </div>
            </div>

            <p class="c-theme__note--or">or</p>

            <div class="p-theme__list__answer__one">
              <div class="p-list__answer__area p-answer__area--b">
                <img src="{{ asset('/storage/selects/'.$answer->theme->pic_b) }}" class="c-list__answer__img">
                <p class="c-list__answer__title c-answer--b">{{ $answer->theme->answer_b }}</p>
              </div>
            </div>
          </div>
          <ul class="p-tag__group">
            <li class="c-tag__one">タグ1</li>
            <li class="c-tag__one">タグ2</li>
          </ul>
          <div class="p-theme__info">
            <ul class="p-icon__count">
              <li class="p-icon__count__one"><img src="{{ asset('images/answer-icon.png') }}" class="c-icon"><span class="c-count__number">10</span></li>
              <li class="p-icon__count__one"><img src="{{ asset('images/comment-icon.png') }}" class="c-icon"><span class="c-count__number">10</span></li>
              <theme-bookmark :initial-is-bookmarked-by='@json($answer->theme->isBookmarkedBy(Auth::user()))' :initial-count-bookmarks='@json($answer->theme->count_bookmarks)' :authorized='@json(Auth::check())' endpoint="{{ route('themes.bookmark', ['id' => $answer->theme->id]) }}">
              </theme-bookmark>
            </ul>
            <div class="p-post__info">
              <img src="{{ asset('images/no-avatar.jpeg') }}" class="c-post__avatar">
              <p class="c-list__post__date">{{ $answer->theme->created_at->format('Y-m-d') }}</p>
            </div>
          </div>
        </li>

        @endforeach
      </ul>
      {{ $answers->links() }}
    </div>

  </div>
</div>

@endsection