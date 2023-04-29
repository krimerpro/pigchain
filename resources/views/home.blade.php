@extends('layouts.default')
@section('content')

<!-- banner -->
<div id="home" class="iq-banner-3">
    <div id="particles-js"></div>
    <div class="banner-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text text-left text-white">
                        <h1 class="text-white iq-tw-7 iq-mb-20"><b class="iq-font-yellow">PIG CHAIN</b> Advanced Technology</h1>
                        <p>Pig Chain use the latest and advanced technology to maintain the scalability of the number of existing transactions </p>
                        <a href="https://t.me/PigChainPortal" class="button iq-mt-20 iq-ml-10" style="background:#DD00AE">JOIN US</a>
                        <a href="https://poocoin.app/tokens/0x" class="button bt-white iq-mt-20 iq-ml-10" style="background:#DD00AE;color:white">CHART</a>
                        <a href="https://pancakeswap.finance/swap?outputCurrency=0x" class="button bt-white iq-mt-20 iq-ml-10" style="background:#DD00AE;color:white">BUY PIG</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="ico-img">
                        <img class="img-fluid" src="{{ asset('images/banner/02.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<!-- Main-Contain -->
<div class="main-contain">
    <!-- What is OVEX -->
    <section id="iq-about" class="overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <img src="{{ asset('images/about/04.png') }}" class="img-fluid" alt="about_img">
                </div>
                <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
                    <div class="heading-title left">
                        <small class="iq-font-green">About Us</small>
                        <h2 class="iq-tw-6">What is Pig Chain?</h2>
                    </div>
                    <P>Pig Chain a structure that consists of blocks. Each block contains a nonce, timestamp, the hash of the previous block and transaction (new data in non-financial applications). The blockchain works as follows.</p>
                    <p>Transaction requests constantly arrive, but it is up to the majority of users to accept those requests. After a transaction is accepted, the hash of the previous block, timestamp and nonce is added in to the new block.</P>
                    <p>Since every block contains the previous block’s hash value, this system is secure because if one block’s contents change, hash values would not add up.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- What is OVEX END -->
    <!-- What is OVEX -->
    <section id="ico" class="overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="heading-title left">
                        <small class="iq-font-green">Our Vision</small>
                    </div>
                    <P>We’re building the future of finance. Blockchain is the most trusted and fastest growing crypto company, helping millions across the globe – from single individuals to the largest institutions – have an easy and safe way to access cryptocurrency.</P>
                    <p>We hope Pig Chain can bring trust and confidence in the blockchain ecosystem.</p>
                </div>
                <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
                    <img src="{{ asset('images/about/01.png') }}" class="img-fluid" alt="about_img">
                </div>
            </div>
        </div>
    </section>
    <!-- What is OVEX END -->
    <!-- About Us -->
    <section id="product" class="overview-block-pb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <small class="iq-font-green">PROJECTS</small>
                        <h2 class="title iq-tw-6">PIG CHAIN PROJECTS</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/04.png') }}" alt="icon" class="img-fluid">
                            <h6>Safe & Secure Wallet</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/05.png') }}" alt="icon" class="img-fluid">
                            <h6>Launchpad</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon active">
                            <img src="{{ asset('images/icon/06.png') }}" alt="icon" class="img-fluid">
                            <h6>Smart dApps</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/07.png') }}" alt="icon" class="img-fluid">
                            <h6>PIG20 Bridge</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/08.png') }}" alt="icon" class="img-fluid">
                            <h6>Staking</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/08.png') }}" alt="icon" class="img-fluid">
                            <h6>Farming</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                        <div class="iq-small-icon">
                            <img src="{{ asset('images/icon/07.png') }}" alt="icon" class="img-fluid">
                            <h6>TestNet & MainNet</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <!-- Tranding platform -->
    <section id="tokenomics" class="iq-Tranding-platform light-bg overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <small class="iq-font-green">Tokenomics</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Token Name:</td>
                                    <td>PIG CHAIN</td>
                                </tr>
                                <tr>
                                    <td>Token Platform:</td>
                                    <td>SMART CHAIN | BSC</td>
                                </tr>
                                <tr>
                                    <td>Token Standard:</td>
                                    <td>BEP20</td>
                                </tr>
                                <tr>
                                    <td>Total Supply</td>
                                    <td>100,000,000</td>
                                </tr>
                                <tr>
                                    <td>Initial Liquidity Pool</td>
                                    <td>2 BNB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Max Allowed Transaction</td>
                                    <td>4% of Total Supply</td>
                                </tr>
                                <tr>
                                    <td>Max Allowed Holding/Wallet</td>
                                    <td>4% of Total Supply</td>
                                </tr>
                                <tr>
                                    <td>Buy Tax</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Sell Tax</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Launch Type</td>
                                    <td>Stealth Launch</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tranding platform END -->
    <!--================================
        Our Great Features -->
    <section class="overview-block-pt iq-great-features2 iq-hide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title text-center">
                        <h2 class="title iq-tw-6">PIG Wallet</h2>
                    </div>
                </div>
            </div>
            <div class="row iq-mt-40">
                <div class="col-lg-4 col-md-6 col-sm-12 right-side">
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-desktop brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Powerful App</h5>
                        </div>
                    </div>
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-shopping-cart brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Buy & Sell</h5>
                        </div>
                    </div>
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-mobile brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Easy to Use</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-mobile-none"><img alt="" src="{{ asset('images/app.png') }}" class="img-fluid mx-auto d-block"></div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-users brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Highly Secure</h5>
                        </div>
                    </div>
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-gift brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Low Rransaction Fees</h5>
                        </div>
                    </div>
                    <div class="iq-feature1 iq-pt-60">
                        <div class="left brd">
                            <i class="fa fa-life-ring brd"></i>
                        </div>
                        <div class="right">
                            <h5 class="iq-tw-6 iq-mb-10">Multiple Chain</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overview-block-pt iq-great-features2 iq-hide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title text-center">
                        <h2 class="title iq-tw-6">Upcoming PIG Mainnet</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 d-mobile-none"><img alt="" src="{{ asset('images/contract-gen.png') }}" class="img-fluid mx-auto d-block"></div>
            </div>
        </div>
    </section>

    <!--================================
        Our Great Features -->
    <!-- timeline -->
    <section id="road" class="iq-timeline-1 overview-block-ptb text-white iq-bg-fixed">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title">
                        <small class="iq-font-green">PROCESS</small>
                        <h2 class="title iq-tw-6">PIG CHAIN ROADMAP</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline-1">
                        <div class="timeline-t">
                            <span class="timeline-icon"></span>
                            <span class="year">1st Phase</span>
                            <div class="timeline-content">
                                <h5 class="iq-font-yellow">Launch</h5>
                                <p class="iq-mt-10">Fair Launch on Pancakeswap</p>
                                <p class="iq-mt-10">Post Launch Marketing</p>
                                <p class="iq-mt-10">Website Released</p>
                                <p class="iq-mt-10">Events & Contest</p>
                            </div>
                        </div>
                        <div class="timeline-t">
                            <span class="timeline-icon"></span>
                            <span class="year">2nd Phase</span>
                            <div class="timeline-content">
                                <h5 class="iq-font-yellow">Marketing</h5>
                                <p class="iq-mt-10">BSC Trending</p>
                                <p class="iq-mt-10">Dextools Trending</p>
                                <p class="iq-mt-10">Poocoin Ads</p>
                                <p class="iq-mt-10">Twitter Promotion</p>
                            </div>
                        </div>
                        <div class="timeline-t">
                            <span class="timeline-icon"></span>
                            <span class="year">3rd Phase</span>
                            <div class="timeline-content">
                                <h5 class="iq-font-yellow">Products Released</h5>
                                <p class="iq-mt-10">PIG Wallet Released</p>
                                <p class="iq-mt-10">PIG Launchpad Released</p>
                                <p class="iq-mt-10">PIG20 Bridge Released</p>
                                <p class="iq-mt-10">PIG Staking Released</p>
                                <p class="iq-mt-10">PIG Farming Released</p>
                                <p class="iq-mt-10">PIG Testnet Released</p>
                                <p class="iq-mt-10">PIG Mainnet Released</p>
                            </div>
                        </div>
                        <div class="timeline-t">
                            <span class="timeline-icon"></span>
                            <span class="year">4th Phase</span>
                            <div class="timeline-content">
                                <h5 class="iq-font-yellow">Next Step</h5>
                                <p class="iq-mt-10">Smart Contract Audit</p>
                                <p class="iq-mt-10">Team KYC</p>
                                <p class="iq-mt-10">COINGECKO Listing</p>
                                <p class="iq-mt-10">COINMARKETCAP Listing</p>
                                <p class="iq-mt-10">Onboard Marketing Agency</p>
                                <p class="iq-mt-10">Onboard PR Agency</p>
                                <p class="iq-mt-10">CEX Listing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- timeline -->

</div>
@stop
