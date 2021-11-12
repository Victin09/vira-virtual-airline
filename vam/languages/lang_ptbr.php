<?php
	// NavBar options
	define ('ABOUT' , 'Sobre');
	define ('PILOTS' , 'Lista de Pilotos');
	define ('FLEET' , 'Frota');
	define ('ROUTES' , 'Rotas');
	define ('STAFF' , 'Equipe');
	define ('RULES' , 'Regulamento');
	define ('SCHOOL' , 'Escola');
	define ('REGISTER' , 'Registro');
	define ('FORUM' , 'Fórum');
	define ('LANGUAGES' , 'Idioma');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français');
	// NavBar options user logged
	define ('MENU' , 'Menu do Piloto');
	define ('STATS' , 'Estatísticas');
	define ('ADMIN' , 'Administração');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Lista de Pilotos');
	define ('CALLSIGN' , 'Callsign');
	define ('NAME' , 'Nome');
	define ('HUB' , 'Hub');
	define ('LOCATION' , 'Localização');
	define ('HOURS' , 'Horas');
	define ('RANK' , 'Classificação');
	define ('COUNTRY' , 'País');
	define ('STATUS' , 'Status');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');
	// Fleet list
	define ('FLEET_VA' , 'FROTA');
	define ('FLEET_VA_LOC' , 'FROTA EM ');
	define ('FLEET_VA_TYPE' , 'TIPO DE FROTA ');
	define ('REGISTRY' , 'Matrícula');
	define ('TYPE' , 'Tipo');
	define ('LOCATION_PLANE' , 'Localização');
	define ('STATUS_PLANE' , 'Status');
	define ('HOURS_PLANE' , 'Horas');
	define ('NAME_PLANE' , 'Nome');
	define ('BOOKED_PLANE' , 'Reservado');
	define ('PLANE_FREE' , 'Livre');
	define ('PLANE_MAINTENANCE' , 'Em manutenção');
	define ('PLANE_BOOKED' , 'Reservado');
	define ('INFO_PLANE' , 'Informações');
	// Routes list
	define ('ROUTES_VA' , 'Rotas');
	define ('FLIGHT_VA' , 'Vôo');
	define ('DEPARTURE' , 'Origem');
	define ('ARRIVAL' , 'Destino');
	define ('DEPARTURE_TIME' , 'Horário de Partida');
	define ('ARRIVAL_TIME' , 'Horário de Chegada');
	define ('ROUTE_PLANE' , 'Tipo de Aeronave');
	// Pilot Register form
	define ('REGISTER_FORM' , 'Registrar');
	define ('PILOT_NAME_REG_FORM' , 'Nome:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Último Nome:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Data de Nascimento:');
	define ('PILOT_IVAOID_REG_FORM' , 'Registro na IVAO:');
	define ('PILOT_VATSIMID_REG_FORM' , 'Registro na VATSIM:');
	define ('PILOT_COUNTRY_REG_FORM' , 'País:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Idioma:');
	define ('PILOT_CITY_REG_FORM' , 'Cidade:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Senha:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirme sua Senha:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Comentários:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Registrar');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Insira Seu Nome');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Insira Seu Último Nome');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Insira Sua Data de Nascimento');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Insira Seu Registro na IVAO');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Insira Seu Registro na VATSIM');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Insira Sua Cidade');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Insira Seu Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Insira Sua Senha');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Insira Seus Comentários');
	define ('READ_RULES' , 'Eu li e concordo com o regulamento da Companhia Virtual');
	// Pilot Register Succesfull Page (index.php?page=pilot_insert)
	define ('REGISTER_SUCCESSFUL' , 'Registro efetuado com sucesso');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Nós recebemos sua solicitação e responderemos em até 24 horas!
