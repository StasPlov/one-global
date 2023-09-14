/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
import axios from "axios";

export default class CareersFilter {
	url: string = '';
	careersFilter: HTMLElement | null = null;
	careersFilterMob: HTMLElement | null = null;
	careersList: HTMLElement | null = null;
	careersClearButton : HTMLElement | null = null;
	isSendingForm: boolean = false;

	constructor() {
		this.init();
	}

	init() {
		this.careersFilter = document.getElementById('careersFilter');
		this.careersFilterMob = document.getElementById('careersFilterMob');
		this.careersClearButton = document.getElementById('clearFilterButton');

		this.careersList = document.getElementById('careers-list');

		if (this.careersFilter !== null && this.careersList !== null) {
			this.careersFilter.addEventListener('submit', (e) => { 
				e.preventDefault(); 
				this.filtering(this.careersFilter) 
			});
		}

		if (this.careersFilterMob !== null && this.careersList !== null) {
			this.careersFilterMob.addEventListener('submit', (e) => {
				e.preventDefault(); 
				this.filtering(this.careersFilterMob)
			});
		}

	}

	async send(url: string, formData: any) {
		return (await axios.post(url, formData)).data;
	}

	async filtering(filter: HTMLElement|null) {
		if(filter === null) {
			return;
		}

		if (this.careersClearButton !== null) {
			this.careersClearButton.addEventListener('click', (e) => {
				e.preventDefault(); 

				const inputSearch = document.getElementById('inputSearch') as HTMLInputElement;
				if(inputSearch !== null) {
					inputSearch.value = '';
				}

				const submitButton = document.querySelector('[type="submit"]') as HTMLInputElement;
				if(submitButton !== null) {
					submitButton.click();
				}
			});
		}

		filter.addEventListener('submit', async (event) => {
			event.preventDefault();
			if (this.isSendingForm) {
				return;
			}

			const placeholderLoader = document.querySelector('#placeholderLoader') as HTMLElement;
			const loader = filter.querySelector('#loader') as HTMLElement; //((event.target as HTMLElement).querySelector('button[type="button"]') as HTMLElement).querySelector('#loader') as HTMLElement;
			const url = filter?.getAttribute('data-endpoint');

			if (url) {
				this.isSendingForm = true;
				if(loader !== null) {
					loader.classList.remove('hidden');
				}

				if(placeholderLoader !== null) {
					placeholderLoader.classList.remove('hidden');
				}
	
				const formData = new FormData(filter as HTMLFormElement);
				filter.style.opacity = '0.5';
				filter.style.userSelect = 'none';

				// request
				const result: Array<Careers> = await this.send(`${url}?action=get_careers`, formData);
				this.isSendingForm = false;

				loader.classList.add('hidden');
				placeholderLoader.classList.add('hidden');
				filter.style.opacity = '';
				filter.style.userSelect = '';

				const insertResultList: Array<string> = [];

				const careersForm = document.getElementById('careersForm') as HTMLElement;
				
				if(careersForm !== null) {
					if(!result.length) {
						this.careersList!.innerHTML = '';
						careersForm.classList.remove('hidden')
						return;
					}

					if(!careersForm.classList.contains('hidden')) {
						careersForm.classList.add('hidden');
					}
				}
				

				// add data to page 
				result.forEach(item => {
					let htmlItem = `<div class="flex border-b first:border-t border-solid border-[#1c212633] max-md:flex-col max-md:border-x-0 max-md:border-t-0">
						<div class="flex-[37.7%] flex items-center border-r border-solid border-[#1c212633]">
							<div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0">
								<h2 class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-2xl font-medium text-start">
									${item.title}
								</h2>
			
								<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic font-light text-base text-start">
									${item.excerpt}
								</span>
							</div>
						</div>
						<div class="flex flex-[2]">
							<div class="flex-1 h-full flex items-center border-r border-solid border-[#1c212633] max-md:border-r-0">
								<div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem]">`;
						if(item.info.schedule.icon || item.info.schedule.text) {
							htmlItem +=
							`<div class="flex gap-2">
								<img src="${item.info.schedule.icon.url}" alt="${item.info.schedule.icon.alt}" class="max-h-[1rem]">
								<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
									${item.info.schedule.text}
								</span>
							</div>`;
						}
						if(item.info.location.icon || item.info.location.text) {
							htmlItem +=
							`<div class="flex gap-2">
								<img src="${item.info.location.icon.url}" alt="${item.info.location.icon.alt}" class="max-h-[1rem]">
								<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
									${item.info.location.text}
								</span>
							</div>`;
						}

						if(item.info.time.icon || item.info.time.text) {
							htmlItem +=
							`<div class="flex gap-2">
								<img src="${item.info.time.icon.url}" alt="${item.info.time.icon.alt}" class="max-h-[1rem]">
								<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
									${item.info.time.text}
								</span>
							</div>`;
						}

						htmlItem +=
						`</div>
							</div>`;

						if(item.content_button && item.content_button.is_enable && item.content_button.text) {
							htmlItem +=
							`<div class="flex-1 flex items-center justify-center">
								<div class="px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:pt-[1.5625rem]">
									<a href="${item.link}">
									<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
										<span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">${item.content_button.text}</span>`;
										if(item.content_button.icon) {
											htmlItem +=
											`<img src="${item.content_button.icon.url}" alt="${item.content_button.icon.alt}" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">`;
										}
									htmlItem +=`</button>
									</a>
								</div>
							</div>`;
						}

						htmlItem +=	
							`</div>
						</div>`;
					

					insertResultList.push(htmlItem);
				});

				this.careersList!.innerHTML = '';
				insertResultList.forEach(element => {
					this.careersList!.innerHTML += element;
				});
			}
		});
	}
}



