<template>
    <div id="modal_window_container">
        <div id="modal_window">
            <div id="modal_header">
                <img :src="logo" alt="">
            </div>
            <div id="modal_body">
                <div id="modal_price">
                    <h2>$7.90</h2>
                    <small>per month</small>
                </div>
                <div id="what_includes">
                    <h4>Includes</h4>
                    <ul>
                        <li><p>A Spotify Premium subscription <br>(Ad free, listen offline)</p></li>
                        <li><p>No data charges for music listening on Spotify Premium</p></li>
                        <li><p>12-month contract applies</p></li>
                    </ul>
                </div>
            </div>
            <div id="modal_footer">
                <a id="subscribe_button" href="#">Subscribe</a>
                <p>Or $9.80 per month without contract</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    props: {
        logo: {
            type: String,
            required: false
        }
    }
}
</script>

<style lang="scss" scoped>
    #modal_window_container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        //display: none;
        z-index: 1;
        color: black;

        #modal_window {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            background-color: white;
            border: 10px solid black;

            #modal_header {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80px;
                background-color: #1ED760;
                img {
                    height: 60%;
                }
            }
            #modal_body {
                #modal_price {
                    text-align: center;
                    padding: 30px 0 15px 0;

                    h2 {
                        font-size: 50px;
                        font-weight: bold;
                        margin-bottom: 0;
                    }
                    small {
                        color: darken(#C1BAB6, 20%);
                    }
                }
                #what_includes {
                    padding: 0 40px;

                    h4 {
                        font-size: 16px;
                        font-weight: bold;
                    }
                    ul {
                        padding-left: 16px;
                        li {
                            margin-top: 10px;

                            p {
                                font-size: 14px;
                                color: darken(#C1BAB6, 20%);
                                margin: 0;
                            }
                        }
                    }
                }
            }
            #modal_footer {
                padding: 30px 0;
                text-align: center;

                #subscribe_button {
                    text-decoration: none;
                    font-weight: bold;
                    color: white;
                    background-color: #EE193D;
                    padding: 10px 30px;
                    border-radius: 30px;
                }
                p {
                    font-weight: bold;
                    color: darken(#9EE1F6, 20%);
                    margin-top: 20px;
                }
            }
        }
    }
</style>
