import { Component } from '@angular/core';
// import { InAppBrowser } from '@ionic-native/in-app-browser/ngx';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],

})


export class HomePage {

  // options : InAppBrowserOptions = {
  //   location : 'yes',//Or 'no'
  //   hidden : 'no', //Or  'yes'
  //   clearcache : 'yes',
  //   clearsessioncache : 'yes',
  //   zoom : 'yes',//Android only ,shows browser zoom controls
  //   hardwareback : 'yes',
  //   mediaPlaybackRequiresUserAction : 'no',
  //   shouldPauseOnSuspend : 'no', //Android only
  //   closebuttoncaption : 'Close', //iOS only
  //   disallowoverscroll : 'no', //iOS only
  //   toolbar : 'yes', //iOS only
  //   enableViewportScale : 'no', //iOS only
  //   allowInlineMediaPlayback : 'no',//iOS only
  //   presentationstyle : 'pagesheet',//iOS only
  //   fullscreen : 'yes',//Windows only
  // };

  // constructor(private iab: InAppBrowser) {}
  constructor() {}

    // public openWithSystemBrowser(url : string){
    // let target = "_system";
    // this.theInAppBrowser.create(url,target,this.options);
    // }
    // public openWithInAppBrowser(url : string){
    //   let target = "_blank";
    //   this.theInAppBrowser.create(url,target,this.options);
    // }
    // public openWithCordovaBrowser(url : string){
    //   let target = "_self";
    //   this.theInAppBrowser.create(url,target,this.options);
    // }
      // const browser = this.iab.create(url, '_self');

        // browser.executeScript(...);
        //
        // browser.insertCSS(...);
        // browser.on('loadstop').subscribe(event => {
        //    browser.insertCSS({ code: "body{color: red;" });
        // });

        // browser.close();

}
