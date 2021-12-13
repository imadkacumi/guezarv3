import React, { components, useState } from 'react';
import ReactDOM from 'react-dom';

function ArticlesList () {

    const [data, setData] = useState([
        {
            product_name : "Pommes",
            product_imageUrl: "http://www.psychomedia.qc.ca/image/2013-12/35143-44955-image",
            product_price : 10,
            product_weight : 5,
            product_quantity : 20,
        },
        {
            product_name : "Poires",
            product_imageUrl: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.academiedugout.fr%2Fglossaire%2Feplucher-et-tailler-une-poire-en-quartiers_2787&psig=AOvVaw38qhvpPrNOVeyiEv3IlOTz&ust=1639496284227000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCJiar96N4fQCFQAAAAAdAAAAABAE",
            product_price : 15,
            product_weight : 7,
            product_quantity : 10,
        },
        {
            product_name : "Tomates",
            product_imageUrl: "https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.delagrainealassiette.fr%2F2016%2F12%2F09%2Fque-suis-je-une-tomate%2F&psig=AOvVaw1tMhuvFOEtVe4nz62GyC8x&ust=1639496324737000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCICL0fGN4fQCFQAAAAAdAAAAABAP",
            product_price : 11,
            product_weight : 2,
            product_quantity : 30,
        },
        {
            product_name : "Pêches",
            product_imageUrl: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.aprifel.com%2Ffr%2Ffiche-nutritionnelle%2Fpeche-jaune%2F&psig=AOvVaw2V1oDPpGuFqXxO_TqRfPVY&ust=1639496306301000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCKjd6OiN4fQCFQAAAAAdAAAAABAE",
            product_price : 20,
            product_weight : 1,
            product_quantity : 5,
        },
    ]);

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">
                            <h1>Listes des articles :</h1>
                        </div>
                        <div className="col-md-6">
                            {
                                data.map((item, index) => {
                                    return (
                                        <div className="card-body" key={index}>
                                            {item.product_name}
                                        </div>
                                    )
                                })
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ArticlesList;

if (document.getElementById('articles-list')) {
    ReactDOM.render(
        <ArticlesList />,
        document.getElementById('articles-list')
    );
};