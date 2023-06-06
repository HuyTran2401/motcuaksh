"use strict";
var usbProductIdCan = "";
class SerialLEDController {
    constructor() {
        this.encoder = new TextEncoder();
        this.decoder = new TextDecoder();
    }
	
    async init() {
        if ('serial' in navigator) {
            try {
                const port = await navigator.serial.requestPort();
				const { usbProductId, usbVendorId } = port.getInfo();
				usbProductIdCan = usbProductId;	
                await port.open({ baudrate: 1200 });
                this.reader = port.readable.getReader();
                this.writer = port.writable.getWriter();
                let signals = await port.getSignals();
                console.log(signals);
            }
            catch (err) {
                console.error('There was an error opening the serial port:', err);
            }
        }
        else {
            console.error('Web serial doesn\'t seem to be enabled in your browser. Try enabling it by visiting:');
            console.error('chrome://flags/#enable-experimental-web-platform-features');
            console.error('opera://flags/#enable-experimental-web-platform-features');
            console.error('edge://flags/#enable-experimental-web-platform-features');
        }
    }
	async getinit() {
        if ('serial' in navigator) {			
            try {
				const ports = await navigator.serial.getPorts();	
				console.log("call getinit "+usbProductIdCan+" ; length "+ports.length);
				if(ports.length > 0 && usbProductIdCan !== ""){					
					for(let i = 0; i < ports.length; i++) {
						const { usbProductId, usbVendorId } = ports[i].getInfo();
						console.log("call getinit i="+i+" "+usbProductIdCan+" = "+usbProductId);
						if(usbProductIdCan == usbProductId){
							try{
								await ports[i].open({ baudrate: 1200 });
								this.writer = ports[i].writable.getWriter();
								
							} catch(err){
								console.log('open next.....');
							}							
							this.reader = ports[i].readable.getReader();	
							let signals = await ports[i].getSignals();
							console.log(signals);							
							break;
						}
					}
				}	
			}
			catch (err) {
				console.log('Opening.....'+err);
			}
        }
        else {
            console.error('Web serial doesn\'t seem to be enabled in your browser. Try enabling it by visiting:');
            console.error('chrome://flags/#enable-experimental-web-platform-features');
            console.error('opera://flags/#enable-experimental-web-platform-features');
            console.error('edge://flags/#enable-experimental-web-platform-features');
        }
    }
    async write(data) {
        const dataArrayBuffer = this.encoder.encode(data);
        return await this.writer.write(dataArrayBuffer);
    }
    async read() {
        try {
            const readerData = await this.reader.read();
			$("#can_khoiluong").val(((new Date()).getTime()+"").substring(8));
            return this.decoder.decode(readerData.value);
        }
        catch (err) {	
            return '#nodata';
        }
    }
}
