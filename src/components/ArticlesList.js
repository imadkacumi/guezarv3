import React, { useState } from 'react';
import ReactDOM from 'react-dom';

function ArticlesList () {

    const [data, setData] = useState([
        {
            product_name : "Pommes",
            product_price : 10,
            product_weight : 5,
            product_quantity : 20,
        },
        {
            product_name : "Poires",
            product_price : 15,
            product_weight : 7,
            product_quantity : 10,
        },
        {
            product_name : "Tomates",
            product_price : 11,
            product_weight : 2,
            product_quantity : 30,
        },
        {
            product_name : "Pêches",
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
                            <h1>Nos articles :</h1>
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