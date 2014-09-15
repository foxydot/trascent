<?php
// This file contains redirects or urls used in qTranslate and that were changed when imported content in WPML.
// It needs to be included from the theme's functions.php file.

add_action('template_redirect', 'qt_importer_301_redirects');
function qt_importer_301_redirects(){
  $redirects['/about/'] = '/a-propos-de-nous/';
  $redirects['/insights/'] = '/points-de-vue/';
  $redirects['/solutions/'] = '/solutions-2/';
  $redirects['/experience/'] = '/experience-2/';
  $redirects['/conference/'] = '/conferences/';
  $redirects['/news/'] = '/nouvelles/';
  $redirects['/about/leadership/'] = '/direction-de-lentreprise/';
  $redirects['/insights/white-papers/'] = '/les-livres-blancs/';
  $redirects['/insights/videos/'] = '/videos-2/';
  $redirects['/solutions/market-intelligence-benchmarking/'] = '/renseignement-sur-les-marches-et-normes/';
  $redirects['/solutions/strategic-sourcing-design-planning/'] = '/conception-et-planification-strategiques/';
  $redirects['/solutions/process-support-rfp-to-selection/'] = '/appui-au-processus-de-la-demande-de-propositions-a-la-selection/';
  $redirects['/solutions/implementation-transition/'] = '/mise-en-oeuvre-et-transition/';
  $redirects['/solutions/diagnostics-optimization/'] = '/diagnostics-et-optimisation/';
  $redirects['/solutions/srmgovernance/'] = '/gestion-des-relations-avec-les-fournisseurs-et-gouvernance-avancee/';
  $redirects['/experience/case-studies/'] = '/etudes-de-cas/';
  $redirects['/conference/north-america/'] = '/etats-unis/';
  $redirects['/conference/europe/'] = '/europe/';
  $redirects['/conference/asia/'] = '/asie/';
  $redirects['/contact/'] = '/contacter/';
  $redirects['/careers/'] = '/carrieres/';
  $redirects['/privacy-policy/'] = '/politique-de-confidentialite/';
  $redirects['/site-map/'] = '/plan-du-site/';
  $redirects['/experience/case-studies/global-pharmaceutical1/'] = '/secteur-pharmaceutique-international/';
  $redirects['/experience/case-studies/global-pharmaceutical-2/'] = '/secteur-pharmaceutique-international-2/';
  $redirects['/experience/case-studies/semiconductor-manufacturer/'] = '/fabricant-de-semi-conducteurs/';
  $redirects['/experience/case-studies/global-cpg-firm/'] = '/entreprise-internationale-de-biens-de-consommation-emballes/';
  $redirects['/experience/case-studies/40-billion-telecom/'] = '/enterprise-de-telecommunications-de-40-milliards-de-dollars/';
  $redirects['/experience/case-studies/global-automotive-manufacturer/'] = '/fabricant-automobile-international/';
  $redirects['/experience/industries/pharmaceuticals-biotechnology-life-sciences/'] = '/pharmaceutique-biotechnologie-et-sciences-de-la-vie/';
  $redirects['/experience/industries/public-sector/'] = '/secteur-public/';
  $redirects['/experience/industries/healthcare/'] = '/sante/';
  $redirects['/experience/industries/consumer-packaged-goods/'] = '/biens-de-grande-consommation/';
  $redirects['/experience/industries/industrial-manufacturing/'] = '/industries-de-la-fabrication-et-diverses/';
  $redirects['/experience/industries/financial-services/'] = '/mutation-en-des-temps-troubles/';
  $redirects['/experience/industries/high-tech/'] = '/flexibilite-et-expertise-pour-soutenir-les-operations-majeures/';
  $redirects['/about/leadership/rakesh-kishan/'] = '/rakesh-kishan-membre-du-conseil-dadministration-mondial-et-directeur-general-emea/';
  $redirects['/about/leadership/ty-fastovsky/'] = '/ty-fastovsky-membre-du-conseil-dadministration-mondial-et-directeur-general-asie-pacifique/';
  $redirects['/insights/white-papers/third-generation-outsourcing/'] = '/impartition-de-troisieme-generation-cadre-de-prise-de-decision-strategique/';
  $redirects['/insights/white-papers/complexities-in-structuring-a-global-fm-outsourcing/'] = '/complexites-de-la-structuration-dun-accord-international-dimpartition-de-gestion-des-installations/';
  $redirects['/insights/white-papers/six-key-predictors/'] = '/six-indicateurs-cles-de-reussite-de-limpartition-dans-un-marche-dimpartition-des-services-de-gestion-des-biens-immobiliers-et-des-installations-en-evolution/';
  $redirects['/careers/available-jobs/'] = '/emplois-disponibles/';
  $redirects['/careers/frequently-asked-questions/'] = '/foire-aux-questions/';
  $redirects['/about/why-choose-trascent/'] = '/pourquoi-choisir-trascent/';
  $redirects['/about/corporate-overview/'] = '/presentation-de-la-societe/';
  $redirects['/news/press-releases/'] = '/communiques-de-presse/';
  $redirects['/fm_webinar/'] = '/de-facilities-management-strategies-dexternalisation-en-region-asie-pacifique/';
  $redirects['/insights/white-papers/request-form/'] = '/les-livres-blancs-2/';
  $redirects['/about/global-presence/'] = '/une-presence-mondiale/';
  $redirects['/solutions/real-estate-transformation/'] = '/transformation-immobilier/';
  $redirects['/thank-you/'] = '/untitled-fr/';
  $redirects['/experience/case-studies/high-tech-manufacturer/'] = '/gestion-integree-densembles-immobliers/';
  $redirects['/conference/request-invitation/'] = '/request-invitation-2/';
  $redirects['/about/leadership/george-bouri/'] = '/george-bouri-membre-du-conseil-dadministration-mondial-et-directeur-general-ameriques/';
  $redirects['/experience/case-studies/driving-value-in-3rd-generation-outsourcing/'] = '/favoriser-la-creation-de-valeur-dans-limpartition-de-troisieme-generation/';
  $redirects['/experience/case-studies/strengthening-supplier-partnerships/'] = '/renforcer-les-partenariats-avec-les-fournisseurs/';
  $redirects['/us-conference-agenda-zy7848qr326/'] = '/untitled-fr-2/';
  $redirects['/ums-advisory-to-moderate-research-laboratory-services-forum/'] = '/untitled-fr/';
  $redirects['/ums-advisory-announces-8th-annual-us-strategic-refm-conference/'] = '/untitled-fr-2/';
  $redirects['/ums-advisory-held-8th-annual-us-fmre-conference/'] = '/untitled-fr-3/';
  $redirects['/rakesh-kishan-to-present-at-corenet-global-summit/'] = '/untitled-fr-4/';
  $redirects['/4th-annual-european-refm-conference/'] = '/untitled-fr-5/';
  $redirects['/ums-advisory-held-4th-annual-european-refm-conference/'] = '/untitled-fr-6/';
  $redirects['/asia-pacific-operations-launch/'] = '/untitled-fr-7/';
  $redirects['/ums-advisory-announces-9th-annual-refm-us-conference/'] = '/untitled-fr-8/';
  $redirects['/ums-advisory-held-9th-annual-strategic-real-estate-re-facilities-management-fm-us-conference-at-amgen-oct-2-4-thousand-oaks-ca/'] = '/ums-advisory-a-tenu-sa-neuvieme-conference-annuelle-consacree-a-la-gestion-strategique-des-biens-immobiliers-et-des-installations-aux-etats-unis/';
  $redirects['/ums-advisory-held-1st-annual-strategic-real-estate-re-facilities-management-fm-asia-conference/'] = '/ums-advisory-a-tenu-sa-premiere-conference-annuelle-consacree-a-la-gestion-strategique-des-biens-immobiliers-et-des-installations-en-asie/';
  $redirects['/ums-advisory-recognized-as-top-business-in-america-by-diversitybusiness-com/'] = '/ums-advisory-est-reconnu-comme-premiere-entreprise-en-amerique-par-diversitybusiness-com/';
  $redirects['/ums-advisory-announces-its-5th-annual-2013-strategic-real-estate-re-facilities-management-fm-european-conference-at-nordea-bank-copenhagen-denmark-june-12-2013/'] = '/untitled-fr-9/';
  $redirects['/eu-conference-2013/'] = '/ums-advisory-ag-a-organise-le-12-juin-2013-a-nordea-bank-dans-la-ville-de-copenhague-au-danemark-la-5e-conference-annuelle-des-pays-de-lunion-europeenne-sur-la-gestion-strategique-des-biens/';
  $redirects['/george-bouri-joins-ums-advisory-inc-as-senior-partner-and-managing-director/'] = '/george-bouri-integre-ums-advisory-inc-en-tant-quassocie-principal-et-directeur-general/';
  $redirects['/ums-advisory-announces-10th-annual-strategic-real-estate-re-facilities-management-fm-conference-at-sprint-world-headquarters-sept-24-25-overland-park-kansas/'] = '/ums-advisory-annonce-la-tenue-de-sa-10e-conference-annuelle-sur-la-gestion-strategique-des-biens-immobiliers-et-des-installations-qui-se-deroulera-les-24-et-25-septembre-au-siege-mondial-de-sprint-a-o/';
  $redirects['/ums-advisory-held-10th-annual-strategic-real-estate-re-facilities-management-fm-conference-at-sprint-world-headquarters-sept-24-25-overland-park-kansas/'] = '/ums-advisory-a-organise-sa-dixieme-conference-strategique-annuelle-consacree-a-la-gestion-des-biens-immobiliers-et-des-services-generaux-au-siege-mondial-de-la-societe-sprint-du-24-au-25-septembre/';
  $redirects['/ums-advisory-acquires-iwmsconnect-recognized-industry-leader-in-workplace-technology-research-and-advisory-services/'] = '/ums-advisory-acquiert-iwmsconnect-chef-de-file-reconnu-dans-le-secteur-des-recherches-technologiques-et-des-services-consultatifs-en-milieu-de-travail/';
  $redirects['/ums-advisory-announces-2nd-annual-2013-strategic-real-estate-re-facilities-management-fm-asia-conference-at-thomson-reuters-in-hong-kong/'] = '/ums-advisory-annonce-la-2e-conference-annuelle-asiatique-sur-la-gestion-strategique-des-biens-immobiliers-et-des-installations-au-thomson-reuters-a-hong-kong/';
  $redirects['/ums-advisory-now-trascent-management-consulting/'] = '/ums-advisory-se-nomme-desormais-trascent-management-consulting-et-lance-une-nouvelle-marque-dentreprise/';
  if(is_404()){
      if(isset($redirects[$_SERVER['REQUEST_URI']])){
          wp_redirect($redirects[$_SERVER['REQUEST_URI']], 301);
      }
  }
}
