<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <section id="modal-cadastro-parceiro">
        <div class="area-azul">
            <div class="info-superior">
                <div>
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.0315 4.19933H13.5387L17.3849 0.345446C17.4936 0.235986 17.6229 0.149105 17.7653 0.0898152C17.9078 0.0305253 18.0606 0 18.2149 0C18.3692 0 18.522 0.0305253 18.6645 0.0898152C18.807 0.149105 18.9363 0.235986 19.0449 0.345446L22.0611 3.37016C22.2789 3.58897 22.4011 3.88496 22.4011 4.19349C22.4011 4.50201 22.2789 4.79801 22.0611 5.01682L19.384 7.70285H10.0315V10.0385C10.0315 10.3483 9.90831 10.6453 9.68907 10.8643C9.46983 11.0833 9.17247 11.2064 8.86242 11.2064C8.55236 11.2064 8.25501 11.0833 8.03576 10.8643C7.81652 10.6453 7.69335 10.3483 7.69335 10.0385V6.53501C7.69335 5.91555 7.93969 5.32146 8.37817 4.88343C8.81666 4.44541 9.41137 4.19933 10.0315 4.19933ZM3.01711 10.0385V14.7099L0.339955 17.3843C0.122216 17.6031 0 17.8991 0 18.2076C0 18.5161 0.122216 18.8121 0.339955 19.0309L3.35613 22.0556C3.46481 22.1651 3.59411 22.252 3.73657 22.3113C3.87904 22.3706 4.03184 22.4011 4.18617 22.4011C4.3405 22.4011 4.4933 22.3706 4.63576 22.3113C4.77822 22.252 4.90752 22.1651 5.0162 22.0556L10.0315 17.0456H14.7077C15.0178 17.0456 15.3151 16.9226 15.5344 16.7035C15.7536 16.4845 15.8768 16.1875 15.8768 15.8777V14.7099H17.0458C17.3559 14.7099 17.6533 14.5869 17.8725 14.3679C18.0917 14.1488 18.2149 13.8518 18.2149 13.5421V12.3742H19.384C19.694 12.3742 19.9914 12.2512 20.2106 12.0322C20.4299 11.8132 20.553 11.5161 20.553 11.2064V10.0385H12.3696V11.2064C12.3696 11.8258 12.1233 12.4199 11.6848 12.858C11.2463 13.296 10.6516 13.5421 10.0315 13.5421H7.69335C7.07324 13.5421 6.47853 13.296 6.04005 12.858C5.60157 12.4199 5.35523 11.8258 5.35523 11.2064V7.70285L3.01711 10.0385Z"
                            fill="#E6EFFF" />
                    </svg>
                    <h4>Adicionar Parceiros</h4>
                </div>
                <button id="botao-fechar"><svg width="100%" height="100%" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 12.1293L2.54753 19.5817C2.26869 19.8606 1.91381 20 1.48289 20C1.05196 20 0.697084 19.8606 0.41825 19.5817C0.139416 19.3029 0 18.948 0 18.5171C0 18.0862 0.139416 17.7313 0.41825 17.4525L7.87072 10L0.41825 2.54753C0.139416 2.26869 0 1.91381 0 1.48289C0 1.05196 0.139416 0.697084 0.41825 0.41825C0.697084 0.139416 1.05196 0 1.48289 0C1.91381 0 2.26869 0.139416 2.54753 0.41825L10 7.87072L17.4525 0.41825C17.7313 0.139416 18.0862 0 18.5171 0C18.948 0 19.3029 0.139416 19.5817 0.41825C19.8606 0.697084 20 1.05196 20 1.48289C20 1.91381 19.8606 2.26869 19.5817 2.54753L12.1293 10L19.5817 17.4525C19.8606 17.7313 20 18.0862 20 18.5171C20 18.948 19.8606 19.3029 19.5817 19.5817C19.3029 19.8606 18.948 20 18.5171 20C18.0862 20 17.7313 19.8606 17.4525 19.5817L10 12.1293Z"
                            fill="#E6EFFF" />
                    </svg>
                </button>
            </div>
            <form class="area-azul-claro">
                <div class="area-branca">
                    <div class="area-foto">
                        <img src="../IMG/icons/crud-parceiros/Vector.svg" alt="">
                        <label for="foto"><svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="18" cy="17.5" rx="18" ry="17.5" fill="#2F3C54" />
                                <path
                                    d="M16.7143 18.2857H10.2857C9.92143 18.2857 9.61629 18.1623 9.37029 17.9154C9.12429 17.6686 9.00086 17.3634 9 17C8.99915 16.6366 9.12258 16.3314 9.37029 16.0846C9.618 15.8377 9.92315 15.7143 10.2857 15.7143H16.7143V9.28572C16.7143 8.92143 16.8377 8.61629 17.0846 8.37029C17.3314 8.12429 17.6366 8.00086 18 8C18.3634 7.99915 18.669 8.12258 18.9167 8.37029C19.1644 8.618 19.2874 8.92315 19.2857 9.28572V15.7143H25.7143C26.0786 15.7143 26.3841 15.8377 26.631 16.0846C26.8779 16.3314 27.0009 16.6366 27 17C26.9991 17.3634 26.8757 17.669 26.6297 17.9167C26.3837 18.1644 26.0786 18.2874 25.7143 18.2857H19.2857V24.7143C19.2857 25.0786 19.1623 25.3841 18.9154 25.631C18.6686 25.8779 18.3634 26.0009 18 26C17.6366 25.9991 17.3314 25.8757 17.0846 25.6297C16.8377 25.3837 16.7143 25.0786 16.7143 24.7143V18.2857Z"
                                    fill="#E6EFFF" />
                            </svg>
                        </label>
                        <input type="file" name="foto" id="foto">
                        <span class="desc-input">Adicionar Foto</span>
                    </div>
                    <div class="area-inputs">
                        <div class="box-input">
                            <label for="nome" class="desc-input">Nome da Empresa</label>
                            <input type="text" class="entrada" name="nome" id="nome"
                                placeholder="Digite o nome da empresa">
                        </div>
                        <div class="box-input">
                            <label for="numero_telefone" class="desc-input">Numero de Telefone</label>
                            <input type="tel" class="entrada" name="numero_telefone" id="numero_telefone"
                                placeholder="(XX) XXXX-XXXX">
                        </div>
                        <div class="box-input">
                            <label for="cnpj" class="desc-input">CNPJ</label>
                            <input type="text" class="entrada" name="cnpj" id="cnpj"
                                placeholder="Digite o CNPJ da sua empresa">
                        </div>
                        <div class="box-input">
                            <label for="representante" class="desc-input">Representante</label>
                            <input type="text" class="entrada" name="representante" id="representante"
                                placeholder="Digite o nome do representante">
                        </div>
                        <div class="box-input">
                            <label for="instagram" class="desc-input">Instagram</label>
                            <input type="text" class="entrada" name="instagram" id="instagram"
                                placeholder="Digite o seu Instagram">
                        </div>
                        <div class="box-input">
                            <label for="email" class="desc-input">Email</label>
                            <input type="email" class="entrada" name="email" id="email"
                                placeholder="Digite o seu Email">
                        </div>
                        <div class="box-input">
                            <label for="site" class="desc-input">Site</label>
                            <input type="text" class="entrada" name="site" id="site"
                                placeholder="Digite o site da sua empresa">
                        </div>
                        <div class="box-input">
                            <label for="linkedin" class="desc-input">Linkedin</label>
                            <input type="text" class="entrada" name="linkedin" id="linkedin"
                                placeholder="Digite o seu Linkedin">
                        </div>
                        <div class="box-input box-area-atuacao">
                            <label class="desc-input">Area de Atuação</label>
                            <div class="area-selecionar">
                                <button class="botao"><svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 5.6V6.4H6.4V12H5.6V6.4H0V5.6H5.6V0H6.4V5.6H12Z" fill="#2F3C54" />
                                    </svg>
                                    <span>ADICIONAR ÁREA</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="area-botao">
                    <button class="botao cancelar">CANCELAR</button>
                    <button type="submit" class="botao salvar">SALVAR</button>
                </div>


            </form>
        </div>
    </section>


</body>

</html>