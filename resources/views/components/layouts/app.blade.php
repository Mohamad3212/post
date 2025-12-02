<!DOCTYPE html>
<html lang="en" class="m-0 p-0 box-border font-sans">
    <head>
        <x-head />
    </head>
<body class="min-h-screen flex flex-col">
    <header class="bg-fuchsia-900 py-8 shadow-[0_4px_6px_-1px_black] text-cyan-400">
        <x-header />
    </header>
    <main class="my-12 flex-1">
        {{ $slot }}
    </main>
    <footer class="bg-fuchsia-900 bottom-0 mt-auto py-8 shadow-[0_-4px_6px_-1px_black] text-cyan-400">
        <x-footer />
    </footer>
</body>
</html>