Você receberá um novo email assim que sua conta for aprovada. (Verifique se sua caixa de correio permite email do endereço admin@virtualairlinesmanager.net - se você não receber nenhum email, por favor verifique sua caixa de SPAM)');
	define ('REGISTER_CAPTCHA_MSG' , 'Captcha incorreta, por favor tente novamente');
	define ('REGISTER_WRONG' , 'Registro Inválido');
	define ('REGISTER_WRONG_MSG' , 'Já existe um piloto cadastrado com o email informado.');
	define ('REGISTER_CLOSED_MSG' , 'Atualmente não há nenhuma vaga em nossa empresa. Fique atento para o novo processo de recrutamento.');
	// Password Recover
	define ('FORGOT_PASSWORD' , 'ESQUECI MINHA SENHA');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Callsign:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Insira seu Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Insira seu Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Resetar Senha');
	define ('PASSWORD_RESET_WRONG' , 'Resetar Senha');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Callsign ou endereço de email incorreto');
	define ('PASSWORD_RESET_OK' , 'Resetar Senha');
	define ('PASSWORD_RESET_OK_MSG' , 'A nova senha foi enviada para o seu endereço de e-mail.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'BEM VINDO À ');
	define ('FLIGHT_NETWORKS' , 'REDES DE VÔO');
	define ('TWEETS' , 'TWEETS');
	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'ÚLTIMOS VÔOS');
	define ('LF_CALLSIG' , 'Callsign');
	define ('LF_PILOT' , 'Piloto');
	define ('LF_DEPARTURE' , 'Origem');
	define ('LF_ARRIVAL' , 'Destino');
	define ('LF_FLIGHTDATE' , 'Data');
	define ('LF_FLIGHTTIME' , 'Horário');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'ESTATÍSTICAS');
	define ('ST_NUMPILOTS' , 'Pilotos');
	define ('ST_NUMPLANES' , 'Aeronaves da Frota');
	define ('ST_NUMROUTES' , 'Rotas');
	define ('ST_NUMFLIGHTS' , 'Total de Vôos');
	define ('ST_NUMCHARTER' , 'Vôos Charter');
	define ('ST_NUMREGULAR' , 'Vôos Regulares');
	define ('ST_PERREGULAR' , '% de Vôos Regulares');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NOVOS PILOTOS');
	define ('NEWPILOT' , 'Piloto');
	define ('NEWJOINED' , 'Ingressou');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Data');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'EVENTOS FUTUROS');
	define ('EVENT_NAME' , 'Evento');
	define ('EVENT_DATE' , 'Data');
	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'Nome do NOTAM');
	define ('NOTAM_CREATE_DATE' , 'Data da Criação do NOTAM');
	define ('NOTAM_PUBLISH_DATE' , 'Data da Publicação do NOTAM');
	define ('NOTAM_TEXT' , 'Texto do NOTAM');
	// EVENT table
	define ('EVENT' , 'EVENTO');
	define ('EVENT_NAME_PANEL' , 'Nome do Evento');
	define ('EVENT_CREATE_DATE' , 'Data da Criação do Evento');
	define ('EVENT_PUBLISH_DATE' , 'Data da Publicação do Evento');
	define ('EVENT_TEXT' , 'Texto do Evento');
	// Pilot page
	define ('PILOT_PROFILE' , 'PERFIL');
	define ('PILOT_STATICS' , 'ESTATÍSTICAS PESSOAIS');
	define ('PILOT_CERTIFICATIONS' , 'CERTIFICADOS DO PILOTO');
	define ('PILOT_NAME' , 'Nome:');
	define ('PILOT_CALLSIGN' , 'Callsign:');
	define ('PILOT_COUNTRY' , 'País:');
	define ('PILOT_CITY' , 'Cidade:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Localização:');
	define ('PILOT_RANK' , 'Classificação:');
	define ('PILOT_SALARY' , 'Salário por hora:');
	define ('PILOT_MONEY' , 'Dinheiro:');
	define ('PILOT_REGISTERDATE' , 'Data de Registro:');
	define ('PILOT_FLIGHTS' , 'Total de Vôos:');
	define ('PILOT_HOURS' , 'Total de Horas:');
	define ('PILOT_FLIGHTSREGULAR' , 'Vôos Regulares:');
	define ('PILOT_FLIGHTSCHARTER' , 'Vôos Charter:');
	define ('PILOT_DISTANCE' , 'Distância Voada:');
	define ('PILOT_PERFLIGHTREGULAR' , '% de Vôos Regulares:');
	define ('PILOT_MANUALREPORT' , 'PIREP´s Manuais:');
	define ('PILOT_FSKEEPERREPORT' , 'Relatórios do FS Keeper:');
	define ('PILOT_FSACARSREPORT' , 'Relatórios do FS Acars:');
	define ('PILOT_VAMACARSREPORT' , 'Relatórios do VAM Acars:');
	define ('PILOT_FLIGTH_MAP' , 'MAPA DOS 10 ÚLTIMOS VÔOS');
	define ('PILOT_FLIGTHS' , 'VÔOS');
	define ('PILOT_FLIGTHS_DEP' , 'Origem');
	define ('PILOT_FLIGTHS_ARR' , 'Destino');
	define ('PILOT_FLIGTHS_DATE' , 'Data');
	define ('PILOT_FLIGTHS_DUR' , 'Duração');
	define ('PILOT_FLIGTHS_DIST' , 'Distância');
	define ('PILOT_FLIGTHS_TYPE' , 'Tipo');
	define ('PILOT_FLIGTHS_VALI' , 'Validação');
	define ('PILOT_FLIGTHS_DETAILS' , 'Detalhes');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'PROCURAR VÔO');
	define ('FSACARS_PARAMETER' , 'Parâmetro');
	define ('FSACARS_VALUE' , 'Valor');
	define ('FSACARS_DEPARTURE' , 'Origem:');
	define ('FSACARS_ARRIVAL' , 'Destino:');
	define ('FSACARS_FLIGHTYPE' , 'Tipo de Vôo:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Regular');
	define ('FSACARS_STATUS_VALIDATED' , 'Validado');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Validação Pendente');
	define ('FSACARS_STATUS_REJECTED' , 'Rejeitado');
	define ('FSACARS_STATUS' , 'Status:');
	define ('FSACARS_DATE' , 'Data:');
	define ('FSACARS_DURATION' , 'Duração:');
	define ('FSACARS_PLANETYPE' , 'Tipo de Aeronave:');
	define ('FSACARS_FUEL' , 'Combustível:');
	define ('FSACARS_DISTANCE' , 'Distância:');
	define ('FSACARS_TOUCHDOWN' , 'Touchdown:');
	define ('FSACARS_LOG' , 'Log:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'PROCURAR VÔO');
	define ('FSKEEPER_PILOT' , 'Piloto:');
	define ('FSKEEPER_AIRCRAFT' , 'Aeronave:');
	define ('FSKEEPER_DISTANCE' , 'Distância:');
	define ('FSKEEPER_DEPARTURE' , 'Origem:');
	define ('FSKEEPER_ARRIVAL' , 'Destino:');
	define ('FSKEEPER_TIME' , 'Tempo:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Pista de Partida:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'TA da Partida:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Pista de Chegada:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'TA da Chegada:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Combustível Restante:');
	define ('FSKEEPER_FFUEL' , 'Combustível de Vôo:');
	define ('FSKEEPER_VALIDATED' , 'Validado:');
	define ('FSKEEPER_TYPE' , 'Tipo:');
	define ('FSKEEPER_REGISTRY' , 'Matrícula:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Regular');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validado');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Validação Pendente');
	define ('FSKEEPER_STATUS_REJECTED' , 'Rejeitado');
	define ('FSKEEPER_PASSENGERS' , 'Passageiros:');
	define ('FSKEEPER_CARGO' , 'Carga:');
	define ('FSKEEPER_ALTERNATE' , 'Aeroporto Alternativo:');
	define ('FSKEEPER_LANDVS' , 'VS do Pouso:');
	define ('FSKEEPER_LANDIAS' , 'IAS do Pouso:');
	define ('FSKEEPER_SCORE' , 'Pontuação do Vôo:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'ANÁLISE DO POUSO');
	define ('FSKEEPER_ROUTE' , 'ROTA');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER CRITIQUE');
	define ('FSKEEPER_MAPS' , 'MAPAS');
	// Pilot options
	define ('PILOT_ACTIONS' , 'AÇÕES');
	define ('OPTION_MAIL' , 'Email interno');
	define ('OPTION_ROUTE_RESERVE' , 'Reservar rota');
	define ('OPTION_CHANGE_LOCATION' , 'Alterar localização');
	define ('OPTION_BANK' , 'Minhas finanças');
	define ('OPTION_MANUAL_PIREP' , 'Pirep Manual');
	define ('OPTION_PROFILE' , 'Alterar perfil');
	define ('OPTION_STATS' , 'Minhas estatísticas');
	define ('OPTION_VA_PARAMETER' , 'Parâmetros da VA');
	define ('OPTION_DOWNLOADS' , 'Downloads');
	// VA Parameters
	define ('VA_PARAMETERS' , 'PARÂMETROS DA VA');
	define ('PARAMETER' , 'Parâmetro');
	define ('VALUE' , 'Valor');
	define ('COST_SHORT_JUMP' , 'Custo de mudança de local - Perto:');
	define ('COST_MEDIUM_JUMP' , 'Custo de mudança de local - Médio:');
	define ('COST_LONG_JUMP' , 'Custo de mudança de local - Longe:');
	define ('PLANE_STATUS_MAINTENANCE' , 'Estado da Aeronave para entrar em manutenção:');
	define ('LANDING_RATE_CRASH' , 'Pouso considerado como acidente:');
	define ('STATUS_LOST_1' , 'Perda de pontuação quando o touchdown for entre 0 ft/min e -');
	define ('STATUS_LOST_2' , 'Perda de pontuação quando o touchdown for entre -');
	define ('AND_STRING' , ' e -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Deterioração da aeronave em cada vôo:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Duração da manutenção na aeronave:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Duração do reparo na Aeronave após o acidente:');
	define ('PENALTY_IN_CRASH' , 'Penalização em caso de acidente:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Salário por hora baseado na sua Classificação:');
	define ('SALARY_REDUCTION_CHARTER' , 'Redução de salário em caso de vôo Charter:');
	define ('DAYS' , ' dias');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'TRANSAÇÕES FINANCEIRAS');
	define ('BANK_DATE' , 'Data');
	define ('BANK_AMOUNT' , 'Quantia');
	define ('BANK_REASON' , 'Alterar Localização / Vôo');
	define ('BANK_TOTAL_MONEY' , 'Dinheiro Total: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'ROTAS DISPONÍVEIS');
	define ('ROUTES_BOOKED' , 'AERONAVE ATUAL & ROTA RESERVADA');
	define ('AVAILABLE_AIRCRAFT' , 'AERONAVES DISPONÍVEIS');
	define ('BOOK_ROUTE_FLIGHT' , 'Vôo');
	define ('BOOK_ROUTE_DEPARTURE' , 'Origem');
	define ('BOOK_ROUTE_ARRIVAL' , 'Destino');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Alternativo');
	define ('BOOK_ROUTE_TIME_DEP' , 'Hora Partida');
	define ('BOOK_ROUTE_TIME_ARR' , 'Hora Chegada');
	define ('BOOK_ROUTE_INFORMATION' , 'Informações');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Tipo de Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Matrícula');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Status da Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Reservar Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Aeronave Reservada');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Cancelar Reserva');
	define ('BOOK_ROUTE_CANCEL' , ' Cancelar');
	define ('BOOK_ROUTE_CONFIRM' , 'Reserva efetuada com sucesso. A reserva será cancelada automaticamente em 24 horas.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMAÇÃO');
	// Change Location
	define ('LOCATION_CHANGE' , 'ALTERAR LOCALIZAÇÃO');
	define ('LOCATION_CHANGE_LOCATION' , 'Localização:');
	define ('LOCATION_CHANGE_BTN' , 'Alterar');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'PIREP MANUAL');
	define ('MANUAL_PIREP_DATE' , 'Data:');
	define ('MANUAL_PIREP_DATE_PH' , 'Insira a Data');
	define ('MANUAL_PIREP_DEP' , 'Origem:');
	define ('MANUAL_PIREP_DEP_PH' , 'Insira a Origem');
	define ('MANUAL_PIREP_ARR' , 'Destino:');
	define ('MANUAL_PIREP_ARR_PH' , 'Insira o Destino');
	define ('MANUAL_PIREP_TIME' , 'Tempo de Vôo:');
	define ('MANUAL_PIREP_TIME_PH' , 'Insira o Tempo de Vôo');
	define ('MANUAL_PIREP_DISTANCE' , 'Distância:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Insira a Distância');
	define ('MANUAL_PIREP_FUEL' , 'Combustível:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Insira o Combustível');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Aeronave:');
	define ('MANUAL_PIREP_COMMENT' , 'Comentários:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Insira os Comentários');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Tipo de Vôo:');
	define ('MANUAL_PIREP_REG' , 'Regular');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Enviar');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Editar');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Cancelar');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirmar');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'VÔOS DA AERONAVE COM A MATRÍCULA ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Data');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Piloto');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Vôo');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Origem');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Destino');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distância');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Combustível');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'ALTERAR LOCALIZAÇÃO');
	define ('CHANGE_LOCATION_ICAO' , 'Aeroporto (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Alterar');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MEU PERFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Atualizar');
	define ('MY_PROFILE_UPDATED' , 'Seu perfil foi atualizado');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'EMAIL INTERNO');
	define ('MAILS_NEW' , 'ESCREVER MENSAGEM');
	define ('MAILS_REPLY' , 'RESPONDER MENSAGEM');
	define ('MAILS_DATE' , 'Data');
	define ('MAILS_FROM' , 'De');
	define ('MAILS_SUBJECT' , 'Assunto');
	define ('MAILS_SUBJECT_PH' , 'Insira o assunto');
	define ('MAILS_ACTIONS' , 'Ações');
	define ('MAILS_NEW_MESSAGE_LNK' , ' Nova mensagem');
	define ('MAILS_NEW_TO' , 'Para');
	define ('MAILS_MESSAGE' , 'Mensagem');
	define ('MAILS_MESSAGE_PH' , 'Insira a mensagem');
	define ('MAILS_SEND_BTN' , 'Enviar');
	// STATISTICS
	define ('STATISTICS' , 'ESTATÍSTICAS');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'PORCENTAGEM CHARTER VS REGULAR');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'PORCENTAGEM POR TIPO DE RELATÓRIO');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'PORCENTAGEM POR TIPO DE AERONAVE');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'NÚMERO DE VÔOS POR DIA NO MÊS ATUAL');
	define ('STATISTICS_TOP5_HOUR' , 'MELHORES 5 PILOTOS POR HORAS DE VÔO');
	define ('STATISTICS_TOP5_FLIGTH' , 'MELHORES 5 PILOTOS POR VÔOS');
	define ('STATISTICS_TOP5_LANDING' , '5 MELHORES POUSOS');
	define ('STATISTICS_TOP5_ROUTES' , '5 ROTAS MAIS VOADAS');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Piloto');
	define ('STATISTICS_HOURS' , 'Horas');
	define ('STATISTICS_FLIGHTS' , 'Vôos');
	define ('STATISTICS_TOUCH' , 'Touchdown (ft/min)');
	define ('STATISTICS_ROUTE' , 'Rota');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manual');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Regular');
	define ('INDEX_PILOT_CHARTER' , 'Charter');
	define ('INDEX_PILOT_COMMENT' , 'Comentário');
	// User not recognized
	define ('INDEX_NO_USER' , 'Sessão finalizada. Usuário ou senha inválido');
	// Administration options
	define ('ADM_PARA' , 'Parâmetros da VA');
	define ('ADM_HUB_MGR' , 'Gerenciar Hub');
	define ('ADM_FLEET_TYPE_MGR' , 'Tipo da Frota');
	define ('ADM_FLEET_MGR' , 'Gerenciar Frota');
	define ('ADM_PILOT_RANK_MGR' , 'Gerenciar Classificação');
	define ('ADM_PILOT_MGR' , 'Gerenciar Piloto');
	define ('ADM_ROUTE_MGR' , 'Gerenciar Rota');
	define ('ADM_ROUTE_FLEET_MGR' , 'Atribuir Rota');
	define ('ADM_USER_TYPE_MGR' , 'Tipo de Usuário');
	define ('ADM_JUMP_MGR' , 'Validador de Transferência');
	define ('ADM_FLIGHT_MGR' , 'Validador de Vôos');
	define ('ADM_NOTAM_MGR' , 'Gerenciar Notams');
	define ('ADM_EVENT_MGR' , 'Gerenciar Evento');
	define ('ADM_EMAIL_MGR' , 'Gerenciar Email');
	define ('ADM_LANGUAGES_MGR' , 'Gerenciar Idioma');
	define ('ADM_ACARS_MGR' , 'Parâmetros do ACARS');
	define ('ADM_NEW_MODULE_MGR' , 'Novo módulo');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'VALIDAÇÃO DE VÔOS');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Origem');
	define ('VALIDATE_ARRIVAL' , 'Destino');
	define ('VALIDATE_DATE' , 'Data');
	define ('VALIDATE_DURATION' , 'Duração');
	define ('VALIDATE_DISTANCE' , 'Distância');
	define ('VALIDATE_TYPE' , 'Tipo');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Regular');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Ação');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Vôo Regular  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Vôo Charter  ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'VALIDAÇÃO DE TRANSFERÊNCIAS');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Origem');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Destino');
	define ('VALIDATE_JUMP_DATE' , 'Data');
	define ('VALIDATE_JUMP_JUMP1' , 'Tipo 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Tipo 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Tipo 3');
	define ('VALIDATE_JUMP' , 'Transferir ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'RELATÓRIO DO SIMACARS');
	define ('VAMACARS_FLITGH_DETAILS' , 'DETALHES DO VÔO');
	define ('VAMACARS_LANDANALYSIS' , 'ANÁLISE DO POUSO');
	define ('VAMACARS_ROUTE' , 'ROTA');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETALHES');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validação');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validado');
	define ('VAMACARS_STATUS_REJECTED' , 'Rejeitado');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Validação Pendente');
	define ('VAMACARS_TYPE' , 'Tipo');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Matrícula');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Combustível Restante');
	define ('VAMACARS_FFUEL' , 'Combustível em Vôo');
	define ('VAMACARS_PASSENGERS' , 'Passageiros');
	define ('VAMACARS_CARGO' , 'Carga');
	define ('VAMACARS_ALTERNATE1' , 'Alternativo');
	define ('VAMACARS_WEIGHTUNIT' , 'Unidade de Peso');
	define ('VAMACARS_DATE' , 'DATA');
	define ('VAMACARS_DEPARTURE' , 'Origem');
	define ('VAMACARS_ARRIVAL' , 'Destino');
	define ('VAMACARS_DURATION' , 'Duração');
	define ('VAMACARS_DISTANCE' , 'DISTÂNCIA');
	define ('VAMACARS_DEP_TIME' , 'Hora de Partida');
	define ('VAMACARS_CRUISE_SPEED' , 'Velocidade de Cruzeiro');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Nível de Vôo');
	define ('VAMACARS_FLIGHT_TYPE' , 'Tipo de Vôo');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Tipo de Aeronave');
	define ('VAMACARS_COMMENTS' , 'Comentários do Piloto');
	define ('VAMACARS_NETWORK' , 'Rede');
	define ('VAMACARS_DATEDETAIL' , 'Data');
	define ('VAMACARS_FUELCONSUMED' , 'COMBUSTÍVEL CONSUMIDO');
	define ('VAMACARS_LANDING_PITCH' , 'Pitch no Pouso');
	define ('VAMACARS_LANDING_BANK' , 'Bank no Pouso');
	define ('VAMACARS_LANDING_FLAPS' , 'Flaps no pouso');
	define ('VAMACARS_LANDING_FORCEG' , 'Force G no pouso');
	define ('VAMACARS_LANDING_NAV' , 'Luzes de Navegação');
	define ('VAMACARS_LANDING_LDG' , 'Luzes de Pouso');
	define ('VAMACARS_LANDING_STR' , 'Luzes Strobe');
	define ('VAMACARS_LANDING_BEA' , 'Luzes Beacon');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUDE');
	define ('VAMACARS_FUEL_USED' , 'COMBUSTÍVEL CONSUMIDO');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FASE DO VÔO');
	define ('VAMACARS_VAM_MAP' , 'MAPA DO VÔO');
	define ('VAMACARS_EVENTS' , 'EVENTO');
	define ('VAMACARS_MAIN_EVENTS' , 'EVENTOS PRINCIPAIS');
	define ('VAMACARS_ACARS_DATA' , 'DADOS DO ACARS');
	define ('VAMACARS_HEADING' , 'PROA');
	define ('VAMACARS_FLIGHT_STATUS' , 'FASE DO VÔO');
	define ('VAMACARS_CRITICAL_EVENTS' , 'EVENTOS CRÍTICOS');
	define ('VAMACARS_VAM_CHART' , 'ALTITUDE');
	// Downloads
	define ('DOWNLOADS' , 'DOWNLOADS');
	define ('DOWNLOAD_NAME' , 'NOME');
	define ('DOWNLOAD_LINK' , 'LINK');
	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'COMENTÁRIOS DA VALIDAÇÃO');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMENTAR');
	define ('VAMACARS_FLIGHT_RATING' , 'Pontuação do Vôo');
	define ('VAMACARS_CRASH' , 'Acidentou');
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Comentário do Validador');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Adicionar Comentário');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Aceitar');
	define ('VAMACARS_VALIDATION_REJECT' , 'Rejeitar');
	define ('VAMACARS_NO' , 'Não');
	define ('VAMACARS_YES' , 'Sim');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Falhou');
	define ('VAMACARS_FLIGHTFAILURES' , 'FALHAS DO VÔO');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Luzes Beacon desligadas & Motores ligados');
	define ('VAMACARS_IAS1000' , 'Velocidade acima de 250 KIAS abaixo de 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Luzes desligadas abaixo de 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Luzes ligadas acima de 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Excesso de Velocidade');
	define ('VAMACARS_PAUSE' , 'Vôo Pausado');
	define ('VAMACARS_REFUEL' , 'Reabastecimento');
	define ('VAMACARS_SLEW' , 'Slew detectado');
	define ('VAMACARS_TAXILIGHTS' , 'Luzes de Taxi desligadas durante o taxiamento');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Luzes desligadas durante a decolagem');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Luzes desligadas durante o pouso');
	define ('VAMACARS_NOTARRIVED' , 'Pouso em aeroporto que não estava planejado');
	define ('VAMACARS_NUMFAILURES' , 'Número de falhas');
	define ('VAMACARS_TAXISPEED' , 'Velocidade do Taxi');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'COMENTÁRIOS DO VALIDADOR E PONTUAÇÃO DO VÔO');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Comentários do Validador:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validação:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Data da Validação:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Validado');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Validação Pendente');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rejeitado');
	// VAM 2.4 BEGIN
	define ('AIRPORT_AIRPORT_METAR' , 'INFORMAÇÕES METEOROLÓGICAS');
	define ('AIRPORT_AIRPORT_MAP' , 'MAPA DO AEROPORTO');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'FREQUÊNCIAS DO AEROPORTO');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'AUXÍLIOS DE NAVEGAÇÃO PRÓXIMOS AO AEROPORTO');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Tipo');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Nome');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frequência');
	define ('AIRPORT_RUNWAY_INFO' , 'INFORMAÇÕES DA PISTA');
	define ('AIRPORT_RUNWAY' , 'Pista');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Tamanho da pista');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Largura da pista');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Elevação da pista');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Ranhura da pista');
	define ('AIRPORT_RUNWAY_HEADING' , 'Proa da pista');
	define ('BOOK_ROUTE_INFO' , 'INFORMAÇÃO DA ROTA');
	define ('BOOK_ROUTE_DURATION' , 'Duração');
	define ('BOOK_ROUTE_ROUTE' , 'Rota');
	define ('BOOK_ROUTE_PRICE' , 'Preço');
	define ('BOOK_ROUTE_COMMENTS' , 'Comentários');
	define ('ROUTES_VA_SEARCHER', 'Localizar Rota');
	define ('VAMACARS_VALIDATION_DELETE','Deletar Vôo');
	define ('PILOT_RECEIVE_EMAILS','Gostaria de receber emails?');
	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'DETALHES DA AERONAVE');
	define ('AIRCRAFT_DETAILS_PAX' , 'Número de passageiros');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Alcance máximo');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Capacidade de carga');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Tamanho da Aeronave');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Peso Máximo Sem Combustível (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Peso Máximo para Pouso (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Peso Máximo para Decolagem (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Velocidade de Cruzeiro');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Teto de Serviço');
	define ('AIRCRAFT_DETAILS_CREW' , 'Membros da tripulação');
	define ('HUB_DETAILS' , 'DETALHES DO HUB');
	define ('HUB_PILOTS' , 'HUB DE PILOTOS');
	define ('HUB_FLEET' , 'HUB DA FROTA');
	define ('HUB_ROUTES' , 'HUB DE ROTAS');
	define ('HUB_MAP_LOCATION' , 'MAPA DE ROTAS');
	define ('HUB_NAME' , 'Nome');
	define ('HUB_WEB' , 'Website');
	define ('HUB_NUM_PILOTS' , 'Número de Pilotos');
	define ('HUB_NUM_FLEET' , 'Número de Aeronaves');
	define ('HUB_NUM_ROUTES' , 'Número de Rotas');
	define ('ADM_TOUR_MODULE_MGR' , 'Gerenciar TOUR');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Gerenciador Financeiro');
	define ('OPERATIONS' , 'Operações');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Classificação de Pilotos');
	define ('AWARDS' , 'Prêmios');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'TOURS ATIVOS');
	define ('TOURS_INACTIVE' , 'TOUR INATIVOS');
	define ('TOUR_DETAILS' , 'DETALHES DE TOURS');
	define ('TOUR_LEGS' , 'PERNAS DO TOUR');
	define ('TOURS_STATUS' , 'Status');
	define ('TOURS_AWARD' , 'Prêmio');
	define ('TOURS_IMAGE' , 'Imagem');
	define ('TOURS_NUM_LEGS' , 'Núm. de Pernas');
	define ('TOURS_LEG_STATUS' , 'Status das Pernas');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Núm. Pernas Aceitas');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Núm. Pernas Reportadas');
	define ('TOURS_LEGS_REPORT' , 'Reportar Perna');
	define ('TOURS_DISTANCE' , 'Distância');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Data de início');
	define ('TOURS_END_DATE' , 'Data de término');
	define ('TOURS_ROUTE_INFO' , 'Rota & Comentários');
	define ('TOURS_ROUTE' , 'Rota');
	define ('TOURS_COMMENTS' , 'Comentários');
	define ('TOURS_LEG_REPORT' , 'Reportar Perna');
	define ('TOURS_VALIDATION' , 'VALIDAÇÃO DE PERNAS NOS TOURS');
	define ('TOURS_LEG' , 'Perna');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Enviar Imagem do Pioto');
	define ('PILOT_AWARDS' , 'PRÊMIOS DO PILOTO');
	define ('PILOT_TOURS' , 'TOUR DO PILOTO');
	define ('ADM_AWARDS_MGR' , 'Gerenciar Prêmios');
	define ('ADM_AWARDS_PILOR_MGR' , 'Atribuir prêmio');
	define ('VAMACARS_LANDINGQNH' , 'Altímetro incorreto durante o pouso');
	define ('VAMACARS_TAKEOFFQNH' , 'Altímetro incorreto durante a decolagem');
	define ('LAND_WIND' , 'Vento durante o pouso');
	define ('LAND_HDG' , 'Proa durante o pouso');
	define ('OPTION_TOUR' , 'Reportar Perna do Tour');
	define ('AWARDS_PANEL' , 'PRÊMIOS');
	define ('AWARD_NAME' , 'Nome do Prêmio');
	define ('AWARD_IMG' , 'Imagem do Prêmio');
	define ('RANK_PANEL' , 'CLASSIFICAÇÃO');
	define ('RANK_IMAGE' , 'Imagem do Rank');
	define ('RANK_MIN_HOURS' , 'Mínimo de Horas');
	define ('RANK_MAX_HOURS' , 'Máximo de Horas');
	// NEW STATS
	define ('ST_MONTH' , 'Mês');
	define ('ST_YEAR' , 'Ano');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HORAS POR MÊS E ANO');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'VÔOS POR MÊS E ANO');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , '5 TIPOS DE AERONAVES MAIS VOADAS');
	define ('STATISTICS_TOP5_AIRCRAFTS' , '5 AERONAVES MAIS VOADAS');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'RELATÓRIO FINANCEIRO DE VÔO');
	define ('VA_GLOBAL_FINANCES' , 'RELATÓRIO FINANCEIRO GLOBAL DA VA');
	define ('COSTS' , 'CUSTOS');
	define ('INCOME' , 'RECEITA');
	define ('INCOME_REGULAR_ROUTES' , 'RECEITA DE ROTAS REGULARES');
	define ('AIRCRAFT_PURCHASE' , 'COMPRAR AERONAVE');
	define ('FINANCE_BALANCE' , 'BALANÇO FINANCEIRO');
	define ('GLOBAL_FINANCES' , 'Relatório Financeiro');
	define ('COSTS_PILOTS_SALARY' , 'CUSTO COM SALÁRIO DE PILOTOS');
	define ('COSTS_AIRCRAFT_REPAIR' , 'CUSTO COM REPARO DE AERONAVES');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'CUSTO COM MANUTENÇÃO DE AERONAVES');
	// LIVE MAP
	define ('FLIGHT_STAGE' , 'Fase do Vôo');
	define ('PERC_DONE' , '% Completo');
	define ('PENDING_NM' , 'Distância(NM) até o Destino');
	// VAM 2.6
	define ('NEW_MAIL' , 'You have a new message from other pilot. Review your messages inbox');
	define ('ADM_COURSES_MGR' , 'Courses mgr. Still on development');
	define ('ADM_TRAININGS_MGR' , 'Training mgr. Still on development');
	define ('ADM_WEB_MGR' , 'Web configuration');
	define ('ADM_STAFF_MGR' , 'Staff configuration');
	define ('ADM_AIRPORTS_MGR' , 'Airports manager');
	define ('ADM_SIMACARS_FLIGHTS_MGR' , 'SIMACARS reports');
	define ('ADM_MANUAL_FLIGTS_MGR' , 'Manual reports');
	define ('VAMACARS_BFUEL_FOB' , 'Block Fuel/Initial FOB');
	define ('RPT_PLANE_OUT_ROUTE' , 'REPORT PLANES OUT OF ROUTE');
	define ('LAST_REGULAR_FLIGHT' , 'Last Regular flight');
	define ('MOVE_TO_HUB' , 'Move to HUB');
	define ('AIRCRAFT_HANGAR' , 'AIRCRAFT MAINTENANCE HISTORIC ');
	define ('HANGAR_IN' , 'Hangar entry date');
	define ('HANGAR_OUT' , 'Hangar exit date');
	define ('LAST_PILOT' , 'Last Pilot');
	define ('REASON' , 'Reason');
	define ('NOT_GRANTED' , 'You do not have access to this page');
	define ('TOUR_DESCRIPTION' , 'Tour description');
	define ('RPT_PILOT_WARNING' , 'Warning Date');
	define ('RPT_PLANE_OUT' , 'Report Aircrafts');
	define ('RPT_PILOT_ACTIVITY' , 'Report Pilots');
	define ('RPT_PILOT_ACT' , 'REPORT PILOTS ACTIVITY');
	define ('SEND_WARNING' , 'Send Warning');
	define ('INACTIVATE' , 'Inactivate');
	define ('TAB_MAIN' , 'Pilot Profile');
	define ('TAB_STATS' , 'Pilot stats');
	define ('TAB_AWARDS' , 'Pilot Awards');
	define ('TAB_TOURS' , 'Pilot Tours');
	define ('TAB_CERTIFICATIONS' , 'Pilot Certifications');
	define ('PILOT_STATS_COUNTRY' , 'PERCENTAGE BY COUNTRY');
	define ('PILOT_STATS_PERC_PLANE' , 'PERCENTAGE BY AIRCRAFT USED');
	define ('PILOT_STATS_PERC_DURATION' , 'PERCENTAGE BY FLIGHT DURATION');
	define ('STATISTICS_NUMBER_FLIGTH_PER_MONTH_CURRENT_YEAR' , 'NUMBER FLIGHTS PER MONTH IN CURRENT YEAR');
	define ('AVG_DURATION' , 'Flight duration average');
	define ('AVG_DISTANCE' , 'Flight distance average');
	define ('AVG_LANDING_VS' , 'Landing vs average');
	define ('LAST_30D_FLIGHT' , 'Last 30 days flights');
?>