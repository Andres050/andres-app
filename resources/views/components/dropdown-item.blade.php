@props(['active' => false])

@php
      $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:text-white focus:bg-blue-500';
      if ($active) {
          $definitiveClass = $classes . ' bg-blue-500 text-white';
      } else {
          $definitiveClass = $classes;
      }
@endphp
<a {{$attributes(['class' => $definitiveClass])}}>{{$slot}}</a>