interface Careers {
	title: string
	excerpt: string
	link: string
	info: {
		schedule: {
			icon: {
				ID: number
				id: number
				title: string
				filename: string
				filesize: number
				url: string
				link: string
				alt: string
				author: string
				description: string
				caption: string
				name: string
				status: string
				uploaded_to: number
				date: string
				modified: string
				menu_order: number
				mime_type: string
				type: string
				subtype: string
				icon: string
				width: number
				height: number
				sizes: {
					thumbnail: string
					"thumbnail-width": number
					"thumbnail-height": number
					medium: string
					"medium-width": number
					"medium-height": number
					medium_large: string
					"medium_large-width": number
					"medium_large-height": number
					large: string
					"large-width": number
					"large-height": number
					"1536x1536": string
					"1536x1536-width": number
					"1536x1536-height": number
					"2048x2048": string
					"2048x2048-width": number
					"2048x2048-height": number
				}
			}
			text: string
		}
		location: {
			icon: {
				ID: number
				id: number
				title: string
				filename: string
				filesize: number
				url: string
				link: string
				alt: string
				author: string
				description: string
				caption: string
				name: string
				status: string
				uploaded_to: number
				date: string
				modified: string
				menu_order: number
				mime_type: string
				type: string
				subtype: string
				icon: string
				width: number
				height: number
				sizes: {
					thumbnail: string
					"thumbnail-width": number
					"thumbnail-height": number
					medium: string
					"medium-width": number
					"medium-height": number
					medium_large: string
					"medium_large-width": number
					"medium_large-height": number
					large: string
					"large-width": number
					"large-height": number
					"1536x1536": string
					"1536x1536-width": number
					"1536x1536-height": number
					"2048x2048": string
					"2048x2048-width": number
					"2048x2048-height": number
				}
			}
			text: string
		}
		time: {
			icon: {
				ID: number
				id: number
				title: string
				filename: string
				filesize: number
				url: string
				link: string
				alt: string
				author: string
				description: string
				caption: string
				name: string
				status: string
				uploaded_to: number
				date: string
				modified: string
				menu_order: number
				mime_type: string
				type: string
				subtype: string
				icon: string
				width: number
				height: number
				sizes: {
					thumbnail: string
					"thumbnail-width": number
					"thumbnail-height": number
					medium: string
					"medium-width": number
					"medium-height": number
					medium_large: string
					"medium_large-width": number
					"medium_large-height": number
					large: string
					"large-width": number
					"large-height": number
					"1536x1536": string
					"1536x1536-width": number
					"1536x1536-height": number
					"2048x2048": string
					"2048x2048-width": number
					"2048x2048-height": number
				}
			}
			text: string
		}
	}
	content_button: {
		text: string
		icon: {
			url: string,
			alt: string
		},
		is_enable: boolean
	}
}