<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <ul>
        @foreach($languages as $language)
            <li><a href="{{route('categories', ['language' => $language->code])}}">{!! $language->code !!}</a></li>
        @endforeach
    </ul>
    <form action="{{route('categories.update', ['language' => $currentLang])}}" method="post">
        @csrf

    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">{!! __('ID') !!}</th>
            <th scope="col">{!! __('category.title') !!}</th>
            <th scope="col">{!! __('category.parent_title') !!}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><input type="text" name="title[{{ $category->id }}]" value="{{ $category->title }}"></td>
                <td>{{ $category->parent_title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

        <button type="submit">{!! __('common.save_button') !!}</button>
    </form>
</div>
</body>
</html>
