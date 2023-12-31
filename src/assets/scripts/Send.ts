/* 
	@author Stas Plov email: SaviouR.S@mail.ru
*/
import axios from "axios";

export default class Send {
	url: string = '';
	contactsForm: HTMLElement | null = null;
	subscribeForm: HTMLElement | null = null;
	careersForm: HTMLElement | null = null;
	isSendingForm: boolean = false;

	constructor() {
		this.init();
	}

	init() {
		this.subscribeForm = document.getElementById('subscribeForm');
		this.careersForm = document.getElementById('careersForm');

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
					
					const subscribeFormComplite = document.getElementById('subscribeFormComplite') as HTMLElement;

					if(subscribeFormComplite !== null) {
						this.subscribeForm?.classList.add('hidden');
						subscribeFormComplite.classList.remove('hidden');
					}
				}
			});
		}

		if (this.careersForm !== null) {
			this.careersForm.addEventListener('submit', async (event) => {
				event.preventDefault();
				if (this.isSendingForm) {
					return;
				}

				const b = (event.target as HTMLElement).querySelector('button[type="submit"]') as HTMLElement;
				const url = this.careersForm?.getAttribute('data-endpoint');

				if (url) {
					this.isSendingForm = true;
					var formData = new FormData(this.careersForm as HTMLFormElement);
					
					const result: boolean = await this.send(`${url}?action=submit_resume_form`, formData);
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