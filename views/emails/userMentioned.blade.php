Привет, {{ $user->username }}!

{{ $blueprint->post->user->username }} упомянул вас в сообщении в дискуссии {{ $blueprint->post->discussion->title }}.

{{ app()->url() }}/d/{{ $blueprint->post->discussion_id }}/{{ $blueprint->post->number }}

---

{{ strip_tags($blueprint->post->contentHtml) }}
