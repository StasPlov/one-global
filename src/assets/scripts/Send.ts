/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
import axios from "axios";

export default class Send {
	url: string = '';
	formStay: HTMLElement | null = null;
	contactsForm: HTMLElement | null = null;
	subscribeForm: HTMLElement | null = null;
	isSendingForm: boolean = false;

	constructor() {
		this.init();
	}

	init() {
		this.formStay = document.getElementById('stayForm');
		this.contactsForm = document.getElementById('contactsForm');
		this.subscribeForm = document.getElementById('subscribeForm');
		

		if (this.formStay !== null) {
			this.formStay.addEventListener('submit', async (event) => {
				event.preventDefault();
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="button"]') as HTMLElement;
				const url = this.formStay?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.formStay as HTMLFormElement);

					const result: boolean = await this.send(`${url}?action=submit_subscribe_form`, formData);
					this.isSendingForm = false;
					
					if(!result) {
						alert("recapthca validation false");
						return;
					}

					location.reload();
				}
			});
		}

		if (this.contactsForm !== null) {
			this.contactsForm.addEventListener('submit', async (event) => {
				event.preventDefault();
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				const url = this.contactsForm?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.contactsForm as HTMLFormElement);

					const result: boolean = await this.send(`${url}?action=submit_subscribe_form`, formData);
					this.isSendingForm = false;
					
					if(!result) {
						alert("recapthca validation false");
						return;
					}

					location.reload();
				}
			});
		}

		if (this.subscribeForm !== null) {
			this.subscribeForm.addEventListener('submit', async (event) => {
				event.preventDefault();
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				const url = this.subscribeForm?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.subscribeForm as HTMLFormElement);
					
					const result: boolean = await this.send(`${url}?action=submit_subscribe_form`, formData);
					this.isSendingForm = false;
					
					if(!result) {
						alert("recapthca validation false");
						return;
					}

					location.reload();
					
				}
			});
		}
	}

	async send(url: string, formData: any): Promise<boolean> {
		const result = await axios.post(url, formData);
		
		if(result.data) {
			return true;
		} 

		return false;
	}
}