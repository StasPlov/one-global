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
			this.formStay.addEventListener('submit', (event) => {
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				b.style.opacity = '0.5';

				event.preventDefault();
				const url = this.formStay?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.formStay as HTMLFormElement);
					this.sendSubscribe(`${url}?action=submit_stayconnected_form`, formData);
				}
			});
		}

		if (this.contactsForm !== null) {
			this.contactsForm.addEventListener('submit', (event) => {
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				b.style.opacity = '0.5';

				event.preventDefault();
				const url = this.contactsForm?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.contactsForm as HTMLFormElement);
					this.sendSubscribe(`${url}?action=submit_contacts_form`, formData);
				}
			});
		}

		if (this.subscribeForm !== null) {
			this.subscribeForm.addEventListener('submit', (event) => {
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				b.style.opacity = '0.5';

				event.preventDefault();
				const url = this.subscribeForm?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.subscribeForm as HTMLFormElement);
					this.sendSubscribe(`${url}?action=submit_subscribe_form`, formData);
				}
			});
		}
	}

	sendSubscribe(url: string, formData: any) {
		axios.post(url, formData)
			.then((response: any) => {
				console.error(response);
			})
			.catch((error: any) => {
				console.error(error);
			});
	}
}