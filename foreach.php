<?php

// Exemple pour un foreach
// <?=  est égale à un <?php echo

$posts = [
  [
    'img' => 'bikes.png',
    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
    'comments_count' => 12,
    'reading_time' => 7
  ],
  [
    'img' => 'notes.png',
    'title' => 'Super notes.',
    'comments_count' => 12,
    'reading_time' => 7
  ],
];

foreach($posts as $post)
    {
      ?>

    <article>
      <img src="img/<?php echo $post['img']; ?>" alt="<?= $post['img']; ?>" class="w-full">
      <div class="px-4 sm:px-6 md:px-0">
        <h1 class="mt-4 text-2xl sm:text-3xl md:text-2xl font-bold text-gray-900">
        <?=  $post['title']; ?>
        </h1>
        <ul class="mt-6 flex space-x-8 font-bold text-sm text-gray-700">
          <li class="flex items-center leading-none">
            <svg class="stroke-current w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="mb-px ml-1">  <?=  echo $post['comments_count']; ?></span>
          </li>
          <li class="flex items-center leading-none">
            <svg class="stroke-current w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="mb-px ml-1"><?=  echo $post['reading_time']; ?></span>
          </li>
        </ul>
      </div>
    </article>

    <?php 
    }
    
    ?>
