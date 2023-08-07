/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
import axios from "axios";

export default class BlogSearch {
	url: string = '';
	searchInput: HTMLInputElement | null = null;
	contentList: HTMLElement | null = null;
	postId: number = 102;

	constructor() {
		this.init();
	}

	init() {
		this.searchInput = document.getElementById('search-input') as HTMLInputElement;
		this.contentList = document.getElementById('content-list') as HTMLElement;
		this.postId = parseInt(this.searchInput?.dataset?.postId as string) || 102;
		
		this.search(this.searchInput);
	}

	async search(input: HTMLElement|null) {
		if(input === null) {
			return;
		}

		input.addEventListener('input', async (event) => {
			event.preventDefault();

			const placeholderLoader = document.querySelector('#placeholderLoader') as HTMLElement;
			const url = input?.getAttribute('data-endpoint');

			if (url) {
				if(placeholderLoader !== null) {
					placeholderLoader.classList.remove('hidden');
				}

				// request
				const result: Array<Blog> = await this.send(`${url}?action=search_blog`, this.searchInput?.value);

				placeholderLoader.classList.add('hidden');
				const insertResultList: Array<string> = [];

				
				// add data to page 
				result.forEach(item => {
					let htmlItem = 
					`<div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
					<div class="flex-1">
						<img src="${item.image}" alt="image" class="h-full w-full object-cover">
					</div>
	
					<div class="flex-[3] border-b border-solid border-[#1c212633]">
						<div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
							<div class="flex gap-2 pb-9 max-md:pb-0">`
					item.blog_category.forEach(category => {
						htmlItem += 
						`<a href="${category.link}" class="relative flex gap-2 justify-between items-center px-[0.875rem] py-2 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
							<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center group-hover:text-white transition duration-300">${category.name}</span>
						</a>`;
					});	
						htmlItem +=
						`</div>
							<div class="flex flex-col gap-4">
								<h2 class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-2xl font-medium leading-7 text-start">${item.title}</h2>
								<p class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-base font-light leading-7 text-start">${item.excerpt}</p>
							</div>`;
					if(item.content_button && item.content_button.is_enable && item.content_button.text) {
						htmlItem +=
							`<div class="flex justify-between w-full items-center">
								<a href="${item.link}" class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
									<span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"></span>`;
									if(item.content_button.icon) {
										`<img src="${item.content_button.icon.url}" alt="${item.content_button.icon.alt}" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">`;
									}
								`</a>
								<span class="text-[#1C2126]/70 font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center"><?php the_time('d/m/Y'); ?></span>
							</div>`;
					}
					htmlItem +=`</div>
					</div>
				</div>`;
					
					insertResultList.push(htmlItem);
				});

				this.contentList!.innerHTML = '';
				insertResultList.forEach(element => {
					this.contentList!.innerHTML += element;
				});
			}
		});
	}

	async send(url: string, data: any) {
		return (await axios.post(url, {
			'search-input': data,
			'post-id': this.postId
		})).data;
	}
}



interface Blog {
	title: string
	excerpt: string
	link: string
	image: string
	blog_category: Array<{
		link: string
		name: string
	}>
	content_button: {
		text: string
		icon: {
			url: string,
			alt: string
		},
		is_enable: boolean
	}
}
