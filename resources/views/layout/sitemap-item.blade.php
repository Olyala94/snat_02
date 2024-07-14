
<?= '<'.'?'.'xml version="1.0" encoding="UTF-8"?>'."\n" ?>
<urlset
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
@foreach($tags as $tag)
    <url>
        @if (! empty($tag->url))
        <loc>{{ url($tag->url) }}</loc>
        @endif
    @if (count($tag->alternates))
    @foreach ($tag->alternates as $alternate)
        <xhtml:link rel="alternate" hreflang="{{ $alternate->locale }}" href="{{ url($alternate->url) }}" />
        @endforeach
    @endif
    @if (! empty($tag->lastModificationDate))
        <lastmod>{{ $tag->lastModificationDate->format(DateTime::ATOM) }}</lastmod>
    @endif
        @if (! empty($tag->changeFrequency))
        <changefreq>{{ $tag->changeFrequency }}</changefreq>
        @endif
        <priority>{{ number_format($tag->priority,1) }}</priority>
        @each('sitemap::image', $tag->images, 'image')
        @each('sitemap::video', $tag->videos, 'video')
        @each('sitemap::news', $tag->news, 'news')
    </url>
@endforeach
</urlset>
