<style>
.spinner {
 --size: 30px;
 --first-block-clr: #005bba;
 --second-block-clr: #fed500;
 --clr: #111;
 width: 100%;
 height: 100%;
 position: fixed;
 top: 0;
 left: 0;
 z-index: 105 !important;
 background-color: white;
}

.spinner::after,.spinner::before {
 box-sizing: border-box;
 position: absolute;
 content: "";
 width: var(--size);
 height: var(--size);
 top: 50%;
 animation: up 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
 left: 50%;
 background: var(--first-block-clr);
}

.spinner::after {
 background: var(--second-block-clr);
 top: calc(50% - var(--size));
 left: calc(50% - var(--size));
 animation: down 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
}

@keyframes down {
 0%, 100% {
  transform: none;
 }

 25% {
  transform: translateX(100%);
 }

 50% {
  transform: translateX(100%) translateY(100%);
 }

 75% {
  transform: translateY(100%);
 }
}

@keyframes up {
 0%, 100% {
  transform: none;
 }

 25% {
  transform: translateX(-100%);
 }

 50% {
  transform: translateX(-100%) translateY(-100%);
 }

 75% {
  transform: translateY(-100%);
 }
}

</style>
<div class="spinner d-none"></div>