<button {{ $attributes->merge(
    ['type' => 'submit',
    'class' => 'inline-flex justify-center items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'
     ,'style'=> 'background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;'
    ]) }}>
    {{ $slot }}
</button>
