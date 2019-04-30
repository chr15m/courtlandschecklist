(ns ccl.core
  (:require [reagent.dom.server :refer [render-to-static-markup]]
            [reagent.impl.template :as tmpl]
            ["./form" :as fdata]))

(defn component-section [section-data]
  [:section {:key (js/Math.random)}
   [:form
    [:div {:class "row gtr-uniform gtr-50"}
     (for [question section-data]
       (let [q (js/Math.random)]
         [:div {:class "col-12" :key (js/Math.random)}
          [:input {:type "checkbox" :id q :name q}]
          [:label {:for q} question]]))]]])

(defn component-all [data]

  [:div {:class "container wrapper style1"}

   [:section
    [:form
     [:div {:class "row gtr-uniform gtr-50"}
      [:div {:class "col-12"}
       [:input {:type "text" :placeholder "Business name or description"}]]]]]

   (for [section data]
     [:div {:key (js/Math.random)}
      [:header
       [:h2 (get section 0)]]
       [component-section (rest section)]])])

(js/console.log (render-to-static-markup (component-all fdata)))
