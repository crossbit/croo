@extends('layout')

@section('content')
<!-- Wrapper -->
<div class="wrapper">

    <!-- Topic Header -->
    <div class="topic">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Kariera</h3>
                </div>
                <div class="col-sm-8">
                    <ol class="breadcrumb pull-right hidden-xs">
                        <li><a href="/">Home</a></li>
                        <li class="active">Kariera</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Services -->
    <div class="main-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="services">
                        <div class="service-item">
                            <div class="service-desc" id="marketing">
                                <h4>Programista SharePoint</h4>
                                <p>Szukasz pracy? Dołącz do naszego zespołu jako programista Sharepoint. 
                                    Będziesz miał/-ała możliwość współtworzenia innowacyjnych projektów dla liderów z sektora bankowo-finansowego, farmaceutycznego i innych.
                                    Dołącz do nas i dobrze wykorzystaj swój talent.   
                                </p>
                                <button class='btn btn-theme-primary' id='show'> Szczegóły</button>
                                <div class='career' style="display:none">
                                    <div class="col-sm-6">
                                        <h3>Opis zadań:</h3>
                                        <ul>
                                            <li>Znajomość technologii .NET, C#, SharePoint 2010/2013</li>
                                            <li>Doświadczenia w pracy w tworzeniu aplikacji opartych o .NET Framework</li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">

                                    </div>

                                    <p> Opis zadań:

                                        Tworzenie i implementacja aplikacji Sharepoint
                                        Utrzymanie i rozwój systemów klienta
                                        Udział w projektowaniu aplikacji oraz nowych funkcjonalności
                                        Współpraca w ramach analizy i testowania

                                        Wymagania:

                                        Znajomość technologii .NET, C#, SharePoint 2010/2013
                                        Doświadczenia w pracy w tworzeniu aplikacji opartych o .NET Framework
                                        Doświadczenie w pracy z relacyjnymi bazami danych (MS SQL)
                                        Doświadczenia w programowaniu rozwiązań dla Platform SharePoint 2010 oraz 2013 (Web Parts, Event Receivers, Custom Actions, Workflows, Jobs, Custom Fields, Controls i inne)
                                        Praktyczna znajomość technologii Silverlight, WCF, MVC będzie dużym atutem
                                        Znajomość języka angielskiego pozwalająca na czytanie dokumentacji
                                        Umiejętność pracy w zespole
                                        Znajomość ograniczeń wykorzystania Sharepoint
                                        Zdolność analitycznego myślenia i rozwiązywania problemów

                                        Oferujemy:

                                        Możliwość współtworzenia innowacyjnych projektów dla liderów z sektora bankowo-finansowego, farmaceutycznego i innych
                                        Stabilne zatrudnienie
                                        Możliwość rozwoju zawodowego
                                        Doskonałą atmosferę pracy
                                        Narzędzia niezbędne do pracy
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div> <!-- / .services -->
                </div>            
            </div>

        </div> <!-- / .container -->
    </div> <!-- / .main-features -->
</div>

@endsection
