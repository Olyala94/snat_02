<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "{{ $article['headline'] ?? '-' }}",
      "image": "",
      "author": {
        "@type": "Organization",
        "name": "{{ isset($article['author']) ? ($article['author']['name'] ?? '-') : null }}"
      },
      "publisher": {
        "@type": "Organization",
        "name": "{{ isset($article['author']) ? ($article['author']['name'] ?? '-') : null }}",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ isset($article['url']) ? ($article['author']['url'] ?? '-') : null }}"
        }
      },
      "datePublished": "{{ $article['datePublished'] ?? '-' }}",
      "dateModified": "{{ $article['dateModified'] ?? '-' }}"
    }
    </script>
