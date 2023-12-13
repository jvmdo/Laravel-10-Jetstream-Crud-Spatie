<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    {{-- TODO: add logo --}}
    {{-- <x-application-logo class="block h-12 w-auto" /> --}}

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to BR-UTM Forms
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam magni nostrum labore nemo fuga illo repellat sequi
        maiores nihil, soluta a, eos voluptatem possimus? Obcaecati numquam repellat quidem perferendis repellendus.
        Nobis dicta iusto porro odit est accusamus in voluptatibus deleniti similique. Dolorum, sunt vero aspernatur
        inventore explicabo vel labore impedit totam porro dolore at nostrum mollitia atque ipsa, ratione facilis.
        Nesciunt officiis veniam facilis qui molestiae architecto, iure soluta aperiam esse, eum inventore quae
        voluptas, quod distinctio id ipsa atque fuga excepturi voluptates quaerat quisquam maxime recusandae. Molestiae,
        tempora possimus.
        Consequuntur tempore inventore at fugit vel cupiditate dolorum incidunt tempora placeat officiis vitae vero iure
        labore quae in consequatur temporibus, amet reprehenderit ratione culpa, rerum cum praesentium. Alias, quam
        voluptatem?
        Tempore animi, tempora, cum facilis amet voluptates quam error eius voluptatem doloribus alias. Quibusdam earum,
        eius odio, aspernatur libero temporibus voluptatibus possimus, alias consectetur id adipisci aperiam deleniti
        incidunt eveniet?
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                USS Provider List
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi praesentium consequatur fugiat cumque quo
            consequuntur laboriosam nulla, ipsa aliquam numquam! Quos sapiente porro rem maxime, voluptas recusandae
            perspiciatis aliquam modi!Cumque tempora sapiente perferendis dolorum dolor at saepe distinctio repudiandae
            quo provident autem ullam esse vel magni iste labore praesentium voluptatem, officiis, nihil aliquam,
            nesciunt deleniti. Aperiam dolor sequi praesentium.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ route('statuses.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                See registered providers

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    {{-- <div>
          <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-6 h-6 stroke-gray-400">
                  <path stroke-linecap="round"
                      d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
              </svg>
              <h2 class="ml-3 text-xl font-semibold text-gray-900">
                  Roles & Permissions
              </h2>
          </div>

          <p class="mt-4 text-gray-500 text-sm leading-relaxed">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi quos iste ducimus neque impedit? At quisquam
              ut voluptates nesciunt odio repellendus, eos magni illum? Corrupti minima neque praesentium necessitatibus
              qui!Minus debitis, officiis eius officia rem nisi ab? Atque expedita alias voluptatem ex nisi praesentium
              labore fugit sapiente assumenda temporibus quae, et quas rerum accusamus nostrum deleniti consectetur
              inventore hic!
          </p>

          <p class="mt-4 text-sm">
              <a href="{{ route('uss-providers.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                  See status details

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                      <path fill-rule="evenodd"
                          d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                          clip-rule="evenodd" />
                  </svg>
              </a>
          </p>
      </div> --}}
</div>
