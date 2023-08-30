<li>
  <a href="{{ $href }}"
    {{
      $attributes->merge(
        ['class' => 'text-sm xl:text-base font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 dark:hover:text-subprimary lg:inline-flex lg:ml-5 xl:ml-8']
      )
    }}
  >
    {{ $slot }}
  </a>
</li>