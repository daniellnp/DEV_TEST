<!DOCTYPE html>
<!-- autor:Daniel-Lopes Barreiros -->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="<?php echo e(asset('/js/next.config.js')); ?>" ></script>  
        <script src="<?php echo e(asset('/js/app.js')); ?>" ></script>
        <script type="text/javascript">
          
           window.onload = function () {
                 new Vue({
                    el : '#app',
                    data : {
                        <?php if(Request::is('*/edit')): ?>
                        cep : '<?php echo e($edit->cep); ?>',
                        estado: '<?php echo e($edit->estado); ?>',
                        cidade: '<?php echo e($edit->cidade); ?>',
                        bairro: '<?php echo e($edit->bairro); ?>',
                        endereco: '<?php echo e($edit->endereco); ?>',
                        <?php else: ?>
                        cep : null,
                        estado: null,
                        cidade: null,
                        bairro: null,
                        endereco: null
                        <?php endif; ?>
                    },
                    methods : {
                        searchCep () {
                             
                            if(this.cep.length == 8) {

                                alert('cep: '+this.cep);
                                headers=  {
                                    'Access-Control-Allow-Credentials':'*',
                                    'Access-Control-Allow-Origin': 'http://127.0.0.1:8000/',
                                    'Access-Control-Allow-Headers':'*,X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version, Authorization,access-Control-Allow-Credentials',
                                    'Content-Type': 'application/json',
                                };
                                 
                                
                                //axios.get('https://cep.awesomeapi.com.br/json/'+ this.cep,{headers, crossdomain: true})
                                
                                axios.get(`https://viacep.com.br/ws/${ this.cep }/json/`,{headers, crossdomain: true})
                                .then( response => {
                                    this.resp=this.response.text;
                                    alert('reponse: '+this.resp);    
                                    this.estado=this.resp.state;
                                    this.cidade=this.resp.city;
                                    this.baiiro=this.resp.district;
                                    this.endereco=this.resp.address;
                           
                                })
                                .catch( error => console.log(error) );
                                
                                alert('reponse: '+this.response.data);
                                
                     
                            }
                        }
                    }
                })
            }
            
        </script>
    </head>
    <body class="antialiased"  >
        <div>
            <div class="column is-12">
                <h3 class="title is-1"></h3>
                <hr>
                <div class="notification is-warning" v-if="cep">
                    <pre v-bind:id="resp"></pre>
                </div>
               
            </div>
        </div>
        <div class=" items-top justify-center">
            <h1> SHIPSMART DEV TEST </h1>
            <h2> Name: Daniel Lopes Barreiros</h2>
            <h2> shipsmart.com.br</h2>
            <h1> Cadastro</h2>
            
        </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div id="app" class="container" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div id="exibir"></div>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Cadastro</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <?php if(Request::is('*/edit')): ?>
                                        <form  name='form' method=post action="<?php echo e(url('/update')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input class="hidden" style='border:1px solid black;' name='id' size='' maxlength='' value="<?php echo e($edit->id); ?>">
                                        CEP: <input class="input" style='border:1px solid black;' name='cep' value="<?php echo e($edit->cep); ?>" type="text" v-model="cep" @keyup="searchCep()" size='' maxlength='' ><br>
                                        Estado: <select id="estado" name="estado" class='input'style='border:1px solid black;' >
                                                <option value="" >Selecione um Estado</option>
                                                
                                                <option value="AC" <?php echo e(($edit->estado=='AC')?'selected':''); ?>>ACRE</OPTION>
                                                <option value="AL" <?php echo e(($edit->estado=='AL')?'selected':''); ?>>ALAGOAS</OPTION>
                                                <option value="AP" <?php echo e(($edit->estado=='AP')?'selected':''); ?>>AMAPÁ</OPTION>
                                                <option value="AM" <?php echo e(($edit->estado=='AM')?'selected':''); ?>>AMAZONAS</OPTION>
                                                <option value="BA" <?php echo e(($edit->estado=='BA')?'selected':''); ?>>BAHIA</OPTION>
                                                <option value="CE" <?php echo e(($edit->estado=='CE')?'selected':''); ?>>CEARÁ</OPTION>
                                                <option value="DF" <?php echo e(($edit->estado=='DF')?'selected':''); ?>>DISTRITO FEDERAL</OPTION>
                                                <option value="ES" <?php echo e(($edit->estado=='ES')?'selected':''); ?>>ESPÍRITO SANTO</OPTION>
                                                <option value="GO" <?php echo e(($edit->estado=='GO')?'selected':''); ?>>GOIÁS</OPTION>
                                                <option value="MA" <?php echo e(($edit->estado=='MA')?'selected':''); ?>>MARANHÃO</OPTION>
                                                <option value="MT" <?php echo e(($edit->estado=='MT')?'selected':''); ?>>MATO GROSSO</OPTION>
                                                <option value="MS" <?php echo e(($edit->estado=='MS')?'selected':''); ?>>MATO GROSSO DO SUL</OPTION>
                                                <option value="MG" <?php echo e(($edit->estado=='MG')?'selected':''); ?>>MINAS GERAIS</OPTION>
                                                <option value="PA" <?php echo e(($edit->estado=='PA')?'selected':''); ?>>PARÁ</OPTION>
                                                <option value="PB" <?php echo e(($edit->estado=='PB')?'selected':''); ?>>PARAÍBA</OPTION>
                                                <option value="PR" <?php echo e(($edit->estado=='PR')?'selected':''); ?>>PARANÁ</OPTION>
                                                <option value="PE" <?php echo e(($edit->estado=='PE')?'selected':''); ?>>PERNAMBUCO</OPTION>
                                                <option value="PI" <?php echo e(($edit->estado=='PI')?'selected':''); ?>>PIAUÍ</OPTION>
                                                <option value="RJ" <?php echo e(($edit->estado=='RJ')?'selected':''); ?>>RIO DE JANEIRO</OPTION>
                                                <option value="RN" <?php echo e(($edit->estado=='RN')?'selected':''); ?>>RIO GRANDE DO NORTE</OPTION>
                                                <option value="RS" <?php echo e(($edit->estado=='RS')?'selected':''); ?>>RIO GRANDE DO SUL</OPTION>
                                                <option value="RO" <?php echo e(($edit->estado=='RO')?'selected':''); ?>>RONDÔNIA</OPTION>
                                                <option value="RR" <?php echo e(($edit->estado=='RR')?'selected':''); ?>>RORAIMA</OPTION>
                                                <option value="SC" <?php echo e(($edit->estado=='SC')?'selected':''); ?>>SANTA CATARINA</OPTION>
                                                <option value="SP" <?php echo e(($edit->estado=='SP')?'selected':''); ?>>SÃO PAULO</OPTION>
                                                <option value="SE" <?php echo e(($edit->estado=='SE')?'selected':''); ?>>SERGIPE</OPTION>
                                                <option value="TO" <?php echo e(($edit->estado=='TO')?'selected':''); ?>>TOCANTINS</OPTION>
                                                <option value="EX" <?php echo e(($edit->estado=='EX')?'selected':''); ?>>ESTRANGEIRO</OPTION>
                                            </select>
                                            <br/> 

                                        Cidade: <input class='input' style='border:1px solid black;' name='cidade' size='' maxlength='' value="<?php echo e($edit->cidade); ?>"><br>
                                        Bairro: <input class='input' style='border:1px solid black;' name='bairro' size='' maxlength='' value="<?php echo e($edit->bairro); ?>"><br>
                                        Endereço: <input class='input' style='border:1px solid black;' name='endereco' size='' maxlength='' value="<?php echo e($edit->endereco); ?>"><br>
                                        Numero: <input class='input' style='border:1px solid black;' name='numero' size='' maxlength='' value="<?php echo e($edit->numero); ?>"><br>
                                        Complemento: <input class='input' style='border:1px solid black;' name='complemento' size='' maxlength='' value="<?php echo e($edit->complemento); ?>"><br>
                                        Contato: <input class='input' style='border:1px solid black;' name='name' size='' maxlength='' value="<?php echo e($edit->name); ?>"><br>
                                        E-mail: <input class='input' style='border:1px solid black;' name='email' size='' maxlength='' value="<?php echo e($edit->email); ?>"><br>
                                        Telefone: <input class='input' style='border:1px solid black;' name='telefone' size='' maxlength='' value="<?php echo e($edit->telefone); ?>"><br><p>
                                        <input style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;' type=submit name='Enter' value='Atualizar'>
                                        <input style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;' type=reset name='Reset' value='Limpar'>
                                        <a  style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:45px; border:1px solid black;' href="<?php echo e(url('/cad/')); ?>">Cancelar</a>

                                        </form>
                                    <?php else: ?>
                                        <form name='form' method=post action="<?php echo e(url('/add')); ?>">
                                         <?php echo csrf_field(); ?>
                                       
                                        CEP: <input class="input" style='border:1px solid black;' name='cep' type="text" v-model="cep" @keyup="searchCep()" size='' maxlength='' placeholder="digite o cep aqui"><br>
                                        Estado: <select id="estado" name="estado" class='input'style='border:1px solid black;' >
                                            <option value="" selected>Selecione um Estado</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                                <option value="EX">Estrangeiro</option>
                                            </select>
                                            <br/>    
                                        Cidade: <input class='input' style='border:1px solid black;' name='cidade' size='' maxlength=''><br>
                                        Bairro: <input class='input' style='border:1px solid black;' name='bairro' size='' maxlength=''><br>
                                        Endereço: <input class='input' style='border:1px solid black;' name='endereco' size='' maxlength=''><br>
                                        Numero: <input class='input' style='border:1px solid black;' name='numero' size='' maxlength=''><br>
                                        Complemento: <input class='input' style='border:1px solid black;' name='complemento' size='' maxlength=''><br>
                                        Contato: <input class='input' style='border:1px solid black;' name='name' size='' maxlength=''><br>
                                        E-mail: <input class='input' style='border:1px solid black;' name='email' size='' maxlength=''><br>
                                        Telefone: <input class='input' style='border:1px solid black;' name='telefone' size='' maxlength=''><br><p>
                                        <input style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;' type=submit name='Enter' value='Cadastrar'>
                                        <input style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;' type=reset name='Reset' value='Limpar'>

                                        </form>
                                    <?php endif; ?>
                                        
                                        
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                           <!-- area limpa--> 
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Lista</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                     <!-- lista de copntatos-->
                                    <?php if(!empty($contatos)): ?>
                                        <table class='table table-bordered'>
                                         <thead>
                                            <tr>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Nome</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>E-mail</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Telefone</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>CEP</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Estado</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Cidade</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Bairro</td>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Endereço</th>
                                            <th scope="col" style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Numero</th>
                                            <th scope="col"style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Complemento</th>
                                            <th scope="col"style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Editar</th>
                                            <th scope="col"style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'>Deletar</th>
                                        </thead>
                                        <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tbody >
                                            <td scope="row" ><?php echo e($con->name); ?></td>
                                            <td scope="col" ><?php echo e($con->email); ?></td>
                                            <td scope="col" ><?php echo e($con->telefone); ?></td>
                                            <td scope="col" ><?php echo e($con->cep); ?></td>
                                            <td scope="col" ><?php echo e($con->estado); ?></td>
                                            <td scope="col" ><?php echo e($con->cidade); ?></td>
                                            <td scope="col" ><?php echo e($con->bairro); ?></td>
                                            <td scope="col" ><?php echo e($con->endereco); ?></td>
                                            <td scope="col" ><?php echo e($con->numero); ?></td>
                                            <td scope="col" ><?php echo e($con->complemento); ?></td>
                                            <th scope="col"><a style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;'  href="<?php echo e(url($con->id.'/edit/')); ?>">Editar</a></th>
                                            <th scope="col">
                                               

                                                <form name='form' method=post action="<?php echo e(url($con->id.'/delete/')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button style='background:gray; color:white; box-shadow: 1px 1px 2px #333333; height:25px; border:1px solid black;' >Deletar</button></th>
                                        </tbody >
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

 
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\dev\teste\resources\views/cadastro.blade.php ENDPATH**/ ?>