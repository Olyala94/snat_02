<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BeautySalon",
        "name": "{{ $snippets['beauty_salon']['name'] ?? '-' }}",
        "image": "{{ $snippets['beauty_salon']['image'] ?? '-' }}",
        "@id": "{{ $snippets['beauty_salon']['@id'] ?? '-' }}",
        "url": "{{ $snippets['beauty_salon']['url'] ?? '-' }}",
        "telephone": "{{ $snippets['beauty_salon']['telephone'] ?? '-' }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ $snippets['beauty_salon']['address']['streetAddress'] ?? '-' }}",
            "addressLocality": "{{ $snippets['beauty_salon']['address']['addressLocality'] ?? '-' }}",
            "addressRegion": "{{ $snippets['beauty_salon']['address']['addressRegion'] ?? '-' }}",
            "postalCode": "{{ $snippets['beauty_salon']['address']['postalCode'] ?? '-' }}",
            "addressCountry": "{{ $snippets['beauty_salon']['address']['addressCountry'] ?? '-' }}"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "{{ $snippets['beauty_salon']['geo']['latitude'] ?? '0' }}",
            "longitude": "{{ $snippets['beauty_salon']['geo']['longitude'] ?? '0' }}"
        },
        "openingHoursSpecification": "{!! json_encode($snippets['beauty_salon']['openingHoursSpecification'] ?? []) !!}",
        "sameAs": "{!! json_encode($snippets['beauty_salon']['sameAs'] ?? []) !!}"
    }
    </script>


