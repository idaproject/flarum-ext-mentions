Привет, {{ $user->username }}!

{{ $blueprint->reply->user->username }} ответил на ваше сообщение (#{{ $blueprint->post->number }}) в дискуссии {{ $blueprint->post->discussion->title }}.

{{ app()->url() }}/d/{{ $blueprint->reply->discussion_id }}/{{ $blueprint->reply->number }}

---

{{ strip_tags($blueprint->reply->contentHtml) }}
