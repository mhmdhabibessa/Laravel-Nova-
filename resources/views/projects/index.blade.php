<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>

  
  <main class="relative container mx-auto bg-white px-4">
    <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
      <img class="absolute inset-0 object-cover object-top w-full h-full filter blur" 
      src="/{{ $project->image  }}"
      />
    </div>
  
    <div class="mt-[-10%] w-1/2 mx-auto">
      <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
        <img class="w-full h-full absolute inset-0 object-cover" 
            src="/{{ $project->image  }}"
        >
    </div>
    </div>
  
    <article class="max-w-prose mx-auto py-8">
      <h1 class="text-2xl font-bold">  {{ $project -> title }} </h1>
     <a href="#">
       <h2 class="mt-2 text-sm text-blue-500">{{ $project ->user -> name}}</h2>
      </a>
          {{ $project -> description  }}
    </article>
  </main>