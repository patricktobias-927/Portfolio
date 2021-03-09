"use strict";exports.parse=parse;exports.init=void 0;const A=1===new Uint8Array(new Uint16Array([1]).buffer)[0];function parse(E,g="@"){if(!B)return init.then(()=>parse(E));const I=E.length+1,D=(B.__heap_base.value||B.__heap_base)+4*I-B.memory.buffer.byteLength;D>0&&B.memory.grow(Math.ceil(D/65536));const w=B.sa(I-1);if((A?C:Q)(E,new Uint16Array(B.memory.buffer,w,I)),!B.parse())throw Object.assign(new Error(`Parse error ${g}:${E.slice(0,B.e()).split("\n").length}:${B.e()-E.lastIndexOf("\n",B.e()-1)}`),{idx:B.e()});const L=[],k=[];for(;B.ri();){const A=B.is(),Q=B.ie();let C;B.ip()&&(C=N(E.slice(A-1,Q+1))),L.push({n:C,s:A,e:Q,ss:B.ss(),se:B.se(),d:B.id()})}for(;B.re();)k.push(E.slice(B.es(),B.ee()));function N(A){try{return(0,eval)(A)}catch{}}return[L,k,!!B.f()]}function Q(A,Q){const C=A.length;let B=0;for(;B<C;){const C=A.charCodeAt(B);Q[B++]=(255&C)<<8|C>>>8}}function C(A,Q){const C=A.length;let B=0;for(;B<C;)Q[B]=A.charCodeAt(B++)}let B;const init=WebAssembly.compile((E="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","undefined"!=typeof window&&"function"==typeof atob?Uint8Array.from(atob(E),A=>A.charCodeAt(0)):Buffer.from(E,"base64"))).then(WebAssembly.instantiate).then(({exports:A})=>{B=A});exports.init=init;var E;