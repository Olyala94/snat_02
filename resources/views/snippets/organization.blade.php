<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "{{ $organization['name'] ?? '-' }}",
      "url": "{{ $organization['url'] ?? '-' }}",
      "logo": "{{ $organization['logo'] ?? '-' }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "{{ $organization['contactPoint']['telephone'] ?? '-' }}",
        "areaServed": "{{ $organization['contactPoint']['areaServed'] ?? '-' }}",
        "availableLanguage": "{{ $organization['contactPoint']['availableLanguage'][0] ?? '-' }}"
      },
      "sameAs": {!! json_encode($organization['sameAs'] ?? []) !!},
      "address": {
        "addressCountry": "{{ $organization['address']['addressCountry'] ?? '-' }}",
        "addressLocality": "{{ $organization['address']['addressLocality'] ?? '-' }}",
        "streetAddress": "{{ $organization['address']['streetAddress'] ?? '-' }}",
        "postalCode": "{{ $organization['address']['postalCode'] ?? '-' }}",
        "addressRegion": "{{ $organization['address']['addressRegion'] ?? '-' }}"
      },
      "description": "{{ $organization['description'] ?? '-' }}",
      "mission": "{{ $organization['mission'] ?? '-' }}",
      "vision": "{{ $organization['vision'] ?? '-' }}"
    }
    </script>
