import { Component } from '@angular/core';
import { InAppBrowser } from '@ionic-native/in-app-browser/ngx';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  url: string;

  constructor(private iab: InAppBrowser) {}

    owp( url: string ){
      const browser = this.iab.create(url, '_self');

        // browser.executeScript(...);
        //
        // browser.insertCSS(...);
        // browser.on('loadstop').subscribe(event => {
        //    browser.insertCSS({ code: "body{color: red;" });
        // });

        browser.close();
    }

}
