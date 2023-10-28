@props(['type'])
<div class="mx-auto">
    <div
        class="text-center p-3 mx-5  lg-shadow text-dark shadow-2xl 
        shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01]
         rounded-lg dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 alert alert-{{$type}}" role="alert">
        <strong>{{$slot}}</strong>
    </div>
</div>
