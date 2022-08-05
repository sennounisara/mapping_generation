<?php


/**
 * Base class that represents a row from the 'configuration_plateforme' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConfigurationPlateforme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonConfigurationPlateformePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonConfigurationPlateformePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_auto field.
     * @var        int
     */
    protected $id_auto;

    /**
     * The value for the code_cpv field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $code_cpv;

    /**
     * The value for the multi_linguisme_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $multi_linguisme_entreprise;

    /**
     * The value for the gestion_fournisseurs_docs_mes_sous_services field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $gestion_fournisseurs_docs_mes_sous_services;

    /**
     * The value for the authenticate_inscrit_by_cert field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $authenticate_inscrit_by_cert;

    /**
     * The value for the authenticate_inscrit_by_login field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $authenticate_inscrit_by_login;

    /**
     * The value for the base_qualifiee_entreprise_insee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $base_qualifiee_entreprise_insee;

    /**
     * The value for the gestion_boamp_mes_sous_services field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $gestion_boamp_mes_sous_services;

    /**
     * The value for the gestion_bi_cle_mes_sous_services field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $gestion_bi_cle_mes_sous_services;

    /**
     * The value for the nom_entreprise_toujours_visible field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $nom_entreprise_toujours_visible;

    /**
     * The value for the gestion_jal_mes_sous_services field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $gestion_jal_mes_sous_services;

    /**
     * The value for the choix_langue_affichage_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $choix_langue_affichage_consultation;

    /**
     * The value for the compte_entreprise_donnees_complementaires field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_donnees_complementaires;

    /**
     * The value for the annuaire_entites_achat_visible_par_entreprise field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $annuaire_entites_achat_visible_par_entreprise;

    /**
     * The value for the affichage_recherche_avancee_agent_ac_sad_transversaux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_recherche_avancee_agent_ac_sad_transversaux;

    /**
     * The value for the encheres_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $encheres_entreprise;

    /**
     * The value for the socle_interne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $socle_interne;

    /**
     * The value for the module_certificat field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $module_certificat;

    /**
     * The value for the socle_externe_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $socle_externe_agent;

    /**
     * The value for the afficher_image_organisme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $afficher_image_organisme;

    /**
     * The value for the socle_externe_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $socle_externe_entreprise;

    /**
     * The value for the portail_defense_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $portail_defense_entreprise;

    /**
     * The value for the compte_entreprise_province field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_province;

    /**
     * The value for the compte_entreprise_telephone3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_telephone3;

    /**
     * The value for the compte_entreprise_tax_prof field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_tax_prof;

    /**
     * The value for the compte_entreprise_rcville field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_rcville;

    /**
     * The value for the compte_entreprise_declaration_honneur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_declaration_honneur;

    /**
     * The value for the compte_entreprise_qualification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_qualification;

    /**
     * The value for the compte_entreprise_moyens_techniques field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_moyens_techniques;

    /**
     * The value for the compte_entreprise_prestations_realisees field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_prestations_realisees;

    /**
     * The value for the compte_entreprise_chiffre_affaire_production_biens_services field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_entreprise_chiffre_affaire_production_biens_services;

    /**
     * The value for the enveloppe_offre_technique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $enveloppe_offre_technique;

    /**
     * The value for the compte_inscrit_choix_profil field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_inscrit_choix_profil;

    /**
     * The value for the procedure_adaptee field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $procedure_adaptee;

    /**
     * The value for the compte_entreprise_siren field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_entreprise_siren;

    /**
     * The value for the compte_entreprise_activation_inscription_par_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_activation_inscription_par_agent;

    /**
     * The value for the menu_entreprise_consultations_en_cours field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_entreprise_consultations_en_cours;

    /**
     * The value for the compte_entreprise_capital_social field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_capital_social;

    /**
     * The value for the mail_activation_compte_inscrit_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mail_activation_compte_inscrit_entreprise;

    /**
     * The value for the decision_date_notification field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_date_notification;

    /**
     * The value for the decision_pmi_pme field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_pmi_pme;

    /**
     * The value for the decision_nature_prestations field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_nature_prestations;

    /**
     * The value for the decision_objet_marche field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_objet_marche;

    /**
     * The value for the decision_note field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_note;

    /**
     * The value for the decision_fiche_recensement field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_fiche_recensement;

    /**
     * The value for the registre_papier_mail_obligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $registre_papier_mail_obligatoire;

    /**
     * The value for the menu_entreprise_indicateurs_cles field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_entreprise_indicateurs_cles;

    /**
     * The value for the ajout_rpa_champ_email field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_rpa_champ_email;

    /**
     * The value for the ajout_rpa_champ_telephone field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_rpa_champ_telephone;

    /**
     * The value for the ajout_rpa_champ_fax field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_rpa_champ_fax;

    /**
     * The value for the entreprise_poser_question_sans_pj field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $entreprise_poser_question_sans_pj;

    /**
     * The value for the url_demarche_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $url_demarche_agent;

    /**
     * The value for the url_demarche_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $url_demarche_entreprise;

    /**
     * The value for the siret_detail_entite_achat field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $siret_detail_entite_achat;

    /**
     * The value for the presence_elu field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $presence_elu;

    /**
     * The value for the gerer_mon_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_mon_service;

    /**
     * The value for the depouillement_enveloppe_depend_rat_enveloppe_precedente field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depouillement_enveloppe_depend_rat_enveloppe_precedente;

    /**
     * The value for the consultation_adresse_retrais_dossiers field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_adresse_retrais_dossiers;

    /**
     * The value for the consultation_adresse_depot_offres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_adresse_depot_offres;

    /**
     * The value for the consultation_caution_provisoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_caution_provisoire;

    /**
     * The value for the consultation_lieu_ouverture_plis field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_lieu_ouverture_plis;

    /**
     * The value for the consultation_qualification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_qualification;

    /**
     * The value for the consultation_agrement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_agrement;

    /**
     * The value for the consultation_echantillons_demandes field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_echantillons_demandes;

    /**
     * The value for the consultation_reunion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_reunion;

    /**
     * The value for the consultation_visite_des_lieux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_visite_des_lieux;

    /**
     * The value for the consultation_prix_acquisition field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_prix_acquisition;

    /**
     * The value for the resultat_analyse_avant_decision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $resultat_analyse_avant_decision;

    /**
     * The value for the creation_inscrit_par_ates field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creation_inscrit_par_ates;

    /**
     * The value for the consultation_variantes_autorisees field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_variantes_autorisees;

    /**
     * The value for the recherche_avancee_par_type_org field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recherche_avancee_par_type_org;

    /**
     * The value for the menu_agent_societes_exclues field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $menu_agent_societes_exclues;

    /**
     * The value for the recherche_avancee_par_domaines_activite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recherche_avancee_par_domaines_activite;

    /**
     * The value for the recherche_avancee_par_qualification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recherche_avancee_par_qualification;

    /**
     * The value for the recherche_avancee_par_agrement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recherche_avancee_par_agrement;

    /**
     * The value for the contact_administratif_dans_detail_consultation_cote_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $contact_administratif_dans_detail_consultation_cote_entreprise;

    /**
     * The value for the consultation_pieces_dossiers field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_pieces_dossiers;

    /**
     * The value for the gerer_adresses_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_adresses_service;

    /**
     * The value for the traduire_annonces field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $traduire_annonces;

    /**
     * The value for the afficher_bloc_actions_dans_details_annonces field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $afficher_bloc_actions_dans_details_annonces;

    /**
     * The value for the autoriser_une_seule_reponse_principale_par_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autoriser_une_seule_reponse_principale_par_entreprise;

    /**
     * The value for the generation_avis field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generation_avis;

    /**
     * The value for the passation_appliquer_donnees_ensemble_lots field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $passation_appliquer_donnees_ensemble_lots;

    /**
     * The value for the autre_annonce_extrait_pv field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre_annonce_extrait_pv;

    /**
     * The value for the autre_annonce_rapport_achevement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre_annonce_rapport_achevement;

    /**
     * The value for the ajout_fichier_joint_autre_annonce field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ajout_fichier_joint_autre_annonce;

    /**
     * The value for the consultation_mode_passation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_mode_passation;

    /**
     * The value for the compte_entreprise_identifiant_unique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_identifiant_unique;

    /**
     * The value for the gerer_certificats_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_certificats_agent;

    /**
     * The value for the autre_annonce_programme_previsionnel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre_annonce_programme_previsionnel;

    /**
     * The value for the annuler_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annuler_consultation;

    /**
     * The value for the cfe_entreprise_accessible_par_agent field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cfe_entreprise_accessible_par_agent;

    /**
     * The value for the compte_entreprise_code_nace_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_code_nace_referentiel;

    /**
     * The value for the code_nut_lt_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $code_nut_lt_referentiel;

    /**
     * The value for the lieux_execution field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $lieux_execution;

    /**
     * The value for the compte_entreprise_domaine_activite_lt_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_domaine_activite_lt_referentiel;

    /**
     * The value for the consultation_domaines_activites_lt_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_domaines_activites_lt_referentiel;

    /**
     * The value for the compte_entreprise_agrement_lt_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_agrement_lt_referentiel;

    /**
     * The value for the compte_entreprise_qualification_lt_referentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_qualification_lt_referentiel;

    /**
     * The value for the reponse_pas_a_pas field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reponse_pas_a_pas;

    /**
     * The value for the agent_controle_format_mot_de_passe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $agent_controle_format_mot_de_passe;

    /**
     * The value for the entreprise_validation_email_inscription field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise_validation_email_inscription;

    /**
     * The value for the telecharger_dce_avec_authentification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telecharger_dce_avec_authentification;

    /**
     * The value for the authentification_basic field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $authentification_basic;

    /**
     * The value for the reglement_consultation field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $reglement_consultation;

    /**
     * The value for the annonces_marches field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annonces_marches;

    /**
     * The value for the cfe_date_fin_validite_obligatoire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cfe_date_fin_validite_obligatoire;

    /**
     * The value for the associer_documents_cfe_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $associer_documents_cfe_consultation;

    /**
     * The value for the compte_entreprise_region field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_region;

    /**
     * The value for the compte_entreprise_telephone2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_telephone2;

    /**
     * The value for the compte_entreprise_cnss field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_cnss;

    /**
     * The value for the compte_entreprise_rcnum field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_rcnum;

    /**
     * The value for the compte_entreprise_domaine_activite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_domaine_activite;

    /**
     * The value for the compte_inscrit_code_nic field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_inscrit_code_nic;

    /**
     * The value for the compte_entreprise_code_ape field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_entreprise_code_ape;

    /**
     * The value for the compte_entreprise_documents_commerciaux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_documents_commerciaux;

    /**
     * The value for the compte_entreprise_agrement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_agrement;

    /**
     * The value for the compte_entreprise_moyens_humains field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_moyens_humains;

    /**
     * The value for the compte_entreprise_activite_domaine_defense field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_entreprise_activite_domaine_defense;

    /**
     * The value for the compte_entreprise_donnees_financieres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_donnees_financieres;

    /**
     * The value for the enveloppe_anonymat field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $enveloppe_anonymat;

    /**
     * The value for the publicite_format_xml field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $publicite_format_xml;

    /**
     * The value for the article_133_generation_pf field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $article_133_generation_pf;

    /**
     * The value for the entreprise_repondre_consultation_apres_cloture field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $entreprise_repondre_consultation_apres_cloture;

    /**
     * The value for the telechargement_outil_verif_horodatage field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telechargement_outil_verif_horodatage;

    /**
     * The value for the affichage_code_cpv field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $affichage_code_cpv;

    /**
     * The value for the consultation_domaines_activites field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_domaines_activites;

    /**
     * The value for the statistiques_mesure_demat field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $statistiques_mesure_demat;

    /**
     * The value for the publication_procure field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publication_procure;

    /**
     * The value for the menu_entreprise_toutes_les_consultations field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $menu_entreprise_toutes_les_consultations;

    /**
     * The value for the compte_entreprise_cp_obligatoire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $compte_entreprise_cp_obligatoire;

    /**
     * The value for the annuler_depot field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annuler_depot;

    /**
     * The value for the traduire_entite_achat_arabe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $traduire_entite_achat_arabe;

    /**
     * The value for the traduire_organisme_arabe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $traduire_organisme_arabe;

    /**
     * The value for the decision_cp field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_cp;

    /**
     * The value for the decision_tranche_budgetaire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $decision_tranche_budgetaire;

    /**
     * The value for the decision_classement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_classement;

    /**
     * The value for the decision_afficher_detail_candidat_par_defaut field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_afficher_detail_candidat_par_defaut;

    /**
     * The value for the article_133_upload_fichier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $article_133_upload_fichier;

    /**
     * The value for the multi_linguisme_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $multi_linguisme_agent;

    /**
     * The value for the compte_entreprise_ifu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $compte_entreprise_ifu;

    /**
     * The value for the gestion_organisme_par_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_organisme_par_agent;

    /**
     * The value for the utiliser_lucene field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $utiliser_lucene;

    /**
     * The value for the utiliser_page_html_lieux_execution field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $utiliser_page_html_lieux_execution;

    /**
     * The value for the prado_validateur_format_date field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $prado_validateur_format_date;

    /**
     * The value for the prado_validateur_format_email field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $prado_validateur_format_email;

    /**
     * The value for the socle_externe_ppp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $socle_externe_ppp;

    /**
     * The value for the validation_format_champs_stricte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $validation_format_champs_stricte;

    /**
     * The value for the poser_question_necessite_authentification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $poser_question_necessite_authentification;

    /**
     * The value for the autoriser_modif_profil_inscrit_ates field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autoriser_modif_profil_inscrit_ates;

    /**
     * The value for the unicite_reference_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $unicite_reference_consultation;

    /**
     * The value for the registre_papier_rcnum_rcville_obligatoires field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $registre_papier_rcnum_rcville_obligatoires;

    /**
     * The value for the registre_papier_adresse_cp_ville_obligatoires field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $registre_papier_adresse_cp_ville_obligatoires;

    /**
     * The value for the telecharger_dce_sans_identification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telecharger_dce_sans_identification;

    /**
     * The value for the gestion_entreprise_par_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_entreprise_par_agent;

    /**
     * The value for the autoriser_caracteres_speciaux_dans_reference field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autoriser_caracteres_speciaux_dans_reference;

    /**
     * The value for the inscription_libre_entreprise field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $inscription_libre_entreprise;

    /**
     * The value for the afficher_code_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $afficher_code_service;

    /**
     * The value for the authenticate_agent_by_login field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $authenticate_agent_by_login;

    /**
     * The value for the authenticate_agent_by_cert field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $authenticate_agent_by_cert;

    /**
     * The value for the generer_acte_dengagement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generer_acte_dengagement;

    /**
     * The value for the entreprise_controle_format_mot_de_passe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise_controle_format_mot_de_passe;

    /**
     * The value for the autre_annonce_information field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $autre_annonce_information;

    /**
     * The value for the creer_autre_annonce field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $creer_autre_annonce;

    /**
     * The value for the consultation_clause field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_clause;

    /**
     * The value for the panier_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $panier_entreprise;

    /**
     * The value for the parametrage_publicite_par_type_procedure field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $parametrage_publicite_par_type_procedure;

    /**
     * The value for the export_decision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $export_decision;

    /**
     * The value for the lieu_ouverture_plis_obligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $lieu_ouverture_plis_obligatoire;

    /**
     * The value for the regle_mise_en_ligne_par_entite_coordinatrice field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $regle_mise_en_ligne_par_entite_coordinatrice;

    /**
     * The value for the gestion_newsletter field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_newsletter;

    /**
     * The value for the publicite_opoce field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publicite_opoce;

    /**
     * The value for the gestion_modeles_formulaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_modeles_formulaire;

    /**
     * The value for the gestion_adresses_facturation_jal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_adresses_facturation_jal;

    /**
     * The value for the publicite_marches_en_ligne field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $publicite_marches_en_ligne;

    /**
     * The value for the dossier_additif field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $dossier_additif;

    /**
     * The value for the type_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_marche;

    /**
     * The value for the type_prestation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_prestation;

    /**
     * The value for the afficher_tjr_bloc_caracteristique_reponse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $afficher_tjr_bloc_caracteristique_reponse;

    /**
     * The value for the alerte_metier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_metier;

    /**
     * The value for the bourse_a_la_sous_traitance field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bourse_a_la_sous_traitance;

    /**
     * The value for the publier_guides field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publier_guides;

    /**
     * The value for the recherche_auto_completion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recherche_auto_completion;

    /**
     * The value for the statut_compte_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_compte_entreprise;

    /**
     * The value for the gestion_organismes field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_organismes;

    /**
     * The value for the accueil_entreprise_personnalise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $accueil_entreprise_personnalise;

    /**
     * The value for the interface_module_sub field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $interface_module_sub;

    /**
     * The value for the authentification_agent_multi_organismes field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $authentification_agent_multi_organismes;

    /**
     * The value for the partager_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $partager_consultation;

    /**
     * The value for the annuaire_acheteurs_publics field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annuaire_acheteurs_publics;

    /**
     * The value for the entreprise_actions_groupees field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise_actions_groupees;

    /**
     * The value for the lieux_execution_carte field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $lieux_execution_carte;

    /**
     * The value for the surcharge_referentiels field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $surcharge_referentiels;

    /**
     * The value for the mode_restriction_rgs field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mode_restriction_rgs;

    /**
     * The value for the autre_annonce_decision_resiliation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre_annonce_decision_resiliation;

    /**
     * The value for the autre_annonce_synthese_rapport_audit field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre_annonce_synthese_rapport_audit;

    /**
     * The value for the fiche_weka field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $fiche_weka;

    /**
     * The value for the generation_automatique_mdp_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generation_automatique_mdp_agent;

    /**
     * The value for the generation_automatique_mdp_inscrit field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generation_automatique_mdp_inscrit;

    /**
     * The value for the liste_ac_rgs field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $liste_ac_rgs;

    /**
     * The value for the liste_cons_org field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $liste_cons_org;

    /**
     * The value for the marche_public_simplifie_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $marche_public_simplifie_entreprise;

    /**
     * The value for the demande_validation_controleur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $demande_validation_controleur;

    /**
     * The value for the acces_exec_contrats field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_exec_contrats;

    /**
     * The value for the forme_juridique_groupement_attributaire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $forme_juridique_groupement_attributaire;

    /**
     * The value for the date_limite_remise_plis_obligatoire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $date_limite_remise_plis_obligatoire;

    /**
     * The value for the modif_type_procedure field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modif_type_procedure;

    /**
     * The value for the donnees_complementaires_procedure field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $donnees_complementaires_procedure;

    /**
     * The value for the forme_marche_forme_prix field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $forme_marche_forme_prix;

    /**
     * The value for the controle_unicite_num_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $controle_unicite_num_marche;

    /**
     * The value for the affichage_num_marche field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $affichage_num_marche;

    /**
     * The value for the affichage_date_fin_marche field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $affichage_date_fin_marche;

    /**
     * The value for the affichage_ice field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_ice;

    /**
     * The value for the blocage_depot_hors_delai field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $blocage_depot_hors_delai;

    /**
     * The value for the activer_suivi_pv field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $activer_suivi_pv;

    /**
     * The value for the captcha_validateur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $captcha_validateur;

    /**
     * The value for the decision_depuis_resultat_analyse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_depuis_resultat_analyse;

    /**
     * The value for the module_facture field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $module_facture;

    /**
     * The value for the validation_entreprise_facturation field.
     * @var        string
     */
    protected $validation_entreprise_facturation;

    /**
     * The value for the bloquer_depot_si_env_non_depose field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bloquer_depot_si_env_non_depose;

    /**
     * The value for the bloquer_depot_signature_invalide field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bloquer_depot_signature_invalide;

    /**
     * The value for the consultation_import_lots field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_import_lots;

    /**
     * The value for the depot_selection_lots field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depot_selection_lots;

    /**
     * The value for the modification_lots_apres_mise_en_ligne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modification_lots_apres_mise_en_ligne;

    /**
     * The value for the filtre_bdf_entreprise_valide field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $filtre_bdf_entreprise_valide;

    /**
     * The value for the affichage_identifiant_fiscale field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_identifiant_fiscale;

    /**
     * The value for the decision_creer_contrat field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_creer_contrat;

    /**
     * The value for the generation_bi_cle field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generation_bi_cle;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->code_cpv = '0';
        $this->multi_linguisme_entreprise = '0';
        $this->gestion_fournisseurs_docs_mes_sous_services = '1';
        $this->authenticate_inscrit_by_cert = '0';
        $this->authenticate_inscrit_by_login = '1';
        $this->base_qualifiee_entreprise_insee = '0';
        $this->gestion_boamp_mes_sous_services = '1';
        $this->gestion_bi_cle_mes_sous_services = '1';
        $this->nom_entreprise_toujours_visible = '0';
        $this->gestion_jal_mes_sous_services = '1';
        $this->choix_langue_affichage_consultation = '0';
        $this->compte_entreprise_donnees_complementaires = '0';
        $this->annuaire_entites_achat_visible_par_entreprise = '1';
        $this->affichage_recherche_avancee_agent_ac_sad_transversaux = '0';
        $this->encheres_entreprise = '0';
        $this->socle_interne = '0';
        $this->module_certificat = '0';
        $this->socle_externe_agent = '0';
        $this->afficher_image_organisme = '0';
        $this->socle_externe_entreprise = '0';
        $this->portail_defense_entreprise = '0';
        $this->compte_entreprise_province = '0';
        $this->compte_entreprise_telephone3 = '0';
        $this->compte_entreprise_tax_prof = '0';
        $this->compte_entreprise_rcville = '0';
        $this->compte_entreprise_declaration_honneur = '0';
        $this->compte_entreprise_qualification = '0';
        $this->compte_entreprise_moyens_techniques = '0';
        $this->compte_entreprise_prestations_realisees = '0';
        $this->compte_entreprise_chiffre_affaire_production_biens_services = '1';
        $this->enveloppe_offre_technique = '0';
        $this->compte_inscrit_choix_profil = '0';
        $this->procedure_adaptee = '1';
        $this->compte_entreprise_siren = '1';
        $this->compte_entreprise_activation_inscription_par_agent = '0';
        $this->menu_entreprise_consultations_en_cours = '0';
        $this->compte_entreprise_capital_social = '0';
        $this->mail_activation_compte_inscrit_entreprise = '0';
        $this->decision_date_notification = '1';
        $this->decision_pmi_pme = '1';
        $this->decision_nature_prestations = '1';
        $this->decision_objet_marche = '1';
        $this->decision_note = '0';
        $this->decision_fiche_recensement = '1';
        $this->registre_papier_mail_obligatoire = '0';
        $this->menu_entreprise_indicateurs_cles = '0';
        $this->ajout_rpa_champ_email = '0';
        $this->ajout_rpa_champ_telephone = '0';
        $this->ajout_rpa_champ_fax = '0';
        $this->entreprise_poser_question_sans_pj = '1';
        $this->url_demarche_agent = '0';
        $this->url_demarche_entreprise = '0';
        $this->siret_detail_entite_achat = '1';
        $this->presence_elu = '1';
        $this->gerer_mon_service = '0';
        $this->depouillement_enveloppe_depend_rat_enveloppe_precedente = '0';
        $this->consultation_adresse_retrais_dossiers = '0';
        $this->consultation_adresse_depot_offres = '0';
        $this->consultation_caution_provisoire = '0';
        $this->consultation_lieu_ouverture_plis = '0';
        $this->consultation_qualification = '0';
        $this->consultation_agrement = '0';
        $this->consultation_echantillons_demandes = '0';
        $this->consultation_reunion = '0';
        $this->consultation_visite_des_lieux = '0';
        $this->consultation_prix_acquisition = '0';
        $this->resultat_analyse_avant_decision = '0';
        $this->creation_inscrit_par_ates = '0';
        $this->consultation_variantes_autorisees = '0';
        $this->recherche_avancee_par_type_org = '0';
        $this->menu_agent_societes_exclues = '0';
        $this->recherche_avancee_par_domaines_activite = '0';
        $this->recherche_avancee_par_qualification = '0';
        $this->recherche_avancee_par_agrement = '0';
        $this->contact_administratif_dans_detail_consultation_cote_entreprise = '0';
        $this->consultation_pieces_dossiers = '0';
        $this->gerer_adresses_service = '0';
        $this->traduire_annonces = '0';
        $this->afficher_bloc_actions_dans_details_annonces = '0';
        $this->autoriser_une_seule_reponse_principale_par_entreprise = '0';
        $this->generation_avis = '0';
        $this->passation_appliquer_donnees_ensemble_lots = '0';
        $this->autre_annonce_extrait_pv = '0';
        $this->autre_annonce_rapport_achevement = '0';
        $this->ajout_fichier_joint_autre_annonce = '0';
        $this->consultation_mode_passation = '0';
        $this->compte_entreprise_identifiant_unique = '0';
        $this->gerer_certificats_agent = '0';
        $this->autre_annonce_programme_previsionnel = '0';
        $this->annuler_consultation = '0';
        $this->cfe_entreprise_accessible_par_agent = '1';
        $this->compte_entreprise_code_nace_referentiel = '0';
        $this->code_nut_lt_referentiel = '0';
        $this->lieux_execution = '1';
        $this->compte_entreprise_domaine_activite_lt_referentiel = '0';
        $this->consultation_domaines_activites_lt_referentiel = '0';
        $this->compte_entreprise_agrement_lt_referentiel = '0';
        $this->compte_entreprise_qualification_lt_referentiel = '0';
        $this->reponse_pas_a_pas = '0';
        $this->agent_controle_format_mot_de_passe = '0';
        $this->entreprise_validation_email_inscription = '0';
        $this->telecharger_dce_avec_authentification = '0';
        $this->authentification_basic = '0';
        $this->reglement_consultation = '1';
        $this->annonces_marches = '0';
        $this->cfe_date_fin_validite_obligatoire = '1';
        $this->associer_documents_cfe_consultation = '0';
        $this->compte_entreprise_region = '0';
        $this->compte_entreprise_telephone2 = '0';
        $this->compte_entreprise_cnss = '0';
        $this->compte_entreprise_rcnum = '0';
        $this->compte_entreprise_domaine_activite = '0';
        $this->compte_inscrit_code_nic = '1';
        $this->compte_entreprise_code_ape = '1';
        $this->compte_entreprise_documents_commerciaux = '0';
        $this->compte_entreprise_agrement = '0';
        $this->compte_entreprise_moyens_humains = '0';
        $this->compte_entreprise_activite_domaine_defense = '1';
        $this->compte_entreprise_donnees_financieres = '0';
        $this->enveloppe_anonymat = '1';
        $this->publicite_format_xml = '1';
        $this->article_133_generation_pf = '1';
        $this->entreprise_repondre_consultation_apres_cloture = '1';
        $this->telechargement_outil_verif_horodatage = '0';
        $this->affichage_code_cpv = '1';
        $this->consultation_domaines_activites = '0';
        $this->statistiques_mesure_demat = '1';
        $this->publication_procure = '0';
        $this->menu_entreprise_toutes_les_consultations = '1';
        $this->compte_entreprise_cp_obligatoire = '1';
        $this->annuler_depot = '0';
        $this->traduire_entite_achat_arabe = '0';
        $this->traduire_organisme_arabe = '0';
        $this->decision_cp = '1';
        $this->decision_tranche_budgetaire = '1';
        $this->decision_classement = '0';
        $this->decision_afficher_detail_candidat_par_defaut = '0';
        $this->article_133_upload_fichier = '0';
        $this->multi_linguisme_agent = '0';
        $this->compte_entreprise_ifu = '0';
        $this->gestion_organisme_par_agent = '0';
        $this->utiliser_lucene = '1';
        $this->utiliser_page_html_lieux_execution = '1';
        $this->prado_validateur_format_date = '1';
        $this->prado_validateur_format_email = '1';
        $this->socle_externe_ppp = '0';
        $this->validation_format_champs_stricte = '0';
        $this->poser_question_necessite_authentification = '0';
        $this->autoriser_modif_profil_inscrit_ates = '0';
        $this->unicite_reference_consultation = '0';
        $this->registre_papier_rcnum_rcville_obligatoires = '0';
        $this->registre_papier_adresse_cp_ville_obligatoires = '0';
        $this->telecharger_dce_sans_identification = '0';
        $this->gestion_entreprise_par_agent = '0';
        $this->autoriser_caracteres_speciaux_dans_reference = '0';
        $this->inscription_libre_entreprise = '1';
        $this->afficher_code_service = '0';
        $this->authenticate_agent_by_login = '1';
        $this->authenticate_agent_by_cert = '0';
        $this->generer_acte_dengagement = '0';
        $this->entreprise_controle_format_mot_de_passe = '0';
        $this->autre_annonce_information = '1';
        $this->creer_autre_annonce = '1';
        $this->consultation_clause = '0';
        $this->panier_entreprise = '0';
        $this->parametrage_publicite_par_type_procedure = '0';
        $this->export_decision = '0';
        $this->lieu_ouverture_plis_obligatoire = '0';
        $this->regle_mise_en_ligne_par_entite_coordinatrice = '0';
        $this->gestion_newsletter = '0';
        $this->publicite_opoce = '0';
        $this->gestion_modeles_formulaire = '0';
        $this->gestion_adresses_facturation_jal = '0';
        $this->publicite_marches_en_ligne = '1';
        $this->dossier_additif = '0';
        $this->type_marche = '0';
        $this->type_prestation = '0';
        $this->afficher_tjr_bloc_caracteristique_reponse = '0';
        $this->alerte_metier = '0';
        $this->bourse_a_la_sous_traitance = '0';
        $this->publier_guides = '0';
        $this->recherche_auto_completion = '0';
        $this->statut_compte_entreprise = '0';
        $this->gestion_organismes = '0';
        $this->accueil_entreprise_personnalise = '0';
        $this->interface_module_sub = '0';
        $this->authentification_agent_multi_organismes = '1';
        $this->partager_consultation = '0';
        $this->annuaire_acheteurs_publics = '0';
        $this->entreprise_actions_groupees = '0';
        $this->lieux_execution_carte = '1';
        $this->surcharge_referentiels = '1';
        $this->mode_restriction_rgs = '0';
        $this->autre_annonce_decision_resiliation = '0';
        $this->autre_annonce_synthese_rapport_audit = '0';
        $this->fiche_weka = '0';
        $this->generation_automatique_mdp_agent = '0';
        $this->generation_automatique_mdp_inscrit = '0';
        $this->liste_ac_rgs = '0';
        $this->liste_cons_org = '0';
        $this->marche_public_simplifie_entreprise = '0';
        $this->demande_validation_controleur = '0';
        $this->acces_exec_contrats = '0';
        $this->forme_juridique_groupement_attributaire = '1';
        $this->date_limite_remise_plis_obligatoire = '1';
        $this->modif_type_procedure = '0';
        $this->donnees_complementaires_procedure = '1';
        $this->forme_marche_forme_prix = '1';
        $this->controle_unicite_num_marche = '0';
        $this->affichage_num_marche = '1';
        $this->affichage_date_fin_marche = '1';
        $this->affichage_ice = '0';
        $this->blocage_depot_hors_delai = '0';
        $this->activer_suivi_pv = '0';
        $this->captcha_validateur = '0';
        $this->decision_depuis_resultat_analyse = '0';
        $this->module_facture = '0';
        $this->bloquer_depot_si_env_non_depose = '0';
        $this->bloquer_depot_signature_invalide = '0';
        $this->consultation_import_lots = '0';
        $this->depot_selection_lots = '0';
        $this->modification_lots_apres_mise_en_ligne = '0';
        $this->filtre_bdf_entreprise_valide = '0';
        $this->affichage_identifiant_fiscale = '0';
        $this->decision_creer_contrat = '0';
        $this->generation_bi_cle = '0';
    }

    /**
     * Initializes internal state of BaseCommonConfigurationPlateforme object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_auto] column value.
     * 
     * @return int
     */
    public function getIdAuto()
    {

        return $this->id_auto;
    }

    /**
     * Get the [code_cpv] column value.
     * 
     * @return string
     */
    public function getCodeCpv()
    {

        return $this->code_cpv;
    }

    /**
     * Get the [multi_linguisme_entreprise] column value.
     * 
     * @return string
     */
    public function getMultiLinguismeEntreprise()
    {

        return $this->multi_linguisme_entreprise;
    }

    /**
     * Get the [gestion_fournisseurs_docs_mes_sous_services] column value.
     * 
     * @return string
     */
    public function getGestionFournisseursDocsMesSousServices()
    {

        return $this->gestion_fournisseurs_docs_mes_sous_services;
    }

    /**
     * Get the [authenticate_inscrit_by_cert] column value.
     * 
     * @return string
     */
    public function getAuthenticateInscritByCert()
    {

        return $this->authenticate_inscrit_by_cert;
    }

    /**
     * Get the [authenticate_inscrit_by_login] column value.
     * 
     * @return string
     */
    public function getAuthenticateInscritByLogin()
    {

        return $this->authenticate_inscrit_by_login;
    }

    /**
     * Get the [base_qualifiee_entreprise_insee] column value.
     * 
     * @return string
     */
    public function getBaseQualifieeEntrepriseInsee()
    {

        return $this->base_qualifiee_entreprise_insee;
    }

    /**
     * Get the [gestion_boamp_mes_sous_services] column value.
     * 
     * @return string
     */
    public function getGestionBoampMesSousServices()
    {

        return $this->gestion_boamp_mes_sous_services;
    }

    /**
     * Get the [gestion_bi_cle_mes_sous_services] column value.
     * 
     * @return string
     */
    public function getGestionBiCleMesSousServices()
    {

        return $this->gestion_bi_cle_mes_sous_services;
    }

    /**
     * Get the [nom_entreprise_toujours_visible] column value.
     * 
     * @return string
     */
    public function getNomEntrepriseToujoursVisible()
    {

        return $this->nom_entreprise_toujours_visible;
    }

    /**
     * Get the [gestion_jal_mes_sous_services] column value.
     * 
     * @return string
     */
    public function getGestionJalMesSousServices()
    {

        return $this->gestion_jal_mes_sous_services;
    }

    /**
     * Get the [choix_langue_affichage_consultation] column value.
     * 
     * @return string
     */
    public function getChoixLangueAffichageConsultation()
    {

        return $this->choix_langue_affichage_consultation;
    }

    /**
     * Get the [compte_entreprise_donnees_complementaires] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDonneesComplementaires()
    {

        return $this->compte_entreprise_donnees_complementaires;
    }

    /**
     * Get the [annuaire_entites_achat_visible_par_entreprise] column value.
     * 
     * @return string
     */
    public function getAnnuaireEntitesAchatVisibleParEntreprise()
    {

        return $this->annuaire_entites_achat_visible_par_entreprise;
    }

    /**
     * Get the [affichage_recherche_avancee_agent_ac_sad_transversaux] column value.
     * 
     * @return string
     */
    public function getAffichageRechercheAvanceeAgentAcSadTransversaux()
    {

        return $this->affichage_recherche_avancee_agent_ac_sad_transversaux;
    }

    /**
     * Get the [encheres_entreprise] column value.
     * 
     * @return string
     */
    public function getEncheresEntreprise()
    {

        return $this->encheres_entreprise;
    }

    /**
     * Get the [socle_interne] column value.
     * 
     * @return string
     */
    public function getSocleInterne()
    {

        return $this->socle_interne;
    }

    /**
     * Get the [module_certificat] column value.
     * 
     * @return string
     */
    public function getModuleCertificat()
    {

        return $this->module_certificat;
    }

    /**
     * Get the [socle_externe_agent] column value.
     * 
     * @return string
     */
    public function getSocleExterneAgent()
    {

        return $this->socle_externe_agent;
    }

    /**
     * Get the [afficher_image_organisme] column value.
     * 
     * @return string
     */
    public function getAfficherImageOrganisme()
    {

        return $this->afficher_image_organisme;
    }

    /**
     * Get the [socle_externe_entreprise] column value.
     * 
     * @return string
     */
    public function getSocleExterneEntreprise()
    {

        return $this->socle_externe_entreprise;
    }

    /**
     * Get the [portail_defense_entreprise] column value.
     * 
     * @return string
     */
    public function getPortailDefenseEntreprise()
    {

        return $this->portail_defense_entreprise;
    }

    /**
     * Get the [compte_entreprise_province] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseProvince()
    {

        return $this->compte_entreprise_province;
    }

    /**
     * Get the [compte_entreprise_telephone3] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseTelephone3()
    {

        return $this->compte_entreprise_telephone3;
    }

    /**
     * Get the [compte_entreprise_tax_prof] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseTaxProf()
    {

        return $this->compte_entreprise_tax_prof;
    }

    /**
     * Get the [compte_entreprise_rcville] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseRcville()
    {

        return $this->compte_entreprise_rcville;
    }

    /**
     * Get the [compte_entreprise_declaration_honneur] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDeclarationHonneur()
    {

        return $this->compte_entreprise_declaration_honneur;
    }

    /**
     * Get the [compte_entreprise_qualification] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseQualification()
    {

        return $this->compte_entreprise_qualification;
    }

    /**
     * Get the [compte_entreprise_moyens_techniques] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseMoyensTechniques()
    {

        return $this->compte_entreprise_moyens_techniques;
    }

    /**
     * Get the [compte_entreprise_prestations_realisees] column value.
     * 
     * @return string
     */
    public function getCompteEntreprisePrestationsRealisees()
    {

        return $this->compte_entreprise_prestations_realisees;
    }

    /**
     * Get the [compte_entreprise_chiffre_affaire_production_biens_services] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseChiffreAffaireProductionBiensServices()
    {

        return $this->compte_entreprise_chiffre_affaire_production_biens_services;
    }

    /**
     * Get the [enveloppe_offre_technique] column value.
     * 
     * @return string
     */
    public function getEnveloppeOffreTechnique()
    {

        return $this->enveloppe_offre_technique;
    }

    /**
     * Get the [compte_inscrit_choix_profil] column value.
     * 
     * @return string
     */
    public function getCompteInscritChoixProfil()
    {

        return $this->compte_inscrit_choix_profil;
    }

    /**
     * Get the [procedure_adaptee] column value.
     * 
     * @return string
     */
    public function getProcedureAdaptee()
    {

        return $this->procedure_adaptee;
    }

    /**
     * Get the [compte_entreprise_siren] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseSiren()
    {

        return $this->compte_entreprise_siren;
    }

    /**
     * Get the [compte_entreprise_activation_inscription_par_agent] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseActivationInscriptionParAgent()
    {

        return $this->compte_entreprise_activation_inscription_par_agent;
    }

    /**
     * Get the [menu_entreprise_consultations_en_cours] column value.
     * 
     * @return string
     */
    public function getMenuEntrepriseConsultationsEnCours()
    {

        return $this->menu_entreprise_consultations_en_cours;
    }

    /**
     * Get the [compte_entreprise_capital_social] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseCapitalSocial()
    {

        return $this->compte_entreprise_capital_social;
    }

    /**
     * Get the [mail_activation_compte_inscrit_entreprise] column value.
     * 
     * @return string
     */
    public function getMailActivationCompteInscritEntreprise()
    {

        return $this->mail_activation_compte_inscrit_entreprise;
    }

    /**
     * Get the [decision_date_notification] column value.
     * 
     * @return string
     */
    public function getDecisionDateNotification()
    {

        return $this->decision_date_notification;
    }

    /**
     * Get the [decision_pmi_pme] column value.
     * 
     * @return string
     */
    public function getDecisionPmiPme()
    {

        return $this->decision_pmi_pme;
    }

    /**
     * Get the [decision_nature_prestations] column value.
     * 
     * @return string
     */
    public function getDecisionNaturePrestations()
    {

        return $this->decision_nature_prestations;
    }

    /**
     * Get the [decision_objet_marche] column value.
     * 
     * @return string
     */
    public function getDecisionObjetMarche()
    {

        return $this->decision_objet_marche;
    }

    /**
     * Get the [decision_note] column value.
     * 
     * @return string
     */
    public function getDecisionNote()
    {

        return $this->decision_note;
    }

    /**
     * Get the [decision_fiche_recensement] column value.
     * 
     * @return string
     */
    public function getDecisionFicheRecensement()
    {

        return $this->decision_fiche_recensement;
    }

    /**
     * Get the [registre_papier_mail_obligatoire] column value.
     * 
     * @return string
     */
    public function getRegistrePapierMailObligatoire()
    {

        return $this->registre_papier_mail_obligatoire;
    }

    /**
     * Get the [menu_entreprise_indicateurs_cles] column value.
     * 
     * @return string
     */
    public function getMenuEntrepriseIndicateursCles()
    {

        return $this->menu_entreprise_indicateurs_cles;
    }

    /**
     * Get the [ajout_rpa_champ_email] column value.
     * 
     * @return string
     */
    public function getAjoutRpaChampEmail()
    {

        return $this->ajout_rpa_champ_email;
    }

    /**
     * Get the [ajout_rpa_champ_telephone] column value.
     * 
     * @return string
     */
    public function getAjoutRpaChampTelephone()
    {

        return $this->ajout_rpa_champ_telephone;
    }

    /**
     * Get the [ajout_rpa_champ_fax] column value.
     * 
     * @return string
     */
    public function getAjoutRpaChampFax()
    {

        return $this->ajout_rpa_champ_fax;
    }

    /**
     * Get the [entreprise_poser_question_sans_pj] column value.
     * 
     * @return string
     */
    public function getEntreprisePoserQuestionSansPj()
    {

        return $this->entreprise_poser_question_sans_pj;
    }

    /**
     * Get the [url_demarche_agent] column value.
     * 
     * @return string
     */
    public function getUrlDemarcheAgent()
    {

        return $this->url_demarche_agent;
    }

    /**
     * Get the [url_demarche_entreprise] column value.
     * 
     * @return string
     */
    public function getUrlDemarcheEntreprise()
    {

        return $this->url_demarche_entreprise;
    }

    /**
     * Get the [siret_detail_entite_achat] column value.
     * 
     * @return string
     */
    public function getSiretDetailEntiteAchat()
    {

        return $this->siret_detail_entite_achat;
    }

    /**
     * Get the [presence_elu] column value.
     * 
     * @return string
     */
    public function getPresenceElu()
    {

        return $this->presence_elu;
    }

    /**
     * Get the [gerer_mon_service] column value.
     * 
     * @return string
     */
    public function getGererMonService()
    {

        return $this->gerer_mon_service;
    }

    /**
     * Get the [depouillement_enveloppe_depend_rat_enveloppe_precedente] column value.
     * 
     * @return string
     */
    public function getDepouillementEnveloppeDependRatEnveloppePrecedente()
    {

        return $this->depouillement_enveloppe_depend_rat_enveloppe_precedente;
    }

    /**
     * Get the [consultation_adresse_retrais_dossiers] column value.
     * 
     * @return string
     */
    public function getConsultationAdresseRetraisDossiers()
    {

        return $this->consultation_adresse_retrais_dossiers;
    }

    /**
     * Get the [consultation_adresse_depot_offres] column value.
     * 
     * @return string
     */
    public function getConsultationAdresseDepotOffres()
    {

        return $this->consultation_adresse_depot_offres;
    }

    /**
     * Get the [consultation_caution_provisoire] column value.
     * 
     * @return string
     */
    public function getConsultationCautionProvisoire()
    {

        return $this->consultation_caution_provisoire;
    }

    /**
     * Get the [consultation_lieu_ouverture_plis] column value.
     * 
     * @return string
     */
    public function getConsultationLieuOuverturePlis()
    {

        return $this->consultation_lieu_ouverture_plis;
    }

    /**
     * Get the [consultation_qualification] column value.
     * 
     * @return string
     */
    public function getConsultationQualification()
    {

        return $this->consultation_qualification;
    }

    /**
     * Get the [consultation_agrement] column value.
     * 
     * @return string
     */
    public function getConsultationAgrement()
    {

        return $this->consultation_agrement;
    }

    /**
     * Get the [consultation_echantillons_demandes] column value.
     * 
     * @return string
     */
    public function getConsultationEchantillonsDemandes()
    {

        return $this->consultation_echantillons_demandes;
    }

    /**
     * Get the [consultation_reunion] column value.
     * 
     * @return string
     */
    public function getConsultationReunion()
    {

        return $this->consultation_reunion;
    }

    /**
     * Get the [consultation_visite_des_lieux] column value.
     * 
     * @return string
     */
    public function getConsultationVisiteDesLieux()
    {

        return $this->consultation_visite_des_lieux;
    }

    /**
     * Get the [consultation_prix_acquisition] column value.
     * 
     * @return string
     */
    public function getConsultationPrixAcquisition()
    {

        return $this->consultation_prix_acquisition;
    }

    /**
     * Get the [resultat_analyse_avant_decision] column value.
     * 
     * @return string
     */
    public function getResultatAnalyseAvantDecision()
    {

        return $this->resultat_analyse_avant_decision;
    }

    /**
     * Get the [creation_inscrit_par_ates] column value.
     * 
     * @return string
     */
    public function getCreationInscritParAtes()
    {

        return $this->creation_inscrit_par_ates;
    }

    /**
     * Get the [consultation_variantes_autorisees] column value.
     * 
     * @return string
     */
    public function getConsultationVariantesAutorisees()
    {

        return $this->consultation_variantes_autorisees;
    }

    /**
     * Get the [recherche_avancee_par_type_org] column value.
     * 
     * @return string
     */
    public function getRechercheAvanceeParTypeOrg()
    {

        return $this->recherche_avancee_par_type_org;
    }

    /**
     * Get the [menu_agent_societes_exclues] column value.
     * 
     * @return string
     */
    public function getMenuAgentSocietesExclues()
    {

        return $this->menu_agent_societes_exclues;
    }

    /**
     * Get the [recherche_avancee_par_domaines_activite] column value.
     * 
     * @return string
     */
    public function getRechercheAvanceeParDomainesActivite()
    {

        return $this->recherche_avancee_par_domaines_activite;
    }

    /**
     * Get the [recherche_avancee_par_qualification] column value.
     * 
     * @return string
     */
    public function getRechercheAvanceeParQualification()
    {

        return $this->recherche_avancee_par_qualification;
    }

    /**
     * Get the [recherche_avancee_par_agrement] column value.
     * 
     * @return string
     */
    public function getRechercheAvanceeParAgrement()
    {

        return $this->recherche_avancee_par_agrement;
    }

    /**
     * Get the [contact_administratif_dans_detail_consultation_cote_entreprise] column value.
     * 
     * @return string
     */
    public function getContactAdministratifDansDetailConsultationCoteEntreprise()
    {

        return $this->contact_administratif_dans_detail_consultation_cote_entreprise;
    }

    /**
     * Get the [consultation_pieces_dossiers] column value.
     * 
     * @return string
     */
    public function getConsultationPiecesDossiers()
    {

        return $this->consultation_pieces_dossiers;
    }

    /**
     * Get the [gerer_adresses_service] column value.
     * 
     * @return string
     */
    public function getGererAdressesService()
    {

        return $this->gerer_adresses_service;
    }

    /**
     * Get the [traduire_annonces] column value.
     * 
     * @return string
     */
    public function getTraduireAnnonces()
    {

        return $this->traduire_annonces;
    }

    /**
     * Get the [afficher_bloc_actions_dans_details_annonces] column value.
     * 
     * @return string
     */
    public function getAfficherBlocActionsDansDetailsAnnonces()
    {

        return $this->afficher_bloc_actions_dans_details_annonces;
    }

    /**
     * Get the [autoriser_une_seule_reponse_principale_par_entreprise] column value.
     * 
     * @return string
     */
    public function getAutoriserUneSeuleReponsePrincipaleParEntreprise()
    {

        return $this->autoriser_une_seule_reponse_principale_par_entreprise;
    }

    /**
     * Get the [generation_avis] column value.
     * 
     * @return string
     */
    public function getGenerationAvis()
    {

        return $this->generation_avis;
    }

    /**
     * Get the [passation_appliquer_donnees_ensemble_lots] column value.
     * 
     * @return string
     */
    public function getPassationAppliquerDonneesEnsembleLots()
    {

        return $this->passation_appliquer_donnees_ensemble_lots;
    }

    /**
     * Get the [autre_annonce_extrait_pv] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceExtraitPv()
    {

        return $this->autre_annonce_extrait_pv;
    }

    /**
     * Get the [autre_annonce_rapport_achevement] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceRapportAchevement()
    {

        return $this->autre_annonce_rapport_achevement;
    }

    /**
     * Get the [ajout_fichier_joint_autre_annonce] column value.
     * 
     * @return string
     */
    public function getAjoutFichierJointAutreAnnonce()
    {

        return $this->ajout_fichier_joint_autre_annonce;
    }

    /**
     * Get the [consultation_mode_passation] column value.
     * 
     * @return string
     */
    public function getConsultationModePassation()
    {

        return $this->consultation_mode_passation;
    }

    /**
     * Get the [compte_entreprise_identifiant_unique] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseIdentifiantUnique()
    {

        return $this->compte_entreprise_identifiant_unique;
    }

    /**
     * Get the [gerer_certificats_agent] column value.
     * 
     * @return string
     */
    public function getGererCertificatsAgent()
    {

        return $this->gerer_certificats_agent;
    }

    /**
     * Get the [autre_annonce_programme_previsionnel] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceProgrammePrevisionnel()
    {

        return $this->autre_annonce_programme_previsionnel;
    }

    /**
     * Get the [annuler_consultation] column value.
     * 
     * @return string
     */
    public function getAnnulerConsultation()
    {

        return $this->annuler_consultation;
    }

    /**
     * Get the [cfe_entreprise_accessible_par_agent] column value.
     * 
     * @return string
     */
    public function getCfeEntrepriseAccessibleParAgent()
    {

        return $this->cfe_entreprise_accessible_par_agent;
    }

    /**
     * Get the [compte_entreprise_code_nace_referentiel] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseCodeNaceReferentiel()
    {

        return $this->compte_entreprise_code_nace_referentiel;
    }

    /**
     * Get the [code_nut_lt_referentiel] column value.
     * 
     * @return string
     */
    public function getCodeNutLtReferentiel()
    {

        return $this->code_nut_lt_referentiel;
    }

    /**
     * Get the [lieux_execution] column value.
     * 
     * @return string
     */
    public function getLieuxExecution()
    {

        return $this->lieux_execution;
    }

    /**
     * Get the [compte_entreprise_domaine_activite_lt_referentiel] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDomaineActiviteLtReferentiel()
    {

        return $this->compte_entreprise_domaine_activite_lt_referentiel;
    }

    /**
     * Get the [consultation_domaines_activites_lt_referentiel] column value.
     * 
     * @return string
     */
    public function getConsultationDomainesActivitesLtReferentiel()
    {

        return $this->consultation_domaines_activites_lt_referentiel;
    }

    /**
     * Get the [compte_entreprise_agrement_lt_referentiel] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseAgrementLtReferentiel()
    {

        return $this->compte_entreprise_agrement_lt_referentiel;
    }

    /**
     * Get the [compte_entreprise_qualification_lt_referentiel] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseQualificationLtReferentiel()
    {

        return $this->compte_entreprise_qualification_lt_referentiel;
    }

    /**
     * Get the [reponse_pas_a_pas] column value.
     * 
     * @return string
     */
    public function getReponsePasAPas()
    {

        return $this->reponse_pas_a_pas;
    }

    /**
     * Get the [agent_controle_format_mot_de_passe] column value.
     * 
     * @return string
     */
    public function getAgentControleFormatMotDePasse()
    {

        return $this->agent_controle_format_mot_de_passe;
    }

    /**
     * Get the [entreprise_validation_email_inscription] column value.
     * 
     * @return string
     */
    public function getEntrepriseValidationEmailInscription()
    {

        return $this->entreprise_validation_email_inscription;
    }

    /**
     * Get the [telecharger_dce_avec_authentification] column value.
     * 
     * @return string
     */
    public function getTelechargerDceAvecAuthentification()
    {

        return $this->telecharger_dce_avec_authentification;
    }

    /**
     * Get the [authentification_basic] column value.
     * 
     * @return string
     */
    public function getAuthentificationBasic()
    {

        return $this->authentification_basic;
    }

    /**
     * Get the [reglement_consultation] column value.
     * 
     * @return string
     */
    public function getReglementConsultation()
    {

        return $this->reglement_consultation;
    }

    /**
     * Get the [annonces_marches] column value.
     * 
     * @return string
     */
    public function getAnnoncesMarches()
    {

        return $this->annonces_marches;
    }

    /**
     * Get the [cfe_date_fin_validite_obligatoire] column value.
     * 
     * @return string
     */
    public function getCfeDateFinValiditeObligatoire()
    {

        return $this->cfe_date_fin_validite_obligatoire;
    }

    /**
     * Get the [associer_documents_cfe_consultation] column value.
     * 
     * @return string
     */
    public function getAssocierDocumentsCfeConsultation()
    {

        return $this->associer_documents_cfe_consultation;
    }

    /**
     * Get the [compte_entreprise_region] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseRegion()
    {

        return $this->compte_entreprise_region;
    }

    /**
     * Get the [compte_entreprise_telephone2] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseTelephone2()
    {

        return $this->compte_entreprise_telephone2;
    }

    /**
     * Get the [compte_entreprise_cnss] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseCnss()
    {

        return $this->compte_entreprise_cnss;
    }

    /**
     * Get the [compte_entreprise_rcnum] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseRcnum()
    {

        return $this->compte_entreprise_rcnum;
    }

    /**
     * Get the [compte_entreprise_domaine_activite] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDomaineActivite()
    {

        return $this->compte_entreprise_domaine_activite;
    }

    /**
     * Get the [compte_inscrit_code_nic] column value.
     * 
     * @return string
     */
    public function getCompteInscritCodeNic()
    {

        return $this->compte_inscrit_code_nic;
    }

    /**
     * Get the [compte_entreprise_code_ape] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseCodeApe()
    {

        return $this->compte_entreprise_code_ape;
    }

    /**
     * Get the [compte_entreprise_documents_commerciaux] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDocumentsCommerciaux()
    {

        return $this->compte_entreprise_documents_commerciaux;
    }

    /**
     * Get the [compte_entreprise_agrement] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseAgrement()
    {

        return $this->compte_entreprise_agrement;
    }

    /**
     * Get the [compte_entreprise_moyens_humains] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseMoyensHumains()
    {

        return $this->compte_entreprise_moyens_humains;
    }

    /**
     * Get the [compte_entreprise_activite_domaine_defense] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseActiviteDomaineDefense()
    {

        return $this->compte_entreprise_activite_domaine_defense;
    }

    /**
     * Get the [compte_entreprise_donnees_financieres] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseDonneesFinancieres()
    {

        return $this->compte_entreprise_donnees_financieres;
    }

    /**
     * Get the [enveloppe_anonymat] column value.
     * 
     * @return string
     */
    public function getEnveloppeAnonymat()
    {

        return $this->enveloppe_anonymat;
    }

    /**
     * Get the [publicite_format_xml] column value.
     * 
     * @return string
     */
    public function getPubliciteFormatXml()
    {

        return $this->publicite_format_xml;
    }

    /**
     * Get the [article_133_generation_pf] column value.
     * 
     * @return string
     */
    public function getArticle133GenerationPf()
    {

        return $this->article_133_generation_pf;
    }

    /**
     * Get the [entreprise_repondre_consultation_apres_cloture] column value.
     * 
     * @return string
     */
    public function getEntrepriseRepondreConsultationApresCloture()
    {

        return $this->entreprise_repondre_consultation_apres_cloture;
    }

    /**
     * Get the [telechargement_outil_verif_horodatage] column value.
     * 
     * @return string
     */
    public function getTelechargementOutilVerifHorodatage()
    {

        return $this->telechargement_outil_verif_horodatage;
    }

    /**
     * Get the [affichage_code_cpv] column value.
     * 
     * @return string
     */
    public function getAffichageCodeCpv()
    {

        return $this->affichage_code_cpv;
    }

    /**
     * Get the [consultation_domaines_activites] column value.
     * 
     * @return string
     */
    public function getConsultationDomainesActivites()
    {

        return $this->consultation_domaines_activites;
    }

    /**
     * Get the [statistiques_mesure_demat] column value.
     * 
     * @return string
     */
    public function getStatistiquesMesureDemat()
    {

        return $this->statistiques_mesure_demat;
    }

    /**
     * Get the [publication_procure] column value.
     * 
     * @return string
     */
    public function getPublicationProcure()
    {

        return $this->publication_procure;
    }

    /**
     * Get the [menu_entreprise_toutes_les_consultations] column value.
     * 
     * @return string
     */
    public function getMenuEntrepriseToutesLesConsultations()
    {

        return $this->menu_entreprise_toutes_les_consultations;
    }

    /**
     * Get the [compte_entreprise_cp_obligatoire] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseCpObligatoire()
    {

        return $this->compte_entreprise_cp_obligatoire;
    }

    /**
     * Get the [annuler_depot] column value.
     * 
     * @return string
     */
    public function getAnnulerDepot()
    {

        return $this->annuler_depot;
    }

    /**
     * Get the [traduire_entite_achat_arabe] column value.
     * 
     * @return string
     */
    public function getTraduireEntiteAchatArabe()
    {

        return $this->traduire_entite_achat_arabe;
    }

    /**
     * Get the [traduire_organisme_arabe] column value.
     * 
     * @return string
     */
    public function getTraduireOrganismeArabe()
    {

        return $this->traduire_organisme_arabe;
    }

    /**
     * Get the [decision_cp] column value.
     * 
     * @return string
     */
    public function getDecisionCp()
    {

        return $this->decision_cp;
    }

    /**
     * Get the [decision_tranche_budgetaire] column value.
     * 
     * @return string
     */
    public function getDecisionTrancheBudgetaire()
    {

        return $this->decision_tranche_budgetaire;
    }

    /**
     * Get the [decision_classement] column value.
     * 
     * @return string
     */
    public function getDecisionClassement()
    {

        return $this->decision_classement;
    }

    /**
     * Get the [decision_afficher_detail_candidat_par_defaut] column value.
     * 
     * @return string
     */
    public function getDecisionAfficherDetailCandidatParDefaut()
    {

        return $this->decision_afficher_detail_candidat_par_defaut;
    }

    /**
     * Get the [article_133_upload_fichier] column value.
     * 
     * @return string
     */
    public function getArticle133UploadFichier()
    {

        return $this->article_133_upload_fichier;
    }

    /**
     * Get the [multi_linguisme_agent] column value.
     * 
     * @return string
     */
    public function getMultiLinguismeAgent()
    {

        return $this->multi_linguisme_agent;
    }

    /**
     * Get the [compte_entreprise_ifu] column value.
     * 
     * @return string
     */
    public function getCompteEntrepriseIfu()
    {

        return $this->compte_entreprise_ifu;
    }

    /**
     * Get the [gestion_organisme_par_agent] column value.
     * 
     * @return string
     */
    public function getGestionOrganismeParAgent()
    {

        return $this->gestion_organisme_par_agent;
    }

    /**
     * Get the [utiliser_lucene] column value.
     * 
     * @return string
     */
    public function getUtiliserLucene()
    {

        return $this->utiliser_lucene;
    }

    /**
     * Get the [utiliser_page_html_lieux_execution] column value.
     * 
     * @return string
     */
    public function getUtiliserPageHtmlLieuxExecution()
    {

        return $this->utiliser_page_html_lieux_execution;
    }

    /**
     * Get the [prado_validateur_format_date] column value.
     * 
     * @return string
     */
    public function getPradoValidateurFormatDate()
    {

        return $this->prado_validateur_format_date;
    }

    /**
     * Get the [prado_validateur_format_email] column value.
     * 
     * @return string
     */
    public function getPradoValidateurFormatEmail()
    {

        return $this->prado_validateur_format_email;
    }

    /**
     * Get the [socle_externe_ppp] column value.
     * 
     * @return string
     */
    public function getSocleExternePpp()
    {

        return $this->socle_externe_ppp;
    }

    /**
     * Get the [validation_format_champs_stricte] column value.
     * 
     * @return string
     */
    public function getValidationFormatChampsStricte()
    {

        return $this->validation_format_champs_stricte;
    }

    /**
     * Get the [poser_question_necessite_authentification] column value.
     * 
     * @return string
     */
    public function getPoserQuestionNecessiteAuthentification()
    {

        return $this->poser_question_necessite_authentification;
    }

    /**
     * Get the [autoriser_modif_profil_inscrit_ates] column value.
     * 
     * @return string
     */
    public function getAutoriserModifProfilInscritAtes()
    {

        return $this->autoriser_modif_profil_inscrit_ates;
    }

    /**
     * Get the [unicite_reference_consultation] column value.
     * 
     * @return string
     */
    public function getUniciteReferenceConsultation()
    {

        return $this->unicite_reference_consultation;
    }

    /**
     * Get the [registre_papier_rcnum_rcville_obligatoires] column value.
     * 
     * @return string
     */
    public function getRegistrePapierRcnumRcvilleObligatoires()
    {

        return $this->registre_papier_rcnum_rcville_obligatoires;
    }

    /**
     * Get the [registre_papier_adresse_cp_ville_obligatoires] column value.
     * 
     * @return string
     */
    public function getRegistrePapierAdresseCpVilleObligatoires()
    {

        return $this->registre_papier_adresse_cp_ville_obligatoires;
    }

    /**
     * Get the [telecharger_dce_sans_identification] column value.
     * 
     * @return string
     */
    public function getTelechargerDceSansIdentification()
    {

        return $this->telecharger_dce_sans_identification;
    }

    /**
     * Get the [gestion_entreprise_par_agent] column value.
     * 
     * @return string
     */
    public function getGestionEntrepriseParAgent()
    {

        return $this->gestion_entreprise_par_agent;
    }

    /**
     * Get the [autoriser_caracteres_speciaux_dans_reference] column value.
     * 
     * @return string
     */
    public function getAutoriserCaracteresSpeciauxDansReference()
    {

        return $this->autoriser_caracteres_speciaux_dans_reference;
    }

    /**
     * Get the [inscription_libre_entreprise] column value.
     * 
     * @return string
     */
    public function getInscriptionLibreEntreprise()
    {

        return $this->inscription_libre_entreprise;
    }

    /**
     * Get the [afficher_code_service] column value.
     * 
     * @return string
     */
    public function getAfficherCodeService()
    {

        return $this->afficher_code_service;
    }

    /**
     * Get the [authenticate_agent_by_login] column value.
     * 
     * @return string
     */
    public function getAuthenticateAgentByLogin()
    {

        return $this->authenticate_agent_by_login;
    }

    /**
     * Get the [authenticate_agent_by_cert] column value.
     * 
     * @return string
     */
    public function getAuthenticateAgentByCert()
    {

        return $this->authenticate_agent_by_cert;
    }

    /**
     * Get the [generer_acte_dengagement] column value.
     * 
     * @return string
     */
    public function getGenererActeDengagement()
    {

        return $this->generer_acte_dengagement;
    }

    /**
     * Get the [entreprise_controle_format_mot_de_passe] column value.
     * 
     * @return string
     */
    public function getEntrepriseControleFormatMotDePasse()
    {

        return $this->entreprise_controle_format_mot_de_passe;
    }

    /**
     * Get the [autre_annonce_information] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceInformation()
    {

        return $this->autre_annonce_information;
    }

    /**
     * Get the [creer_autre_annonce] column value.
     * 
     * @return string
     */
    public function getCreerAutreAnnonce()
    {

        return $this->creer_autre_annonce;
    }

    /**
     * Get the [consultation_clause] column value.
     * 
     * @return string
     */
    public function getConsultationClause()
    {

        return $this->consultation_clause;
    }

    /**
     * Get the [panier_entreprise] column value.
     * 
     * @return string
     */
    public function getPanierEntreprise()
    {

        return $this->panier_entreprise;
    }

    /**
     * Get the [parametrage_publicite_par_type_procedure] column value.
     * 
     * @return string
     */
    public function getParametragePubliciteParTypeProcedure()
    {

        return $this->parametrage_publicite_par_type_procedure;
    }

    /**
     * Get the [export_decision] column value.
     * 
     * @return string
     */
    public function getExportDecision()
    {

        return $this->export_decision;
    }

    /**
     * Get the [lieu_ouverture_plis_obligatoire] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisObligatoire()
    {

        return $this->lieu_ouverture_plis_obligatoire;
    }

    /**
     * Get the [regle_mise_en_ligne_par_entite_coordinatrice] column value.
     * 
     * @return string
     */
    public function getRegleMiseEnLigneParEntiteCoordinatrice()
    {

        return $this->regle_mise_en_ligne_par_entite_coordinatrice;
    }

    /**
     * Get the [gestion_newsletter] column value.
     * 
     * @return string
     */
    public function getGestionNewsletter()
    {

        return $this->gestion_newsletter;
    }

    /**
     * Get the [publicite_opoce] column value.
     * 
     * @return string
     */
    public function getPubliciteOpoce()
    {

        return $this->publicite_opoce;
    }

    /**
     * Get the [gestion_modeles_formulaire] column value.
     * 
     * @return string
     */
    public function getGestionModelesFormulaire()
    {

        return $this->gestion_modeles_formulaire;
    }

    /**
     * Get the [gestion_adresses_facturation_jal] column value.
     * 
     * @return string
     */
    public function getGestionAdressesFacturationJal()
    {

        return $this->gestion_adresses_facturation_jal;
    }

    /**
     * Get the [publicite_marches_en_ligne] column value.
     * 
     * @return string
     */
    public function getPubliciteMarchesEnLigne()
    {

        return $this->publicite_marches_en_ligne;
    }

    /**
     * Get the [dossier_additif] column value.
     * 
     * @return string
     */
    public function getDossierAdditif()
    {

        return $this->dossier_additif;
    }

    /**
     * Get the [type_marche] column value.
     * 
     * @return string
     */
    public function getTypeMarche()
    {

        return $this->type_marche;
    }

    /**
     * Get the [type_prestation] column value.
     * 
     * @return string
     */
    public function getTypePrestation()
    {

        return $this->type_prestation;
    }

    /**
     * Get the [afficher_tjr_bloc_caracteristique_reponse] column value.
     * 
     * @return string
     */
    public function getAfficherTjrBlocCaracteristiqueReponse()
    {

        return $this->afficher_tjr_bloc_caracteristique_reponse;
    }

    /**
     * Get the [alerte_metier] column value.
     * 
     * @return string
     */
    public function getAlerteMetier()
    {

        return $this->alerte_metier;
    }

    /**
     * Get the [bourse_a_la_sous_traitance] column value.
     * 
     * @return string
     */
    public function getBourseALaSousTraitance()
    {

        return $this->bourse_a_la_sous_traitance;
    }

    /**
     * Get the [publier_guides] column value.
     * 
     * @return string
     */
    public function getPublierGuides()
    {

        return $this->publier_guides;
    }

    /**
     * Get the [recherche_auto_completion] column value.
     * 
     * @return string
     */
    public function getRechercheAutoCompletion()
    {

        return $this->recherche_auto_completion;
    }

    /**
     * Get the [statut_compte_entreprise] column value.
     * 
     * @return string
     */
    public function getStatutCompteEntreprise()
    {

        return $this->statut_compte_entreprise;
    }

    /**
     * Get the [gestion_organismes] column value.
     * 
     * @return string
     */
    public function getGestionOrganismes()
    {

        return $this->gestion_organismes;
    }

    /**
     * Get the [accueil_entreprise_personnalise] column value.
     * 
     * @return string
     */
    public function getAccueilEntreprisePersonnalise()
    {

        return $this->accueil_entreprise_personnalise;
    }

    /**
     * Get the [interface_module_sub] column value.
     * 
     * @return string
     */
    public function getInterfaceModuleSub()
    {

        return $this->interface_module_sub;
    }

    /**
     * Get the [authentification_agent_multi_organismes] column value.
     * 
     * @return string
     */
    public function getAuthentificationAgentMultiOrganismes()
    {

        return $this->authentification_agent_multi_organismes;
    }

    /**
     * Get the [partager_consultation] column value.
     * 
     * @return string
     */
    public function getPartagerConsultation()
    {

        return $this->partager_consultation;
    }

    /**
     * Get the [annuaire_acheteurs_publics] column value.
     * 
     * @return string
     */
    public function getAnnuaireAcheteursPublics()
    {

        return $this->annuaire_acheteurs_publics;
    }

    /**
     * Get the [entreprise_actions_groupees] column value.
     * 
     * @return string
     */
    public function getEntrepriseActionsGroupees()
    {

        return $this->entreprise_actions_groupees;
    }

    /**
     * Get the [lieux_execution_carte] column value.
     * 
     * @return string
     */
    public function getLieuxExecutionCarte()
    {

        return $this->lieux_execution_carte;
    }

    /**
     * Get the [surcharge_referentiels] column value.
     * 
     * @return string
     */
    public function getSurchargeReferentiels()
    {

        return $this->surcharge_referentiels;
    }

    /**
     * Get the [mode_restriction_rgs] column value.
     * 
     * @return string
     */
    public function getModeRestrictionRgs()
    {

        return $this->mode_restriction_rgs;
    }

    /**
     * Get the [autre_annonce_decision_resiliation] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceDecisionResiliation()
    {

        return $this->autre_annonce_decision_resiliation;
    }

    /**
     * Get the [autre_annonce_synthese_rapport_audit] column value.
     * 
     * @return string
     */
    public function getAutreAnnonceSyntheseRapportAudit()
    {

        return $this->autre_annonce_synthese_rapport_audit;
    }

    /**
     * Get the [fiche_weka] column value.
     * 
     * @return string
     */
    public function getFicheWeka()
    {

        return $this->fiche_weka;
    }

    /**
     * Get the [generation_automatique_mdp_agent] column value.
     * 
     * @return string
     */
    public function getGenerationAutomatiqueMdpAgent()
    {

        return $this->generation_automatique_mdp_agent;
    }

    /**
     * Get the [generation_automatique_mdp_inscrit] column value.
     * 
     * @return string
     */
    public function getGenerationAutomatiqueMdpInscrit()
    {

        return $this->generation_automatique_mdp_inscrit;
    }

    /**
     * Get the [liste_ac_rgs] column value.
     * 
     * @return string
     */
    public function getListeAcRgs()
    {

        return $this->liste_ac_rgs;
    }

    /**
     * Get the [liste_cons_org] column value.
     * 
     * @return string
     */
    public function getListeConsOrg()
    {

        return $this->liste_cons_org;
    }

    /**
     * Get the [marche_public_simplifie_entreprise] column value.
     * 
     * @return string
     */
    public function getMarchePublicSimplifieEntreprise()
    {

        return $this->marche_public_simplifie_entreprise;
    }

    /**
     * Get the [demande_validation_controleur] column value.
     * 
     * @return string
     */
    public function getDemandeValidationControleur()
    {

        return $this->demande_validation_controleur;
    }

    /**
     * Get the [acces_exec_contrats] column value.
     * 
     * @return string
     */
    public function getAccesExecContrats()
    {

        return $this->acces_exec_contrats;
    }

    /**
     * Get the [forme_juridique_groupement_attributaire] column value.
     * 
     * @return string
     */
    public function getFormeJuridiqueGroupementAttributaire()
    {

        return $this->forme_juridique_groupement_attributaire;
    }

    /**
     * Get the [date_limite_remise_plis_obligatoire] column value.
     * 
     * @return string
     */
    public function getDateLimiteRemisePlisObligatoire()
    {

        return $this->date_limite_remise_plis_obligatoire;
    }

    /**
     * Get the [modif_type_procedure] column value.
     * 
     * @return string
     */
    public function getModifTypeProcedure()
    {

        return $this->modif_type_procedure;
    }

    /**
     * Get the [donnees_complementaires_procedure] column value.
     * 
     * @return string
     */
    public function getDonneesComplementairesProcedure()
    {

        return $this->donnees_complementaires_procedure;
    }

    /**
     * Get the [forme_marche_forme_prix] column value.
     * 
     * @return string
     */
    public function getFormeMarcheFormePrix()
    {

        return $this->forme_marche_forme_prix;
    }

    /**
     * Get the [controle_unicite_num_marche] column value.
     * 
     * @return string
     */
    public function getControleUniciteNumMarche()
    {

        return $this->controle_unicite_num_marche;
    }

    /**
     * Get the [affichage_num_marche] column value.
     * 
     * @return string
     */
    public function getAffichageNumMarche()
    {

        return $this->affichage_num_marche;
    }

    /**
     * Get the [affichage_date_fin_marche] column value.
     * 
     * @return string
     */
    public function getAffichageDateFinMarche()
    {

        return $this->affichage_date_fin_marche;
    }

    /**
     * Get the [affichage_ice] column value.
     * 
     * @return string
     */
    public function getAffichageIce()
    {

        return $this->affichage_ice;
    }

    /**
     * Get the [blocage_depot_hors_delai] column value.
     * 
     * @return string
     */
    public function getBlocageDepotHorsDelai()
    {

        return $this->blocage_depot_hors_delai;
    }

    /**
     * Get the [activer_suivi_pv] column value.
     * 
     * @return string
     */
    public function getActiverSuiviPv()
    {

        return $this->activer_suivi_pv;
    }

    /**
     * Get the [captcha_validateur] column value.
     * 
     * @return string
     */
    public function getCaptchaValidateur()
    {

        return $this->captcha_validateur;
    }

    /**
     * Get the [decision_depuis_resultat_analyse] column value.
     * 
     * @return string
     */
    public function getDecisionDepuisResultatAnalyse()
    {

        return $this->decision_depuis_resultat_analyse;
    }

    /**
     * Get the [module_facture] column value.
     * 
     * @return string
     */
    public function getModuleFacture()
    {

        return $this->module_facture;
    }

    /**
     * Get the [validation_entreprise_facturation] column value.
     * 
     * @return string
     */
    public function getValidationEntrepriseFacturation()
    {

        return $this->validation_entreprise_facturation;
    }

    /**
     * Get the [bloquer_depot_si_env_non_depose] column value.
     * 
     * @return string
     */
    public function getBloquerDepotSiEnvNonDepose()
    {

        return $this->bloquer_depot_si_env_non_depose;
    }

    /**
     * Get the [bloquer_depot_signature_invalide] column value.
     * 
     * @return string
     */
    public function getBloquerDepotSignatureInvalide()
    {

        return $this->bloquer_depot_signature_invalide;
    }

    /**
     * Get the [consultation_import_lots] column value.
     * 
     * @return string
     */
    public function getConsultationImportLots()
    {

        return $this->consultation_import_lots;
    }

    /**
     * Get the [depot_selection_lots] column value.
     * 
     * @return string
     */
    public function getDepotSelectionLots()
    {

        return $this->depot_selection_lots;
    }

    /**
     * Get the [modification_lots_apres_mise_en_ligne] column value.
     * 
     * @return string
     */
    public function getModificationLotsApresMiseEnLigne()
    {

        return $this->modification_lots_apres_mise_en_ligne;
    }

    /**
     * Get the [filtre_bdf_entreprise_valide] column value.
     * 
     * @return string
     */
    public function getFiltreBdfEntrepriseValide()
    {

        return $this->filtre_bdf_entreprise_valide;
    }

    /**
     * Get the [affichage_identifiant_fiscale] column value.
     * 
     * @return string
     */
    public function getAffichageIdentifiantFiscale()
    {

        return $this->affichage_identifiant_fiscale;
    }

    /**
     * Get the [decision_creer_contrat] column value.
     * 
     * @return string
     */
    public function getDecisionCreerContrat()
    {

        return $this->decision_creer_contrat;
    }

    /**
     * Get the [generation_bi_cle] column value.
     * 
     * @return string
     */
    public function getGenerationBiCle()
    {

        return $this->generation_bi_cle;
    }

    /**
     * Set the value of [id_auto] column.
     * 
     * @param int $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setIdAuto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_auto !== $v) {
            $this->id_auto = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ID_AUTO;
        }


        return $this;
    } // setIdAuto()

    /**
     * Set the value of [code_cpv] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCodeCpv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv !== $v) {
            $this->code_cpv = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CODE_CPV;
        }


        return $this;
    } // setCodeCpv()

    /**
     * Set the value of [multi_linguisme_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMultiLinguismeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->multi_linguisme_entreprise !== $v) {
            $this->multi_linguisme_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE;
        }


        return $this;
    } // setMultiLinguismeEntreprise()

    /**
     * Set the value of [gestion_fournisseurs_docs_mes_sous_services] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionFournisseursDocsMesSousServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_fournisseurs_docs_mes_sous_services !== $v) {
            $this->gestion_fournisseurs_docs_mes_sous_services = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES;
        }


        return $this;
    } // setGestionFournisseursDocsMesSousServices()

    /**
     * Set the value of [authenticate_inscrit_by_cert] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthenticateInscritByCert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authenticate_inscrit_by_cert !== $v) {
            $this->authenticate_inscrit_by_cert = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT;
        }


        return $this;
    } // setAuthenticateInscritByCert()

    /**
     * Set the value of [authenticate_inscrit_by_login] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthenticateInscritByLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authenticate_inscrit_by_login !== $v) {
            $this->authenticate_inscrit_by_login = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN;
        }


        return $this;
    } // setAuthenticateInscritByLogin()

    /**
     * Set the value of [base_qualifiee_entreprise_insee] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setBaseQualifieeEntrepriseInsee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_qualifiee_entreprise_insee !== $v) {
            $this->base_qualifiee_entreprise_insee = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE;
        }


        return $this;
    } // setBaseQualifieeEntrepriseInsee()

    /**
     * Set the value of [gestion_boamp_mes_sous_services] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionBoampMesSousServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_boamp_mes_sous_services !== $v) {
            $this->gestion_boamp_mes_sous_services = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES;
        }


        return $this;
    } // setGestionBoampMesSousServices()

    /**
     * Set the value of [gestion_bi_cle_mes_sous_services] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionBiCleMesSousServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_bi_cle_mes_sous_services !== $v) {
            $this->gestion_bi_cle_mes_sous_services = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES;
        }


        return $this;
    } // setGestionBiCleMesSousServices()

    /**
     * Set the value of [nom_entreprise_toujours_visible] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setNomEntrepriseToujoursVisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise_toujours_visible !== $v) {
            $this->nom_entreprise_toujours_visible = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE;
        }


        return $this;
    } // setNomEntrepriseToujoursVisible()

    /**
     * Set the value of [gestion_jal_mes_sous_services] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionJalMesSousServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_jal_mes_sous_services !== $v) {
            $this->gestion_jal_mes_sous_services = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES;
        }


        return $this;
    } // setGestionJalMesSousServices()

    /**
     * Set the value of [choix_langue_affichage_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setChoixLangueAffichageConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->choix_langue_affichage_consultation !== $v) {
            $this->choix_langue_affichage_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION;
        }


        return $this;
    } // setChoixLangueAffichageConsultation()

    /**
     * Set the value of [compte_entreprise_donnees_complementaires] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDonneesComplementaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_donnees_complementaires !== $v) {
            $this->compte_entreprise_donnees_complementaires = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES;
        }


        return $this;
    } // setCompteEntrepriseDonneesComplementaires()

    /**
     * Set the value of [annuaire_entites_achat_visible_par_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAnnuaireEntitesAchatVisibleParEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuaire_entites_achat_visible_par_entreprise !== $v) {
            $this->annuaire_entites_achat_visible_par_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE;
        }


        return $this;
    } // setAnnuaireEntitesAchatVisibleParEntreprise()

    /**
     * Set the value of [affichage_recherche_avancee_agent_ac_sad_transversaux] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageRechercheAvanceeAgentAcSadTransversaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_recherche_avancee_agent_ac_sad_transversaux !== $v) {
            $this->affichage_recherche_avancee_agent_ac_sad_transversaux = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX;
        }


        return $this;
    } // setAffichageRechercheAvanceeAgentAcSadTransversaux()

    /**
     * Set the value of [encheres_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEncheresEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->encheres_entreprise !== $v) {
            $this->encheres_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE;
        }


        return $this;
    } // setEncheresEntreprise()

    /**
     * Set the value of [socle_interne] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSocleInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socle_interne !== $v) {
            $this->socle_interne = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SOCLE_INTERNE;
        }


        return $this;
    } // setSocleInterne()

    /**
     * Set the value of [module_certificat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModuleCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_certificat !== $v) {
            $this->module_certificat = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MODULE_CERTIFICAT;
        }


        return $this;
    } // setModuleCertificat()

    /**
     * Set the value of [socle_externe_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSocleExterneAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socle_externe_agent !== $v) {
            $this->socle_externe_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT;
        }


        return $this;
    } // setSocleExterneAgent()

    /**
     * Set the value of [afficher_image_organisme] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAfficherImageOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afficher_image_organisme !== $v) {
            $this->afficher_image_organisme = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME;
        }


        return $this;
    } // setAfficherImageOrganisme()

    /**
     * Set the value of [socle_externe_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSocleExterneEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socle_externe_entreprise !== $v) {
            $this->socle_externe_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE;
        }


        return $this;
    } // setSocleExterneEntreprise()

    /**
     * Set the value of [portail_defense_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPortailDefenseEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portail_defense_entreprise !== $v) {
            $this->portail_defense_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE;
        }


        return $this;
    } // setPortailDefenseEntreprise()

    /**
     * Set the value of [compte_entreprise_province] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_province !== $v) {
            $this->compte_entreprise_province = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE;
        }


        return $this;
    } // setCompteEntrepriseProvince()

    /**
     * Set the value of [compte_entreprise_telephone3] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseTelephone3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_telephone3 !== $v) {
            $this->compte_entreprise_telephone3 = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3;
        }


        return $this;
    } // setCompteEntrepriseTelephone3()

    /**
     * Set the value of [compte_entreprise_tax_prof] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseTaxProf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_tax_prof !== $v) {
            $this->compte_entreprise_tax_prof = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF;
        }


        return $this;
    } // setCompteEntrepriseTaxProf()

    /**
     * Set the value of [compte_entreprise_rcville] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseRcville($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_rcville !== $v) {
            $this->compte_entreprise_rcville = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE;
        }


        return $this;
    } // setCompteEntrepriseRcville()

    /**
     * Set the value of [compte_entreprise_declaration_honneur] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDeclarationHonneur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_declaration_honneur !== $v) {
            $this->compte_entreprise_declaration_honneur = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR;
        }


        return $this;
    } // setCompteEntrepriseDeclarationHonneur()

    /**
     * Set the value of [compte_entreprise_qualification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_qualification !== $v) {
            $this->compte_entreprise_qualification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION;
        }


        return $this;
    } // setCompteEntrepriseQualification()

    /**
     * Set the value of [compte_entreprise_moyens_techniques] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseMoyensTechniques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_moyens_techniques !== $v) {
            $this->compte_entreprise_moyens_techniques = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES;
        }


        return $this;
    } // setCompteEntrepriseMoyensTechniques()

    /**
     * Set the value of [compte_entreprise_prestations_realisees] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntreprisePrestationsRealisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_prestations_realisees !== $v) {
            $this->compte_entreprise_prestations_realisees = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES;
        }


        return $this;
    } // setCompteEntreprisePrestationsRealisees()

    /**
     * Set the value of [compte_entreprise_chiffre_affaire_production_biens_services] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseChiffreAffaireProductionBiensServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_chiffre_affaire_production_biens_services !== $v) {
            $this->compte_entreprise_chiffre_affaire_production_biens_services = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES;
        }


        return $this;
    } // setCompteEntrepriseChiffreAffaireProductionBiensServices()

    /**
     * Set the value of [enveloppe_offre_technique] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEnveloppeOffreTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->enveloppe_offre_technique !== $v) {
            $this->enveloppe_offre_technique = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE;
        }


        return $this;
    } // setEnveloppeOffreTechnique()

    /**
     * Set the value of [compte_inscrit_choix_profil] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteInscritChoixProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_inscrit_choix_profil !== $v) {
            $this->compte_inscrit_choix_profil = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL;
        }


        return $this;
    } // setCompteInscritChoixProfil()

    /**
     * Set the value of [procedure_adaptee] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setProcedureAdaptee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->procedure_adaptee !== $v) {
            $this->procedure_adaptee = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE;
        }


        return $this;
    } // setProcedureAdaptee()

    /**
     * Set the value of [compte_entreprise_siren] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_siren !== $v) {
            $this->compte_entreprise_siren = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN;
        }


        return $this;
    } // setCompteEntrepriseSiren()

    /**
     * Set the value of [compte_entreprise_activation_inscription_par_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseActivationInscriptionParAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_activation_inscription_par_agent !== $v) {
            $this->compte_entreprise_activation_inscription_par_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT;
        }


        return $this;
    } // setCompteEntrepriseActivationInscriptionParAgent()

    /**
     * Set the value of [menu_entreprise_consultations_en_cours] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMenuEntrepriseConsultationsEnCours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_entreprise_consultations_en_cours !== $v) {
            $this->menu_entreprise_consultations_en_cours = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS;
        }


        return $this;
    } // setMenuEntrepriseConsultationsEnCours()

    /**
     * Set the value of [compte_entreprise_capital_social] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseCapitalSocial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_capital_social !== $v) {
            $this->compte_entreprise_capital_social = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL;
        }


        return $this;
    } // setCompteEntrepriseCapitalSocial()

    /**
     * Set the value of [mail_activation_compte_inscrit_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMailActivationCompteInscritEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail_activation_compte_inscrit_entreprise !== $v) {
            $this->mail_activation_compte_inscrit_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE;
        }


        return $this;
    } // setMailActivationCompteInscritEntreprise()

    /**
     * Set the value of [decision_date_notification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionDateNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_date_notification !== $v) {
            $this->decision_date_notification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION;
        }


        return $this;
    } // setDecisionDateNotification()

    /**
     * Set the value of [decision_pmi_pme] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionPmiPme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_pmi_pme !== $v) {
            $this->decision_pmi_pme = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_PMI_PME;
        }


        return $this;
    } // setDecisionPmiPme()

    /**
     * Set the value of [decision_nature_prestations] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionNaturePrestations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_nature_prestations !== $v) {
            $this->decision_nature_prestations = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS;
        }


        return $this;
    } // setDecisionNaturePrestations()

    /**
     * Set the value of [decision_objet_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionObjetMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_objet_marche !== $v) {
            $this->decision_objet_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE;
        }


        return $this;
    } // setDecisionObjetMarche()

    /**
     * Set the value of [decision_note] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_note !== $v) {
            $this->decision_note = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_NOTE;
        }


        return $this;
    } // setDecisionNote()

    /**
     * Set the value of [decision_fiche_recensement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionFicheRecensement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_fiche_recensement !== $v) {
            $this->decision_fiche_recensement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT;
        }


        return $this;
    } // setDecisionFicheRecensement()

    /**
     * Set the value of [registre_papier_mail_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRegistrePapierMailObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->registre_papier_mail_obligatoire !== $v) {
            $this->registre_papier_mail_obligatoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE;
        }


        return $this;
    } // setRegistrePapierMailObligatoire()

    /**
     * Set the value of [menu_entreprise_indicateurs_cles] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMenuEntrepriseIndicateursCles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_entreprise_indicateurs_cles !== $v) {
            $this->menu_entreprise_indicateurs_cles = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES;
        }


        return $this;
    } // setMenuEntrepriseIndicateursCles()

    /**
     * Set the value of [ajout_rpa_champ_email] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAjoutRpaChampEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_rpa_champ_email !== $v) {
            $this->ajout_rpa_champ_email = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL;
        }


        return $this;
    } // setAjoutRpaChampEmail()

    /**
     * Set the value of [ajout_rpa_champ_telephone] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAjoutRpaChampTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_rpa_champ_telephone !== $v) {
            $this->ajout_rpa_champ_telephone = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE;
        }


        return $this;
    } // setAjoutRpaChampTelephone()

    /**
     * Set the value of [ajout_rpa_champ_fax] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAjoutRpaChampFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_rpa_champ_fax !== $v) {
            $this->ajout_rpa_champ_fax = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX;
        }


        return $this;
    } // setAjoutRpaChampFax()

    /**
     * Set the value of [entreprise_poser_question_sans_pj] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEntreprisePoserQuestionSansPj($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_poser_question_sans_pj !== $v) {
            $this->entreprise_poser_question_sans_pj = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ;
        }


        return $this;
    } // setEntreprisePoserQuestionSansPj()

    /**
     * Set the value of [url_demarche_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setUrlDemarcheAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_demarche_agent !== $v) {
            $this->url_demarche_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT;
        }


        return $this;
    } // setUrlDemarcheAgent()

    /**
     * Set the value of [url_demarche_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setUrlDemarcheEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_demarche_entreprise !== $v) {
            $this->url_demarche_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE;
        }


        return $this;
    } // setUrlDemarcheEntreprise()

    /**
     * Set the value of [siret_detail_entite_achat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSiretDetailEntiteAchat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret_detail_entite_achat !== $v) {
            $this->siret_detail_entite_achat = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT;
        }


        return $this;
    } // setSiretDetailEntiteAchat()

    /**
     * Set the value of [presence_elu] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPresenceElu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->presence_elu !== $v) {
            $this->presence_elu = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PRESENCE_ELU;
        }


        return $this;
    } // setPresenceElu()

    /**
     * Set the value of [gerer_mon_service] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGererMonService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_mon_service !== $v) {
            $this->gerer_mon_service = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GERER_MON_SERVICE;
        }


        return $this;
    } // setGererMonService()

    /**
     * Set the value of [depouillement_enveloppe_depend_rat_enveloppe_precedente] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDepouillementEnveloppeDependRatEnveloppePrecedente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depouillement_enveloppe_depend_rat_enveloppe_precedente !== $v) {
            $this->depouillement_enveloppe_depend_rat_enveloppe_precedente = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE;
        }


        return $this;
    } // setDepouillementEnveloppeDependRatEnveloppePrecedente()

    /**
     * Set the value of [consultation_adresse_retrais_dossiers] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationAdresseRetraisDossiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_adresse_retrais_dossiers !== $v) {
            $this->consultation_adresse_retrais_dossiers = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS;
        }


        return $this;
    } // setConsultationAdresseRetraisDossiers()

    /**
     * Set the value of [consultation_adresse_depot_offres] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationAdresseDepotOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_adresse_depot_offres !== $v) {
            $this->consultation_adresse_depot_offres = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES;
        }


        return $this;
    } // setConsultationAdresseDepotOffres()

    /**
     * Set the value of [consultation_caution_provisoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationCautionProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_caution_provisoire !== $v) {
            $this->consultation_caution_provisoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE;
        }


        return $this;
    } // setConsultationCautionProvisoire()

    /**
     * Set the value of [consultation_lieu_ouverture_plis] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationLieuOuverturePlis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_lieu_ouverture_plis !== $v) {
            $this->consultation_lieu_ouverture_plis = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS;
        }


        return $this;
    } // setConsultationLieuOuverturePlis()

    /**
     * Set the value of [consultation_qualification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_qualification !== $v) {
            $this->consultation_qualification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION;
        }


        return $this;
    } // setConsultationQualification()

    /**
     * Set the value of [consultation_agrement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationAgrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_agrement !== $v) {
            $this->consultation_agrement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT;
        }


        return $this;
    } // setConsultationAgrement()

    /**
     * Set the value of [consultation_echantillons_demandes] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationEchantillonsDemandes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_echantillons_demandes !== $v) {
            $this->consultation_echantillons_demandes = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES;
        }


        return $this;
    } // setConsultationEchantillonsDemandes()

    /**
     * Set the value of [consultation_reunion] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_reunion !== $v) {
            $this->consultation_reunion = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_REUNION;
        }


        return $this;
    } // setConsultationReunion()

    /**
     * Set the value of [consultation_visite_des_lieux] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationVisiteDesLieux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_visite_des_lieux !== $v) {
            $this->consultation_visite_des_lieux = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX;
        }


        return $this;
    } // setConsultationVisiteDesLieux()

    /**
     * Set the value of [consultation_prix_acquisition] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationPrixAcquisition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_prix_acquisition !== $v) {
            $this->consultation_prix_acquisition = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION;
        }


        return $this;
    } // setConsultationPrixAcquisition()

    /**
     * Set the value of [resultat_analyse_avant_decision] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setResultatAnalyseAvantDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resultat_analyse_avant_decision !== $v) {
            $this->resultat_analyse_avant_decision = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION;
        }


        return $this;
    } // setResultatAnalyseAvantDecision()

    /**
     * Set the value of [creation_inscrit_par_ates] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCreationInscritParAtes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creation_inscrit_par_ates !== $v) {
            $this->creation_inscrit_par_ates = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES;
        }


        return $this;
    } // setCreationInscritParAtes()

    /**
     * Set the value of [consultation_variantes_autorisees] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationVariantesAutorisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_variantes_autorisees !== $v) {
            $this->consultation_variantes_autorisees = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES;
        }


        return $this;
    } // setConsultationVariantesAutorisees()

    /**
     * Set the value of [recherche_avancee_par_type_org] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRechercheAvanceeParTypeOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recherche_avancee_par_type_org !== $v) {
            $this->recherche_avancee_par_type_org = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG;
        }


        return $this;
    } // setRechercheAvanceeParTypeOrg()

    /**
     * Set the value of [menu_agent_societes_exclues] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMenuAgentSocietesExclues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_agent_societes_exclues !== $v) {
            $this->menu_agent_societes_exclues = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES;
        }


        return $this;
    } // setMenuAgentSocietesExclues()

    /**
     * Set the value of [recherche_avancee_par_domaines_activite] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRechercheAvanceeParDomainesActivite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recherche_avancee_par_domaines_activite !== $v) {
            $this->recherche_avancee_par_domaines_activite = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE;
        }


        return $this;
    } // setRechercheAvanceeParDomainesActivite()

    /**
     * Set the value of [recherche_avancee_par_qualification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRechercheAvanceeParQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recherche_avancee_par_qualification !== $v) {
            $this->recherche_avancee_par_qualification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION;
        }


        return $this;
    } // setRechercheAvanceeParQualification()

    /**
     * Set the value of [recherche_avancee_par_agrement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRechercheAvanceeParAgrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recherche_avancee_par_agrement !== $v) {
            $this->recherche_avancee_par_agrement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT;
        }


        return $this;
    } // setRechercheAvanceeParAgrement()

    /**
     * Set the value of [contact_administratif_dans_detail_consultation_cote_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setContactAdministratifDansDetailConsultationCoteEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contact_administratif_dans_detail_consultation_cote_entreprise !== $v) {
            $this->contact_administratif_dans_detail_consultation_cote_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE;
        }


        return $this;
    } // setContactAdministratifDansDetailConsultationCoteEntreprise()

    /**
     * Set the value of [consultation_pieces_dossiers] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationPiecesDossiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_pieces_dossiers !== $v) {
            $this->consultation_pieces_dossiers = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS;
        }


        return $this;
    } // setConsultationPiecesDossiers()

    /**
     * Set the value of [gerer_adresses_service] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGererAdressesService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_adresses_service !== $v) {
            $this->gerer_adresses_service = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE;
        }


        return $this;
    } // setGererAdressesService()

    /**
     * Set the value of [traduire_annonces] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTraduireAnnonces($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traduire_annonces !== $v) {
            $this->traduire_annonces = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES;
        }


        return $this;
    } // setTraduireAnnonces()

    /**
     * Set the value of [afficher_bloc_actions_dans_details_annonces] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAfficherBlocActionsDansDetailsAnnonces($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afficher_bloc_actions_dans_details_annonces !== $v) {
            $this->afficher_bloc_actions_dans_details_annonces = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES;
        }


        return $this;
    } // setAfficherBlocActionsDansDetailsAnnonces()

    /**
     * Set the value of [autoriser_une_seule_reponse_principale_par_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutoriserUneSeuleReponsePrincipaleParEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autoriser_une_seule_reponse_principale_par_entreprise !== $v) {
            $this->autoriser_une_seule_reponse_principale_par_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE;
        }


        return $this;
    } // setAutoriserUneSeuleReponsePrincipaleParEntreprise()

    /**
     * Set the value of [generation_avis] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGenerationAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generation_avis !== $v) {
            $this->generation_avis = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GENERATION_AVIS;
        }


        return $this;
    } // setGenerationAvis()

    /**
     * Set the value of [passation_appliquer_donnees_ensemble_lots] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPassationAppliquerDonneesEnsembleLots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->passation_appliquer_donnees_ensemble_lots !== $v) {
            $this->passation_appliquer_donnees_ensemble_lots = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS;
        }


        return $this;
    } // setPassationAppliquerDonneesEnsembleLots()

    /**
     * Set the value of [autre_annonce_extrait_pv] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceExtraitPv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_extrait_pv !== $v) {
            $this->autre_annonce_extrait_pv = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV;
        }


        return $this;
    } // setAutreAnnonceExtraitPv()

    /**
     * Set the value of [autre_annonce_rapport_achevement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceRapportAchevement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_rapport_achevement !== $v) {
            $this->autre_annonce_rapport_achevement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT;
        }


        return $this;
    } // setAutreAnnonceRapportAchevement()

    /**
     * Set the value of [ajout_fichier_joint_autre_annonce] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAjoutFichierJointAutreAnnonce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ajout_fichier_joint_autre_annonce !== $v) {
            $this->ajout_fichier_joint_autre_annonce = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE;
        }


        return $this;
    } // setAjoutFichierJointAutreAnnonce()

    /**
     * Set the value of [consultation_mode_passation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationModePassation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_mode_passation !== $v) {
            $this->consultation_mode_passation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION;
        }


        return $this;
    } // setConsultationModePassation()

    /**
     * Set the value of [compte_entreprise_identifiant_unique] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseIdentifiantUnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_identifiant_unique !== $v) {
            $this->compte_entreprise_identifiant_unique = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE;
        }


        return $this;
    } // setCompteEntrepriseIdentifiantUnique()

    /**
     * Set the value of [gerer_certificats_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGererCertificatsAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_certificats_agent !== $v) {
            $this->gerer_certificats_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT;
        }


        return $this;
    } // setGererCertificatsAgent()

    /**
     * Set the value of [autre_annonce_programme_previsionnel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceProgrammePrevisionnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_programme_previsionnel !== $v) {
            $this->autre_annonce_programme_previsionnel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL;
        }


        return $this;
    } // setAutreAnnonceProgrammePrevisionnel()

    /**
     * Set the value of [annuler_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAnnulerConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuler_consultation !== $v) {
            $this->annuler_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ANNULER_CONSULTATION;
        }


        return $this;
    } // setAnnulerConsultation()

    /**
     * Set the value of [cfe_entreprise_accessible_par_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCfeEntrepriseAccessibleParAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cfe_entreprise_accessible_par_agent !== $v) {
            $this->cfe_entreprise_accessible_par_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT;
        }


        return $this;
    } // setCfeEntrepriseAccessibleParAgent()

    /**
     * Set the value of [compte_entreprise_code_nace_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseCodeNaceReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_code_nace_referentiel !== $v) {
            $this->compte_entreprise_code_nace_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL;
        }


        return $this;
    } // setCompteEntrepriseCodeNaceReferentiel()

    /**
     * Set the value of [code_nut_lt_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCodeNutLtReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_nut_lt_referentiel !== $v) {
            $this->code_nut_lt_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL;
        }


        return $this;
    } // setCodeNutLtReferentiel()

    /**
     * Set the value of [lieux_execution] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setLieuxExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieux_execution !== $v) {
            $this->lieux_execution = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::LIEUX_EXECUTION;
        }


        return $this;
    } // setLieuxExecution()

    /**
     * Set the value of [compte_entreprise_domaine_activite_lt_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDomaineActiviteLtReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_domaine_activite_lt_referentiel !== $v) {
            $this->compte_entreprise_domaine_activite_lt_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL;
        }


        return $this;
    } // setCompteEntrepriseDomaineActiviteLtReferentiel()

    /**
     * Set the value of [consultation_domaines_activites_lt_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationDomainesActivitesLtReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_domaines_activites_lt_referentiel !== $v) {
            $this->consultation_domaines_activites_lt_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL;
        }


        return $this;
    } // setConsultationDomainesActivitesLtReferentiel()

    /**
     * Set the value of [compte_entreprise_agrement_lt_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseAgrementLtReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_agrement_lt_referentiel !== $v) {
            $this->compte_entreprise_agrement_lt_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL;
        }


        return $this;
    } // setCompteEntrepriseAgrementLtReferentiel()

    /**
     * Set the value of [compte_entreprise_qualification_lt_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseQualificationLtReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_qualification_lt_referentiel !== $v) {
            $this->compte_entreprise_qualification_lt_referentiel = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL;
        }


        return $this;
    } // setCompteEntrepriseQualificationLtReferentiel()

    /**
     * Set the value of [reponse_pas_a_pas] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setReponsePasAPas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_pas_a_pas !== $v) {
            $this->reponse_pas_a_pas = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS;
        }


        return $this;
    } // setReponsePasAPas()

    /**
     * Set the value of [agent_controle_format_mot_de_passe] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAgentControleFormatMotDePasse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_controle_format_mot_de_passe !== $v) {
            $this->agent_controle_format_mot_de_passe = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE;
        }


        return $this;
    } // setAgentControleFormatMotDePasse()

    /**
     * Set the value of [entreprise_validation_email_inscription] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEntrepriseValidationEmailInscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_validation_email_inscription !== $v) {
            $this->entreprise_validation_email_inscription = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION;
        }


        return $this;
    } // setEntrepriseValidationEmailInscription()

    /**
     * Set the value of [telecharger_dce_avec_authentification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTelechargerDceAvecAuthentification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecharger_dce_avec_authentification !== $v) {
            $this->telecharger_dce_avec_authentification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION;
        }


        return $this;
    } // setTelechargerDceAvecAuthentification()

    /**
     * Set the value of [authentification_basic] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthentificationBasic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authentification_basic !== $v) {
            $this->authentification_basic = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC;
        }


        return $this;
    } // setAuthentificationBasic()

    /**
     * Set the value of [reglement_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setReglementConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reglement_consultation !== $v) {
            $this->reglement_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION;
        }


        return $this;
    } // setReglementConsultation()

    /**
     * Set the value of [annonces_marches] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAnnoncesMarches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annonces_marches !== $v) {
            $this->annonces_marches = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ANNONCES_MARCHES;
        }


        return $this;
    } // setAnnoncesMarches()

    /**
     * Set the value of [cfe_date_fin_validite_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCfeDateFinValiditeObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cfe_date_fin_validite_obligatoire !== $v) {
            $this->cfe_date_fin_validite_obligatoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE;
        }


        return $this;
    } // setCfeDateFinValiditeObligatoire()

    /**
     * Set the value of [associer_documents_cfe_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAssocierDocumentsCfeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->associer_documents_cfe_consultation !== $v) {
            $this->associer_documents_cfe_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION;
        }


        return $this;
    } // setAssocierDocumentsCfeConsultation()

    /**
     * Set the value of [compte_entreprise_region] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_region !== $v) {
            $this->compte_entreprise_region = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION;
        }


        return $this;
    } // setCompteEntrepriseRegion()

    /**
     * Set the value of [compte_entreprise_telephone2] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseTelephone2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_telephone2 !== $v) {
            $this->compte_entreprise_telephone2 = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2;
        }


        return $this;
    } // setCompteEntrepriseTelephone2()

    /**
     * Set the value of [compte_entreprise_cnss] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseCnss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_cnss !== $v) {
            $this->compte_entreprise_cnss = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS;
        }


        return $this;
    } // setCompteEntrepriseCnss()

    /**
     * Set the value of [compte_entreprise_rcnum] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseRcnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_rcnum !== $v) {
            $this->compte_entreprise_rcnum = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM;
        }


        return $this;
    } // setCompteEntrepriseRcnum()

    /**
     * Set the value of [compte_entreprise_domaine_activite] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDomaineActivite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_domaine_activite !== $v) {
            $this->compte_entreprise_domaine_activite = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE;
        }


        return $this;
    } // setCompteEntrepriseDomaineActivite()

    /**
     * Set the value of [compte_inscrit_code_nic] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteInscritCodeNic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_inscrit_code_nic !== $v) {
            $this->compte_inscrit_code_nic = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC;
        }


        return $this;
    } // setCompteInscritCodeNic()

    /**
     * Set the value of [compte_entreprise_code_ape] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseCodeApe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_code_ape !== $v) {
            $this->compte_entreprise_code_ape = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE;
        }


        return $this;
    } // setCompteEntrepriseCodeApe()

    /**
     * Set the value of [compte_entreprise_documents_commerciaux] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDocumentsCommerciaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_documents_commerciaux !== $v) {
            $this->compte_entreprise_documents_commerciaux = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX;
        }


        return $this;
    } // setCompteEntrepriseDocumentsCommerciaux()

    /**
     * Set the value of [compte_entreprise_agrement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseAgrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_agrement !== $v) {
            $this->compte_entreprise_agrement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT;
        }


        return $this;
    } // setCompteEntrepriseAgrement()

    /**
     * Set the value of [compte_entreprise_moyens_humains] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseMoyensHumains($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_moyens_humains !== $v) {
            $this->compte_entreprise_moyens_humains = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS;
        }


        return $this;
    } // setCompteEntrepriseMoyensHumains()

    /**
     * Set the value of [compte_entreprise_activite_domaine_defense] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseActiviteDomaineDefense($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_activite_domaine_defense !== $v) {
            $this->compte_entreprise_activite_domaine_defense = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE;
        }


        return $this;
    } // setCompteEntrepriseActiviteDomaineDefense()

    /**
     * Set the value of [compte_entreprise_donnees_financieres] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseDonneesFinancieres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_donnees_financieres !== $v) {
            $this->compte_entreprise_donnees_financieres = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES;
        }


        return $this;
    } // setCompteEntrepriseDonneesFinancieres()

    /**
     * Set the value of [enveloppe_anonymat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEnveloppeAnonymat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->enveloppe_anonymat !== $v) {
            $this->enveloppe_anonymat = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT;
        }


        return $this;
    } // setEnveloppeAnonymat()

    /**
     * Set the value of [publicite_format_xml] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPubliciteFormatXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publicite_format_xml !== $v) {
            $this->publicite_format_xml = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML;
        }


        return $this;
    } // setPubliciteFormatXml()

    /**
     * Set the value of [article_133_generation_pf] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setArticle133GenerationPf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->article_133_generation_pf !== $v) {
            $this->article_133_generation_pf = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF;
        }


        return $this;
    } // setArticle133GenerationPf()

    /**
     * Set the value of [entreprise_repondre_consultation_apres_cloture] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEntrepriseRepondreConsultationApresCloture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_repondre_consultation_apres_cloture !== $v) {
            $this->entreprise_repondre_consultation_apres_cloture = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE;
        }


        return $this;
    } // setEntrepriseRepondreConsultationApresCloture()

    /**
     * Set the value of [telechargement_outil_verif_horodatage] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTelechargementOutilVerifHorodatage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telechargement_outil_verif_horodatage !== $v) {
            $this->telechargement_outil_verif_horodatage = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE;
        }


        return $this;
    } // setTelechargementOutilVerifHorodatage()

    /**
     * Set the value of [affichage_code_cpv] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageCodeCpv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_code_cpv !== $v) {
            $this->affichage_code_cpv = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV;
        }


        return $this;
    } // setAffichageCodeCpv()

    /**
     * Set the value of [consultation_domaines_activites] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationDomainesActivites($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_domaines_activites !== $v) {
            $this->consultation_domaines_activites = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES;
        }


        return $this;
    } // setConsultationDomainesActivites()

    /**
     * Set the value of [statistiques_mesure_demat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setStatistiquesMesureDemat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statistiques_mesure_demat !== $v) {
            $this->statistiques_mesure_demat = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT;
        }


        return $this;
    } // setStatistiquesMesureDemat()

    /**
     * Set the value of [publication_procure] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPublicationProcure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publication_procure !== $v) {
            $this->publication_procure = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PUBLICATION_PROCURE;
        }


        return $this;
    } // setPublicationProcure()

    /**
     * Set the value of [menu_entreprise_toutes_les_consultations] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMenuEntrepriseToutesLesConsultations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->menu_entreprise_toutes_les_consultations !== $v) {
            $this->menu_entreprise_toutes_les_consultations = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS;
        }


        return $this;
    } // setMenuEntrepriseToutesLesConsultations()

    /**
     * Set the value of [compte_entreprise_cp_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseCpObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_cp_obligatoire !== $v) {
            $this->compte_entreprise_cp_obligatoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE;
        }


        return $this;
    } // setCompteEntrepriseCpObligatoire()

    /**
     * Set the value of [annuler_depot] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAnnulerDepot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuler_depot !== $v) {
            $this->annuler_depot = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ANNULER_DEPOT;
        }


        return $this;
    } // setAnnulerDepot()

    /**
     * Set the value of [traduire_entite_achat_arabe] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTraduireEntiteAchatArabe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traduire_entite_achat_arabe !== $v) {
            $this->traduire_entite_achat_arabe = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE;
        }


        return $this;
    } // setTraduireEntiteAchatArabe()

    /**
     * Set the value of [traduire_organisme_arabe] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTraduireOrganismeArabe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traduire_organisme_arabe !== $v) {
            $this->traduire_organisme_arabe = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE;
        }


        return $this;
    } // setTraduireOrganismeArabe()

    /**
     * Set the value of [decision_cp] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_cp !== $v) {
            $this->decision_cp = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_CP;
        }


        return $this;
    } // setDecisionCp()

    /**
     * Set the value of [decision_tranche_budgetaire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionTrancheBudgetaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_tranche_budgetaire !== $v) {
            $this->decision_tranche_budgetaire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE;
        }


        return $this;
    } // setDecisionTrancheBudgetaire()

    /**
     * Set the value of [decision_classement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionClassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_classement !== $v) {
            $this->decision_classement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_CLASSEMENT;
        }


        return $this;
    } // setDecisionClassement()

    /**
     * Set the value of [decision_afficher_detail_candidat_par_defaut] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionAfficherDetailCandidatParDefaut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_afficher_detail_candidat_par_defaut !== $v) {
            $this->decision_afficher_detail_candidat_par_defaut = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT;
        }


        return $this;
    } // setDecisionAfficherDetailCandidatParDefaut()

    /**
     * Set the value of [article_133_upload_fichier] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setArticle133UploadFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->article_133_upload_fichier !== $v) {
            $this->article_133_upload_fichier = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER;
        }


        return $this;
    } // setArticle133UploadFichier()

    /**
     * Set the value of [multi_linguisme_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMultiLinguismeAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->multi_linguisme_agent !== $v) {
            $this->multi_linguisme_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT;
        }


        return $this;
    } // setMultiLinguismeAgent()

    /**
     * Set the value of [compte_entreprise_ifu] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCompteEntrepriseIfu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compte_entreprise_ifu !== $v) {
            $this->compte_entreprise_ifu = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU;
        }


        return $this;
    } // setCompteEntrepriseIfu()

    /**
     * Set the value of [gestion_organisme_par_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionOrganismeParAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_organisme_par_agent !== $v) {
            $this->gestion_organisme_par_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT;
        }


        return $this;
    } // setGestionOrganismeParAgent()

    /**
     * Set the value of [utiliser_lucene] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setUtiliserLucene($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->utiliser_lucene !== $v) {
            $this->utiliser_lucene = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::UTILISER_LUCENE;
        }


        return $this;
    } // setUtiliserLucene()

    /**
     * Set the value of [utiliser_page_html_lieux_execution] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setUtiliserPageHtmlLieuxExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->utiliser_page_html_lieux_execution !== $v) {
            $this->utiliser_page_html_lieux_execution = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION;
        }


        return $this;
    } // setUtiliserPageHtmlLieuxExecution()

    /**
     * Set the value of [prado_validateur_format_date] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPradoValidateurFormatDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prado_validateur_format_date !== $v) {
            $this->prado_validateur_format_date = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE;
        }


        return $this;
    } // setPradoValidateurFormatDate()

    /**
     * Set the value of [prado_validateur_format_email] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPradoValidateurFormatEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prado_validateur_format_email !== $v) {
            $this->prado_validateur_format_email = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL;
        }


        return $this;
    } // setPradoValidateurFormatEmail()

    /**
     * Set the value of [socle_externe_ppp] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSocleExternePpp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socle_externe_ppp !== $v) {
            $this->socle_externe_ppp = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP;
        }


        return $this;
    } // setSocleExternePpp()

    /**
     * Set the value of [validation_format_champs_stricte] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setValidationFormatChampsStricte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_format_champs_stricte !== $v) {
            $this->validation_format_champs_stricte = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE;
        }


        return $this;
    } // setValidationFormatChampsStricte()

    /**
     * Set the value of [poser_question_necessite_authentification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPoserQuestionNecessiteAuthentification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->poser_question_necessite_authentification !== $v) {
            $this->poser_question_necessite_authentification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION;
        }


        return $this;
    } // setPoserQuestionNecessiteAuthentification()

    /**
     * Set the value of [autoriser_modif_profil_inscrit_ates] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutoriserModifProfilInscritAtes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autoriser_modif_profil_inscrit_ates !== $v) {
            $this->autoriser_modif_profil_inscrit_ates = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES;
        }


        return $this;
    } // setAutoriserModifProfilInscritAtes()

    /**
     * Set the value of [unicite_reference_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setUniciteReferenceConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unicite_reference_consultation !== $v) {
            $this->unicite_reference_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION;
        }


        return $this;
    } // setUniciteReferenceConsultation()

    /**
     * Set the value of [registre_papier_rcnum_rcville_obligatoires] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRegistrePapierRcnumRcvilleObligatoires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->registre_papier_rcnum_rcville_obligatoires !== $v) {
            $this->registre_papier_rcnum_rcville_obligatoires = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES;
        }


        return $this;
    } // setRegistrePapierRcnumRcvilleObligatoires()

    /**
     * Set the value of [registre_papier_adresse_cp_ville_obligatoires] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRegistrePapierAdresseCpVilleObligatoires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->registre_papier_adresse_cp_ville_obligatoires !== $v) {
            $this->registre_papier_adresse_cp_ville_obligatoires = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES;
        }


        return $this;
    } // setRegistrePapierAdresseCpVilleObligatoires()

    /**
     * Set the value of [telecharger_dce_sans_identification] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTelechargerDceSansIdentification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecharger_dce_sans_identification !== $v) {
            $this->telecharger_dce_sans_identification = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION;
        }


        return $this;
    } // setTelechargerDceSansIdentification()

    /**
     * Set the value of [gestion_entreprise_par_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionEntrepriseParAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_entreprise_par_agent !== $v) {
            $this->gestion_entreprise_par_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT;
        }


        return $this;
    } // setGestionEntrepriseParAgent()

    /**
     * Set the value of [autoriser_caracteres_speciaux_dans_reference] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutoriserCaracteresSpeciauxDansReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autoriser_caracteres_speciaux_dans_reference !== $v) {
            $this->autoriser_caracteres_speciaux_dans_reference = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE;
        }


        return $this;
    } // setAutoriserCaracteresSpeciauxDansReference()

    /**
     * Set the value of [inscription_libre_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setInscriptionLibreEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inscription_libre_entreprise !== $v) {
            $this->inscription_libre_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE;
        }


        return $this;
    } // setInscriptionLibreEntreprise()

    /**
     * Set the value of [afficher_code_service] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAfficherCodeService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afficher_code_service !== $v) {
            $this->afficher_code_service = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE;
        }


        return $this;
    } // setAfficherCodeService()

    /**
     * Set the value of [authenticate_agent_by_login] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthenticateAgentByLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authenticate_agent_by_login !== $v) {
            $this->authenticate_agent_by_login = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN;
        }


        return $this;
    } // setAuthenticateAgentByLogin()

    /**
     * Set the value of [authenticate_agent_by_cert] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthenticateAgentByCert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authenticate_agent_by_cert !== $v) {
            $this->authenticate_agent_by_cert = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT;
        }


        return $this;
    } // setAuthenticateAgentByCert()

    /**
     * Set the value of [generer_acte_dengagement] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGenererActeDengagement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generer_acte_dengagement !== $v) {
            $this->generer_acte_dengagement = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT;
        }


        return $this;
    } // setGenererActeDengagement()

    /**
     * Set the value of [entreprise_controle_format_mot_de_passe] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEntrepriseControleFormatMotDePasse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_controle_format_mot_de_passe !== $v) {
            $this->entreprise_controle_format_mot_de_passe = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE;
        }


        return $this;
    } // setEntrepriseControleFormatMotDePasse()

    /**
     * Set the value of [autre_annonce_information] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceInformation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_information !== $v) {
            $this->autre_annonce_information = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION;
        }


        return $this;
    } // setAutreAnnonceInformation()

    /**
     * Set the value of [creer_autre_annonce] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCreerAutreAnnonce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_autre_annonce !== $v) {
            $this->creer_autre_annonce = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE;
        }


        return $this;
    } // setCreerAutreAnnonce()

    /**
     * Set the value of [consultation_clause] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationClause($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_clause !== $v) {
            $this->consultation_clause = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE;
        }


        return $this;
    } // setConsultationClause()

    /**
     * Set the value of [panier_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPanierEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->panier_entreprise !== $v) {
            $this->panier_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PANIER_ENTREPRISE;
        }


        return $this;
    } // setPanierEntreprise()

    /**
     * Set the value of [parametrage_publicite_par_type_procedure] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setParametragePubliciteParTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->parametrage_publicite_par_type_procedure !== $v) {
            $this->parametrage_publicite_par_type_procedure = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE;
        }


        return $this;
    } // setParametragePubliciteParTypeProcedure()

    /**
     * Set the value of [export_decision] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setExportDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->export_decision !== $v) {
            $this->export_decision = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::EXPORT_DECISION;
        }


        return $this;
    } // setExportDecision()

    /**
     * Set the value of [lieu_ouverture_plis_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setLieuOuverturePlisObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_obligatoire !== $v) {
            $this->lieu_ouverture_plis_obligatoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE;
        }


        return $this;
    } // setLieuOuverturePlisObligatoire()

    /**
     * Set the value of [regle_mise_en_ligne_par_entite_coordinatrice] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRegleMiseEnLigneParEntiteCoordinatrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_mise_en_ligne_par_entite_coordinatrice !== $v) {
            $this->regle_mise_en_ligne_par_entite_coordinatrice = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE;
        }


        return $this;
    } // setRegleMiseEnLigneParEntiteCoordinatrice()

    /**
     * Set the value of [gestion_newsletter] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionNewsletter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_newsletter !== $v) {
            $this->gestion_newsletter = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_NEWSLETTER;
        }


        return $this;
    } // setGestionNewsletter()

    /**
     * Set the value of [publicite_opoce] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPubliciteOpoce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publicite_opoce !== $v) {
            $this->publicite_opoce = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PUBLICITE_OPOCE;
        }


        return $this;
    } // setPubliciteOpoce()

    /**
     * Set the value of [gestion_modeles_formulaire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionModelesFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_modeles_formulaire !== $v) {
            $this->gestion_modeles_formulaire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE;
        }


        return $this;
    } // setGestionModelesFormulaire()

    /**
     * Set the value of [gestion_adresses_facturation_jal] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionAdressesFacturationJal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_adresses_facturation_jal !== $v) {
            $this->gestion_adresses_facturation_jal = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL;
        }


        return $this;
    } // setGestionAdressesFacturationJal()

    /**
     * Set the value of [publicite_marches_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPubliciteMarchesEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publicite_marches_en_ligne !== $v) {
            $this->publicite_marches_en_ligne = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE;
        }


        return $this;
    } // setPubliciteMarchesEnLigne()

    /**
     * Set the value of [dossier_additif] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDossierAdditif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dossier_additif !== $v) {
            $this->dossier_additif = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DOSSIER_ADDITIF;
        }


        return $this;
    } // setDossierAdditif()

    /**
     * Set the value of [type_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTypeMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_marche !== $v) {
            $this->type_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TYPE_MARCHE;
        }


        return $this;
    } // setTypeMarche()

    /**
     * Set the value of [type_prestation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setTypePrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_prestation !== $v) {
            $this->type_prestation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::TYPE_PRESTATION;
        }


        return $this;
    } // setTypePrestation()

    /**
     * Set the value of [afficher_tjr_bloc_caracteristique_reponse] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAfficherTjrBlocCaracteristiqueReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afficher_tjr_bloc_caracteristique_reponse !== $v) {
            $this->afficher_tjr_bloc_caracteristique_reponse = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE;
        }


        return $this;
    } // setAfficherTjrBlocCaracteristiqueReponse()

    /**
     * Set the value of [alerte_metier] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAlerteMetier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_metier !== $v) {
            $this->alerte_metier = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ALERTE_METIER;
        }


        return $this;
    } // setAlerteMetier()

    /**
     * Set the value of [bourse_a_la_sous_traitance] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setBourseALaSousTraitance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bourse_a_la_sous_traitance !== $v) {
            $this->bourse_a_la_sous_traitance = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE;
        }


        return $this;
    } // setBourseALaSousTraitance()

    /**
     * Set the value of [publier_guides] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPublierGuides($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publier_guides !== $v) {
            $this->publier_guides = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PUBLIER_GUIDES;
        }


        return $this;
    } // setPublierGuides()

    /**
     * Set the value of [recherche_auto_completion] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setRechercheAutoCompletion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recherche_auto_completion !== $v) {
            $this->recherche_auto_completion = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION;
        }


        return $this;
    } // setRechercheAutoCompletion()

    /**
     * Set the value of [statut_compte_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setStatutCompteEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_compte_entreprise !== $v) {
            $this->statut_compte_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE;
        }


        return $this;
    } // setStatutCompteEntreprise()

    /**
     * Set the value of [gestion_organismes] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGestionOrganismes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_organismes !== $v) {
            $this->gestion_organismes = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GESTION_ORGANISMES;
        }


        return $this;
    } // setGestionOrganismes()

    /**
     * Set the value of [accueil_entreprise_personnalise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAccueilEntreprisePersonnalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accueil_entreprise_personnalise !== $v) {
            $this->accueil_entreprise_personnalise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE;
        }


        return $this;
    } // setAccueilEntreprisePersonnalise()

    /**
     * Set the value of [interface_module_sub] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setInterfaceModuleSub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->interface_module_sub !== $v) {
            $this->interface_module_sub = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB;
        }


        return $this;
    } // setInterfaceModuleSub()

    /**
     * Set the value of [authentification_agent_multi_organismes] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAuthentificationAgentMultiOrganismes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authentification_agent_multi_organismes !== $v) {
            $this->authentification_agent_multi_organismes = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES;
        }


        return $this;
    } // setAuthentificationAgentMultiOrganismes()

    /**
     * Set the value of [partager_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setPartagerConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->partager_consultation !== $v) {
            $this->partager_consultation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION;
        }


        return $this;
    } // setPartagerConsultation()

    /**
     * Set the value of [annuaire_acheteurs_publics] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAnnuaireAcheteursPublics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuaire_acheteurs_publics !== $v) {
            $this->annuaire_acheteurs_publics = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS;
        }


        return $this;
    } // setAnnuaireAcheteursPublics()

    /**
     * Set the value of [entreprise_actions_groupees] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setEntrepriseActionsGroupees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_actions_groupees !== $v) {
            $this->entreprise_actions_groupees = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES;
        }


        return $this;
    } // setEntrepriseActionsGroupees()

    /**
     * Set the value of [lieux_execution_carte] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setLieuxExecutionCarte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieux_execution_carte !== $v) {
            $this->lieux_execution_carte = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE;
        }


        return $this;
    } // setLieuxExecutionCarte()

    /**
     * Set the value of [surcharge_referentiels] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setSurchargeReferentiels($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surcharge_referentiels !== $v) {
            $this->surcharge_referentiels = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS;
        }


        return $this;
    } // setSurchargeReferentiels()

    /**
     * Set the value of [mode_restriction_rgs] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModeRestrictionRgs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_restriction_rgs !== $v) {
            $this->mode_restriction_rgs = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS;
        }


        return $this;
    } // setModeRestrictionRgs()

    /**
     * Set the value of [autre_annonce_decision_resiliation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceDecisionResiliation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_decision_resiliation !== $v) {
            $this->autre_annonce_decision_resiliation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION;
        }


        return $this;
    } // setAutreAnnonceDecisionResiliation()

    /**
     * Set the value of [autre_annonce_synthese_rapport_audit] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAutreAnnonceSyntheseRapportAudit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_annonce_synthese_rapport_audit !== $v) {
            $this->autre_annonce_synthese_rapport_audit = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT;
        }


        return $this;
    } // setAutreAnnonceSyntheseRapportAudit()

    /**
     * Set the value of [fiche_weka] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setFicheWeka($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fiche_weka !== $v) {
            $this->fiche_weka = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::FICHE_WEKA;
        }


        return $this;
    } // setFicheWeka()

    /**
     * Set the value of [generation_automatique_mdp_agent] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGenerationAutomatiqueMdpAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generation_automatique_mdp_agent !== $v) {
            $this->generation_automatique_mdp_agent = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT;
        }


        return $this;
    } // setGenerationAutomatiqueMdpAgent()

    /**
     * Set the value of [generation_automatique_mdp_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGenerationAutomatiqueMdpInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generation_automatique_mdp_inscrit !== $v) {
            $this->generation_automatique_mdp_inscrit = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT;
        }


        return $this;
    } // setGenerationAutomatiqueMdpInscrit()

    /**
     * Set the value of [liste_ac_rgs] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setListeAcRgs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liste_ac_rgs !== $v) {
            $this->liste_ac_rgs = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::LISTE_AC_RGS;
        }


        return $this;
    } // setListeAcRgs()

    /**
     * Set the value of [liste_cons_org] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setListeConsOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liste_cons_org !== $v) {
            $this->liste_cons_org = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::LISTE_CONS_ORG;
        }


        return $this;
    } // setListeConsOrg()

    /**
     * Set the value of [marche_public_simplifie_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setMarchePublicSimplifieEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marche_public_simplifie_entreprise !== $v) {
            $this->marche_public_simplifie_entreprise = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE;
        }


        return $this;
    } // setMarchePublicSimplifieEntreprise()

    /**
     * Set the value of [demande_validation_controleur] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDemandeValidationControleur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->demande_validation_controleur !== $v) {
            $this->demande_validation_controleur = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR;
        }


        return $this;
    } // setDemandeValidationControleur()

    /**
     * Set the value of [acces_exec_contrats] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAccesExecContrats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_exec_contrats !== $v) {
            $this->acces_exec_contrats = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS;
        }


        return $this;
    } // setAccesExecContrats()

    /**
     * Set the value of [forme_juridique_groupement_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setFormeJuridiqueGroupementAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forme_juridique_groupement_attributaire !== $v) {
            $this->forme_juridique_groupement_attributaire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE;
        }


        return $this;
    } // setFormeJuridiqueGroupementAttributaire()

    /**
     * Set the value of [date_limite_remise_plis_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDateLimiteRemisePlisObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_limite_remise_plis_obligatoire !== $v) {
            $this->date_limite_remise_plis_obligatoire = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE;
        }


        return $this;
    } // setDateLimiteRemisePlisObligatoire()

    /**
     * Set the value of [modif_type_procedure] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModifTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modif_type_procedure !== $v) {
            $this->modif_type_procedure = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE;
        }


        return $this;
    } // setModifTypeProcedure()

    /**
     * Set the value of [donnees_complementaires_procedure] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDonneesComplementairesProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->donnees_complementaires_procedure !== $v) {
            $this->donnees_complementaires_procedure = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE;
        }


        return $this;
    } // setDonneesComplementairesProcedure()

    /**
     * Set the value of [forme_marche_forme_prix] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setFormeMarcheFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forme_marche_forme_prix !== $v) {
            $this->forme_marche_forme_prix = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX;
        }


        return $this;
    } // setFormeMarcheFormePrix()

    /**
     * Set the value of [controle_unicite_num_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setControleUniciteNumMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->controle_unicite_num_marche !== $v) {
            $this->controle_unicite_num_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE;
        }


        return $this;
    } // setControleUniciteNumMarche()

    /**
     * Set the value of [affichage_num_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageNumMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_num_marche !== $v) {
            $this->affichage_num_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE;
        }


        return $this;
    } // setAffichageNumMarche()

    /**
     * Set the value of [affichage_date_fin_marche] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageDateFinMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_date_fin_marche !== $v) {
            $this->affichage_date_fin_marche = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE;
        }


        return $this;
    } // setAffichageDateFinMarche()

    /**
     * Set the value of [affichage_ice] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageIce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_ice !== $v) {
            $this->affichage_ice = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_ICE;
        }


        return $this;
    } // setAffichageIce()

    /**
     * Set the value of [blocage_depot_hors_delai] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setBlocageDepotHorsDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->blocage_depot_hors_delai !== $v) {
            $this->blocage_depot_hors_delai = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI;
        }


        return $this;
    } // setBlocageDepotHorsDelai()

    /**
     * Set the value of [activer_suivi_pv] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setActiverSuiviPv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activer_suivi_pv !== $v) {
            $this->activer_suivi_pv = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV;
        }


        return $this;
    } // setActiverSuiviPv()

    /**
     * Set the value of [captcha_validateur] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setCaptchaValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->captcha_validateur !== $v) {
            $this->captcha_validateur = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR;
        }


        return $this;
    } // setCaptchaValidateur()

    /**
     * Set the value of [decision_depuis_resultat_analyse] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionDepuisResultatAnalyse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_depuis_resultat_analyse !== $v) {
            $this->decision_depuis_resultat_analyse = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE;
        }


        return $this;
    } // setDecisionDepuisResultatAnalyse()

    /**
     * Set the value of [module_facture] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModuleFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_facture !== $v) {
            $this->module_facture = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MODULE_FACTURE;
        }


        return $this;
    } // setModuleFacture()

    /**
     * Set the value of [validation_entreprise_facturation] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setValidationEntrepriseFacturation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_entreprise_facturation !== $v) {
            $this->validation_entreprise_facturation = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION;
        }


        return $this;
    } // setValidationEntrepriseFacturation()

    /**
     * Set the value of [bloquer_depot_si_env_non_depose] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setBloquerDepotSiEnvNonDepose($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bloquer_depot_si_env_non_depose !== $v) {
            $this->bloquer_depot_si_env_non_depose = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE;
        }


        return $this;
    } // setBloquerDepotSiEnvNonDepose()

    /**
     * Set the value of [bloquer_depot_signature_invalide] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setBloquerDepotSignatureInvalide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bloquer_depot_signature_invalide !== $v) {
            $this->bloquer_depot_signature_invalide = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE;
        }


        return $this;
    } // setBloquerDepotSignatureInvalide()

    /**
     * Set the value of [consultation_import_lots] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConsultationImportLots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_import_lots !== $v) {
            $this->consultation_import_lots = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS;
        }


        return $this;
    } // setConsultationImportLots()

    /**
     * Set the value of [depot_selection_lots] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDepotSelectionLots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depot_selection_lots !== $v) {
            $this->depot_selection_lots = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS;
        }


        return $this;
    } // setDepotSelectionLots()

    /**
     * Set the value of [modification_lots_apres_mise_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModificationLotsApresMiseEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modification_lots_apres_mise_en_ligne !== $v) {
            $this->modification_lots_apres_mise_en_ligne = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE;
        }


        return $this;
    } // setModificationLotsApresMiseEnLigne()

    /**
     * Set the value of [filtre_bdf_entreprise_valide] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setFiltreBdfEntrepriseValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->filtre_bdf_entreprise_valide !== $v) {
            $this->filtre_bdf_entreprise_valide = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE;
        }


        return $this;
    } // setFiltreBdfEntrepriseValide()

    /**
     * Set the value of [affichage_identifiant_fiscale] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageIdentifiantFiscale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_identifiant_fiscale !== $v) {
            $this->affichage_identifiant_fiscale = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE;
        }


        return $this;
    } // setAffichageIdentifiantFiscale()

    /**
     * Set the value of [decision_creer_contrat] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setDecisionCreerContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_creer_contrat !== $v) {
            $this->decision_creer_contrat = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT;
        }


        return $this;
    } // setDecisionCreerContrat()

    /**
     * Set the value of [generation_bi_cle] column.
     * 
     * @param string $v new value
     * @return CommonConfigurationPlateforme The current object (for fluent API support)
     */
    public function setGenerationBiCle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generation_bi_cle !== $v) {
            $this->generation_bi_cle = $v;
            $this->modifiedColumns[] = CommonConfigurationPlateformePeer::GENERATION_BI_CLE;
        }


        return $this;
    } // setGenerationBiCle()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->code_cpv !== '0') {
                return false;
            }

            if ($this->multi_linguisme_entreprise !== '0') {
                return false;
            }

            if ($this->gestion_fournisseurs_docs_mes_sous_services !== '1') {
                return false;
            }

            if ($this->authenticate_inscrit_by_cert !== '0') {
                return false;
            }

            if ($this->authenticate_inscrit_by_login !== '1') {
                return false;
            }

            if ($this->base_qualifiee_entreprise_insee !== '0') {
                return false;
            }

            if ($this->gestion_boamp_mes_sous_services !== '1') {
                return false;
            }

            if ($this->gestion_bi_cle_mes_sous_services !== '1') {
                return false;
            }

            if ($this->nom_entreprise_toujours_visible !== '0') {
                return false;
            }

            if ($this->gestion_jal_mes_sous_services !== '1') {
                return false;
            }

            if ($this->choix_langue_affichage_consultation !== '0') {
                return false;
            }

            if ($this->compte_entreprise_donnees_complementaires !== '0') {
                return false;
            }

            if ($this->annuaire_entites_achat_visible_par_entreprise !== '1') {
                return false;
            }

            if ($this->affichage_recherche_avancee_agent_ac_sad_transversaux !== '0') {
                return false;
            }

            if ($this->encheres_entreprise !== '0') {
                return false;
            }

            if ($this->socle_interne !== '0') {
                return false;
            }

            if ($this->module_certificat !== '0') {
                return false;
            }

            if ($this->socle_externe_agent !== '0') {
                return false;
            }

            if ($this->afficher_image_organisme !== '0') {
                return false;
            }

            if ($this->socle_externe_entreprise !== '0') {
                return false;
            }

            if ($this->portail_defense_entreprise !== '0') {
                return false;
            }

            if ($this->compte_entreprise_province !== '0') {
                return false;
            }

            if ($this->compte_entreprise_telephone3 !== '0') {
                return false;
            }

            if ($this->compte_entreprise_tax_prof !== '0') {
                return false;
            }

            if ($this->compte_entreprise_rcville !== '0') {
                return false;
            }

            if ($this->compte_entreprise_declaration_honneur !== '0') {
                return false;
            }

            if ($this->compte_entreprise_qualification !== '0') {
                return false;
            }

            if ($this->compte_entreprise_moyens_techniques !== '0') {
                return false;
            }

            if ($this->compte_entreprise_prestations_realisees !== '0') {
                return false;
            }

            if ($this->compte_entreprise_chiffre_affaire_production_biens_services !== '1') {
                return false;
            }

            if ($this->enveloppe_offre_technique !== '0') {
                return false;
            }

            if ($this->compte_inscrit_choix_profil !== '0') {
                return false;
            }

            if ($this->procedure_adaptee !== '1') {
                return false;
            }

            if ($this->compte_entreprise_siren !== '1') {
                return false;
            }

            if ($this->compte_entreprise_activation_inscription_par_agent !== '0') {
                return false;
            }

            if ($this->menu_entreprise_consultations_en_cours !== '0') {
                return false;
            }

            if ($this->compte_entreprise_capital_social !== '0') {
                return false;
            }

            if ($this->mail_activation_compte_inscrit_entreprise !== '0') {
                return false;
            }

            if ($this->decision_date_notification !== '1') {
                return false;
            }

            if ($this->decision_pmi_pme !== '1') {
                return false;
            }

            if ($this->decision_nature_prestations !== '1') {
                return false;
            }

            if ($this->decision_objet_marche !== '1') {
                return false;
            }

            if ($this->decision_note !== '0') {
                return false;
            }

            if ($this->decision_fiche_recensement !== '1') {
                return false;
            }

            if ($this->registre_papier_mail_obligatoire !== '0') {
                return false;
            }

            if ($this->menu_entreprise_indicateurs_cles !== '0') {
                return false;
            }

            if ($this->ajout_rpa_champ_email !== '0') {
                return false;
            }

            if ($this->ajout_rpa_champ_telephone !== '0') {
                return false;
            }

            if ($this->ajout_rpa_champ_fax !== '0') {
                return false;
            }

            if ($this->entreprise_poser_question_sans_pj !== '1') {
                return false;
            }

            if ($this->url_demarche_agent !== '0') {
                return false;
            }

            if ($this->url_demarche_entreprise !== '0') {
                return false;
            }

            if ($this->siret_detail_entite_achat !== '1') {
                return false;
            }

            if ($this->presence_elu !== '1') {
                return false;
            }

            if ($this->gerer_mon_service !== '0') {
                return false;
            }

            if ($this->depouillement_enveloppe_depend_rat_enveloppe_precedente !== '0') {
                return false;
            }

            if ($this->consultation_adresse_retrais_dossiers !== '0') {
                return false;
            }

            if ($this->consultation_adresse_depot_offres !== '0') {
                return false;
            }

            if ($this->consultation_caution_provisoire !== '0') {
                return false;
            }

            if ($this->consultation_lieu_ouverture_plis !== '0') {
                return false;
            }

            if ($this->consultation_qualification !== '0') {
                return false;
            }

            if ($this->consultation_agrement !== '0') {
                return false;
            }

            if ($this->consultation_echantillons_demandes !== '0') {
                return false;
            }

            if ($this->consultation_reunion !== '0') {
                return false;
            }

            if ($this->consultation_visite_des_lieux !== '0') {
                return false;
            }

            if ($this->consultation_prix_acquisition !== '0') {
                return false;
            }

            if ($this->resultat_analyse_avant_decision !== '0') {
                return false;
            }

            if ($this->creation_inscrit_par_ates !== '0') {
                return false;
            }

            if ($this->consultation_variantes_autorisees !== '0') {
                return false;
            }

            if ($this->recherche_avancee_par_type_org !== '0') {
                return false;
            }

            if ($this->menu_agent_societes_exclues !== '0') {
                return false;
            }

            if ($this->recherche_avancee_par_domaines_activite !== '0') {
                return false;
            }

            if ($this->recherche_avancee_par_qualification !== '0') {
                return false;
            }

            if ($this->recherche_avancee_par_agrement !== '0') {
                return false;
            }

            if ($this->contact_administratif_dans_detail_consultation_cote_entreprise !== '0') {
                return false;
            }

            if ($this->consultation_pieces_dossiers !== '0') {
                return false;
            }

            if ($this->gerer_adresses_service !== '0') {
                return false;
            }

            if ($this->traduire_annonces !== '0') {
                return false;
            }

            if ($this->afficher_bloc_actions_dans_details_annonces !== '0') {
                return false;
            }

            if ($this->autoriser_une_seule_reponse_principale_par_entreprise !== '0') {
                return false;
            }

            if ($this->generation_avis !== '0') {
                return false;
            }

            if ($this->passation_appliquer_donnees_ensemble_lots !== '0') {
                return false;
            }

            if ($this->autre_annonce_extrait_pv !== '0') {
                return false;
            }

            if ($this->autre_annonce_rapport_achevement !== '0') {
                return false;
            }

            if ($this->ajout_fichier_joint_autre_annonce !== '0') {
                return false;
            }

            if ($this->consultation_mode_passation !== '0') {
                return false;
            }

            if ($this->compte_entreprise_identifiant_unique !== '0') {
                return false;
            }

            if ($this->gerer_certificats_agent !== '0') {
                return false;
            }

            if ($this->autre_annonce_programme_previsionnel !== '0') {
                return false;
            }

            if ($this->annuler_consultation !== '0') {
                return false;
            }

            if ($this->cfe_entreprise_accessible_par_agent !== '1') {
                return false;
            }

            if ($this->compte_entreprise_code_nace_referentiel !== '0') {
                return false;
            }

            if ($this->code_nut_lt_referentiel !== '0') {
                return false;
            }

            if ($this->lieux_execution !== '1') {
                return false;
            }

            if ($this->compte_entreprise_domaine_activite_lt_referentiel !== '0') {
                return false;
            }

            if ($this->consultation_domaines_activites_lt_referentiel !== '0') {
                return false;
            }

            if ($this->compte_entreprise_agrement_lt_referentiel !== '0') {
                return false;
            }

            if ($this->compte_entreprise_qualification_lt_referentiel !== '0') {
                return false;
            }

            if ($this->reponse_pas_a_pas !== '0') {
                return false;
            }

            if ($this->agent_controle_format_mot_de_passe !== '0') {
                return false;
            }

            if ($this->entreprise_validation_email_inscription !== '0') {
                return false;
            }

            if ($this->telecharger_dce_avec_authentification !== '0') {
                return false;
            }

            if ($this->authentification_basic !== '0') {
                return false;
            }

            if ($this->reglement_consultation !== '1') {
                return false;
            }

            if ($this->annonces_marches !== '0') {
                return false;
            }

            if ($this->cfe_date_fin_validite_obligatoire !== '1') {
                return false;
            }

            if ($this->associer_documents_cfe_consultation !== '0') {
                return false;
            }

            if ($this->compte_entreprise_region !== '0') {
                return false;
            }

            if ($this->compte_entreprise_telephone2 !== '0') {
                return false;
            }

            if ($this->compte_entreprise_cnss !== '0') {
                return false;
            }

            if ($this->compte_entreprise_rcnum !== '0') {
                return false;
            }

            if ($this->compte_entreprise_domaine_activite !== '0') {
                return false;
            }

            if ($this->compte_inscrit_code_nic !== '1') {
                return false;
            }

            if ($this->compte_entreprise_code_ape !== '1') {
                return false;
            }

            if ($this->compte_entreprise_documents_commerciaux !== '0') {
                return false;
            }

            if ($this->compte_entreprise_agrement !== '0') {
                return false;
            }

            if ($this->compte_entreprise_moyens_humains !== '0') {
                return false;
            }

            if ($this->compte_entreprise_activite_domaine_defense !== '1') {
                return false;
            }

            if ($this->compte_entreprise_donnees_financieres !== '0') {
                return false;
            }

            if ($this->enveloppe_anonymat !== '1') {
                return false;
            }

            if ($this->publicite_format_xml !== '1') {
                return false;
            }

            if ($this->article_133_generation_pf !== '1') {
                return false;
            }

            if ($this->entreprise_repondre_consultation_apres_cloture !== '1') {
                return false;
            }

            if ($this->telechargement_outil_verif_horodatage !== '0') {
                return false;
            }

            if ($this->affichage_code_cpv !== '1') {
                return false;
            }

            if ($this->consultation_domaines_activites !== '0') {
                return false;
            }

            if ($this->statistiques_mesure_demat !== '1') {
                return false;
            }

            if ($this->publication_procure !== '0') {
                return false;
            }

            if ($this->menu_entreprise_toutes_les_consultations !== '1') {
                return false;
            }

            if ($this->compte_entreprise_cp_obligatoire !== '1') {
                return false;
            }

            if ($this->annuler_depot !== '0') {
                return false;
            }

            if ($this->traduire_entite_achat_arabe !== '0') {
                return false;
            }

            if ($this->traduire_organisme_arabe !== '0') {
                return false;
            }

            if ($this->decision_cp !== '1') {
                return false;
            }

            if ($this->decision_tranche_budgetaire !== '1') {
                return false;
            }

            if ($this->decision_classement !== '0') {
                return false;
            }

            if ($this->decision_afficher_detail_candidat_par_defaut !== '0') {
                return false;
            }

            if ($this->article_133_upload_fichier !== '0') {
                return false;
            }

            if ($this->multi_linguisme_agent !== '0') {
                return false;
            }

            if ($this->compte_entreprise_ifu !== '0') {
                return false;
            }

            if ($this->gestion_organisme_par_agent !== '0') {
                return false;
            }

            if ($this->utiliser_lucene !== '1') {
                return false;
            }

            if ($this->utiliser_page_html_lieux_execution !== '1') {
                return false;
            }

            if ($this->prado_validateur_format_date !== '1') {
                return false;
            }

            if ($this->prado_validateur_format_email !== '1') {
                return false;
            }

            if ($this->socle_externe_ppp !== '0') {
                return false;
            }

            if ($this->validation_format_champs_stricte !== '0') {
                return false;
            }

            if ($this->poser_question_necessite_authentification !== '0') {
                return false;
            }

            if ($this->autoriser_modif_profil_inscrit_ates !== '0') {
                return false;
            }

            if ($this->unicite_reference_consultation !== '0') {
                return false;
            }

            if ($this->registre_papier_rcnum_rcville_obligatoires !== '0') {
                return false;
            }

            if ($this->registre_papier_adresse_cp_ville_obligatoires !== '0') {
                return false;
            }

            if ($this->telecharger_dce_sans_identification !== '0') {
                return false;
            }

            if ($this->gestion_entreprise_par_agent !== '0') {
                return false;
            }

            if ($this->autoriser_caracteres_speciaux_dans_reference !== '0') {
                return false;
            }

            if ($this->inscription_libre_entreprise !== '1') {
                return false;
            }

            if ($this->afficher_code_service !== '0') {
                return false;
            }

            if ($this->authenticate_agent_by_login !== '1') {
                return false;
            }

            if ($this->authenticate_agent_by_cert !== '0') {
                return false;
            }

            if ($this->generer_acte_dengagement !== '0') {
                return false;
            }

            if ($this->entreprise_controle_format_mot_de_passe !== '0') {
                return false;
            }

            if ($this->autre_annonce_information !== '1') {
                return false;
            }

            if ($this->creer_autre_annonce !== '1') {
                return false;
            }

            if ($this->consultation_clause !== '0') {
                return false;
            }

            if ($this->panier_entreprise !== '0') {
                return false;
            }

            if ($this->parametrage_publicite_par_type_procedure !== '0') {
                return false;
            }

            if ($this->export_decision !== '0') {
                return false;
            }

            if ($this->lieu_ouverture_plis_obligatoire !== '0') {
                return false;
            }

            if ($this->regle_mise_en_ligne_par_entite_coordinatrice !== '0') {
                return false;
            }

            if ($this->gestion_newsletter !== '0') {
                return false;
            }

            if ($this->publicite_opoce !== '0') {
                return false;
            }

            if ($this->gestion_modeles_formulaire !== '0') {
                return false;
            }

            if ($this->gestion_adresses_facturation_jal !== '0') {
                return false;
            }

            if ($this->publicite_marches_en_ligne !== '1') {
                return false;
            }

            if ($this->dossier_additif !== '0') {
                return false;
            }

            if ($this->type_marche !== '0') {
                return false;
            }

            if ($this->type_prestation !== '0') {
                return false;
            }

            if ($this->afficher_tjr_bloc_caracteristique_reponse !== '0') {
                return false;
            }

            if ($this->alerte_metier !== '0') {
                return false;
            }

            if ($this->bourse_a_la_sous_traitance !== '0') {
                return false;
            }

            if ($this->publier_guides !== '0') {
                return false;
            }

            if ($this->recherche_auto_completion !== '0') {
                return false;
            }

            if ($this->statut_compte_entreprise !== '0') {
                return false;
            }

            if ($this->gestion_organismes !== '0') {
                return false;
            }

            if ($this->accueil_entreprise_personnalise !== '0') {
                return false;
            }

            if ($this->interface_module_sub !== '0') {
                return false;
            }

            if ($this->authentification_agent_multi_organismes !== '1') {
                return false;
            }

            if ($this->partager_consultation !== '0') {
                return false;
            }

            if ($this->annuaire_acheteurs_publics !== '0') {
                return false;
            }

            if ($this->entreprise_actions_groupees !== '0') {
                return false;
            }

            if ($this->lieux_execution_carte !== '1') {
                return false;
            }

            if ($this->surcharge_referentiels !== '1') {
                return false;
            }

            if ($this->mode_restriction_rgs !== '0') {
                return false;
            }

            if ($this->autre_annonce_decision_resiliation !== '0') {
                return false;
            }

            if ($this->autre_annonce_synthese_rapport_audit !== '0') {
                return false;
            }

            if ($this->fiche_weka !== '0') {
                return false;
            }

            if ($this->generation_automatique_mdp_agent !== '0') {
                return false;
            }

            if ($this->generation_automatique_mdp_inscrit !== '0') {
                return false;
            }

            if ($this->liste_ac_rgs !== '0') {
                return false;
            }

            if ($this->liste_cons_org !== '0') {
                return false;
            }

            if ($this->marche_public_simplifie_entreprise !== '0') {
                return false;
            }

            if ($this->demande_validation_controleur !== '0') {
                return false;
            }

            if ($this->acces_exec_contrats !== '0') {
                return false;
            }

            if ($this->forme_juridique_groupement_attributaire !== '1') {
                return false;
            }

            if ($this->date_limite_remise_plis_obligatoire !== '1') {
                return false;
            }

            if ($this->modif_type_procedure !== '0') {
                return false;
            }

            if ($this->donnees_complementaires_procedure !== '1') {
                return false;
            }

            if ($this->forme_marche_forme_prix !== '1') {
                return false;
            }

            if ($this->controle_unicite_num_marche !== '0') {
                return false;
            }

            if ($this->affichage_num_marche !== '1') {
                return false;
            }

            if ($this->affichage_date_fin_marche !== '1') {
                return false;
            }

            if ($this->affichage_ice !== '0') {
                return false;
            }

            if ($this->blocage_depot_hors_delai !== '0') {
                return false;
            }

            if ($this->activer_suivi_pv !== '0') {
                return false;
            }

            if ($this->captcha_validateur !== '0') {
                return false;
            }

            if ($this->decision_depuis_resultat_analyse !== '0') {
                return false;
            }

            if ($this->module_facture !== '0') {
                return false;
            }

            if ($this->bloquer_depot_si_env_non_depose !== '0') {
                return false;
            }

            if ($this->bloquer_depot_signature_invalide !== '0') {
                return false;
            }

            if ($this->consultation_import_lots !== '0') {
                return false;
            }

            if ($this->depot_selection_lots !== '0') {
                return false;
            }

            if ($this->modification_lots_apres_mise_en_ligne !== '0') {
                return false;
            }

            if ($this->filtre_bdf_entreprise_valide !== '0') {
                return false;
            }

            if ($this->affichage_identifiant_fiscale !== '0') {
                return false;
            }

            if ($this->decision_creer_contrat !== '0') {
                return false;
            }

            if ($this->generation_bi_cle !== '0') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_auto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->code_cpv = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->multi_linguisme_entreprise = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->gestion_fournisseurs_docs_mes_sous_services = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->authenticate_inscrit_by_cert = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->authenticate_inscrit_by_login = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->base_qualifiee_entreprise_insee = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->gestion_boamp_mes_sous_services = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->gestion_bi_cle_mes_sous_services = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nom_entreprise_toujours_visible = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->gestion_jal_mes_sous_services = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->choix_langue_affichage_consultation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->compte_entreprise_donnees_complementaires = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->annuaire_entites_achat_visible_par_entreprise = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->affichage_recherche_avancee_agent_ac_sad_transversaux = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->encheres_entreprise = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->socle_interne = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->module_certificat = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->socle_externe_agent = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->afficher_image_organisme = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->socle_externe_entreprise = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->portail_defense_entreprise = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->compte_entreprise_province = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->compte_entreprise_telephone3 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->compte_entreprise_tax_prof = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->compte_entreprise_rcville = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->compte_entreprise_declaration_honneur = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->compte_entreprise_qualification = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->compte_entreprise_moyens_techniques = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->compte_entreprise_prestations_realisees = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->compte_entreprise_chiffre_affaire_production_biens_services = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->enveloppe_offre_technique = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->compte_inscrit_choix_profil = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->procedure_adaptee = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->compte_entreprise_siren = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->compte_entreprise_activation_inscription_par_agent = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->menu_entreprise_consultations_en_cours = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->compte_entreprise_capital_social = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->mail_activation_compte_inscrit_entreprise = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->decision_date_notification = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->decision_pmi_pme = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->decision_nature_prestations = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->decision_objet_marche = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->decision_note = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->decision_fiche_recensement = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->registre_papier_mail_obligatoire = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->menu_entreprise_indicateurs_cles = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->ajout_rpa_champ_email = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->ajout_rpa_champ_telephone = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->ajout_rpa_champ_fax = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->entreprise_poser_question_sans_pj = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->url_demarche_agent = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->url_demarche_entreprise = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->siret_detail_entite_achat = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->presence_elu = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->gerer_mon_service = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->depouillement_enveloppe_depend_rat_enveloppe_precedente = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->consultation_adresse_retrais_dossiers = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->consultation_adresse_depot_offres = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->consultation_caution_provisoire = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->consultation_lieu_ouverture_plis = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->consultation_qualification = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->consultation_agrement = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->consultation_echantillons_demandes = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->consultation_reunion = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->consultation_visite_des_lieux = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->consultation_prix_acquisition = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->resultat_analyse_avant_decision = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->creation_inscrit_par_ates = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->consultation_variantes_autorisees = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->recherche_avancee_par_type_org = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->menu_agent_societes_exclues = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->recherche_avancee_par_domaines_activite = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->recherche_avancee_par_qualification = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->recherche_avancee_par_agrement = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->contact_administratif_dans_detail_consultation_cote_entreprise = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->consultation_pieces_dossiers = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->gerer_adresses_service = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->traduire_annonces = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->afficher_bloc_actions_dans_details_annonces = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->autoriser_une_seule_reponse_principale_par_entreprise = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->generation_avis = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->passation_appliquer_donnees_ensemble_lots = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->autre_annonce_extrait_pv = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->autre_annonce_rapport_achevement = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->ajout_fichier_joint_autre_annonce = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->consultation_mode_passation = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->compte_entreprise_identifiant_unique = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->gerer_certificats_agent = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->autre_annonce_programme_previsionnel = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->annuler_consultation = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->cfe_entreprise_accessible_par_agent = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->compte_entreprise_code_nace_referentiel = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->code_nut_lt_referentiel = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->lieux_execution = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->compte_entreprise_domaine_activite_lt_referentiel = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->consultation_domaines_activites_lt_referentiel = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->compte_entreprise_agrement_lt_referentiel = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->compte_entreprise_qualification_lt_referentiel = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->reponse_pas_a_pas = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->agent_controle_format_mot_de_passe = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->entreprise_validation_email_inscription = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->telecharger_dce_avec_authentification = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->authentification_basic = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->reglement_consultation = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->annonces_marches = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->cfe_date_fin_validite_obligatoire = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->associer_documents_cfe_consultation = ($row[$startcol + 107] !== null) ? (string) $row[$startcol + 107] : null;
            $this->compte_entreprise_region = ($row[$startcol + 108] !== null) ? (string) $row[$startcol + 108] : null;
            $this->compte_entreprise_telephone2 = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->compte_entreprise_cnss = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->compte_entreprise_rcnum = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->compte_entreprise_domaine_activite = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->compte_inscrit_code_nic = ($row[$startcol + 113] !== null) ? (string) $row[$startcol + 113] : null;
            $this->compte_entreprise_code_ape = ($row[$startcol + 114] !== null) ? (string) $row[$startcol + 114] : null;
            $this->compte_entreprise_documents_commerciaux = ($row[$startcol + 115] !== null) ? (string) $row[$startcol + 115] : null;
            $this->compte_entreprise_agrement = ($row[$startcol + 116] !== null) ? (string) $row[$startcol + 116] : null;
            $this->compte_entreprise_moyens_humains = ($row[$startcol + 117] !== null) ? (string) $row[$startcol + 117] : null;
            $this->compte_entreprise_activite_domaine_defense = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->compte_entreprise_donnees_financieres = ($row[$startcol + 119] !== null) ? (string) $row[$startcol + 119] : null;
            $this->enveloppe_anonymat = ($row[$startcol + 120] !== null) ? (string) $row[$startcol + 120] : null;
            $this->publicite_format_xml = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
            $this->article_133_generation_pf = ($row[$startcol + 122] !== null) ? (string) $row[$startcol + 122] : null;
            $this->entreprise_repondre_consultation_apres_cloture = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->telechargement_outil_verif_horodatage = ($row[$startcol + 124] !== null) ? (string) $row[$startcol + 124] : null;
            $this->affichage_code_cpv = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->consultation_domaines_activites = ($row[$startcol + 126] !== null) ? (string) $row[$startcol + 126] : null;
            $this->statistiques_mesure_demat = ($row[$startcol + 127] !== null) ? (string) $row[$startcol + 127] : null;
            $this->publication_procure = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->menu_entreprise_toutes_les_consultations = ($row[$startcol + 129] !== null) ? (string) $row[$startcol + 129] : null;
            $this->compte_entreprise_cp_obligatoire = ($row[$startcol + 130] !== null) ? (string) $row[$startcol + 130] : null;
            $this->annuler_depot = ($row[$startcol + 131] !== null) ? (string) $row[$startcol + 131] : null;
            $this->traduire_entite_achat_arabe = ($row[$startcol + 132] !== null) ? (string) $row[$startcol + 132] : null;
            $this->traduire_organisme_arabe = ($row[$startcol + 133] !== null) ? (string) $row[$startcol + 133] : null;
            $this->decision_cp = ($row[$startcol + 134] !== null) ? (string) $row[$startcol + 134] : null;
            $this->decision_tranche_budgetaire = ($row[$startcol + 135] !== null) ? (string) $row[$startcol + 135] : null;
            $this->decision_classement = ($row[$startcol + 136] !== null) ? (string) $row[$startcol + 136] : null;
            $this->decision_afficher_detail_candidat_par_defaut = ($row[$startcol + 137] !== null) ? (string) $row[$startcol + 137] : null;
            $this->article_133_upload_fichier = ($row[$startcol + 138] !== null) ? (string) $row[$startcol + 138] : null;
            $this->multi_linguisme_agent = ($row[$startcol + 139] !== null) ? (string) $row[$startcol + 139] : null;
            $this->compte_entreprise_ifu = ($row[$startcol + 140] !== null) ? (string) $row[$startcol + 140] : null;
            $this->gestion_organisme_par_agent = ($row[$startcol + 141] !== null) ? (string) $row[$startcol + 141] : null;
            $this->utiliser_lucene = ($row[$startcol + 142] !== null) ? (string) $row[$startcol + 142] : null;
            $this->utiliser_page_html_lieux_execution = ($row[$startcol + 143] !== null) ? (string) $row[$startcol + 143] : null;
            $this->prado_validateur_format_date = ($row[$startcol + 144] !== null) ? (string) $row[$startcol + 144] : null;
            $this->prado_validateur_format_email = ($row[$startcol + 145] !== null) ? (string) $row[$startcol + 145] : null;
            $this->socle_externe_ppp = ($row[$startcol + 146] !== null) ? (string) $row[$startcol + 146] : null;
            $this->validation_format_champs_stricte = ($row[$startcol + 147] !== null) ? (string) $row[$startcol + 147] : null;
            $this->poser_question_necessite_authentification = ($row[$startcol + 148] !== null) ? (string) $row[$startcol + 148] : null;
            $this->autoriser_modif_profil_inscrit_ates = ($row[$startcol + 149] !== null) ? (string) $row[$startcol + 149] : null;
            $this->unicite_reference_consultation = ($row[$startcol + 150] !== null) ? (string) $row[$startcol + 150] : null;
            $this->registre_papier_rcnum_rcville_obligatoires = ($row[$startcol + 151] !== null) ? (string) $row[$startcol + 151] : null;
            $this->registre_papier_adresse_cp_ville_obligatoires = ($row[$startcol + 152] !== null) ? (string) $row[$startcol + 152] : null;
            $this->telecharger_dce_sans_identification = ($row[$startcol + 153] !== null) ? (string) $row[$startcol + 153] : null;
            $this->gestion_entreprise_par_agent = ($row[$startcol + 154] !== null) ? (string) $row[$startcol + 154] : null;
            $this->autoriser_caracteres_speciaux_dans_reference = ($row[$startcol + 155] !== null) ? (string) $row[$startcol + 155] : null;
            $this->inscription_libre_entreprise = ($row[$startcol + 156] !== null) ? (string) $row[$startcol + 156] : null;
            $this->afficher_code_service = ($row[$startcol + 157] !== null) ? (string) $row[$startcol + 157] : null;
            $this->authenticate_agent_by_login = ($row[$startcol + 158] !== null) ? (string) $row[$startcol + 158] : null;
            $this->authenticate_agent_by_cert = ($row[$startcol + 159] !== null) ? (string) $row[$startcol + 159] : null;
            $this->generer_acte_dengagement = ($row[$startcol + 160] !== null) ? (string) $row[$startcol + 160] : null;
            $this->entreprise_controle_format_mot_de_passe = ($row[$startcol + 161] !== null) ? (string) $row[$startcol + 161] : null;
            $this->autre_annonce_information = ($row[$startcol + 162] !== null) ? (string) $row[$startcol + 162] : null;
            $this->creer_autre_annonce = ($row[$startcol + 163] !== null) ? (string) $row[$startcol + 163] : null;
            $this->consultation_clause = ($row[$startcol + 164] !== null) ? (string) $row[$startcol + 164] : null;
            $this->panier_entreprise = ($row[$startcol + 165] !== null) ? (string) $row[$startcol + 165] : null;
            $this->parametrage_publicite_par_type_procedure = ($row[$startcol + 166] !== null) ? (string) $row[$startcol + 166] : null;
            $this->export_decision = ($row[$startcol + 167] !== null) ? (string) $row[$startcol + 167] : null;
            $this->lieu_ouverture_plis_obligatoire = ($row[$startcol + 168] !== null) ? (string) $row[$startcol + 168] : null;
            $this->regle_mise_en_ligne_par_entite_coordinatrice = ($row[$startcol + 169] !== null) ? (string) $row[$startcol + 169] : null;
            $this->gestion_newsletter = ($row[$startcol + 170] !== null) ? (string) $row[$startcol + 170] : null;
            $this->publicite_opoce = ($row[$startcol + 171] !== null) ? (string) $row[$startcol + 171] : null;
            $this->gestion_modeles_formulaire = ($row[$startcol + 172] !== null) ? (string) $row[$startcol + 172] : null;
            $this->gestion_adresses_facturation_jal = ($row[$startcol + 173] !== null) ? (string) $row[$startcol + 173] : null;
            $this->publicite_marches_en_ligne = ($row[$startcol + 174] !== null) ? (string) $row[$startcol + 174] : null;
            $this->dossier_additif = ($row[$startcol + 175] !== null) ? (string) $row[$startcol + 175] : null;
            $this->type_marche = ($row[$startcol + 176] !== null) ? (string) $row[$startcol + 176] : null;
            $this->type_prestation = ($row[$startcol + 177] !== null) ? (string) $row[$startcol + 177] : null;
            $this->afficher_tjr_bloc_caracteristique_reponse = ($row[$startcol + 178] !== null) ? (string) $row[$startcol + 178] : null;
            $this->alerte_metier = ($row[$startcol + 179] !== null) ? (string) $row[$startcol + 179] : null;
            $this->bourse_a_la_sous_traitance = ($row[$startcol + 180] !== null) ? (string) $row[$startcol + 180] : null;
            $this->publier_guides = ($row[$startcol + 181] !== null) ? (string) $row[$startcol + 181] : null;
            $this->recherche_auto_completion = ($row[$startcol + 182] !== null) ? (string) $row[$startcol + 182] : null;
            $this->statut_compte_entreprise = ($row[$startcol + 183] !== null) ? (string) $row[$startcol + 183] : null;
            $this->gestion_organismes = ($row[$startcol + 184] !== null) ? (string) $row[$startcol + 184] : null;
            $this->accueil_entreprise_personnalise = ($row[$startcol + 185] !== null) ? (string) $row[$startcol + 185] : null;
            $this->interface_module_sub = ($row[$startcol + 186] !== null) ? (string) $row[$startcol + 186] : null;
            $this->authentification_agent_multi_organismes = ($row[$startcol + 187] !== null) ? (string) $row[$startcol + 187] : null;
            $this->partager_consultation = ($row[$startcol + 188] !== null) ? (string) $row[$startcol + 188] : null;
            $this->annuaire_acheteurs_publics = ($row[$startcol + 189] !== null) ? (string) $row[$startcol + 189] : null;
            $this->entreprise_actions_groupees = ($row[$startcol + 190] !== null) ? (string) $row[$startcol + 190] : null;
            $this->lieux_execution_carte = ($row[$startcol + 191] !== null) ? (string) $row[$startcol + 191] : null;
            $this->surcharge_referentiels = ($row[$startcol + 192] !== null) ? (string) $row[$startcol + 192] : null;
            $this->mode_restriction_rgs = ($row[$startcol + 193] !== null) ? (string) $row[$startcol + 193] : null;
            $this->autre_annonce_decision_resiliation = ($row[$startcol + 194] !== null) ? (string) $row[$startcol + 194] : null;
            $this->autre_annonce_synthese_rapport_audit = ($row[$startcol + 195] !== null) ? (string) $row[$startcol + 195] : null;
            $this->fiche_weka = ($row[$startcol + 196] !== null) ? (string) $row[$startcol + 196] : null;
            $this->generation_automatique_mdp_agent = ($row[$startcol + 197] !== null) ? (string) $row[$startcol + 197] : null;
            $this->generation_automatique_mdp_inscrit = ($row[$startcol + 198] !== null) ? (string) $row[$startcol + 198] : null;
            $this->liste_ac_rgs = ($row[$startcol + 199] !== null) ? (string) $row[$startcol + 199] : null;
            $this->liste_cons_org = ($row[$startcol + 200] !== null) ? (string) $row[$startcol + 200] : null;
            $this->marche_public_simplifie_entreprise = ($row[$startcol + 201] !== null) ? (string) $row[$startcol + 201] : null;
            $this->demande_validation_controleur = ($row[$startcol + 202] !== null) ? (string) $row[$startcol + 202] : null;
            $this->acces_exec_contrats = ($row[$startcol + 203] !== null) ? (string) $row[$startcol + 203] : null;
            $this->forme_juridique_groupement_attributaire = ($row[$startcol + 204] !== null) ? (string) $row[$startcol + 204] : null;
            $this->date_limite_remise_plis_obligatoire = ($row[$startcol + 205] !== null) ? (string) $row[$startcol + 205] : null;
            $this->modif_type_procedure = ($row[$startcol + 206] !== null) ? (string) $row[$startcol + 206] : null;
            $this->donnees_complementaires_procedure = ($row[$startcol + 207] !== null) ? (string) $row[$startcol + 207] : null;
            $this->forme_marche_forme_prix = ($row[$startcol + 208] !== null) ? (string) $row[$startcol + 208] : null;
            $this->controle_unicite_num_marche = ($row[$startcol + 209] !== null) ? (string) $row[$startcol + 209] : null;
            $this->affichage_num_marche = ($row[$startcol + 210] !== null) ? (string) $row[$startcol + 210] : null;
            $this->affichage_date_fin_marche = ($row[$startcol + 211] !== null) ? (string) $row[$startcol + 211] : null;
            $this->affichage_ice = ($row[$startcol + 212] !== null) ? (string) $row[$startcol + 212] : null;
            $this->blocage_depot_hors_delai = ($row[$startcol + 213] !== null) ? (string) $row[$startcol + 213] : null;
            $this->activer_suivi_pv = ($row[$startcol + 214] !== null) ? (string) $row[$startcol + 214] : null;
            $this->captcha_validateur = ($row[$startcol + 215] !== null) ? (string) $row[$startcol + 215] : null;
            $this->decision_depuis_resultat_analyse = ($row[$startcol + 216] !== null) ? (string) $row[$startcol + 216] : null;
            $this->module_facture = ($row[$startcol + 217] !== null) ? (string) $row[$startcol + 217] : null;
            $this->validation_entreprise_facturation = ($row[$startcol + 218] !== null) ? (string) $row[$startcol + 218] : null;
            $this->bloquer_depot_si_env_non_depose = ($row[$startcol + 219] !== null) ? (string) $row[$startcol + 219] : null;
            $this->bloquer_depot_signature_invalide = ($row[$startcol + 220] !== null) ? (string) $row[$startcol + 220] : null;
            $this->consultation_import_lots = ($row[$startcol + 221] !== null) ? (string) $row[$startcol + 221] : null;
            $this->depot_selection_lots = ($row[$startcol + 222] !== null) ? (string) $row[$startcol + 222] : null;
            $this->modification_lots_apres_mise_en_ligne = ($row[$startcol + 223] !== null) ? (string) $row[$startcol + 223] : null;
            $this->filtre_bdf_entreprise_valide = ($row[$startcol + 224] !== null) ? (string) $row[$startcol + 224] : null;
            $this->affichage_identifiant_fiscale = ($row[$startcol + 225] !== null) ? (string) $row[$startcol + 225] : null;
            $this->decision_creer_contrat = ($row[$startcol + 226] !== null) ? (string) $row[$startcol + 226] : null;
            $this->generation_bi_cle = ($row[$startcol + 227] !== null) ? (string) $row[$startcol + 227] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 228; // 228 = CommonConfigurationPlateformePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonConfigurationPlateforme object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonConfigurationPlateformePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonConfigurationPlateformeQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CommonConfigurationPlateformePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = CommonConfigurationPlateformePeer::ID_AUTO;
        if (null !== $this->id_auto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonConfigurationPlateformePeer::ID_AUTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ID_AUTO)) {
            $modifiedColumns[':p' . $index++]  = '`id_auto`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CODE_CPV)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`multi_linguisme_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_fournisseurs_docs_mes_sous_services`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT)) {
            $modifiedColumns[':p' . $index++]  = '`authenticate_inscrit_by_cert`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`authenticate_inscrit_by_login`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE)) {
            $modifiedColumns[':p' . $index++]  = '`base_qualifiee_entreprise_insee`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_boamp_mes_sous_services`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_bi_cle_mes_sous_services`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise_toujours_visible`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_jal_mes_sous_services`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`choix_langue_affichage_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_donnees_complementaires`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`annuaire_entites_achat_visible_par_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_recherche_avancee_agent_ac_sad_transversaux`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`encheres_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`socle_interne`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODULE_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`module_certificat`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`socle_externe_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`afficher_image_organisme`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`socle_externe_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`portail_defense_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_province`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_telephone3`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_tax_prof`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_rcville`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_declaration_honneur`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_qualification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_moyens_techniques`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_prestations_realisees`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_chiffre_affaire_production_biens_services`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`enveloppe_offre_technique`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_inscrit_choix_profil`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE)) {
            $modifiedColumns[':p' . $index++]  = '`procedure_adaptee`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_siren`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_activation_inscription_par_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS)) {
            $modifiedColumns[':p' . $index++]  = '`menu_entreprise_consultations_en_cours`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_capital_social`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`mail_activation_compte_inscrit_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`decision_date_notification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_PMI_PME)) {
            $modifiedColumns[':p' . $index++]  = '`decision_pmi_pme`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`decision_nature_prestations`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`decision_objet_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`decision_note`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`decision_fiche_recensement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`registre_papier_mail_obligatoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES)) {
            $modifiedColumns[':p' . $index++]  = '`menu_entreprise_indicateurs_cles`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ajout_rpa_champ_email`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`ajout_rpa_champ_telephone`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX)) {
            $modifiedColumns[':p' . $index++]  = '`ajout_rpa_champ_fax`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_poser_question_sans_pj`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`url_demarche_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`url_demarche_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT)) {
            $modifiedColumns[':p' . $index++]  = '`siret_detail_entite_achat`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRESENCE_ELU)) {
            $modifiedColumns[':p' . $index++]  = '`presence_elu`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_MON_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_mon_service`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE)) {
            $modifiedColumns[':p' . $index++]  = '`depouillement_enveloppe_depend_RAT_enveloppe_precedente`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_adresse_retrais_dossiers`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_adresse_depot_offres`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_caution_provisoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_lieu_ouverture_plis`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_qualification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_agrement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_echantillons_demandes`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_reunion`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_visite_des_lieux`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_prix_acquisition`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`resultat_analyse_avant_decision`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES)) {
            $modifiedColumns[':p' . $index++]  = '`creation_inscrit_par_ates`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_variantes_autorisees`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`recherche_avancee_par_type_org`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES)) {
            $modifiedColumns[':p' . $index++]  = '`menu_agent_societes_exclues`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE)) {
            $modifiedColumns[':p' . $index++]  = '`recherche_avancee_par_domaines_activite`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`recherche_avancee_par_qualification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`recherche_avancee_par_agrement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`contact_administratif_dans_detail_consultation_cote_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_pieces_dossiers`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_adresses_service`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES)) {
            $modifiedColumns[':p' . $index++]  = '`traduire_annonces`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES)) {
            $modifiedColumns[':p' . $index++]  = '`afficher_bloc_actions_dans_details_annonces`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`autoriser_une_seule_reponse_principale_par_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`generation_avis`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS)) {
            $modifiedColumns[':p' . $index++]  = '`passation_appliquer_donnees_ensemble_lots`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_extrait_pv`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_rapport_achevement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE)) {
            $modifiedColumns[':p' . $index++]  = '`ajout_fichier_joint_autre_annonce`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_mode_passation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_identifiant_unique`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_certificats_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_programme_previsionnel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNULER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`annuler_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`cfe_entreprise_accessible_par_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_code_nace_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`code_nut_lt_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEUX_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`lieux_execution`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_domaine_activite_lt_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_domaines_activites_lt_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_agrement_lt_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_qualification_lt_referentiel`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_pas_a_pas`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE)) {
            $modifiedColumns[':p' . $index++]  = '`agent_controle_format_mot_de_passe`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_validation_email_inscription`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`telecharger_dce_avec_authentification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC)) {
            $modifiedColumns[':p' . $index++]  = '`authentification_basic`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`reglement_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNONCES_MARCHES)) {
            $modifiedColumns[':p' . $index++]  = '`annonces_marches`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`cfe_date_fin_validite_obligatoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`associer_documents_cfe_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_region`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_telephone2`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_cnss`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_rcnum`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_domaine_activite`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC)) {
            $modifiedColumns[':p' . $index++]  = '`compte_inscrit_code_nic`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_code_ape`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_documents_commerciaux`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_agrement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_moyens_humains`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_activite_domaine_defense`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_donnees_financieres`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT)) {
            $modifiedColumns[':p' . $index++]  = '`enveloppe_anonymat`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML)) {
            $modifiedColumns[':p' . $index++]  = '`publicite_format_xml`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF)) {
            $modifiedColumns[':p' . $index++]  = '`article_133_generation_pf`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_repondre_consultation_apres_cloture`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`telechargement_outil_verif_horodatage`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_code_cpv`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_domaines_activites`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT)) {
            $modifiedColumns[':p' . $index++]  = '`statistiques_mesure_demat`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICATION_PROCURE)) {
            $modifiedColumns[':p' . $index++]  = '`publication_procure`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`menu_entreprise_toutes_les_consultations`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_cp_obligatoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNULER_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`annuler_depot`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE)) {
            $modifiedColumns[':p' . $index++]  = '`traduire_entite_achat_arabe`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE)) {
            $modifiedColumns[':p' . $index++]  = '`traduire_organisme_arabe`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CP)) {
            $modifiedColumns[':p' . $index++]  = '`decision_cp`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`decision_tranche_budgetaire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CLASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`decision_classement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT)) {
            $modifiedColumns[':p' . $index++]  = '`decision_afficher_detail_candidat_par_defaut`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`article_133_upload_fichier`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`multi_linguisme_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU)) {
            $modifiedColumns[':p' . $index++]  = '`compte_entreprise_ifu`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_organisme_par_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UTILISER_LUCENE)) {
            $modifiedColumns[':p' . $index++]  = '`utiliser_lucene`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`utiliser_page_html_lieux_execution`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`prado_validateur_format_date`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`prado_validateur_format_email`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP)) {
            $modifiedColumns[':p' . $index++]  = '`socle_externe_ppp`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE)) {
            $modifiedColumns[':p' . $index++]  = '`validation_format_champs_stricte`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`poser_question_necessite_authentification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES)) {
            $modifiedColumns[':p' . $index++]  = '`autoriser_modif_profil_inscrit_ates`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`unicite_reference_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES)) {
            $modifiedColumns[':p' . $index++]  = '`registre_papier_rcnum_rcville_obligatoires`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES)) {
            $modifiedColumns[':p' . $index++]  = '`registre_papier_adresse_cp_ville_obligatoires`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`telecharger_dce_sans_identification`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_entreprise_par_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`autoriser_caracteres_speciaux_dans_reference`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`inscription_libre_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`afficher_code_service`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`authenticate_agent_by_login`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT)) {
            $modifiedColumns[':p' . $index++]  = '`authenticate_agent_by_cert`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`generer_acte_dengagement`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_controle_format_mot_de_passe`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_information`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE)) {
            $modifiedColumns[':p' . $index++]  = '`creer_autre_annonce`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_clause`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PANIER_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`panier_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`parametrage_publicite_par_type_procedure`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::EXPORT_DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`export_decision`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_obligatoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE)) {
            $modifiedColumns[':p' . $index++]  = '`regle_mise_en_ligne_par_entite_coordinatrice`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_NEWSLETTER)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_newsletter`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_OPOCE)) {
            $modifiedColumns[':p' . $index++]  = '`publicite_opoce`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_modeles_formulaire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_adresses_facturation_JAL`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`publicite_marches_en_ligne`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DOSSIER_ADDITIF)) {
            $modifiedColumns[':p' . $index++]  = '`dossier_additif`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TYPE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`type_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TYPE_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_prestation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`afficher_tjr_bloc_caracteristique_reponse`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ALERTE_METIER)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_metier`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE)) {
            $modifiedColumns[':p' . $index++]  = '`bourse_a_la_sous_traitance`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLIER_GUIDES)) {
            $modifiedColumns[':p' . $index++]  = '`publier_guides`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION)) {
            $modifiedColumns[':p' . $index++]  = '`recherche_auto_completion`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_compte_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ORGANISMES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_organismes`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE)) {
            $modifiedColumns[':p' . $index++]  = '`accueil_entreprise_personnalise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB)) {
            $modifiedColumns[':p' . $index++]  = '`interface_module_sub`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES)) {
            $modifiedColumns[':p' . $index++]  = '`authentification_agent_multi_organismes`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`partager_consultation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS)) {
            $modifiedColumns[':p' . $index++]  = '`annuaire_acheteurs_publics`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_actions_groupees`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE)) {
            $modifiedColumns[':p' . $index++]  = '`lieux_execution_carte`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS)) {
            $modifiedColumns[':p' . $index++]  = '`surcharge_referentiels`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS)) {
            $modifiedColumns[':p' . $index++]  = '`Mode_Restriction_RGS`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_decision_resiliation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT)) {
            $modifiedColumns[':p' . $index++]  = '`autre_annonce_synthese_rapport_audit`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FICHE_WEKA)) {
            $modifiedColumns[':p' . $index++]  = '`fiche_weka`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`generation_automatique_mdp_agent`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`generation_automatique_mdp_inscrit`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LISTE_AC_RGS)) {
            $modifiedColumns[':p' . $index++]  = '`liste_ac_rgs`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LISTE_CONS_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`liste_cons_org`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`marche_public_simplifie_entreprise`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR)) {
            $modifiedColumns[':p' . $index++]  = '`demande_validation_controleur`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS)) {
            $modifiedColumns[':p' . $index++]  = '`acces_exec_contrats`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`forme_juridique_groupement_attributaire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`date_limite_remise_plis_obligatoire`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`modif_type_procedure`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`donnees_complementaires_procedure`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`forme_marche_forme_prix`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`controle_unicite_num_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_num_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_date_fin_marche`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_ICE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_ice`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`blocage_depot_hors_delai`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV)) {
            $modifiedColumns[':p' . $index++]  = '`activer_suivi_pv`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`captcha_validateur`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`decision_depuis_resultat_analyse`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODULE_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`module_facture`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION)) {
            $modifiedColumns[':p' . $index++]  = '`validation_entreprise_facturation`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE)) {
            $modifiedColumns[':p' . $index++]  = '`bloquer_depot_si_env_non_depose`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`bloquer_depot_signature_invalide`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_import_lots`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS)) {
            $modifiedColumns[':p' . $index++]  = '`depot_selection_lots`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`modification_lots_apres_mise_en_ligne`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`filtre_bdf_entreprise_valide`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_identifiant_fiscale`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`decision_creer_contrat`';
        }
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_BI_CLE)) {
            $modifiedColumns[':p' . $index++]  = '`generation_bi_cle`';
        }

        $sql = sprintf(
            'INSERT INTO `configuration_plateforme` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_auto`':						
                        $stmt->bindValue($identifier, $this->id_auto, PDO::PARAM_INT);
                        break;
                    case '`code_cpv`':						
                        $stmt->bindValue($identifier, $this->code_cpv, PDO::PARAM_STR);
                        break;
                    case '`multi_linguisme_entreprise`':						
                        $stmt->bindValue($identifier, $this->multi_linguisme_entreprise, PDO::PARAM_STR);
                        break;
                    case '`gestion_fournisseurs_docs_mes_sous_services`':						
                        $stmt->bindValue($identifier, $this->gestion_fournisseurs_docs_mes_sous_services, PDO::PARAM_STR);
                        break;
                    case '`authenticate_inscrit_by_cert`':						
                        $stmt->bindValue($identifier, $this->authenticate_inscrit_by_cert, PDO::PARAM_STR);
                        break;
                    case '`authenticate_inscrit_by_login`':						
                        $stmt->bindValue($identifier, $this->authenticate_inscrit_by_login, PDO::PARAM_STR);
                        break;
                    case '`base_qualifiee_entreprise_insee`':						
                        $stmt->bindValue($identifier, $this->base_qualifiee_entreprise_insee, PDO::PARAM_STR);
                        break;
                    case '`gestion_boamp_mes_sous_services`':						
                        $stmt->bindValue($identifier, $this->gestion_boamp_mes_sous_services, PDO::PARAM_STR);
                        break;
                    case '`gestion_bi_cle_mes_sous_services`':						
                        $stmt->bindValue($identifier, $this->gestion_bi_cle_mes_sous_services, PDO::PARAM_STR);
                        break;
                    case '`nom_entreprise_toujours_visible`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise_toujours_visible, PDO::PARAM_STR);
                        break;
                    case '`gestion_jal_mes_sous_services`':						
                        $stmt->bindValue($identifier, $this->gestion_jal_mes_sous_services, PDO::PARAM_STR);
                        break;
                    case '`choix_langue_affichage_consultation`':						
                        $stmt->bindValue($identifier, $this->choix_langue_affichage_consultation, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_donnees_complementaires`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_donnees_complementaires, PDO::PARAM_STR);
                        break;
                    case '`annuaire_entites_achat_visible_par_entreprise`':						
                        $stmt->bindValue($identifier, $this->annuaire_entites_achat_visible_par_entreprise, PDO::PARAM_STR);
                        break;
                    case '`affichage_recherche_avancee_agent_ac_sad_transversaux`':						
                        $stmt->bindValue($identifier, $this->affichage_recherche_avancee_agent_ac_sad_transversaux, PDO::PARAM_STR);
                        break;
                    case '`encheres_entreprise`':						
                        $stmt->bindValue($identifier, $this->encheres_entreprise, PDO::PARAM_STR);
                        break;
                    case '`socle_interne`':						
                        $stmt->bindValue($identifier, $this->socle_interne, PDO::PARAM_STR);
                        break;
                    case '`module_certificat`':						
                        $stmt->bindValue($identifier, $this->module_certificat, PDO::PARAM_STR);
                        break;
                    case '`socle_externe_agent`':						
                        $stmt->bindValue($identifier, $this->socle_externe_agent, PDO::PARAM_STR);
                        break;
                    case '`afficher_image_organisme`':						
                        $stmt->bindValue($identifier, $this->afficher_image_organisme, PDO::PARAM_STR);
                        break;
                    case '`socle_externe_entreprise`':						
                        $stmt->bindValue($identifier, $this->socle_externe_entreprise, PDO::PARAM_STR);
                        break;
                    case '`portail_defense_entreprise`':						
                        $stmt->bindValue($identifier, $this->portail_defense_entreprise, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_province`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_province, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_telephone3`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_telephone3, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_tax_prof`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_tax_prof, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_rcville`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_rcville, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_declaration_honneur`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_declaration_honneur, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_qualification`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_qualification, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_moyens_techniques`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_moyens_techniques, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_prestations_realisees`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_prestations_realisees, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_chiffre_affaire_production_biens_services`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_chiffre_affaire_production_biens_services, PDO::PARAM_STR);
                        break;
                    case '`enveloppe_offre_technique`':						
                        $stmt->bindValue($identifier, $this->enveloppe_offre_technique, PDO::PARAM_STR);
                        break;
                    case '`compte_inscrit_choix_profil`':						
                        $stmt->bindValue($identifier, $this->compte_inscrit_choix_profil, PDO::PARAM_STR);
                        break;
                    case '`procedure_adaptee`':						
                        $stmt->bindValue($identifier, $this->procedure_adaptee, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_siren`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_siren, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_activation_inscription_par_agent`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_activation_inscription_par_agent, PDO::PARAM_STR);
                        break;
                    case '`menu_entreprise_consultations_en_cours`':						
                        $stmt->bindValue($identifier, $this->menu_entreprise_consultations_en_cours, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_capital_social`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_capital_social, PDO::PARAM_STR);
                        break;
                    case '`mail_activation_compte_inscrit_entreprise`':						
                        $stmt->bindValue($identifier, $this->mail_activation_compte_inscrit_entreprise, PDO::PARAM_STR);
                        break;
                    case '`decision_date_notification`':						
                        $stmt->bindValue($identifier, $this->decision_date_notification, PDO::PARAM_STR);
                        break;
                    case '`decision_pmi_pme`':						
                        $stmt->bindValue($identifier, $this->decision_pmi_pme, PDO::PARAM_STR);
                        break;
                    case '`decision_nature_prestations`':						
                        $stmt->bindValue($identifier, $this->decision_nature_prestations, PDO::PARAM_STR);
                        break;
                    case '`decision_objet_marche`':						
                        $stmt->bindValue($identifier, $this->decision_objet_marche, PDO::PARAM_STR);
                        break;
                    case '`decision_note`':						
                        $stmt->bindValue($identifier, $this->decision_note, PDO::PARAM_STR);
                        break;
                    case '`decision_fiche_recensement`':						
                        $stmt->bindValue($identifier, $this->decision_fiche_recensement, PDO::PARAM_STR);
                        break;
                    case '`registre_papier_mail_obligatoire`':						
                        $stmt->bindValue($identifier, $this->registre_papier_mail_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`menu_entreprise_indicateurs_cles`':						
                        $stmt->bindValue($identifier, $this->menu_entreprise_indicateurs_cles, PDO::PARAM_STR);
                        break;
                    case '`ajout_rpa_champ_email`':						
                        $stmt->bindValue($identifier, $this->ajout_rpa_champ_email, PDO::PARAM_STR);
                        break;
                    case '`ajout_rpa_champ_telephone`':						
                        $stmt->bindValue($identifier, $this->ajout_rpa_champ_telephone, PDO::PARAM_STR);
                        break;
                    case '`ajout_rpa_champ_fax`':						
                        $stmt->bindValue($identifier, $this->ajout_rpa_champ_fax, PDO::PARAM_STR);
                        break;
                    case '`entreprise_poser_question_sans_pj`':						
                        $stmt->bindValue($identifier, $this->entreprise_poser_question_sans_pj, PDO::PARAM_STR);
                        break;
                    case '`url_demarche_agent`':						
                        $stmt->bindValue($identifier, $this->url_demarche_agent, PDO::PARAM_STR);
                        break;
                    case '`url_demarche_entreprise`':						
                        $stmt->bindValue($identifier, $this->url_demarche_entreprise, PDO::PARAM_STR);
                        break;
                    case '`siret_detail_entite_achat`':						
                        $stmt->bindValue($identifier, $this->siret_detail_entite_achat, PDO::PARAM_STR);
                        break;
                    case '`presence_elu`':						
                        $stmt->bindValue($identifier, $this->presence_elu, PDO::PARAM_STR);
                        break;
                    case '`gerer_mon_service`':						
                        $stmt->bindValue($identifier, $this->gerer_mon_service, PDO::PARAM_STR);
                        break;
                    case '`depouillement_enveloppe_depend_RAT_enveloppe_precedente`':						
                        $stmt->bindValue($identifier, $this->depouillement_enveloppe_depend_rat_enveloppe_precedente, PDO::PARAM_STR);
                        break;
                    case '`consultation_adresse_retrais_dossiers`':						
                        $stmt->bindValue($identifier, $this->consultation_adresse_retrais_dossiers, PDO::PARAM_STR);
                        break;
                    case '`consultation_adresse_depot_offres`':						
                        $stmt->bindValue($identifier, $this->consultation_adresse_depot_offres, PDO::PARAM_STR);
                        break;
                    case '`consultation_caution_provisoire`':						
                        $stmt->bindValue($identifier, $this->consultation_caution_provisoire, PDO::PARAM_STR);
                        break;
                    case '`consultation_lieu_ouverture_plis`':						
                        $stmt->bindValue($identifier, $this->consultation_lieu_ouverture_plis, PDO::PARAM_STR);
                        break;
                    case '`consultation_qualification`':						
                        $stmt->bindValue($identifier, $this->consultation_qualification, PDO::PARAM_STR);
                        break;
                    case '`consultation_agrement`':						
                        $stmt->bindValue($identifier, $this->consultation_agrement, PDO::PARAM_STR);
                        break;
                    case '`consultation_echantillons_demandes`':						
                        $stmt->bindValue($identifier, $this->consultation_echantillons_demandes, PDO::PARAM_STR);
                        break;
                    case '`consultation_reunion`':						
                        $stmt->bindValue($identifier, $this->consultation_reunion, PDO::PARAM_STR);
                        break;
                    case '`consultation_visite_des_lieux`':						
                        $stmt->bindValue($identifier, $this->consultation_visite_des_lieux, PDO::PARAM_STR);
                        break;
                    case '`consultation_prix_acquisition`':						
                        $stmt->bindValue($identifier, $this->consultation_prix_acquisition, PDO::PARAM_STR);
                        break;
                    case '`resultat_analyse_avant_decision`':						
                        $stmt->bindValue($identifier, $this->resultat_analyse_avant_decision, PDO::PARAM_STR);
                        break;
                    case '`creation_inscrit_par_ates`':						
                        $stmt->bindValue($identifier, $this->creation_inscrit_par_ates, PDO::PARAM_STR);
                        break;
                    case '`consultation_variantes_autorisees`':						
                        $stmt->bindValue($identifier, $this->consultation_variantes_autorisees, PDO::PARAM_STR);
                        break;
                    case '`recherche_avancee_par_type_org`':						
                        $stmt->bindValue($identifier, $this->recherche_avancee_par_type_org, PDO::PARAM_STR);
                        break;
                    case '`menu_agent_societes_exclues`':						
                        $stmt->bindValue($identifier, $this->menu_agent_societes_exclues, PDO::PARAM_STR);
                        break;
                    case '`recherche_avancee_par_domaines_activite`':						
                        $stmt->bindValue($identifier, $this->recherche_avancee_par_domaines_activite, PDO::PARAM_STR);
                        break;
                    case '`recherche_avancee_par_qualification`':						
                        $stmt->bindValue($identifier, $this->recherche_avancee_par_qualification, PDO::PARAM_STR);
                        break;
                    case '`recherche_avancee_par_agrement`':						
                        $stmt->bindValue($identifier, $this->recherche_avancee_par_agrement, PDO::PARAM_STR);
                        break;
                    case '`contact_administratif_dans_detail_consultation_cote_entreprise`':						
                        $stmt->bindValue($identifier, $this->contact_administratif_dans_detail_consultation_cote_entreprise, PDO::PARAM_STR);
                        break;
                    case '`consultation_pieces_dossiers`':						
                        $stmt->bindValue($identifier, $this->consultation_pieces_dossiers, PDO::PARAM_STR);
                        break;
                    case '`gerer_adresses_service`':						
                        $stmt->bindValue($identifier, $this->gerer_adresses_service, PDO::PARAM_STR);
                        break;
                    case '`traduire_annonces`':						
                        $stmt->bindValue($identifier, $this->traduire_annonces, PDO::PARAM_STR);
                        break;
                    case '`afficher_bloc_actions_dans_details_annonces`':						
                        $stmt->bindValue($identifier, $this->afficher_bloc_actions_dans_details_annonces, PDO::PARAM_STR);
                        break;
                    case '`autoriser_une_seule_reponse_principale_par_entreprise`':						
                        $stmt->bindValue($identifier, $this->autoriser_une_seule_reponse_principale_par_entreprise, PDO::PARAM_STR);
                        break;
                    case '`generation_avis`':						
                        $stmt->bindValue($identifier, $this->generation_avis, PDO::PARAM_STR);
                        break;
                    case '`passation_appliquer_donnees_ensemble_lots`':						
                        $stmt->bindValue($identifier, $this->passation_appliquer_donnees_ensemble_lots, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_extrait_pv`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_extrait_pv, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_rapport_achevement`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_rapport_achevement, PDO::PARAM_STR);
                        break;
                    case '`ajout_fichier_joint_autre_annonce`':						
                        $stmt->bindValue($identifier, $this->ajout_fichier_joint_autre_annonce, PDO::PARAM_STR);
                        break;
                    case '`consultation_mode_passation`':						
                        $stmt->bindValue($identifier, $this->consultation_mode_passation, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_identifiant_unique`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_identifiant_unique, PDO::PARAM_STR);
                        break;
                    case '`gerer_certificats_agent`':						
                        $stmt->bindValue($identifier, $this->gerer_certificats_agent, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_programme_previsionnel`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_programme_previsionnel, PDO::PARAM_STR);
                        break;
                    case '`annuler_consultation`':						
                        $stmt->bindValue($identifier, $this->annuler_consultation, PDO::PARAM_STR);
                        break;
                    case '`cfe_entreprise_accessible_par_agent`':						
                        $stmt->bindValue($identifier, $this->cfe_entreprise_accessible_par_agent, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_code_nace_referentiel`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_code_nace_referentiel, PDO::PARAM_STR);
                        break;
                    case '`code_nut_lt_referentiel`':						
                        $stmt->bindValue($identifier, $this->code_nut_lt_referentiel, PDO::PARAM_STR);
                        break;
                    case '`lieux_execution`':						
                        $stmt->bindValue($identifier, $this->lieux_execution, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_domaine_activite_lt_referentiel`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_domaine_activite_lt_referentiel, PDO::PARAM_STR);
                        break;
                    case '`consultation_domaines_activites_lt_referentiel`':						
                        $stmt->bindValue($identifier, $this->consultation_domaines_activites_lt_referentiel, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_agrement_lt_referentiel`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_agrement_lt_referentiel, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_qualification_lt_referentiel`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_qualification_lt_referentiel, PDO::PARAM_STR);
                        break;
                    case '`reponse_pas_a_pas`':						
                        $stmt->bindValue($identifier, $this->reponse_pas_a_pas, PDO::PARAM_STR);
                        break;
                    case '`agent_controle_format_mot_de_passe`':						
                        $stmt->bindValue($identifier, $this->agent_controle_format_mot_de_passe, PDO::PARAM_STR);
                        break;
                    case '`entreprise_validation_email_inscription`':						
                        $stmt->bindValue($identifier, $this->entreprise_validation_email_inscription, PDO::PARAM_STR);
                        break;
                    case '`telecharger_dce_avec_authentification`':						
                        $stmt->bindValue($identifier, $this->telecharger_dce_avec_authentification, PDO::PARAM_STR);
                        break;
                    case '`authentification_basic`':						
                        $stmt->bindValue($identifier, $this->authentification_basic, PDO::PARAM_STR);
                        break;
                    case '`reglement_consultation`':						
                        $stmt->bindValue($identifier, $this->reglement_consultation, PDO::PARAM_STR);
                        break;
                    case '`annonces_marches`':						
                        $stmt->bindValue($identifier, $this->annonces_marches, PDO::PARAM_STR);
                        break;
                    case '`cfe_date_fin_validite_obligatoire`':						
                        $stmt->bindValue($identifier, $this->cfe_date_fin_validite_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`associer_documents_cfe_consultation`':						
                        $stmt->bindValue($identifier, $this->associer_documents_cfe_consultation, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_region`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_region, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_telephone2`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_telephone2, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_cnss`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_cnss, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_rcnum`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_rcnum, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_domaine_activite`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_domaine_activite, PDO::PARAM_STR);
                        break;
                    case '`compte_inscrit_code_nic`':						
                        $stmt->bindValue($identifier, $this->compte_inscrit_code_nic, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_code_ape`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_code_ape, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_documents_commerciaux`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_documents_commerciaux, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_agrement`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_agrement, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_moyens_humains`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_moyens_humains, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_activite_domaine_defense`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_activite_domaine_defense, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_donnees_financieres`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_donnees_financieres, PDO::PARAM_STR);
                        break;
                    case '`enveloppe_anonymat`':						
                        $stmt->bindValue($identifier, $this->enveloppe_anonymat, PDO::PARAM_STR);
                        break;
                    case '`publicite_format_xml`':						
                        $stmt->bindValue($identifier, $this->publicite_format_xml, PDO::PARAM_STR);
                        break;
                    case '`article_133_generation_pf`':						
                        $stmt->bindValue($identifier, $this->article_133_generation_pf, PDO::PARAM_STR);
                        break;
                    case '`entreprise_repondre_consultation_apres_cloture`':						
                        $stmt->bindValue($identifier, $this->entreprise_repondre_consultation_apres_cloture, PDO::PARAM_STR);
                        break;
                    case '`telechargement_outil_verif_horodatage`':						
                        $stmt->bindValue($identifier, $this->telechargement_outil_verif_horodatage, PDO::PARAM_STR);
                        break;
                    case '`affichage_code_cpv`':						
                        $stmt->bindValue($identifier, $this->affichage_code_cpv, PDO::PARAM_STR);
                        break;
                    case '`consultation_domaines_activites`':						
                        $stmt->bindValue($identifier, $this->consultation_domaines_activites, PDO::PARAM_STR);
                        break;
                    case '`statistiques_mesure_demat`':						
                        $stmt->bindValue($identifier, $this->statistiques_mesure_demat, PDO::PARAM_STR);
                        break;
                    case '`publication_procure`':						
                        $stmt->bindValue($identifier, $this->publication_procure, PDO::PARAM_STR);
                        break;
                    case '`menu_entreprise_toutes_les_consultations`':						
                        $stmt->bindValue($identifier, $this->menu_entreprise_toutes_les_consultations, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_cp_obligatoire`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_cp_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`annuler_depot`':						
                        $stmt->bindValue($identifier, $this->annuler_depot, PDO::PARAM_STR);
                        break;
                    case '`traduire_entite_achat_arabe`':						
                        $stmt->bindValue($identifier, $this->traduire_entite_achat_arabe, PDO::PARAM_STR);
                        break;
                    case '`traduire_organisme_arabe`':						
                        $stmt->bindValue($identifier, $this->traduire_organisme_arabe, PDO::PARAM_STR);
                        break;
                    case '`decision_cp`':						
                        $stmt->bindValue($identifier, $this->decision_cp, PDO::PARAM_STR);
                        break;
                    case '`decision_tranche_budgetaire`':						
                        $stmt->bindValue($identifier, $this->decision_tranche_budgetaire, PDO::PARAM_STR);
                        break;
                    case '`decision_classement`':						
                        $stmt->bindValue($identifier, $this->decision_classement, PDO::PARAM_STR);
                        break;
                    case '`decision_afficher_detail_candidat_par_defaut`':						
                        $stmt->bindValue($identifier, $this->decision_afficher_detail_candidat_par_defaut, PDO::PARAM_STR);
                        break;
                    case '`article_133_upload_fichier`':						
                        $stmt->bindValue($identifier, $this->article_133_upload_fichier, PDO::PARAM_STR);
                        break;
                    case '`multi_linguisme_agent`':						
                        $stmt->bindValue($identifier, $this->multi_linguisme_agent, PDO::PARAM_STR);
                        break;
                    case '`compte_entreprise_ifu`':						
                        $stmt->bindValue($identifier, $this->compte_entreprise_ifu, PDO::PARAM_STR);
                        break;
                    case '`gestion_organisme_par_agent`':						
                        $stmt->bindValue($identifier, $this->gestion_organisme_par_agent, PDO::PARAM_STR);
                        break;
                    case '`utiliser_lucene`':						
                        $stmt->bindValue($identifier, $this->utiliser_lucene, PDO::PARAM_STR);
                        break;
                    case '`utiliser_page_html_lieux_execution`':						
                        $stmt->bindValue($identifier, $this->utiliser_page_html_lieux_execution, PDO::PARAM_STR);
                        break;
                    case '`prado_validateur_format_date`':						
                        $stmt->bindValue($identifier, $this->prado_validateur_format_date, PDO::PARAM_STR);
                        break;
                    case '`prado_validateur_format_email`':						
                        $stmt->bindValue($identifier, $this->prado_validateur_format_email, PDO::PARAM_STR);
                        break;
                    case '`socle_externe_ppp`':						
                        $stmt->bindValue($identifier, $this->socle_externe_ppp, PDO::PARAM_STR);
                        break;
                    case '`validation_format_champs_stricte`':						
                        $stmt->bindValue($identifier, $this->validation_format_champs_stricte, PDO::PARAM_STR);
                        break;
                    case '`poser_question_necessite_authentification`':						
                        $stmt->bindValue($identifier, $this->poser_question_necessite_authentification, PDO::PARAM_STR);
                        break;
                    case '`autoriser_modif_profil_inscrit_ates`':						
                        $stmt->bindValue($identifier, $this->autoriser_modif_profil_inscrit_ates, PDO::PARAM_STR);
                        break;
                    case '`unicite_reference_consultation`':						
                        $stmt->bindValue($identifier, $this->unicite_reference_consultation, PDO::PARAM_STR);
                        break;
                    case '`registre_papier_rcnum_rcville_obligatoires`':						
                        $stmt->bindValue($identifier, $this->registre_papier_rcnum_rcville_obligatoires, PDO::PARAM_STR);
                        break;
                    case '`registre_papier_adresse_cp_ville_obligatoires`':						
                        $stmt->bindValue($identifier, $this->registre_papier_adresse_cp_ville_obligatoires, PDO::PARAM_STR);
                        break;
                    case '`telecharger_dce_sans_identification`':						
                        $stmt->bindValue($identifier, $this->telecharger_dce_sans_identification, PDO::PARAM_STR);
                        break;
                    case '`gestion_entreprise_par_agent`':						
                        $stmt->bindValue($identifier, $this->gestion_entreprise_par_agent, PDO::PARAM_STR);
                        break;
                    case '`autoriser_caracteres_speciaux_dans_reference`':						
                        $stmt->bindValue($identifier, $this->autoriser_caracteres_speciaux_dans_reference, PDO::PARAM_STR);
                        break;
                    case '`inscription_libre_entreprise`':						
                        $stmt->bindValue($identifier, $this->inscription_libre_entreprise, PDO::PARAM_STR);
                        break;
                    case '`afficher_code_service`':						
                        $stmt->bindValue($identifier, $this->afficher_code_service, PDO::PARAM_STR);
                        break;
                    case '`authenticate_agent_by_login`':						
                        $stmt->bindValue($identifier, $this->authenticate_agent_by_login, PDO::PARAM_STR);
                        break;
                    case '`authenticate_agent_by_cert`':						
                        $stmt->bindValue($identifier, $this->authenticate_agent_by_cert, PDO::PARAM_STR);
                        break;
                    case '`generer_acte_dengagement`':						
                        $stmt->bindValue($identifier, $this->generer_acte_dengagement, PDO::PARAM_STR);
                        break;
                    case '`entreprise_controle_format_mot_de_passe`':						
                        $stmt->bindValue($identifier, $this->entreprise_controle_format_mot_de_passe, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_information`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_information, PDO::PARAM_STR);
                        break;
                    case '`creer_autre_annonce`':						
                        $stmt->bindValue($identifier, $this->creer_autre_annonce, PDO::PARAM_STR);
                        break;
                    case '`consultation_clause`':						
                        $stmt->bindValue($identifier, $this->consultation_clause, PDO::PARAM_STR);
                        break;
                    case '`panier_entreprise`':						
                        $stmt->bindValue($identifier, $this->panier_entreprise, PDO::PARAM_STR);
                        break;
                    case '`parametrage_publicite_par_type_procedure`':						
                        $stmt->bindValue($identifier, $this->parametrage_publicite_par_type_procedure, PDO::PARAM_STR);
                        break;
                    case '`export_decision`':						
                        $stmt->bindValue($identifier, $this->export_decision, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_obligatoire`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`regle_mise_en_ligne_par_entite_coordinatrice`':						
                        $stmt->bindValue($identifier, $this->regle_mise_en_ligne_par_entite_coordinatrice, PDO::PARAM_STR);
                        break;
                    case '`gestion_newsletter`':						
                        $stmt->bindValue($identifier, $this->gestion_newsletter, PDO::PARAM_STR);
                        break;
                    case '`publicite_opoce`':						
                        $stmt->bindValue($identifier, $this->publicite_opoce, PDO::PARAM_STR);
                        break;
                    case '`gestion_modeles_formulaire`':						
                        $stmt->bindValue($identifier, $this->gestion_modeles_formulaire, PDO::PARAM_STR);
                        break;
                    case '`gestion_adresses_facturation_JAL`':						
                        $stmt->bindValue($identifier, $this->gestion_adresses_facturation_jal, PDO::PARAM_STR);
                        break;
                    case '`publicite_marches_en_ligne`':						
                        $stmt->bindValue($identifier, $this->publicite_marches_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`dossier_additif`':						
                        $stmt->bindValue($identifier, $this->dossier_additif, PDO::PARAM_STR);
                        break;
                    case '`type_marche`':						
                        $stmt->bindValue($identifier, $this->type_marche, PDO::PARAM_STR);
                        break;
                    case '`type_prestation`':						
                        $stmt->bindValue($identifier, $this->type_prestation, PDO::PARAM_STR);
                        break;
                    case '`afficher_tjr_bloc_caracteristique_reponse`':						
                        $stmt->bindValue($identifier, $this->afficher_tjr_bloc_caracteristique_reponse, PDO::PARAM_STR);
                        break;
                    case '`alerte_metier`':						
                        $stmt->bindValue($identifier, $this->alerte_metier, PDO::PARAM_STR);
                        break;
                    case '`bourse_a_la_sous_traitance`':						
                        $stmt->bindValue($identifier, $this->bourse_a_la_sous_traitance, PDO::PARAM_STR);
                        break;
                    case '`publier_guides`':						
                        $stmt->bindValue($identifier, $this->publier_guides, PDO::PARAM_STR);
                        break;
                    case '`recherche_auto_completion`':						
                        $stmt->bindValue($identifier, $this->recherche_auto_completion, PDO::PARAM_STR);
                        break;
                    case '`statut_compte_entreprise`':						
                        $stmt->bindValue($identifier, $this->statut_compte_entreprise, PDO::PARAM_STR);
                        break;
                    case '`gestion_organismes`':						
                        $stmt->bindValue($identifier, $this->gestion_organismes, PDO::PARAM_STR);
                        break;
                    case '`accueil_entreprise_personnalise`':						
                        $stmt->bindValue($identifier, $this->accueil_entreprise_personnalise, PDO::PARAM_STR);
                        break;
                    case '`interface_module_sub`':						
                        $stmt->bindValue($identifier, $this->interface_module_sub, PDO::PARAM_STR);
                        break;
                    case '`authentification_agent_multi_organismes`':						
                        $stmt->bindValue($identifier, $this->authentification_agent_multi_organismes, PDO::PARAM_STR);
                        break;
                    case '`partager_consultation`':						
                        $stmt->bindValue($identifier, $this->partager_consultation, PDO::PARAM_STR);
                        break;
                    case '`annuaire_acheteurs_publics`':						
                        $stmt->bindValue($identifier, $this->annuaire_acheteurs_publics, PDO::PARAM_STR);
                        break;
                    case '`entreprise_actions_groupees`':						
                        $stmt->bindValue($identifier, $this->entreprise_actions_groupees, PDO::PARAM_STR);
                        break;
                    case '`lieux_execution_carte`':						
                        $stmt->bindValue($identifier, $this->lieux_execution_carte, PDO::PARAM_STR);
                        break;
                    case '`surcharge_referentiels`':						
                        $stmt->bindValue($identifier, $this->surcharge_referentiels, PDO::PARAM_STR);
                        break;
                    case '`Mode_Restriction_RGS`':						
                        $stmt->bindValue($identifier, $this->mode_restriction_rgs, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_decision_resiliation`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_decision_resiliation, PDO::PARAM_STR);
                        break;
                    case '`autre_annonce_synthese_rapport_audit`':						
                        $stmt->bindValue($identifier, $this->autre_annonce_synthese_rapport_audit, PDO::PARAM_STR);
                        break;
                    case '`fiche_weka`':						
                        $stmt->bindValue($identifier, $this->fiche_weka, PDO::PARAM_STR);
                        break;
                    case '`generation_automatique_mdp_agent`':						
                        $stmt->bindValue($identifier, $this->generation_automatique_mdp_agent, PDO::PARAM_STR);
                        break;
                    case '`generation_automatique_mdp_inscrit`':						
                        $stmt->bindValue($identifier, $this->generation_automatique_mdp_inscrit, PDO::PARAM_STR);
                        break;
                    case '`liste_ac_rgs`':						
                        $stmt->bindValue($identifier, $this->liste_ac_rgs, PDO::PARAM_STR);
                        break;
                    case '`liste_cons_org`':						
                        $stmt->bindValue($identifier, $this->liste_cons_org, PDO::PARAM_STR);
                        break;
                    case '`marche_public_simplifie_entreprise`':						
                        $stmt->bindValue($identifier, $this->marche_public_simplifie_entreprise, PDO::PARAM_STR);
                        break;
                    case '`demande_validation_controleur`':						
                        $stmt->bindValue($identifier, $this->demande_validation_controleur, PDO::PARAM_STR);
                        break;
                    case '`acces_exec_contrats`':						
                        $stmt->bindValue($identifier, $this->acces_exec_contrats, PDO::PARAM_STR);
                        break;
                    case '`forme_juridique_groupement_attributaire`':						
                        $stmt->bindValue($identifier, $this->forme_juridique_groupement_attributaire, PDO::PARAM_STR);
                        break;
                    case '`date_limite_remise_plis_obligatoire`':						
                        $stmt->bindValue($identifier, $this->date_limite_remise_plis_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`modif_type_procedure`':						
                        $stmt->bindValue($identifier, $this->modif_type_procedure, PDO::PARAM_STR);
                        break;
                    case '`donnees_complementaires_procedure`':						
                        $stmt->bindValue($identifier, $this->donnees_complementaires_procedure, PDO::PARAM_STR);
                        break;
                    case '`forme_marche_forme_prix`':						
                        $stmt->bindValue($identifier, $this->forme_marche_forme_prix, PDO::PARAM_STR);
                        break;
                    case '`controle_unicite_num_marche`':						
                        $stmt->bindValue($identifier, $this->controle_unicite_num_marche, PDO::PARAM_STR);
                        break;
                    case '`affichage_num_marche`':						
                        $stmt->bindValue($identifier, $this->affichage_num_marche, PDO::PARAM_STR);
                        break;
                    case '`affichage_date_fin_marche`':						
                        $stmt->bindValue($identifier, $this->affichage_date_fin_marche, PDO::PARAM_STR);
                        break;
                    case '`affichage_ice`':						
                        $stmt->bindValue($identifier, $this->affichage_ice, PDO::PARAM_STR);
                        break;
                    case '`blocage_depot_hors_delai`':						
                        $stmt->bindValue($identifier, $this->blocage_depot_hors_delai, PDO::PARAM_STR);
                        break;
                    case '`activer_suivi_pv`':						
                        $stmt->bindValue($identifier, $this->activer_suivi_pv, PDO::PARAM_STR);
                        break;
                    case '`captcha_validateur`':						
                        $stmt->bindValue($identifier, $this->captcha_validateur, PDO::PARAM_STR);
                        break;
                    case '`decision_depuis_resultat_analyse`':						
                        $stmt->bindValue($identifier, $this->decision_depuis_resultat_analyse, PDO::PARAM_STR);
                        break;
                    case '`module_facture`':						
                        $stmt->bindValue($identifier, $this->module_facture, PDO::PARAM_STR);
                        break;
                    case '`validation_entreprise_facturation`':						
                        $stmt->bindValue($identifier, $this->validation_entreprise_facturation, PDO::PARAM_STR);
                        break;
                    case '`bloquer_depot_si_env_non_depose`':						
                        $stmt->bindValue($identifier, $this->bloquer_depot_si_env_non_depose, PDO::PARAM_STR);
                        break;
                    case '`bloquer_depot_signature_invalide`':						
                        $stmt->bindValue($identifier, $this->bloquer_depot_signature_invalide, PDO::PARAM_STR);
                        break;
                    case '`consultation_import_lots`':						
                        $stmt->bindValue($identifier, $this->consultation_import_lots, PDO::PARAM_STR);
                        break;
                    case '`depot_selection_lots`':						
                        $stmt->bindValue($identifier, $this->depot_selection_lots, PDO::PARAM_STR);
                        break;
                    case '`modification_lots_apres_mise_en_ligne`':						
                        $stmt->bindValue($identifier, $this->modification_lots_apres_mise_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`filtre_bdf_entreprise_valide`':						
                        $stmt->bindValue($identifier, $this->filtre_bdf_entreprise_valide, PDO::PARAM_STR);
                        break;
                    case '`affichage_identifiant_fiscale`':						
                        $stmt->bindValue($identifier, $this->affichage_identifiant_fiscale, PDO::PARAM_STR);
                        break;
                    case '`decision_creer_contrat`':						
                        $stmt->bindValue($identifier, $this->decision_creer_contrat, PDO::PARAM_STR);
                        break;
                    case '`generation_bi_cle`':						
                        $stmt->bindValue($identifier, $this->generation_bi_cle, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdAuto($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = CommonConfigurationPlateformePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonConfigurationPlateformePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdAuto();
                break;
            case 1:
                return $this->getCodeCpv();
                break;
            case 2:
                return $this->getMultiLinguismeEntreprise();
                break;
            case 3:
                return $this->getGestionFournisseursDocsMesSousServices();
                break;
            case 4:
                return $this->getAuthenticateInscritByCert();
                break;
            case 5:
                return $this->getAuthenticateInscritByLogin();
                break;
            case 6:
                return $this->getBaseQualifieeEntrepriseInsee();
                break;
            case 7:
                return $this->getGestionBoampMesSousServices();
                break;
            case 8:
                return $this->getGestionBiCleMesSousServices();
                break;
            case 9:
                return $this->getNomEntrepriseToujoursVisible();
                break;
            case 10:
                return $this->getGestionJalMesSousServices();
                break;
            case 11:
                return $this->getChoixLangueAffichageConsultation();
                break;
            case 12:
                return $this->getCompteEntrepriseDonneesComplementaires();
                break;
            case 13:
                return $this->getAnnuaireEntitesAchatVisibleParEntreprise();
                break;
            case 14:
                return $this->getAffichageRechercheAvanceeAgentAcSadTransversaux();
                break;
            case 15:
                return $this->getEncheresEntreprise();
                break;
            case 16:
                return $this->getSocleInterne();
                break;
            case 17:
                return $this->getModuleCertificat();
                break;
            case 18:
                return $this->getSocleExterneAgent();
                break;
            case 19:
                return $this->getAfficherImageOrganisme();
                break;
            case 20:
                return $this->getSocleExterneEntreprise();
                break;
            case 21:
                return $this->getPortailDefenseEntreprise();
                break;
            case 22:
                return $this->getCompteEntrepriseProvince();
                break;
            case 23:
                return $this->getCompteEntrepriseTelephone3();
                break;
            case 24:
                return $this->getCompteEntrepriseTaxProf();
                break;
            case 25:
                return $this->getCompteEntrepriseRcville();
                break;
            case 26:
                return $this->getCompteEntrepriseDeclarationHonneur();
                break;
            case 27:
                return $this->getCompteEntrepriseQualification();
                break;
            case 28:
                return $this->getCompteEntrepriseMoyensTechniques();
                break;
            case 29:
                return $this->getCompteEntreprisePrestationsRealisees();
                break;
            case 30:
                return $this->getCompteEntrepriseChiffreAffaireProductionBiensServices();
                break;
            case 31:
                return $this->getEnveloppeOffreTechnique();
                break;
            case 32:
                return $this->getCompteInscritChoixProfil();
                break;
            case 33:
                return $this->getProcedureAdaptee();
                break;
            case 34:
                return $this->getCompteEntrepriseSiren();
                break;
            case 35:
                return $this->getCompteEntrepriseActivationInscriptionParAgent();
                break;
            case 36:
                return $this->getMenuEntrepriseConsultationsEnCours();
                break;
            case 37:
                return $this->getCompteEntrepriseCapitalSocial();
                break;
            case 38:
                return $this->getMailActivationCompteInscritEntreprise();
                break;
            case 39:
                return $this->getDecisionDateNotification();
                break;
            case 40:
                return $this->getDecisionPmiPme();
                break;
            case 41:
                return $this->getDecisionNaturePrestations();
                break;
            case 42:
                return $this->getDecisionObjetMarche();
                break;
            case 43:
                return $this->getDecisionNote();
                break;
            case 44:
                return $this->getDecisionFicheRecensement();
                break;
            case 45:
                return $this->getRegistrePapierMailObligatoire();
                break;
            case 46:
                return $this->getMenuEntrepriseIndicateursCles();
                break;
            case 47:
                return $this->getAjoutRpaChampEmail();
                break;
            case 48:
                return $this->getAjoutRpaChampTelephone();
                break;
            case 49:
                return $this->getAjoutRpaChampFax();
                break;
            case 50:
                return $this->getEntreprisePoserQuestionSansPj();
                break;
            case 51:
                return $this->getUrlDemarcheAgent();
                break;
            case 52:
                return $this->getUrlDemarcheEntreprise();
                break;
            case 53:
                return $this->getSiretDetailEntiteAchat();
                break;
            case 54:
                return $this->getPresenceElu();
                break;
            case 55:
                return $this->getGererMonService();
                break;
            case 56:
                return $this->getDepouillementEnveloppeDependRatEnveloppePrecedente();
                break;
            case 57:
                return $this->getConsultationAdresseRetraisDossiers();
                break;
            case 58:
                return $this->getConsultationAdresseDepotOffres();
                break;
            case 59:
                return $this->getConsultationCautionProvisoire();
                break;
            case 60:
                return $this->getConsultationLieuOuverturePlis();
                break;
            case 61:
                return $this->getConsultationQualification();
                break;
            case 62:
                return $this->getConsultationAgrement();
                break;
            case 63:
                return $this->getConsultationEchantillonsDemandes();
                break;
            case 64:
                return $this->getConsultationReunion();
                break;
            case 65:
                return $this->getConsultationVisiteDesLieux();
                break;
            case 66:
                return $this->getConsultationPrixAcquisition();
                break;
            case 67:
                return $this->getResultatAnalyseAvantDecision();
                break;
            case 68:
                return $this->getCreationInscritParAtes();
                break;
            case 69:
                return $this->getConsultationVariantesAutorisees();
                break;
            case 70:
                return $this->getRechercheAvanceeParTypeOrg();
                break;
            case 71:
                return $this->getMenuAgentSocietesExclues();
                break;
            case 72:
                return $this->getRechercheAvanceeParDomainesActivite();
                break;
            case 73:
                return $this->getRechercheAvanceeParQualification();
                break;
            case 74:
                return $this->getRechercheAvanceeParAgrement();
                break;
            case 75:
                return $this->getContactAdministratifDansDetailConsultationCoteEntreprise();
                break;
            case 76:
                return $this->getConsultationPiecesDossiers();
                break;
            case 77:
                return $this->getGererAdressesService();
                break;
            case 78:
                return $this->getTraduireAnnonces();
                break;
            case 79:
                return $this->getAfficherBlocActionsDansDetailsAnnonces();
                break;
            case 80:
                return $this->getAutoriserUneSeuleReponsePrincipaleParEntreprise();
                break;
            case 81:
                return $this->getGenerationAvis();
                break;
            case 82:
                return $this->getPassationAppliquerDonneesEnsembleLots();
                break;
            case 83:
                return $this->getAutreAnnonceExtraitPv();
                break;
            case 84:
                return $this->getAutreAnnonceRapportAchevement();
                break;
            case 85:
                return $this->getAjoutFichierJointAutreAnnonce();
                break;
            case 86:
                return $this->getConsultationModePassation();
                break;
            case 87:
                return $this->getCompteEntrepriseIdentifiantUnique();
                break;
            case 88:
                return $this->getGererCertificatsAgent();
                break;
            case 89:
                return $this->getAutreAnnonceProgrammePrevisionnel();
                break;
            case 90:
                return $this->getAnnulerConsultation();
                break;
            case 91:
                return $this->getCfeEntrepriseAccessibleParAgent();
                break;
            case 92:
                return $this->getCompteEntrepriseCodeNaceReferentiel();
                break;
            case 93:
                return $this->getCodeNutLtReferentiel();
                break;
            case 94:
                return $this->getLieuxExecution();
                break;
            case 95:
                return $this->getCompteEntrepriseDomaineActiviteLtReferentiel();
                break;
            case 96:
                return $this->getConsultationDomainesActivitesLtReferentiel();
                break;
            case 97:
                return $this->getCompteEntrepriseAgrementLtReferentiel();
                break;
            case 98:
                return $this->getCompteEntrepriseQualificationLtReferentiel();
                break;
            case 99:
                return $this->getReponsePasAPas();
                break;
            case 100:
                return $this->getAgentControleFormatMotDePasse();
                break;
            case 101:
                return $this->getEntrepriseValidationEmailInscription();
                break;
            case 102:
                return $this->getTelechargerDceAvecAuthentification();
                break;
            case 103:
                return $this->getAuthentificationBasic();
                break;
            case 104:
                return $this->getReglementConsultation();
                break;
            case 105:
                return $this->getAnnoncesMarches();
                break;
            case 106:
                return $this->getCfeDateFinValiditeObligatoire();
                break;
            case 107:
                return $this->getAssocierDocumentsCfeConsultation();
                break;
            case 108:
                return $this->getCompteEntrepriseRegion();
                break;
            case 109:
                return $this->getCompteEntrepriseTelephone2();
                break;
            case 110:
                return $this->getCompteEntrepriseCnss();
                break;
            case 111:
                return $this->getCompteEntrepriseRcnum();
                break;
            case 112:
                return $this->getCompteEntrepriseDomaineActivite();
                break;
            case 113:
                return $this->getCompteInscritCodeNic();
                break;
            case 114:
                return $this->getCompteEntrepriseCodeApe();
                break;
            case 115:
                return $this->getCompteEntrepriseDocumentsCommerciaux();
                break;
            case 116:
                return $this->getCompteEntrepriseAgrement();
                break;
            case 117:
                return $this->getCompteEntrepriseMoyensHumains();
                break;
            case 118:
                return $this->getCompteEntrepriseActiviteDomaineDefense();
                break;
            case 119:
                return $this->getCompteEntrepriseDonneesFinancieres();
                break;
            case 120:
                return $this->getEnveloppeAnonymat();
                break;
            case 121:
                return $this->getPubliciteFormatXml();
                break;
            case 122:
                return $this->getArticle133GenerationPf();
                break;
            case 123:
                return $this->getEntrepriseRepondreConsultationApresCloture();
                break;
            case 124:
                return $this->getTelechargementOutilVerifHorodatage();
                break;
            case 125:
                return $this->getAffichageCodeCpv();
                break;
            case 126:
                return $this->getConsultationDomainesActivites();
                break;
            case 127:
                return $this->getStatistiquesMesureDemat();
                break;
            case 128:
                return $this->getPublicationProcure();
                break;
            case 129:
                return $this->getMenuEntrepriseToutesLesConsultations();
                break;
            case 130:
                return $this->getCompteEntrepriseCpObligatoire();
                break;
            case 131:
                return $this->getAnnulerDepot();
                break;
            case 132:
                return $this->getTraduireEntiteAchatArabe();
                break;
            case 133:
                return $this->getTraduireOrganismeArabe();
                break;
            case 134:
                return $this->getDecisionCp();
                break;
            case 135:
                return $this->getDecisionTrancheBudgetaire();
                break;
            case 136:
                return $this->getDecisionClassement();
                break;
            case 137:
                return $this->getDecisionAfficherDetailCandidatParDefaut();
                break;
            case 138:
                return $this->getArticle133UploadFichier();
                break;
            case 139:
                return $this->getMultiLinguismeAgent();
                break;
            case 140:
                return $this->getCompteEntrepriseIfu();
                break;
            case 141:
                return $this->getGestionOrganismeParAgent();
                break;
            case 142:
                return $this->getUtiliserLucene();
                break;
            case 143:
                return $this->getUtiliserPageHtmlLieuxExecution();
                break;
            case 144:
                return $this->getPradoValidateurFormatDate();
                break;
            case 145:
                return $this->getPradoValidateurFormatEmail();
                break;
            case 146:
                return $this->getSocleExternePpp();
                break;
            case 147:
                return $this->getValidationFormatChampsStricte();
                break;
            case 148:
                return $this->getPoserQuestionNecessiteAuthentification();
                break;
            case 149:
                return $this->getAutoriserModifProfilInscritAtes();
                break;
            case 150:
                return $this->getUniciteReferenceConsultation();
                break;
            case 151:
                return $this->getRegistrePapierRcnumRcvilleObligatoires();
                break;
            case 152:
                return $this->getRegistrePapierAdresseCpVilleObligatoires();
                break;
            case 153:
                return $this->getTelechargerDceSansIdentification();
                break;
            case 154:
                return $this->getGestionEntrepriseParAgent();
                break;
            case 155:
                return $this->getAutoriserCaracteresSpeciauxDansReference();
                break;
            case 156:
                return $this->getInscriptionLibreEntreprise();
                break;
            case 157:
                return $this->getAfficherCodeService();
                break;
            case 158:
                return $this->getAuthenticateAgentByLogin();
                break;
            case 159:
                return $this->getAuthenticateAgentByCert();
                break;
            case 160:
                return $this->getGenererActeDengagement();
                break;
            case 161:
                return $this->getEntrepriseControleFormatMotDePasse();
                break;
            case 162:
                return $this->getAutreAnnonceInformation();
                break;
            case 163:
                return $this->getCreerAutreAnnonce();
                break;
            case 164:
                return $this->getConsultationClause();
                break;
            case 165:
                return $this->getPanierEntreprise();
                break;
            case 166:
                return $this->getParametragePubliciteParTypeProcedure();
                break;
            case 167:
                return $this->getExportDecision();
                break;
            case 168:
                return $this->getLieuOuverturePlisObligatoire();
                break;
            case 169:
                return $this->getRegleMiseEnLigneParEntiteCoordinatrice();
                break;
            case 170:
                return $this->getGestionNewsletter();
                break;
            case 171:
                return $this->getPubliciteOpoce();
                break;
            case 172:
                return $this->getGestionModelesFormulaire();
                break;
            case 173:
                return $this->getGestionAdressesFacturationJal();
                break;
            case 174:
                return $this->getPubliciteMarchesEnLigne();
                break;
            case 175:
                return $this->getDossierAdditif();
                break;
            case 176:
                return $this->getTypeMarche();
                break;
            case 177:
                return $this->getTypePrestation();
                break;
            case 178:
                return $this->getAfficherTjrBlocCaracteristiqueReponse();
                break;
            case 179:
                return $this->getAlerteMetier();
                break;
            case 180:
                return $this->getBourseALaSousTraitance();
                break;
            case 181:
                return $this->getPublierGuides();
                break;
            case 182:
                return $this->getRechercheAutoCompletion();
                break;
            case 183:
                return $this->getStatutCompteEntreprise();
                break;
            case 184:
                return $this->getGestionOrganismes();
                break;
            case 185:
                return $this->getAccueilEntreprisePersonnalise();
                break;
            case 186:
                return $this->getInterfaceModuleSub();
                break;
            case 187:
                return $this->getAuthentificationAgentMultiOrganismes();
                break;
            case 188:
                return $this->getPartagerConsultation();
                break;
            case 189:
                return $this->getAnnuaireAcheteursPublics();
                break;
            case 190:
                return $this->getEntrepriseActionsGroupees();
                break;
            case 191:
                return $this->getLieuxExecutionCarte();
                break;
            case 192:
                return $this->getSurchargeReferentiels();
                break;
            case 193:
                return $this->getModeRestrictionRgs();
                break;
            case 194:
                return $this->getAutreAnnonceDecisionResiliation();
                break;
            case 195:
                return $this->getAutreAnnonceSyntheseRapportAudit();
                break;
            case 196:
                return $this->getFicheWeka();
                break;
            case 197:
                return $this->getGenerationAutomatiqueMdpAgent();
                break;
            case 198:
                return $this->getGenerationAutomatiqueMdpInscrit();
                break;
            case 199:
                return $this->getListeAcRgs();
                break;
            case 200:
                return $this->getListeConsOrg();
                break;
            case 201:
                return $this->getMarchePublicSimplifieEntreprise();
                break;
            case 202:
                return $this->getDemandeValidationControleur();
                break;
            case 203:
                return $this->getAccesExecContrats();
                break;
            case 204:
                return $this->getFormeJuridiqueGroupementAttributaire();
                break;
            case 205:
                return $this->getDateLimiteRemisePlisObligatoire();
                break;
            case 206:
                return $this->getModifTypeProcedure();
                break;
            case 207:
                return $this->getDonneesComplementairesProcedure();
                break;
            case 208:
                return $this->getFormeMarcheFormePrix();
                break;
            case 209:
                return $this->getControleUniciteNumMarche();
                break;
            case 210:
                return $this->getAffichageNumMarche();
                break;
            case 211:
                return $this->getAffichageDateFinMarche();
                break;
            case 212:
                return $this->getAffichageIce();
                break;
            case 213:
                return $this->getBlocageDepotHorsDelai();
                break;
            case 214:
                return $this->getActiverSuiviPv();
                break;
            case 215:
                return $this->getCaptchaValidateur();
                break;
            case 216:
                return $this->getDecisionDepuisResultatAnalyse();
                break;
            case 217:
                return $this->getModuleFacture();
                break;
            case 218:
                return $this->getValidationEntrepriseFacturation();
                break;
            case 219:
                return $this->getBloquerDepotSiEnvNonDepose();
                break;
            case 220:
                return $this->getBloquerDepotSignatureInvalide();
                break;
            case 221:
                return $this->getConsultationImportLots();
                break;
            case 222:
                return $this->getDepotSelectionLots();
                break;
            case 223:
                return $this->getModificationLotsApresMiseEnLigne();
                break;
            case 224:
                return $this->getFiltreBdfEntrepriseValide();
                break;
            case 225:
                return $this->getAffichageIdentifiantFiscale();
                break;
            case 226:
                return $this->getDecisionCreerContrat();
                break;
            case 227:
                return $this->getGenerationBiCle();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['CommonConfigurationPlateforme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonConfigurationPlateforme'][$this->getPrimaryKey()] = true;
        $keys = CommonConfigurationPlateformePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAuto(),
            $keys[1] => $this->getCodeCpv(),
            $keys[2] => $this->getMultiLinguismeEntreprise(),
            $keys[3] => $this->getGestionFournisseursDocsMesSousServices(),
            $keys[4] => $this->getAuthenticateInscritByCert(),
            $keys[5] => $this->getAuthenticateInscritByLogin(),
            $keys[6] => $this->getBaseQualifieeEntrepriseInsee(),
            $keys[7] => $this->getGestionBoampMesSousServices(),
            $keys[8] => $this->getGestionBiCleMesSousServices(),
            $keys[9] => $this->getNomEntrepriseToujoursVisible(),
            $keys[10] => $this->getGestionJalMesSousServices(),
            $keys[11] => $this->getChoixLangueAffichageConsultation(),
            $keys[12] => $this->getCompteEntrepriseDonneesComplementaires(),
            $keys[13] => $this->getAnnuaireEntitesAchatVisibleParEntreprise(),
            $keys[14] => $this->getAffichageRechercheAvanceeAgentAcSadTransversaux(),
            $keys[15] => $this->getEncheresEntreprise(),
            $keys[16] => $this->getSocleInterne(),
            $keys[17] => $this->getModuleCertificat(),
            $keys[18] => $this->getSocleExterneAgent(),
            $keys[19] => $this->getAfficherImageOrganisme(),
            $keys[20] => $this->getSocleExterneEntreprise(),
            $keys[21] => $this->getPortailDefenseEntreprise(),
            $keys[22] => $this->getCompteEntrepriseProvince(),
            $keys[23] => $this->getCompteEntrepriseTelephone3(),
            $keys[24] => $this->getCompteEntrepriseTaxProf(),
            $keys[25] => $this->getCompteEntrepriseRcville(),
            $keys[26] => $this->getCompteEntrepriseDeclarationHonneur(),
            $keys[27] => $this->getCompteEntrepriseQualification(),
            $keys[28] => $this->getCompteEntrepriseMoyensTechniques(),
            $keys[29] => $this->getCompteEntreprisePrestationsRealisees(),
            $keys[30] => $this->getCompteEntrepriseChiffreAffaireProductionBiensServices(),
            $keys[31] => $this->getEnveloppeOffreTechnique(),
            $keys[32] => $this->getCompteInscritChoixProfil(),
            $keys[33] => $this->getProcedureAdaptee(),
            $keys[34] => $this->getCompteEntrepriseSiren(),
            $keys[35] => $this->getCompteEntrepriseActivationInscriptionParAgent(),
            $keys[36] => $this->getMenuEntrepriseConsultationsEnCours(),
            $keys[37] => $this->getCompteEntrepriseCapitalSocial(),
            $keys[38] => $this->getMailActivationCompteInscritEntreprise(),
            $keys[39] => $this->getDecisionDateNotification(),
            $keys[40] => $this->getDecisionPmiPme(),
            $keys[41] => $this->getDecisionNaturePrestations(),
            $keys[42] => $this->getDecisionObjetMarche(),
            $keys[43] => $this->getDecisionNote(),
            $keys[44] => $this->getDecisionFicheRecensement(),
            $keys[45] => $this->getRegistrePapierMailObligatoire(),
            $keys[46] => $this->getMenuEntrepriseIndicateursCles(),
            $keys[47] => $this->getAjoutRpaChampEmail(),
            $keys[48] => $this->getAjoutRpaChampTelephone(),
            $keys[49] => $this->getAjoutRpaChampFax(),
            $keys[50] => $this->getEntreprisePoserQuestionSansPj(),
            $keys[51] => $this->getUrlDemarcheAgent(),
            $keys[52] => $this->getUrlDemarcheEntreprise(),
            $keys[53] => $this->getSiretDetailEntiteAchat(),
            $keys[54] => $this->getPresenceElu(),
            $keys[55] => $this->getGererMonService(),
            $keys[56] => $this->getDepouillementEnveloppeDependRatEnveloppePrecedente(),
            $keys[57] => $this->getConsultationAdresseRetraisDossiers(),
            $keys[58] => $this->getConsultationAdresseDepotOffres(),
            $keys[59] => $this->getConsultationCautionProvisoire(),
            $keys[60] => $this->getConsultationLieuOuverturePlis(),
            $keys[61] => $this->getConsultationQualification(),
            $keys[62] => $this->getConsultationAgrement(),
            $keys[63] => $this->getConsultationEchantillonsDemandes(),
            $keys[64] => $this->getConsultationReunion(),
            $keys[65] => $this->getConsultationVisiteDesLieux(),
            $keys[66] => $this->getConsultationPrixAcquisition(),
            $keys[67] => $this->getResultatAnalyseAvantDecision(),
            $keys[68] => $this->getCreationInscritParAtes(),
            $keys[69] => $this->getConsultationVariantesAutorisees(),
            $keys[70] => $this->getRechercheAvanceeParTypeOrg(),
            $keys[71] => $this->getMenuAgentSocietesExclues(),
            $keys[72] => $this->getRechercheAvanceeParDomainesActivite(),
            $keys[73] => $this->getRechercheAvanceeParQualification(),
            $keys[74] => $this->getRechercheAvanceeParAgrement(),
            $keys[75] => $this->getContactAdministratifDansDetailConsultationCoteEntreprise(),
            $keys[76] => $this->getConsultationPiecesDossiers(),
            $keys[77] => $this->getGererAdressesService(),
            $keys[78] => $this->getTraduireAnnonces(),
            $keys[79] => $this->getAfficherBlocActionsDansDetailsAnnonces(),
            $keys[80] => $this->getAutoriserUneSeuleReponsePrincipaleParEntreprise(),
            $keys[81] => $this->getGenerationAvis(),
            $keys[82] => $this->getPassationAppliquerDonneesEnsembleLots(),
            $keys[83] => $this->getAutreAnnonceExtraitPv(),
            $keys[84] => $this->getAutreAnnonceRapportAchevement(),
            $keys[85] => $this->getAjoutFichierJointAutreAnnonce(),
            $keys[86] => $this->getConsultationModePassation(),
            $keys[87] => $this->getCompteEntrepriseIdentifiantUnique(),
            $keys[88] => $this->getGererCertificatsAgent(),
            $keys[89] => $this->getAutreAnnonceProgrammePrevisionnel(),
            $keys[90] => $this->getAnnulerConsultation(),
            $keys[91] => $this->getCfeEntrepriseAccessibleParAgent(),
            $keys[92] => $this->getCompteEntrepriseCodeNaceReferentiel(),
            $keys[93] => $this->getCodeNutLtReferentiel(),
            $keys[94] => $this->getLieuxExecution(),
            $keys[95] => $this->getCompteEntrepriseDomaineActiviteLtReferentiel(),
            $keys[96] => $this->getConsultationDomainesActivitesLtReferentiel(),
            $keys[97] => $this->getCompteEntrepriseAgrementLtReferentiel(),
            $keys[98] => $this->getCompteEntrepriseQualificationLtReferentiel(),
            $keys[99] => $this->getReponsePasAPas(),
            $keys[100] => $this->getAgentControleFormatMotDePasse(),
            $keys[101] => $this->getEntrepriseValidationEmailInscription(),
            $keys[102] => $this->getTelechargerDceAvecAuthentification(),
            $keys[103] => $this->getAuthentificationBasic(),
            $keys[104] => $this->getReglementConsultation(),
            $keys[105] => $this->getAnnoncesMarches(),
            $keys[106] => $this->getCfeDateFinValiditeObligatoire(),
            $keys[107] => $this->getAssocierDocumentsCfeConsultation(),
            $keys[108] => $this->getCompteEntrepriseRegion(),
            $keys[109] => $this->getCompteEntrepriseTelephone2(),
            $keys[110] => $this->getCompteEntrepriseCnss(),
            $keys[111] => $this->getCompteEntrepriseRcnum(),
            $keys[112] => $this->getCompteEntrepriseDomaineActivite(),
            $keys[113] => $this->getCompteInscritCodeNic(),
            $keys[114] => $this->getCompteEntrepriseCodeApe(),
            $keys[115] => $this->getCompteEntrepriseDocumentsCommerciaux(),
            $keys[116] => $this->getCompteEntrepriseAgrement(),
            $keys[117] => $this->getCompteEntrepriseMoyensHumains(),
            $keys[118] => $this->getCompteEntrepriseActiviteDomaineDefense(),
            $keys[119] => $this->getCompteEntrepriseDonneesFinancieres(),
            $keys[120] => $this->getEnveloppeAnonymat(),
            $keys[121] => $this->getPubliciteFormatXml(),
            $keys[122] => $this->getArticle133GenerationPf(),
            $keys[123] => $this->getEntrepriseRepondreConsultationApresCloture(),
            $keys[124] => $this->getTelechargementOutilVerifHorodatage(),
            $keys[125] => $this->getAffichageCodeCpv(),
            $keys[126] => $this->getConsultationDomainesActivites(),
            $keys[127] => $this->getStatistiquesMesureDemat(),
            $keys[128] => $this->getPublicationProcure(),
            $keys[129] => $this->getMenuEntrepriseToutesLesConsultations(),
            $keys[130] => $this->getCompteEntrepriseCpObligatoire(),
            $keys[131] => $this->getAnnulerDepot(),
            $keys[132] => $this->getTraduireEntiteAchatArabe(),
            $keys[133] => $this->getTraduireOrganismeArabe(),
            $keys[134] => $this->getDecisionCp(),
            $keys[135] => $this->getDecisionTrancheBudgetaire(),
            $keys[136] => $this->getDecisionClassement(),
            $keys[137] => $this->getDecisionAfficherDetailCandidatParDefaut(),
            $keys[138] => $this->getArticle133UploadFichier(),
            $keys[139] => $this->getMultiLinguismeAgent(),
            $keys[140] => $this->getCompteEntrepriseIfu(),
            $keys[141] => $this->getGestionOrganismeParAgent(),
            $keys[142] => $this->getUtiliserLucene(),
            $keys[143] => $this->getUtiliserPageHtmlLieuxExecution(),
            $keys[144] => $this->getPradoValidateurFormatDate(),
            $keys[145] => $this->getPradoValidateurFormatEmail(),
            $keys[146] => $this->getSocleExternePpp(),
            $keys[147] => $this->getValidationFormatChampsStricte(),
            $keys[148] => $this->getPoserQuestionNecessiteAuthentification(),
            $keys[149] => $this->getAutoriserModifProfilInscritAtes(),
            $keys[150] => $this->getUniciteReferenceConsultation(),
            $keys[151] => $this->getRegistrePapierRcnumRcvilleObligatoires(),
            $keys[152] => $this->getRegistrePapierAdresseCpVilleObligatoires(),
            $keys[153] => $this->getTelechargerDceSansIdentification(),
            $keys[154] => $this->getGestionEntrepriseParAgent(),
            $keys[155] => $this->getAutoriserCaracteresSpeciauxDansReference(),
            $keys[156] => $this->getInscriptionLibreEntreprise(),
            $keys[157] => $this->getAfficherCodeService(),
            $keys[158] => $this->getAuthenticateAgentByLogin(),
            $keys[159] => $this->getAuthenticateAgentByCert(),
            $keys[160] => $this->getGenererActeDengagement(),
            $keys[161] => $this->getEntrepriseControleFormatMotDePasse(),
            $keys[162] => $this->getAutreAnnonceInformation(),
            $keys[163] => $this->getCreerAutreAnnonce(),
            $keys[164] => $this->getConsultationClause(),
            $keys[165] => $this->getPanierEntreprise(),
            $keys[166] => $this->getParametragePubliciteParTypeProcedure(),
            $keys[167] => $this->getExportDecision(),
            $keys[168] => $this->getLieuOuverturePlisObligatoire(),
            $keys[169] => $this->getRegleMiseEnLigneParEntiteCoordinatrice(),
            $keys[170] => $this->getGestionNewsletter(),
            $keys[171] => $this->getPubliciteOpoce(),
            $keys[172] => $this->getGestionModelesFormulaire(),
            $keys[173] => $this->getGestionAdressesFacturationJal(),
            $keys[174] => $this->getPubliciteMarchesEnLigne(),
            $keys[175] => $this->getDossierAdditif(),
            $keys[176] => $this->getTypeMarche(),
            $keys[177] => $this->getTypePrestation(),
            $keys[178] => $this->getAfficherTjrBlocCaracteristiqueReponse(),
            $keys[179] => $this->getAlerteMetier(),
            $keys[180] => $this->getBourseALaSousTraitance(),
            $keys[181] => $this->getPublierGuides(),
            $keys[182] => $this->getRechercheAutoCompletion(),
            $keys[183] => $this->getStatutCompteEntreprise(),
            $keys[184] => $this->getGestionOrganismes(),
            $keys[185] => $this->getAccueilEntreprisePersonnalise(),
            $keys[186] => $this->getInterfaceModuleSub(),
            $keys[187] => $this->getAuthentificationAgentMultiOrganismes(),
            $keys[188] => $this->getPartagerConsultation(),
            $keys[189] => $this->getAnnuaireAcheteursPublics(),
            $keys[190] => $this->getEntrepriseActionsGroupees(),
            $keys[191] => $this->getLieuxExecutionCarte(),
            $keys[192] => $this->getSurchargeReferentiels(),
            $keys[193] => $this->getModeRestrictionRgs(),
            $keys[194] => $this->getAutreAnnonceDecisionResiliation(),
            $keys[195] => $this->getAutreAnnonceSyntheseRapportAudit(),
            $keys[196] => $this->getFicheWeka(),
            $keys[197] => $this->getGenerationAutomatiqueMdpAgent(),
            $keys[198] => $this->getGenerationAutomatiqueMdpInscrit(),
            $keys[199] => $this->getListeAcRgs(),
            $keys[200] => $this->getListeConsOrg(),
            $keys[201] => $this->getMarchePublicSimplifieEntreprise(),
            $keys[202] => $this->getDemandeValidationControleur(),
            $keys[203] => $this->getAccesExecContrats(),
            $keys[204] => $this->getFormeJuridiqueGroupementAttributaire(),
            $keys[205] => $this->getDateLimiteRemisePlisObligatoire(),
            $keys[206] => $this->getModifTypeProcedure(),
            $keys[207] => $this->getDonneesComplementairesProcedure(),
            $keys[208] => $this->getFormeMarcheFormePrix(),
            $keys[209] => $this->getControleUniciteNumMarche(),
            $keys[210] => $this->getAffichageNumMarche(),
            $keys[211] => $this->getAffichageDateFinMarche(),
            $keys[212] => $this->getAffichageIce(),
            $keys[213] => $this->getBlocageDepotHorsDelai(),
            $keys[214] => $this->getActiverSuiviPv(),
            $keys[215] => $this->getCaptchaValidateur(),
            $keys[216] => $this->getDecisionDepuisResultatAnalyse(),
            $keys[217] => $this->getModuleFacture(),
            $keys[218] => $this->getValidationEntrepriseFacturation(),
            $keys[219] => $this->getBloquerDepotSiEnvNonDepose(),
            $keys[220] => $this->getBloquerDepotSignatureInvalide(),
            $keys[221] => $this->getConsultationImportLots(),
            $keys[222] => $this->getDepotSelectionLots(),
            $keys[223] => $this->getModificationLotsApresMiseEnLigne(),
            $keys[224] => $this->getFiltreBdfEntrepriseValide(),
            $keys[225] => $this->getAffichageIdentifiantFiscale(),
            $keys[226] => $this->getDecisionCreerContrat(),
            $keys[227] => $this->getGenerationBiCle(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonConfigurationPlateformePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdAuto($value);
                break;
            case 1:
                $this->setCodeCpv($value);
                break;
            case 2:
                $this->setMultiLinguismeEntreprise($value);
                break;
            case 3:
                $this->setGestionFournisseursDocsMesSousServices($value);
                break;
            case 4:
                $this->setAuthenticateInscritByCert($value);
                break;
            case 5:
                $this->setAuthenticateInscritByLogin($value);
                break;
            case 6:
                $this->setBaseQualifieeEntrepriseInsee($value);
                break;
            case 7:
                $this->setGestionBoampMesSousServices($value);
                break;
            case 8:
                $this->setGestionBiCleMesSousServices($value);
                break;
            case 9:
                $this->setNomEntrepriseToujoursVisible($value);
                break;
            case 10:
                $this->setGestionJalMesSousServices($value);
                break;
            case 11:
                $this->setChoixLangueAffichageConsultation($value);
                break;
            case 12:
                $this->setCompteEntrepriseDonneesComplementaires($value);
                break;
            case 13:
                $this->setAnnuaireEntitesAchatVisibleParEntreprise($value);
                break;
            case 14:
                $this->setAffichageRechercheAvanceeAgentAcSadTransversaux($value);
                break;
            case 15:
                $this->setEncheresEntreprise($value);
                break;
            case 16:
                $this->setSocleInterne($value);
                break;
            case 17:
                $this->setModuleCertificat($value);
                break;
            case 18:
                $this->setSocleExterneAgent($value);
                break;
            case 19:
                $this->setAfficherImageOrganisme($value);
                break;
            case 20:
                $this->setSocleExterneEntreprise($value);
                break;
            case 21:
                $this->setPortailDefenseEntreprise($value);
                break;
            case 22:
                $this->setCompteEntrepriseProvince($value);
                break;
            case 23:
                $this->setCompteEntrepriseTelephone3($value);
                break;
            case 24:
                $this->setCompteEntrepriseTaxProf($value);
                break;
            case 25:
                $this->setCompteEntrepriseRcville($value);
                break;
            case 26:
                $this->setCompteEntrepriseDeclarationHonneur($value);
                break;
            case 27:
                $this->setCompteEntrepriseQualification($value);
                break;
            case 28:
                $this->setCompteEntrepriseMoyensTechniques($value);
                break;
            case 29:
                $this->setCompteEntreprisePrestationsRealisees($value);
                break;
            case 30:
                $this->setCompteEntrepriseChiffreAffaireProductionBiensServices($value);
                break;
            case 31:
                $this->setEnveloppeOffreTechnique($value);
                break;
            case 32:
                $this->setCompteInscritChoixProfil($value);
                break;
            case 33:
                $this->setProcedureAdaptee($value);
                break;
            case 34:
                $this->setCompteEntrepriseSiren($value);
                break;
            case 35:
                $this->setCompteEntrepriseActivationInscriptionParAgent($value);
                break;
            case 36:
                $this->setMenuEntrepriseConsultationsEnCours($value);
                break;
            case 37:
                $this->setCompteEntrepriseCapitalSocial($value);
                break;
            case 38:
                $this->setMailActivationCompteInscritEntreprise($value);
                break;
            case 39:
                $this->setDecisionDateNotification($value);
                break;
            case 40:
                $this->setDecisionPmiPme($value);
                break;
            case 41:
                $this->setDecisionNaturePrestations($value);
                break;
            case 42:
                $this->setDecisionObjetMarche($value);
                break;
            case 43:
                $this->setDecisionNote($value);
                break;
            case 44:
                $this->setDecisionFicheRecensement($value);
                break;
            case 45:
                $this->setRegistrePapierMailObligatoire($value);
                break;
            case 46:
                $this->setMenuEntrepriseIndicateursCles($value);
                break;
            case 47:
                $this->setAjoutRpaChampEmail($value);
                break;
            case 48:
                $this->setAjoutRpaChampTelephone($value);
                break;
            case 49:
                $this->setAjoutRpaChampFax($value);
                break;
            case 50:
                $this->setEntreprisePoserQuestionSansPj($value);
                break;
            case 51:
                $this->setUrlDemarcheAgent($value);
                break;
            case 52:
                $this->setUrlDemarcheEntreprise($value);
                break;
            case 53:
                $this->setSiretDetailEntiteAchat($value);
                break;
            case 54:
                $this->setPresenceElu($value);
                break;
            case 55:
                $this->setGererMonService($value);
                break;
            case 56:
                $this->setDepouillementEnveloppeDependRatEnveloppePrecedente($value);
                break;
            case 57:
                $this->setConsultationAdresseRetraisDossiers($value);
                break;
            case 58:
                $this->setConsultationAdresseDepotOffres($value);
                break;
            case 59:
                $this->setConsultationCautionProvisoire($value);
                break;
            case 60:
                $this->setConsultationLieuOuverturePlis($value);
                break;
            case 61:
                $this->setConsultationQualification($value);
                break;
            case 62:
                $this->setConsultationAgrement($value);
                break;
            case 63:
                $this->setConsultationEchantillonsDemandes($value);
                break;
            case 64:
                $this->setConsultationReunion($value);
                break;
            case 65:
                $this->setConsultationVisiteDesLieux($value);
                break;
            case 66:
                $this->setConsultationPrixAcquisition($value);
                break;
            case 67:
                $this->setResultatAnalyseAvantDecision($value);
                break;
            case 68:
                $this->setCreationInscritParAtes($value);
                break;
            case 69:
                $this->setConsultationVariantesAutorisees($value);
                break;
            case 70:
                $this->setRechercheAvanceeParTypeOrg($value);
                break;
            case 71:
                $this->setMenuAgentSocietesExclues($value);
                break;
            case 72:
                $this->setRechercheAvanceeParDomainesActivite($value);
                break;
            case 73:
                $this->setRechercheAvanceeParQualification($value);
                break;
            case 74:
                $this->setRechercheAvanceeParAgrement($value);
                break;
            case 75:
                $this->setContactAdministratifDansDetailConsultationCoteEntreprise($value);
                break;
            case 76:
                $this->setConsultationPiecesDossiers($value);
                break;
            case 77:
                $this->setGererAdressesService($value);
                break;
            case 78:
                $this->setTraduireAnnonces($value);
                break;
            case 79:
                $this->setAfficherBlocActionsDansDetailsAnnonces($value);
                break;
            case 80:
                $this->setAutoriserUneSeuleReponsePrincipaleParEntreprise($value);
                break;
            case 81:
                $this->setGenerationAvis($value);
                break;
            case 82:
                $this->setPassationAppliquerDonneesEnsembleLots($value);
                break;
            case 83:
                $this->setAutreAnnonceExtraitPv($value);
                break;
            case 84:
                $this->setAutreAnnonceRapportAchevement($value);
                break;
            case 85:
                $this->setAjoutFichierJointAutreAnnonce($value);
                break;
            case 86:
                $this->setConsultationModePassation($value);
                break;
            case 87:
                $this->setCompteEntrepriseIdentifiantUnique($value);
                break;
            case 88:
                $this->setGererCertificatsAgent($value);
                break;
            case 89:
                $this->setAutreAnnonceProgrammePrevisionnel($value);
                break;
            case 90:
                $this->setAnnulerConsultation($value);
                break;
            case 91:
                $this->setCfeEntrepriseAccessibleParAgent($value);
                break;
            case 92:
                $this->setCompteEntrepriseCodeNaceReferentiel($value);
                break;
            case 93:
                $this->setCodeNutLtReferentiel($value);
                break;
            case 94:
                $this->setLieuxExecution($value);
                break;
            case 95:
                $this->setCompteEntrepriseDomaineActiviteLtReferentiel($value);
                break;
            case 96:
                $this->setConsultationDomainesActivitesLtReferentiel($value);
                break;
            case 97:
                $this->setCompteEntrepriseAgrementLtReferentiel($value);
                break;
            case 98:
                $this->setCompteEntrepriseQualificationLtReferentiel($value);
                break;
            case 99:
                $this->setReponsePasAPas($value);
                break;
            case 100:
                $this->setAgentControleFormatMotDePasse($value);
                break;
            case 101:
                $this->setEntrepriseValidationEmailInscription($value);
                break;
            case 102:
                $this->setTelechargerDceAvecAuthentification($value);
                break;
            case 103:
                $this->setAuthentificationBasic($value);
                break;
            case 104:
                $this->setReglementConsultation($value);
                break;
            case 105:
                $this->setAnnoncesMarches($value);
                break;
            case 106:
                $this->setCfeDateFinValiditeObligatoire($value);
                break;
            case 107:
                $this->setAssocierDocumentsCfeConsultation($value);
                break;
            case 108:
                $this->setCompteEntrepriseRegion($value);
                break;
            case 109:
                $this->setCompteEntrepriseTelephone2($value);
                break;
            case 110:
                $this->setCompteEntrepriseCnss($value);
                break;
            case 111:
                $this->setCompteEntrepriseRcnum($value);
                break;
            case 112:
                $this->setCompteEntrepriseDomaineActivite($value);
                break;
            case 113:
                $this->setCompteInscritCodeNic($value);
                break;
            case 114:
                $this->setCompteEntrepriseCodeApe($value);
                break;
            case 115:
                $this->setCompteEntrepriseDocumentsCommerciaux($value);
                break;
            case 116:
                $this->setCompteEntrepriseAgrement($value);
                break;
            case 117:
                $this->setCompteEntrepriseMoyensHumains($value);
                break;
            case 118:
                $this->setCompteEntrepriseActiviteDomaineDefense($value);
                break;
            case 119:
                $this->setCompteEntrepriseDonneesFinancieres($value);
                break;
            case 120:
                $this->setEnveloppeAnonymat($value);
                break;
            case 121:
                $this->setPubliciteFormatXml($value);
                break;
            case 122:
                $this->setArticle133GenerationPf($value);
                break;
            case 123:
                $this->setEntrepriseRepondreConsultationApresCloture($value);
                break;
            case 124:
                $this->setTelechargementOutilVerifHorodatage($value);
                break;
            case 125:
                $this->setAffichageCodeCpv($value);
                break;
            case 126:
                $this->setConsultationDomainesActivites($value);
                break;
            case 127:
                $this->setStatistiquesMesureDemat($value);
                break;
            case 128:
                $this->setPublicationProcure($value);
                break;
            case 129:
                $this->setMenuEntrepriseToutesLesConsultations($value);
                break;
            case 130:
                $this->setCompteEntrepriseCpObligatoire($value);
                break;
            case 131:
                $this->setAnnulerDepot($value);
                break;
            case 132:
                $this->setTraduireEntiteAchatArabe($value);
                break;
            case 133:
                $this->setTraduireOrganismeArabe($value);
                break;
            case 134:
                $this->setDecisionCp($value);
                break;
            case 135:
                $this->setDecisionTrancheBudgetaire($value);
                break;
            case 136:
                $this->setDecisionClassement($value);
                break;
            case 137:
                $this->setDecisionAfficherDetailCandidatParDefaut($value);
                break;
            case 138:
                $this->setArticle133UploadFichier($value);
                break;
            case 139:
                $this->setMultiLinguismeAgent($value);
                break;
            case 140:
                $this->setCompteEntrepriseIfu($value);
                break;
            case 141:
                $this->setGestionOrganismeParAgent($value);
                break;
            case 142:
                $this->setUtiliserLucene($value);
                break;
            case 143:
                $this->setUtiliserPageHtmlLieuxExecution($value);
                break;
            case 144:
                $this->setPradoValidateurFormatDate($value);
                break;
            case 145:
                $this->setPradoValidateurFormatEmail($value);
                break;
            case 146:
                $this->setSocleExternePpp($value);
                break;
            case 147:
                $this->setValidationFormatChampsStricte($value);
                break;
            case 148:
                $this->setPoserQuestionNecessiteAuthentification($value);
                break;
            case 149:
                $this->setAutoriserModifProfilInscritAtes($value);
                break;
            case 150:
                $this->setUniciteReferenceConsultation($value);
                break;
            case 151:
                $this->setRegistrePapierRcnumRcvilleObligatoires($value);
                break;
            case 152:
                $this->setRegistrePapierAdresseCpVilleObligatoires($value);
                break;
            case 153:
                $this->setTelechargerDceSansIdentification($value);
                break;
            case 154:
                $this->setGestionEntrepriseParAgent($value);
                break;
            case 155:
                $this->setAutoriserCaracteresSpeciauxDansReference($value);
                break;
            case 156:
                $this->setInscriptionLibreEntreprise($value);
                break;
            case 157:
                $this->setAfficherCodeService($value);
                break;
            case 158:
                $this->setAuthenticateAgentByLogin($value);
                break;
            case 159:
                $this->setAuthenticateAgentByCert($value);
                break;
            case 160:
                $this->setGenererActeDengagement($value);
                break;
            case 161:
                $this->setEntrepriseControleFormatMotDePasse($value);
                break;
            case 162:
                $this->setAutreAnnonceInformation($value);
                break;
            case 163:
                $this->setCreerAutreAnnonce($value);
                break;
            case 164:
                $this->setConsultationClause($value);
                break;
            case 165:
                $this->setPanierEntreprise($value);
                break;
            case 166:
                $this->setParametragePubliciteParTypeProcedure($value);
                break;
            case 167:
                $this->setExportDecision($value);
                break;
            case 168:
                $this->setLieuOuverturePlisObligatoire($value);
                break;
            case 169:
                $this->setRegleMiseEnLigneParEntiteCoordinatrice($value);
                break;
            case 170:
                $this->setGestionNewsletter($value);
                break;
            case 171:
                $this->setPubliciteOpoce($value);
                break;
            case 172:
                $this->setGestionModelesFormulaire($value);
                break;
            case 173:
                $this->setGestionAdressesFacturationJal($value);
                break;
            case 174:
                $this->setPubliciteMarchesEnLigne($value);
                break;
            case 175:
                $this->setDossierAdditif($value);
                break;
            case 176:
                $this->setTypeMarche($value);
                break;
            case 177:
                $this->setTypePrestation($value);
                break;
            case 178:
                $this->setAfficherTjrBlocCaracteristiqueReponse($value);
                break;
            case 179:
                $this->setAlerteMetier($value);
                break;
            case 180:
                $this->setBourseALaSousTraitance($value);
                break;
            case 181:
                $this->setPublierGuides($value);
                break;
            case 182:
                $this->setRechercheAutoCompletion($value);
                break;
            case 183:
                $this->setStatutCompteEntreprise($value);
                break;
            case 184:
                $this->setGestionOrganismes($value);
                break;
            case 185:
                $this->setAccueilEntreprisePersonnalise($value);
                break;
            case 186:
                $this->setInterfaceModuleSub($value);
                break;
            case 187:
                $this->setAuthentificationAgentMultiOrganismes($value);
                break;
            case 188:
                $this->setPartagerConsultation($value);
                break;
            case 189:
                $this->setAnnuaireAcheteursPublics($value);
                break;
            case 190:
                $this->setEntrepriseActionsGroupees($value);
                break;
            case 191:
                $this->setLieuxExecutionCarte($value);
                break;
            case 192:
                $this->setSurchargeReferentiels($value);
                break;
            case 193:
                $this->setModeRestrictionRgs($value);
                break;
            case 194:
                $this->setAutreAnnonceDecisionResiliation($value);
                break;
            case 195:
                $this->setAutreAnnonceSyntheseRapportAudit($value);
                break;
            case 196:
                $this->setFicheWeka($value);
                break;
            case 197:
                $this->setGenerationAutomatiqueMdpAgent($value);
                break;
            case 198:
                $this->setGenerationAutomatiqueMdpInscrit($value);
                break;
            case 199:
                $this->setListeAcRgs($value);
                break;
            case 200:
                $this->setListeConsOrg($value);
                break;
            case 201:
                $this->setMarchePublicSimplifieEntreprise($value);
                break;
            case 202:
                $this->setDemandeValidationControleur($value);
                break;
            case 203:
                $this->setAccesExecContrats($value);
                break;
            case 204:
                $this->setFormeJuridiqueGroupementAttributaire($value);
                break;
            case 205:
                $this->setDateLimiteRemisePlisObligatoire($value);
                break;
            case 206:
                $this->setModifTypeProcedure($value);
                break;
            case 207:
                $this->setDonneesComplementairesProcedure($value);
                break;
            case 208:
                $this->setFormeMarcheFormePrix($value);
                break;
            case 209:
                $this->setControleUniciteNumMarche($value);
                break;
            case 210:
                $this->setAffichageNumMarche($value);
                break;
            case 211:
                $this->setAffichageDateFinMarche($value);
                break;
            case 212:
                $this->setAffichageIce($value);
                break;
            case 213:
                $this->setBlocageDepotHorsDelai($value);
                break;
            case 214:
                $this->setActiverSuiviPv($value);
                break;
            case 215:
                $this->setCaptchaValidateur($value);
                break;
            case 216:
                $this->setDecisionDepuisResultatAnalyse($value);
                break;
            case 217:
                $this->setModuleFacture($value);
                break;
            case 218:
                $this->setValidationEntrepriseFacturation($value);
                break;
            case 219:
                $this->setBloquerDepotSiEnvNonDepose($value);
                break;
            case 220:
                $this->setBloquerDepotSignatureInvalide($value);
                break;
            case 221:
                $this->setConsultationImportLots($value);
                break;
            case 222:
                $this->setDepotSelectionLots($value);
                break;
            case 223:
                $this->setModificationLotsApresMiseEnLigne($value);
                break;
            case 224:
                $this->setFiltreBdfEntrepriseValide($value);
                break;
            case 225:
                $this->setAffichageIdentifiantFiscale($value);
                break;
            case 226:
                $this->setDecisionCreerContrat($value);
                break;
            case 227:
                $this->setGenerationBiCle($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CommonConfigurationPlateformePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAuto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCodeCpv($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMultiLinguismeEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGestionFournisseursDocsMesSousServices($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAuthenticateInscritByCert($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAuthenticateInscritByLogin($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBaseQualifieeEntrepriseInsee($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGestionBoampMesSousServices($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setGestionBiCleMesSousServices($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNomEntrepriseToujoursVisible($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setGestionJalMesSousServices($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setChoixLangueAffichageConsultation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCompteEntrepriseDonneesComplementaires($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAnnuaireEntitesAchatVisibleParEntreprise($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAffichageRechercheAvanceeAgentAcSadTransversaux($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEncheresEntreprise($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSocleInterne($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setModuleCertificat($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSocleExterneAgent($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAfficherImageOrganisme($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSocleExterneEntreprise($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPortailDefenseEntreprise($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCompteEntrepriseProvince($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCompteEntrepriseTelephone3($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCompteEntrepriseTaxProf($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCompteEntrepriseRcville($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCompteEntrepriseDeclarationHonneur($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCompteEntrepriseQualification($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setCompteEntrepriseMoyensTechniques($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setCompteEntreprisePrestationsRealisees($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCompteEntrepriseChiffreAffaireProductionBiensServices($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setEnveloppeOffreTechnique($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setCompteInscritChoixProfil($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setProcedureAdaptee($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setCompteEntrepriseSiren($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCompteEntrepriseActivationInscriptionParAgent($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setMenuEntrepriseConsultationsEnCours($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setCompteEntrepriseCapitalSocial($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setMailActivationCompteInscritEntreprise($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDecisionDateNotification($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDecisionPmiPme($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDecisionNaturePrestations($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDecisionObjetMarche($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDecisionNote($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setDecisionFicheRecensement($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setRegistrePapierMailObligatoire($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setMenuEntrepriseIndicateursCles($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setAjoutRpaChampEmail($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAjoutRpaChampTelephone($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAjoutRpaChampFax($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEntreprisePoserQuestionSansPj($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setUrlDemarcheAgent($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setUrlDemarcheEntreprise($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setSiretDetailEntiteAchat($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setPresenceElu($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setGererMonService($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDepouillementEnveloppeDependRatEnveloppePrecedente($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setConsultationAdresseRetraisDossiers($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setConsultationAdresseDepotOffres($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setConsultationCautionProvisoire($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setConsultationLieuOuverturePlis($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setConsultationQualification($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setConsultationAgrement($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setConsultationEchantillonsDemandes($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setConsultationReunion($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setConsultationVisiteDesLieux($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setConsultationPrixAcquisition($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setResultatAnalyseAvantDecision($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setCreationInscritParAtes($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setConsultationVariantesAutorisees($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setRechercheAvanceeParTypeOrg($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setMenuAgentSocietesExclues($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setRechercheAvanceeParDomainesActivite($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setRechercheAvanceeParQualification($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setRechercheAvanceeParAgrement($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setContactAdministratifDansDetailConsultationCoteEntreprise($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setConsultationPiecesDossiers($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setGererAdressesService($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setTraduireAnnonces($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setAfficherBlocActionsDansDetailsAnnonces($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setAutoriserUneSeuleReponsePrincipaleParEntreprise($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setGenerationAvis($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setPassationAppliquerDonneesEnsembleLots($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setAutreAnnonceExtraitPv($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setAutreAnnonceRapportAchevement($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setAjoutFichierJointAutreAnnonce($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setConsultationModePassation($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setCompteEntrepriseIdentifiantUnique($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setGererCertificatsAgent($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setAutreAnnonceProgrammePrevisionnel($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setAnnulerConsultation($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setCfeEntrepriseAccessibleParAgent($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setCompteEntrepriseCodeNaceReferentiel($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setCodeNutLtReferentiel($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setLieuxExecution($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setCompteEntrepriseDomaineActiviteLtReferentiel($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setConsultationDomainesActivitesLtReferentiel($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setCompteEntrepriseAgrementLtReferentiel($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setCompteEntrepriseQualificationLtReferentiel($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setReponsePasAPas($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setAgentControleFormatMotDePasse($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setEntrepriseValidationEmailInscription($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setTelechargerDceAvecAuthentification($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setAuthentificationBasic($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setReglementConsultation($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setAnnoncesMarches($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setCfeDateFinValiditeObligatoire($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setAssocierDocumentsCfeConsultation($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setCompteEntrepriseRegion($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setCompteEntrepriseTelephone2($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setCompteEntrepriseCnss($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setCompteEntrepriseRcnum($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setCompteEntrepriseDomaineActivite($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setCompteInscritCodeNic($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setCompteEntrepriseCodeApe($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setCompteEntrepriseDocumentsCommerciaux($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setCompteEntrepriseAgrement($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setCompteEntrepriseMoyensHumains($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setCompteEntrepriseActiviteDomaineDefense($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setCompteEntrepriseDonneesFinancieres($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setEnveloppeAnonymat($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setPubliciteFormatXml($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setArticle133GenerationPf($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setEntrepriseRepondreConsultationApresCloture($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setTelechargementOutilVerifHorodatage($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setAffichageCodeCpv($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setConsultationDomainesActivites($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setStatistiquesMesureDemat($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setPublicationProcure($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setMenuEntrepriseToutesLesConsultations($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setCompteEntrepriseCpObligatoire($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setAnnulerDepot($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setTraduireEntiteAchatArabe($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setTraduireOrganismeArabe($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setDecisionCp($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setDecisionTrancheBudgetaire($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setDecisionClassement($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setDecisionAfficherDetailCandidatParDefaut($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setArticle133UploadFichier($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setMultiLinguismeAgent($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setCompteEntrepriseIfu($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setGestionOrganismeParAgent($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setUtiliserLucene($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setUtiliserPageHtmlLieuxExecution($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setPradoValidateurFormatDate($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setPradoValidateurFormatEmail($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setSocleExternePpp($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setValidationFormatChampsStricte($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setPoserQuestionNecessiteAuthentification($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setAutoriserModifProfilInscritAtes($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setUniciteReferenceConsultation($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setRegistrePapierRcnumRcvilleObligatoires($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setRegistrePapierAdresseCpVilleObligatoires($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setTelechargerDceSansIdentification($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setGestionEntrepriseParAgent($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setAutoriserCaracteresSpeciauxDansReference($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setInscriptionLibreEntreprise($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setAfficherCodeService($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setAuthenticateAgentByLogin($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setAuthenticateAgentByCert($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setGenererActeDengagement($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setEntrepriseControleFormatMotDePasse($arr[$keys[161]]);
        if (array_key_exists($keys[162], $arr)) $this->setAutreAnnonceInformation($arr[$keys[162]]);
        if (array_key_exists($keys[163], $arr)) $this->setCreerAutreAnnonce($arr[$keys[163]]);
        if (array_key_exists($keys[164], $arr)) $this->setConsultationClause($arr[$keys[164]]);
        if (array_key_exists($keys[165], $arr)) $this->setPanierEntreprise($arr[$keys[165]]);
        if (array_key_exists($keys[166], $arr)) $this->setParametragePubliciteParTypeProcedure($arr[$keys[166]]);
        if (array_key_exists($keys[167], $arr)) $this->setExportDecision($arr[$keys[167]]);
        if (array_key_exists($keys[168], $arr)) $this->setLieuOuverturePlisObligatoire($arr[$keys[168]]);
        if (array_key_exists($keys[169], $arr)) $this->setRegleMiseEnLigneParEntiteCoordinatrice($arr[$keys[169]]);
        if (array_key_exists($keys[170], $arr)) $this->setGestionNewsletter($arr[$keys[170]]);
        if (array_key_exists($keys[171], $arr)) $this->setPubliciteOpoce($arr[$keys[171]]);
        if (array_key_exists($keys[172], $arr)) $this->setGestionModelesFormulaire($arr[$keys[172]]);
        if (array_key_exists($keys[173], $arr)) $this->setGestionAdressesFacturationJal($arr[$keys[173]]);
        if (array_key_exists($keys[174], $arr)) $this->setPubliciteMarchesEnLigne($arr[$keys[174]]);
        if (array_key_exists($keys[175], $arr)) $this->setDossierAdditif($arr[$keys[175]]);
        if (array_key_exists($keys[176], $arr)) $this->setTypeMarche($arr[$keys[176]]);
        if (array_key_exists($keys[177], $arr)) $this->setTypePrestation($arr[$keys[177]]);
        if (array_key_exists($keys[178], $arr)) $this->setAfficherTjrBlocCaracteristiqueReponse($arr[$keys[178]]);
        if (array_key_exists($keys[179], $arr)) $this->setAlerteMetier($arr[$keys[179]]);
        if (array_key_exists($keys[180], $arr)) $this->setBourseALaSousTraitance($arr[$keys[180]]);
        if (array_key_exists($keys[181], $arr)) $this->setPublierGuides($arr[$keys[181]]);
        if (array_key_exists($keys[182], $arr)) $this->setRechercheAutoCompletion($arr[$keys[182]]);
        if (array_key_exists($keys[183], $arr)) $this->setStatutCompteEntreprise($arr[$keys[183]]);
        if (array_key_exists($keys[184], $arr)) $this->setGestionOrganismes($arr[$keys[184]]);
        if (array_key_exists($keys[185], $arr)) $this->setAccueilEntreprisePersonnalise($arr[$keys[185]]);
        if (array_key_exists($keys[186], $arr)) $this->setInterfaceModuleSub($arr[$keys[186]]);
        if (array_key_exists($keys[187], $arr)) $this->setAuthentificationAgentMultiOrganismes($arr[$keys[187]]);
        if (array_key_exists($keys[188], $arr)) $this->setPartagerConsultation($arr[$keys[188]]);
        if (array_key_exists($keys[189], $arr)) $this->setAnnuaireAcheteursPublics($arr[$keys[189]]);
        if (array_key_exists($keys[190], $arr)) $this->setEntrepriseActionsGroupees($arr[$keys[190]]);
        if (array_key_exists($keys[191], $arr)) $this->setLieuxExecutionCarte($arr[$keys[191]]);
        if (array_key_exists($keys[192], $arr)) $this->setSurchargeReferentiels($arr[$keys[192]]);
        if (array_key_exists($keys[193], $arr)) $this->setModeRestrictionRgs($arr[$keys[193]]);
        if (array_key_exists($keys[194], $arr)) $this->setAutreAnnonceDecisionResiliation($arr[$keys[194]]);
        if (array_key_exists($keys[195], $arr)) $this->setAutreAnnonceSyntheseRapportAudit($arr[$keys[195]]);
        if (array_key_exists($keys[196], $arr)) $this->setFicheWeka($arr[$keys[196]]);
        if (array_key_exists($keys[197], $arr)) $this->setGenerationAutomatiqueMdpAgent($arr[$keys[197]]);
        if (array_key_exists($keys[198], $arr)) $this->setGenerationAutomatiqueMdpInscrit($arr[$keys[198]]);
        if (array_key_exists($keys[199], $arr)) $this->setListeAcRgs($arr[$keys[199]]);
        if (array_key_exists($keys[200], $arr)) $this->setListeConsOrg($arr[$keys[200]]);
        if (array_key_exists($keys[201], $arr)) $this->setMarchePublicSimplifieEntreprise($arr[$keys[201]]);
        if (array_key_exists($keys[202], $arr)) $this->setDemandeValidationControleur($arr[$keys[202]]);
        if (array_key_exists($keys[203], $arr)) $this->setAccesExecContrats($arr[$keys[203]]);
        if (array_key_exists($keys[204], $arr)) $this->setFormeJuridiqueGroupementAttributaire($arr[$keys[204]]);
        if (array_key_exists($keys[205], $arr)) $this->setDateLimiteRemisePlisObligatoire($arr[$keys[205]]);
        if (array_key_exists($keys[206], $arr)) $this->setModifTypeProcedure($arr[$keys[206]]);
        if (array_key_exists($keys[207], $arr)) $this->setDonneesComplementairesProcedure($arr[$keys[207]]);
        if (array_key_exists($keys[208], $arr)) $this->setFormeMarcheFormePrix($arr[$keys[208]]);
        if (array_key_exists($keys[209], $arr)) $this->setControleUniciteNumMarche($arr[$keys[209]]);
        if (array_key_exists($keys[210], $arr)) $this->setAffichageNumMarche($arr[$keys[210]]);
        if (array_key_exists($keys[211], $arr)) $this->setAffichageDateFinMarche($arr[$keys[211]]);
        if (array_key_exists($keys[212], $arr)) $this->setAffichageIce($arr[$keys[212]]);
        if (array_key_exists($keys[213], $arr)) $this->setBlocageDepotHorsDelai($arr[$keys[213]]);
        if (array_key_exists($keys[214], $arr)) $this->setActiverSuiviPv($arr[$keys[214]]);
        if (array_key_exists($keys[215], $arr)) $this->setCaptchaValidateur($arr[$keys[215]]);
        if (array_key_exists($keys[216], $arr)) $this->setDecisionDepuisResultatAnalyse($arr[$keys[216]]);
        if (array_key_exists($keys[217], $arr)) $this->setModuleFacture($arr[$keys[217]]);
        if (array_key_exists($keys[218], $arr)) $this->setValidationEntrepriseFacturation($arr[$keys[218]]);
        if (array_key_exists($keys[219], $arr)) $this->setBloquerDepotSiEnvNonDepose($arr[$keys[219]]);
        if (array_key_exists($keys[220], $arr)) $this->setBloquerDepotSignatureInvalide($arr[$keys[220]]);
        if (array_key_exists($keys[221], $arr)) $this->setConsultationImportLots($arr[$keys[221]]);
        if (array_key_exists($keys[222], $arr)) $this->setDepotSelectionLots($arr[$keys[222]]);
        if (array_key_exists($keys[223], $arr)) $this->setModificationLotsApresMiseEnLigne($arr[$keys[223]]);
        if (array_key_exists($keys[224], $arr)) $this->setFiltreBdfEntrepriseValide($arr[$keys[224]]);
        if (array_key_exists($keys[225], $arr)) $this->setAffichageIdentifiantFiscale($arr[$keys[225]]);
        if (array_key_exists($keys[226], $arr)) $this->setDecisionCreerContrat($arr[$keys[226]]);
        if (array_key_exists($keys[227], $arr)) $this->setGenerationBiCle($arr[$keys[227]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ID_AUTO)) $criteria->add(CommonConfigurationPlateformePeer::ID_AUTO, $this->id_auto);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CODE_CPV)) $criteria->add(CommonConfigurationPlateformePeer::CODE_CPV, $this->code_cpv);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE, $this->multi_linguisme_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES, $this->gestion_fournisseurs_docs_mes_sous_services);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT, $this->authenticate_inscrit_by_cert);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN, $this->authenticate_inscrit_by_login);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE)) $criteria->add(CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE, $this->base_qualifiee_entreprise_insee);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES, $this->gestion_boamp_mes_sous_services);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES, $this->gestion_bi_cle_mes_sous_services);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE)) $criteria->add(CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE, $this->nom_entreprise_toujours_visible);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES, $this->gestion_jal_mes_sous_services);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION, $this->choix_langue_affichage_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES, $this->compte_entreprise_donnees_complementaires);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE, $this->annuaire_entites_achat_visible_par_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX, $this->affichage_recherche_avancee_agent_ac_sad_transversaux);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE, $this->encheres_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_INTERNE)) $criteria->add(CommonConfigurationPlateformePeer::SOCLE_INTERNE, $this->socle_interne);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODULE_CERTIFICAT)) $criteria->add(CommonConfigurationPlateformePeer::MODULE_CERTIFICAT, $this->module_certificat);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT, $this->socle_externe_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME, $this->afficher_image_organisme);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE, $this->socle_externe_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE, $this->portail_defense_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE, $this->compte_entreprise_province);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3, $this->compte_entreprise_telephone3);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF, $this->compte_entreprise_tax_prof);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE, $this->compte_entreprise_rcville);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR, $this->compte_entreprise_declaration_honneur);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION, $this->compte_entreprise_qualification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES, $this->compte_entreprise_moyens_techniques);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES, $this->compte_entreprise_prestations_realisees);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES, $this->compte_entreprise_chiffre_affaire_production_biens_services);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE)) $criteria->add(CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE, $this->enveloppe_offre_technique);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL, $this->compte_inscrit_choix_profil);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE)) $criteria->add(CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE, $this->procedure_adaptee);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN, $this->compte_entreprise_siren);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT, $this->compte_entreprise_activation_inscription_par_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS)) $criteria->add(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS, $this->menu_entreprise_consultations_en_cours);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL, $this->compte_entreprise_capital_social);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE, $this->mail_activation_compte_inscrit_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION, $this->decision_date_notification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_PMI_PME)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_PMI_PME, $this->decision_pmi_pme);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS, $this->decision_nature_prestations);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE, $this->decision_objet_marche);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_NOTE)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_NOTE, $this->decision_note);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT, $this->decision_fiche_recensement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE)) $criteria->add(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE, $this->registre_papier_mail_obligatoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES)) $criteria->add(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES, $this->menu_entreprise_indicateurs_cles);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL)) $criteria->add(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL, $this->ajout_rpa_champ_email);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE)) $criteria->add(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE, $this->ajout_rpa_champ_telephone);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX)) $criteria->add(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX, $this->ajout_rpa_champ_fax);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ)) $criteria->add(CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ, $this->entreprise_poser_question_sans_pj);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT, $this->url_demarche_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE, $this->url_demarche_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT)) $criteria->add(CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT, $this->siret_detail_entite_achat);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRESENCE_ELU)) $criteria->add(CommonConfigurationPlateformePeer::PRESENCE_ELU, $this->presence_elu);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_MON_SERVICE)) $criteria->add(CommonConfigurationPlateformePeer::GERER_MON_SERVICE, $this->gerer_mon_service);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE)) $criteria->add(CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE, $this->depouillement_enveloppe_depend_rat_enveloppe_precedente);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS, $this->consultation_adresse_retrais_dossiers);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES, $this->consultation_adresse_depot_offres);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE, $this->consultation_caution_provisoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS, $this->consultation_lieu_ouverture_plis);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION, $this->consultation_qualification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT, $this->consultation_agrement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES, $this->consultation_echantillons_demandes);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_REUNION)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_REUNION, $this->consultation_reunion);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX, $this->consultation_visite_des_lieux);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION, $this->consultation_prix_acquisition);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION)) $criteria->add(CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION, $this->resultat_analyse_avant_decision);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES)) $criteria->add(CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES, $this->creation_inscrit_par_ates);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES, $this->consultation_variantes_autorisees);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG)) $criteria->add(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG, $this->recherche_avancee_par_type_org);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES)) $criteria->add(CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES, $this->menu_agent_societes_exclues);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE)) $criteria->add(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE, $this->recherche_avancee_par_domaines_activite);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION, $this->recherche_avancee_par_qualification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT)) $criteria->add(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT, $this->recherche_avancee_par_agrement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE, $this->contact_administratif_dans_detail_consultation_cote_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS, $this->consultation_pieces_dossiers);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE)) $criteria->add(CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE, $this->gerer_adresses_service);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES)) $criteria->add(CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES, $this->traduire_annonces);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES, $this->afficher_bloc_actions_dans_details_annonces);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE, $this->autoriser_une_seule_reponse_principale_par_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AVIS)) $criteria->add(CommonConfigurationPlateformePeer::GENERATION_AVIS, $this->generation_avis);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS)) $criteria->add(CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS, $this->passation_appliquer_donnees_ensemble_lots);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV, $this->autre_annonce_extrait_pv);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT, $this->autre_annonce_rapport_achevement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE)) $criteria->add(CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE, $this->ajout_fichier_joint_autre_annonce);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION, $this->consultation_mode_passation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE, $this->compte_entreprise_identifiant_unique);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT, $this->gerer_certificats_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL, $this->autre_annonce_programme_previsionnel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNULER_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::ANNULER_CONSULTATION, $this->annuler_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT, $this->cfe_entreprise_accessible_par_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL, $this->compte_entreprise_code_nace_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL, $this->code_nut_lt_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEUX_EXECUTION)) $criteria->add(CommonConfigurationPlateformePeer::LIEUX_EXECUTION, $this->lieux_execution);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL, $this->compte_entreprise_domaine_activite_lt_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL, $this->consultation_domaines_activites_lt_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL, $this->compte_entreprise_agrement_lt_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL, $this->compte_entreprise_qualification_lt_referentiel);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS)) $criteria->add(CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS, $this->reponse_pas_a_pas);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE)) $criteria->add(CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE, $this->agent_controle_format_mot_de_passe);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION)) $criteria->add(CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION, $this->entreprise_validation_email_inscription);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION, $this->telecharger_dce_avec_authentification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC, $this->authentification_basic);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION, $this->reglement_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNONCES_MARCHES)) $criteria->add(CommonConfigurationPlateformePeer::ANNONCES_MARCHES, $this->annonces_marches);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE)) $criteria->add(CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE, $this->cfe_date_fin_validite_obligatoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION, $this->associer_documents_cfe_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION, $this->compte_entreprise_region);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2, $this->compte_entreprise_telephone2);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS, $this->compte_entreprise_cnss);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM, $this->compte_entreprise_rcnum);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE, $this->compte_entreprise_domaine_activite);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC, $this->compte_inscrit_code_nic);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE, $this->compte_entreprise_code_ape);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX, $this->compte_entreprise_documents_commerciaux);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT, $this->compte_entreprise_agrement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS, $this->compte_entreprise_moyens_humains);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE, $this->compte_entreprise_activite_domaine_defense);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES, $this->compte_entreprise_donnees_financieres);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT)) $criteria->add(CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT, $this->enveloppe_anonymat);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML)) $criteria->add(CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML, $this->publicite_format_xml);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF)) $criteria->add(CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF, $this->article_133_generation_pf);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE)) $criteria->add(CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE, $this->entreprise_repondre_consultation_apres_cloture);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE)) $criteria->add(CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE, $this->telechargement_outil_verif_horodatage);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV, $this->affichage_code_cpv);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES, $this->consultation_domaines_activites);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT)) $criteria->add(CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT, $this->statistiques_mesure_demat);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICATION_PROCURE)) $criteria->add(CommonConfigurationPlateformePeer::PUBLICATION_PROCURE, $this->publication_procure);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS)) $criteria->add(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS, $this->menu_entreprise_toutes_les_consultations);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE, $this->compte_entreprise_cp_obligatoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNULER_DEPOT)) $criteria->add(CommonConfigurationPlateformePeer::ANNULER_DEPOT, $this->annuler_depot);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE)) $criteria->add(CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE, $this->traduire_entite_achat_arabe);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE)) $criteria->add(CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE, $this->traduire_organisme_arabe);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CP)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_CP, $this->decision_cp);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE, $this->decision_tranche_budgetaire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CLASSEMENT)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_CLASSEMENT, $this->decision_classement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT, $this->decision_afficher_detail_candidat_par_defaut);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER)) $criteria->add(CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER, $this->article_133_upload_fichier);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT, $this->multi_linguisme_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU)) $criteria->add(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU, $this->compte_entreprise_ifu);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT, $this->gestion_organisme_par_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UTILISER_LUCENE)) $criteria->add(CommonConfigurationPlateformePeer::UTILISER_LUCENE, $this->utiliser_lucene);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION)) $criteria->add(CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION, $this->utiliser_page_html_lieux_execution);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE)) $criteria->add(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE, $this->prado_validateur_format_date);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL)) $criteria->add(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL, $this->prado_validateur_format_email);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP)) $criteria->add(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP, $this->socle_externe_ppp);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE)) $criteria->add(CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE, $this->validation_format_champs_stricte);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION, $this->poser_question_necessite_authentification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES)) $criteria->add(CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES, $this->autoriser_modif_profil_inscrit_ates);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION, $this->unicite_reference_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES)) $criteria->add(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES, $this->registre_papier_rcnum_rcville_obligatoires);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES)) $criteria->add(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES, $this->registre_papier_adresse_cp_ville_obligatoires);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION)) $criteria->add(CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION, $this->telecharger_dce_sans_identification);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT, $this->gestion_entreprise_par_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE)) $criteria->add(CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE, $this->autoriser_caracteres_speciaux_dans_reference);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE, $this->inscription_libre_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE, $this->afficher_code_service);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN, $this->authenticate_agent_by_login);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT, $this->authenticate_agent_by_cert);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT)) $criteria->add(CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT, $this->generer_acte_dengagement);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE)) $criteria->add(CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE, $this->entreprise_controle_format_mot_de_passe);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION, $this->autre_annonce_information);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE)) $criteria->add(CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE, $this->creer_autre_annonce);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE, $this->consultation_clause);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PANIER_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::PANIER_ENTREPRISE, $this->panier_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE)) $criteria->add(CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE, $this->parametrage_publicite_par_type_procedure);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::EXPORT_DECISION)) $criteria->add(CommonConfigurationPlateformePeer::EXPORT_DECISION, $this->export_decision);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE)) $criteria->add(CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE, $this->lieu_ouverture_plis_obligatoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE)) $criteria->add(CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE, $this->regle_mise_en_ligne_par_entite_coordinatrice);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_NEWSLETTER)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_NEWSLETTER, $this->gestion_newsletter);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_OPOCE)) $criteria->add(CommonConfigurationPlateformePeer::PUBLICITE_OPOCE, $this->publicite_opoce);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE, $this->gestion_modeles_formulaire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL, $this->gestion_adresses_facturation_jal);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE)) $criteria->add(CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE, $this->publicite_marches_en_ligne);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DOSSIER_ADDITIF)) $criteria->add(CommonConfigurationPlateformePeer::DOSSIER_ADDITIF, $this->dossier_additif);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TYPE_MARCHE)) $criteria->add(CommonConfigurationPlateformePeer::TYPE_MARCHE, $this->type_marche);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::TYPE_PRESTATION)) $criteria->add(CommonConfigurationPlateformePeer::TYPE_PRESTATION, $this->type_prestation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE, $this->afficher_tjr_bloc_caracteristique_reponse);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ALERTE_METIER)) $criteria->add(CommonConfigurationPlateformePeer::ALERTE_METIER, $this->alerte_metier);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE)) $criteria->add(CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE, $this->bourse_a_la_sous_traitance);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PUBLIER_GUIDES)) $criteria->add(CommonConfigurationPlateformePeer::PUBLIER_GUIDES, $this->publier_guides);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION)) $criteria->add(CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION, $this->recherche_auto_completion);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE, $this->statut_compte_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GESTION_ORGANISMES)) $criteria->add(CommonConfigurationPlateformePeer::GESTION_ORGANISMES, $this->gestion_organismes);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE)) $criteria->add(CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE, $this->accueil_entreprise_personnalise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB)) $criteria->add(CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB, $this->interface_module_sub);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES)) $criteria->add(CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES, $this->authentification_agent_multi_organismes);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION)) $criteria->add(CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION, $this->partager_consultation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS)) $criteria->add(CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS, $this->annuaire_acheteurs_publics);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES)) $criteria->add(CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES, $this->entreprise_actions_groupees);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE)) $criteria->add(CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE, $this->lieux_execution_carte);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS)) $criteria->add(CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS, $this->surcharge_referentiels);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS)) $criteria->add(CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS, $this->mode_restriction_rgs);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION, $this->autre_annonce_decision_resiliation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT)) $criteria->add(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT, $this->autre_annonce_synthese_rapport_audit);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FICHE_WEKA)) $criteria->add(CommonConfigurationPlateformePeer::FICHE_WEKA, $this->fiche_weka);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT)) $criteria->add(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT, $this->generation_automatique_mdp_agent);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT)) $criteria->add(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT, $this->generation_automatique_mdp_inscrit);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LISTE_AC_RGS)) $criteria->add(CommonConfigurationPlateformePeer::LISTE_AC_RGS, $this->liste_ac_rgs);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::LISTE_CONS_ORG)) $criteria->add(CommonConfigurationPlateformePeer::LISTE_CONS_ORG, $this->liste_cons_org);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE)) $criteria->add(CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE, $this->marche_public_simplifie_entreprise);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR)) $criteria->add(CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR, $this->demande_validation_controleur);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS)) $criteria->add(CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS, $this->acces_exec_contrats);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE)) $criteria->add(CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE, $this->forme_juridique_groupement_attributaire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE)) $criteria->add(CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE, $this->date_limite_remise_plis_obligatoire);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE)) $criteria->add(CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE, $this->modif_type_procedure);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE)) $criteria->add(CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE, $this->donnees_complementaires_procedure);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX)) $criteria->add(CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX, $this->forme_marche_forme_prix);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE)) $criteria->add(CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE, $this->controle_unicite_num_marche);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE, $this->affichage_num_marche);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE, $this->affichage_date_fin_marche);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_ICE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_ICE, $this->affichage_ice);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI)) $criteria->add(CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI, $this->blocage_depot_hors_delai);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV)) $criteria->add(CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV, $this->activer_suivi_pv);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR)) $criteria->add(CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR, $this->captcha_validateur);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE, $this->decision_depuis_resultat_analyse);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODULE_FACTURE)) $criteria->add(CommonConfigurationPlateformePeer::MODULE_FACTURE, $this->module_facture);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION)) $criteria->add(CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION, $this->validation_entreprise_facturation);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE)) $criteria->add(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE, $this->bloquer_depot_si_env_non_depose);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE)) $criteria->add(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE, $this->bloquer_depot_signature_invalide);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS)) $criteria->add(CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS, $this->consultation_import_lots);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS)) $criteria->add(CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS, $this->depot_selection_lots);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE)) $criteria->add(CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE, $this->modification_lots_apres_mise_en_ligne);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE)) $criteria->add(CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE, $this->filtre_bdf_entreprise_valide);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE)) $criteria->add(CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE, $this->affichage_identifiant_fiscale);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT)) $criteria->add(CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT, $this->decision_creer_contrat);
        if ($this->isColumnModified(CommonConfigurationPlateformePeer::GENERATION_BI_CLE)) $criteria->add(CommonConfigurationPlateformePeer::GENERATION_BI_CLE, $this->generation_bi_cle);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);
        $criteria->add(CommonConfigurationPlateformePeer::ID_AUTO, $this->id_auto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAuto();
    }

    /**
     * Generic method to set the primary key (id_auto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAuto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAuto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonConfigurationPlateforme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCodeCpv($this->getCodeCpv());
        $copyObj->setMultiLinguismeEntreprise($this->getMultiLinguismeEntreprise());
        $copyObj->setGestionFournisseursDocsMesSousServices($this->getGestionFournisseursDocsMesSousServices());
        $copyObj->setAuthenticateInscritByCert($this->getAuthenticateInscritByCert());
        $copyObj->setAuthenticateInscritByLogin($this->getAuthenticateInscritByLogin());
        $copyObj->setBaseQualifieeEntrepriseInsee($this->getBaseQualifieeEntrepriseInsee());
        $copyObj->setGestionBoampMesSousServices($this->getGestionBoampMesSousServices());
        $copyObj->setGestionBiCleMesSousServices($this->getGestionBiCleMesSousServices());
        $copyObj->setNomEntrepriseToujoursVisible($this->getNomEntrepriseToujoursVisible());
        $copyObj->setGestionJalMesSousServices($this->getGestionJalMesSousServices());
        $copyObj->setChoixLangueAffichageConsultation($this->getChoixLangueAffichageConsultation());
        $copyObj->setCompteEntrepriseDonneesComplementaires($this->getCompteEntrepriseDonneesComplementaires());
        $copyObj->setAnnuaireEntitesAchatVisibleParEntreprise($this->getAnnuaireEntitesAchatVisibleParEntreprise());
        $copyObj->setAffichageRechercheAvanceeAgentAcSadTransversaux($this->getAffichageRechercheAvanceeAgentAcSadTransversaux());
        $copyObj->setEncheresEntreprise($this->getEncheresEntreprise());
        $copyObj->setSocleInterne($this->getSocleInterne());
        $copyObj->setModuleCertificat($this->getModuleCertificat());
        $copyObj->setSocleExterneAgent($this->getSocleExterneAgent());
        $copyObj->setAfficherImageOrganisme($this->getAfficherImageOrganisme());
        $copyObj->setSocleExterneEntreprise($this->getSocleExterneEntreprise());
        $copyObj->setPortailDefenseEntreprise($this->getPortailDefenseEntreprise());
        $copyObj->setCompteEntrepriseProvince($this->getCompteEntrepriseProvince());
        $copyObj->setCompteEntrepriseTelephone3($this->getCompteEntrepriseTelephone3());
        $copyObj->setCompteEntrepriseTaxProf($this->getCompteEntrepriseTaxProf());
        $copyObj->setCompteEntrepriseRcville($this->getCompteEntrepriseRcville());
        $copyObj->setCompteEntrepriseDeclarationHonneur($this->getCompteEntrepriseDeclarationHonneur());
        $copyObj->setCompteEntrepriseQualification($this->getCompteEntrepriseQualification());
        $copyObj->setCompteEntrepriseMoyensTechniques($this->getCompteEntrepriseMoyensTechniques());
        $copyObj->setCompteEntreprisePrestationsRealisees($this->getCompteEntreprisePrestationsRealisees());
        $copyObj->setCompteEntrepriseChiffreAffaireProductionBiensServices($this->getCompteEntrepriseChiffreAffaireProductionBiensServices());
        $copyObj->setEnveloppeOffreTechnique($this->getEnveloppeOffreTechnique());
        $copyObj->setCompteInscritChoixProfil($this->getCompteInscritChoixProfil());
        $copyObj->setProcedureAdaptee($this->getProcedureAdaptee());
        $copyObj->setCompteEntrepriseSiren($this->getCompteEntrepriseSiren());
        $copyObj->setCompteEntrepriseActivationInscriptionParAgent($this->getCompteEntrepriseActivationInscriptionParAgent());
        $copyObj->setMenuEntrepriseConsultationsEnCours($this->getMenuEntrepriseConsultationsEnCours());
        $copyObj->setCompteEntrepriseCapitalSocial($this->getCompteEntrepriseCapitalSocial());
        $copyObj->setMailActivationCompteInscritEntreprise($this->getMailActivationCompteInscritEntreprise());
        $copyObj->setDecisionDateNotification($this->getDecisionDateNotification());
        $copyObj->setDecisionPmiPme($this->getDecisionPmiPme());
        $copyObj->setDecisionNaturePrestations($this->getDecisionNaturePrestations());
        $copyObj->setDecisionObjetMarche($this->getDecisionObjetMarche());
        $copyObj->setDecisionNote($this->getDecisionNote());
        $copyObj->setDecisionFicheRecensement($this->getDecisionFicheRecensement());
        $copyObj->setRegistrePapierMailObligatoire($this->getRegistrePapierMailObligatoire());
        $copyObj->setMenuEntrepriseIndicateursCles($this->getMenuEntrepriseIndicateursCles());
        $copyObj->setAjoutRpaChampEmail($this->getAjoutRpaChampEmail());
        $copyObj->setAjoutRpaChampTelephone($this->getAjoutRpaChampTelephone());
        $copyObj->setAjoutRpaChampFax($this->getAjoutRpaChampFax());
        $copyObj->setEntreprisePoserQuestionSansPj($this->getEntreprisePoserQuestionSansPj());
        $copyObj->setUrlDemarcheAgent($this->getUrlDemarcheAgent());
        $copyObj->setUrlDemarcheEntreprise($this->getUrlDemarcheEntreprise());
        $copyObj->setSiretDetailEntiteAchat($this->getSiretDetailEntiteAchat());
        $copyObj->setPresenceElu($this->getPresenceElu());
        $copyObj->setGererMonService($this->getGererMonService());
        $copyObj->setDepouillementEnveloppeDependRatEnveloppePrecedente($this->getDepouillementEnveloppeDependRatEnveloppePrecedente());
        $copyObj->setConsultationAdresseRetraisDossiers($this->getConsultationAdresseRetraisDossiers());
        $copyObj->setConsultationAdresseDepotOffres($this->getConsultationAdresseDepotOffres());
        $copyObj->setConsultationCautionProvisoire($this->getConsultationCautionProvisoire());
        $copyObj->setConsultationLieuOuverturePlis($this->getConsultationLieuOuverturePlis());
        $copyObj->setConsultationQualification($this->getConsultationQualification());
        $copyObj->setConsultationAgrement($this->getConsultationAgrement());
        $copyObj->setConsultationEchantillonsDemandes($this->getConsultationEchantillonsDemandes());
        $copyObj->setConsultationReunion($this->getConsultationReunion());
        $copyObj->setConsultationVisiteDesLieux($this->getConsultationVisiteDesLieux());
        $copyObj->setConsultationPrixAcquisition($this->getConsultationPrixAcquisition());
        $copyObj->setResultatAnalyseAvantDecision($this->getResultatAnalyseAvantDecision());
        $copyObj->setCreationInscritParAtes($this->getCreationInscritParAtes());
        $copyObj->setConsultationVariantesAutorisees($this->getConsultationVariantesAutorisees());
        $copyObj->setRechercheAvanceeParTypeOrg($this->getRechercheAvanceeParTypeOrg());
        $copyObj->setMenuAgentSocietesExclues($this->getMenuAgentSocietesExclues());
        $copyObj->setRechercheAvanceeParDomainesActivite($this->getRechercheAvanceeParDomainesActivite());
        $copyObj->setRechercheAvanceeParQualification($this->getRechercheAvanceeParQualification());
        $copyObj->setRechercheAvanceeParAgrement($this->getRechercheAvanceeParAgrement());
        $copyObj->setContactAdministratifDansDetailConsultationCoteEntreprise($this->getContactAdministratifDansDetailConsultationCoteEntreprise());
        $copyObj->setConsultationPiecesDossiers($this->getConsultationPiecesDossiers());
        $copyObj->setGererAdressesService($this->getGererAdressesService());
        $copyObj->setTraduireAnnonces($this->getTraduireAnnonces());
        $copyObj->setAfficherBlocActionsDansDetailsAnnonces($this->getAfficherBlocActionsDansDetailsAnnonces());
        $copyObj->setAutoriserUneSeuleReponsePrincipaleParEntreprise($this->getAutoriserUneSeuleReponsePrincipaleParEntreprise());
        $copyObj->setGenerationAvis($this->getGenerationAvis());
        $copyObj->setPassationAppliquerDonneesEnsembleLots($this->getPassationAppliquerDonneesEnsembleLots());
        $copyObj->setAutreAnnonceExtraitPv($this->getAutreAnnonceExtraitPv());
        $copyObj->setAutreAnnonceRapportAchevement($this->getAutreAnnonceRapportAchevement());
        $copyObj->setAjoutFichierJointAutreAnnonce($this->getAjoutFichierJointAutreAnnonce());
        $copyObj->setConsultationModePassation($this->getConsultationModePassation());
        $copyObj->setCompteEntrepriseIdentifiantUnique($this->getCompteEntrepriseIdentifiantUnique());
        $copyObj->setGererCertificatsAgent($this->getGererCertificatsAgent());
        $copyObj->setAutreAnnonceProgrammePrevisionnel($this->getAutreAnnonceProgrammePrevisionnel());
        $copyObj->setAnnulerConsultation($this->getAnnulerConsultation());
        $copyObj->setCfeEntrepriseAccessibleParAgent($this->getCfeEntrepriseAccessibleParAgent());
        $copyObj->setCompteEntrepriseCodeNaceReferentiel($this->getCompteEntrepriseCodeNaceReferentiel());
        $copyObj->setCodeNutLtReferentiel($this->getCodeNutLtReferentiel());
        $copyObj->setLieuxExecution($this->getLieuxExecution());
        $copyObj->setCompteEntrepriseDomaineActiviteLtReferentiel($this->getCompteEntrepriseDomaineActiviteLtReferentiel());
        $copyObj->setConsultationDomainesActivitesLtReferentiel($this->getConsultationDomainesActivitesLtReferentiel());
        $copyObj->setCompteEntrepriseAgrementLtReferentiel($this->getCompteEntrepriseAgrementLtReferentiel());
        $copyObj->setCompteEntrepriseQualificationLtReferentiel($this->getCompteEntrepriseQualificationLtReferentiel());
        $copyObj->setReponsePasAPas($this->getReponsePasAPas());
        $copyObj->setAgentControleFormatMotDePasse($this->getAgentControleFormatMotDePasse());
        $copyObj->setEntrepriseValidationEmailInscription($this->getEntrepriseValidationEmailInscription());
        $copyObj->setTelechargerDceAvecAuthentification($this->getTelechargerDceAvecAuthentification());
        $copyObj->setAuthentificationBasic($this->getAuthentificationBasic());
        $copyObj->setReglementConsultation($this->getReglementConsultation());
        $copyObj->setAnnoncesMarches($this->getAnnoncesMarches());
        $copyObj->setCfeDateFinValiditeObligatoire($this->getCfeDateFinValiditeObligatoire());
        $copyObj->setAssocierDocumentsCfeConsultation($this->getAssocierDocumentsCfeConsultation());
        $copyObj->setCompteEntrepriseRegion($this->getCompteEntrepriseRegion());
        $copyObj->setCompteEntrepriseTelephone2($this->getCompteEntrepriseTelephone2());
        $copyObj->setCompteEntrepriseCnss($this->getCompteEntrepriseCnss());
        $copyObj->setCompteEntrepriseRcnum($this->getCompteEntrepriseRcnum());
        $copyObj->setCompteEntrepriseDomaineActivite($this->getCompteEntrepriseDomaineActivite());
        $copyObj->setCompteInscritCodeNic($this->getCompteInscritCodeNic());
        $copyObj->setCompteEntrepriseCodeApe($this->getCompteEntrepriseCodeApe());
        $copyObj->setCompteEntrepriseDocumentsCommerciaux($this->getCompteEntrepriseDocumentsCommerciaux());
        $copyObj->setCompteEntrepriseAgrement($this->getCompteEntrepriseAgrement());
        $copyObj->setCompteEntrepriseMoyensHumains($this->getCompteEntrepriseMoyensHumains());
        $copyObj->setCompteEntrepriseActiviteDomaineDefense($this->getCompteEntrepriseActiviteDomaineDefense());
        $copyObj->setCompteEntrepriseDonneesFinancieres($this->getCompteEntrepriseDonneesFinancieres());
        $copyObj->setEnveloppeAnonymat($this->getEnveloppeAnonymat());
        $copyObj->setPubliciteFormatXml($this->getPubliciteFormatXml());
        $copyObj->setArticle133GenerationPf($this->getArticle133GenerationPf());
        $copyObj->setEntrepriseRepondreConsultationApresCloture($this->getEntrepriseRepondreConsultationApresCloture());
        $copyObj->setTelechargementOutilVerifHorodatage($this->getTelechargementOutilVerifHorodatage());
        $copyObj->setAffichageCodeCpv($this->getAffichageCodeCpv());
        $copyObj->setConsultationDomainesActivites($this->getConsultationDomainesActivites());
        $copyObj->setStatistiquesMesureDemat($this->getStatistiquesMesureDemat());
        $copyObj->setPublicationProcure($this->getPublicationProcure());
        $copyObj->setMenuEntrepriseToutesLesConsultations($this->getMenuEntrepriseToutesLesConsultations());
        $copyObj->setCompteEntrepriseCpObligatoire($this->getCompteEntrepriseCpObligatoire());
        $copyObj->setAnnulerDepot($this->getAnnulerDepot());
        $copyObj->setTraduireEntiteAchatArabe($this->getTraduireEntiteAchatArabe());
        $copyObj->setTraduireOrganismeArabe($this->getTraduireOrganismeArabe());
        $copyObj->setDecisionCp($this->getDecisionCp());
        $copyObj->setDecisionTrancheBudgetaire($this->getDecisionTrancheBudgetaire());
        $copyObj->setDecisionClassement($this->getDecisionClassement());
        $copyObj->setDecisionAfficherDetailCandidatParDefaut($this->getDecisionAfficherDetailCandidatParDefaut());
        $copyObj->setArticle133UploadFichier($this->getArticle133UploadFichier());
        $copyObj->setMultiLinguismeAgent($this->getMultiLinguismeAgent());
        $copyObj->setCompteEntrepriseIfu($this->getCompteEntrepriseIfu());
        $copyObj->setGestionOrganismeParAgent($this->getGestionOrganismeParAgent());
        $copyObj->setUtiliserLucene($this->getUtiliserLucene());
        $copyObj->setUtiliserPageHtmlLieuxExecution($this->getUtiliserPageHtmlLieuxExecution());
        $copyObj->setPradoValidateurFormatDate($this->getPradoValidateurFormatDate());
        $copyObj->setPradoValidateurFormatEmail($this->getPradoValidateurFormatEmail());
        $copyObj->setSocleExternePpp($this->getSocleExternePpp());
        $copyObj->setValidationFormatChampsStricte($this->getValidationFormatChampsStricte());
        $copyObj->setPoserQuestionNecessiteAuthentification($this->getPoserQuestionNecessiteAuthentification());
        $copyObj->setAutoriserModifProfilInscritAtes($this->getAutoriserModifProfilInscritAtes());
        $copyObj->setUniciteReferenceConsultation($this->getUniciteReferenceConsultation());
        $copyObj->setRegistrePapierRcnumRcvilleObligatoires($this->getRegistrePapierRcnumRcvilleObligatoires());
        $copyObj->setRegistrePapierAdresseCpVilleObligatoires($this->getRegistrePapierAdresseCpVilleObligatoires());
        $copyObj->setTelechargerDceSansIdentification($this->getTelechargerDceSansIdentification());
        $copyObj->setGestionEntrepriseParAgent($this->getGestionEntrepriseParAgent());
        $copyObj->setAutoriserCaracteresSpeciauxDansReference($this->getAutoriserCaracteresSpeciauxDansReference());
        $copyObj->setInscriptionLibreEntreprise($this->getInscriptionLibreEntreprise());
        $copyObj->setAfficherCodeService($this->getAfficherCodeService());
        $copyObj->setAuthenticateAgentByLogin($this->getAuthenticateAgentByLogin());
        $copyObj->setAuthenticateAgentByCert($this->getAuthenticateAgentByCert());
        $copyObj->setGenererActeDengagement($this->getGenererActeDengagement());
        $copyObj->setEntrepriseControleFormatMotDePasse($this->getEntrepriseControleFormatMotDePasse());
        $copyObj->setAutreAnnonceInformation($this->getAutreAnnonceInformation());
        $copyObj->setCreerAutreAnnonce($this->getCreerAutreAnnonce());
        $copyObj->setConsultationClause($this->getConsultationClause());
        $copyObj->setPanierEntreprise($this->getPanierEntreprise());
        $copyObj->setParametragePubliciteParTypeProcedure($this->getParametragePubliciteParTypeProcedure());
        $copyObj->setExportDecision($this->getExportDecision());
        $copyObj->setLieuOuverturePlisObligatoire($this->getLieuOuverturePlisObligatoire());
        $copyObj->setRegleMiseEnLigneParEntiteCoordinatrice($this->getRegleMiseEnLigneParEntiteCoordinatrice());
        $copyObj->setGestionNewsletter($this->getGestionNewsletter());
        $copyObj->setPubliciteOpoce($this->getPubliciteOpoce());
        $copyObj->setGestionModelesFormulaire($this->getGestionModelesFormulaire());
        $copyObj->setGestionAdressesFacturationJal($this->getGestionAdressesFacturationJal());
        $copyObj->setPubliciteMarchesEnLigne($this->getPubliciteMarchesEnLigne());
        $copyObj->setDossierAdditif($this->getDossierAdditif());
        $copyObj->setTypeMarche($this->getTypeMarche());
        $copyObj->setTypePrestation($this->getTypePrestation());
        $copyObj->setAfficherTjrBlocCaracteristiqueReponse($this->getAfficherTjrBlocCaracteristiqueReponse());
        $copyObj->setAlerteMetier($this->getAlerteMetier());
        $copyObj->setBourseALaSousTraitance($this->getBourseALaSousTraitance());
        $copyObj->setPublierGuides($this->getPublierGuides());
        $copyObj->setRechercheAutoCompletion($this->getRechercheAutoCompletion());
        $copyObj->setStatutCompteEntreprise($this->getStatutCompteEntreprise());
        $copyObj->setGestionOrganismes($this->getGestionOrganismes());
        $copyObj->setAccueilEntreprisePersonnalise($this->getAccueilEntreprisePersonnalise());
        $copyObj->setInterfaceModuleSub($this->getInterfaceModuleSub());
        $copyObj->setAuthentificationAgentMultiOrganismes($this->getAuthentificationAgentMultiOrganismes());
        $copyObj->setPartagerConsultation($this->getPartagerConsultation());
        $copyObj->setAnnuaireAcheteursPublics($this->getAnnuaireAcheteursPublics());
        $copyObj->setEntrepriseActionsGroupees($this->getEntrepriseActionsGroupees());
        $copyObj->setLieuxExecutionCarte($this->getLieuxExecutionCarte());
        $copyObj->setSurchargeReferentiels($this->getSurchargeReferentiels());
        $copyObj->setModeRestrictionRgs($this->getModeRestrictionRgs());
        $copyObj->setAutreAnnonceDecisionResiliation($this->getAutreAnnonceDecisionResiliation());
        $copyObj->setAutreAnnonceSyntheseRapportAudit($this->getAutreAnnonceSyntheseRapportAudit());
        $copyObj->setFicheWeka($this->getFicheWeka());
        $copyObj->setGenerationAutomatiqueMdpAgent($this->getGenerationAutomatiqueMdpAgent());
        $copyObj->setGenerationAutomatiqueMdpInscrit($this->getGenerationAutomatiqueMdpInscrit());
        $copyObj->setListeAcRgs($this->getListeAcRgs());
        $copyObj->setListeConsOrg($this->getListeConsOrg());
        $copyObj->setMarchePublicSimplifieEntreprise($this->getMarchePublicSimplifieEntreprise());
        $copyObj->setDemandeValidationControleur($this->getDemandeValidationControleur());
        $copyObj->setAccesExecContrats($this->getAccesExecContrats());
        $copyObj->setFormeJuridiqueGroupementAttributaire($this->getFormeJuridiqueGroupementAttributaire());
        $copyObj->setDateLimiteRemisePlisObligatoire($this->getDateLimiteRemisePlisObligatoire());
        $copyObj->setModifTypeProcedure($this->getModifTypeProcedure());
        $copyObj->setDonneesComplementairesProcedure($this->getDonneesComplementairesProcedure());
        $copyObj->setFormeMarcheFormePrix($this->getFormeMarcheFormePrix());
        $copyObj->setControleUniciteNumMarche($this->getControleUniciteNumMarche());
        $copyObj->setAffichageNumMarche($this->getAffichageNumMarche());
        $copyObj->setAffichageDateFinMarche($this->getAffichageDateFinMarche());
        $copyObj->setAffichageIce($this->getAffichageIce());
        $copyObj->setBlocageDepotHorsDelai($this->getBlocageDepotHorsDelai());
        $copyObj->setActiverSuiviPv($this->getActiverSuiviPv());
        $copyObj->setCaptchaValidateur($this->getCaptchaValidateur());
        $copyObj->setDecisionDepuisResultatAnalyse($this->getDecisionDepuisResultatAnalyse());
        $copyObj->setModuleFacture($this->getModuleFacture());
        $copyObj->setValidationEntrepriseFacturation($this->getValidationEntrepriseFacturation());
        $copyObj->setBloquerDepotSiEnvNonDepose($this->getBloquerDepotSiEnvNonDepose());
        $copyObj->setBloquerDepotSignatureInvalide($this->getBloquerDepotSignatureInvalide());
        $copyObj->setConsultationImportLots($this->getConsultationImportLots());
        $copyObj->setDepotSelectionLots($this->getDepotSelectionLots());
        $copyObj->setModificationLotsApresMiseEnLigne($this->getModificationLotsApresMiseEnLigne());
        $copyObj->setFiltreBdfEntrepriseValide($this->getFiltreBdfEntrepriseValide());
        $copyObj->setAffichageIdentifiantFiscale($this->getAffichageIdentifiantFiscale());
        $copyObj->setDecisionCreerContrat($this->getDecisionCreerContrat());
        $copyObj->setGenerationBiCle($this->getGenerationBiCle());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAuto(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return CommonConfigurationPlateforme Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CommonConfigurationPlateformePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonConfigurationPlateformePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_auto = null;
        $this->code_cpv = null;
        $this->multi_linguisme_entreprise = null;
        $this->gestion_fournisseurs_docs_mes_sous_services = null;
        $this->authenticate_inscrit_by_cert = null;
        $this->authenticate_inscrit_by_login = null;
        $this->base_qualifiee_entreprise_insee = null;
        $this->gestion_boamp_mes_sous_services = null;
        $this->gestion_bi_cle_mes_sous_services = null;
        $this->nom_entreprise_toujours_visible = null;
        $this->gestion_jal_mes_sous_services = null;
        $this->choix_langue_affichage_consultation = null;
        $this->compte_entreprise_donnees_complementaires = null;
        $this->annuaire_entites_achat_visible_par_entreprise = null;
        $this->affichage_recherche_avancee_agent_ac_sad_transversaux = null;
        $this->encheres_entreprise = null;
        $this->socle_interne = null;
        $this->module_certificat = null;
        $this->socle_externe_agent = null;
        $this->afficher_image_organisme = null;
        $this->socle_externe_entreprise = null;
        $this->portail_defense_entreprise = null;
        $this->compte_entreprise_province = null;
        $this->compte_entreprise_telephone3 = null;
        $this->compte_entreprise_tax_prof = null;
        $this->compte_entreprise_rcville = null;
        $this->compte_entreprise_declaration_honneur = null;
        $this->compte_entreprise_qualification = null;
        $this->compte_entreprise_moyens_techniques = null;
        $this->compte_entreprise_prestations_realisees = null;
        $this->compte_entreprise_chiffre_affaire_production_biens_services = null;
        $this->enveloppe_offre_technique = null;
        $this->compte_inscrit_choix_profil = null;
        $this->procedure_adaptee = null;
        $this->compte_entreprise_siren = null;
        $this->compte_entreprise_activation_inscription_par_agent = null;
        $this->menu_entreprise_consultations_en_cours = null;
        $this->compte_entreprise_capital_social = null;
        $this->mail_activation_compte_inscrit_entreprise = null;
        $this->decision_date_notification = null;
        $this->decision_pmi_pme = null;
        $this->decision_nature_prestations = null;
        $this->decision_objet_marche = null;
        $this->decision_note = null;
        $this->decision_fiche_recensement = null;
        $this->registre_papier_mail_obligatoire = null;
        $this->menu_entreprise_indicateurs_cles = null;
        $this->ajout_rpa_champ_email = null;
        $this->ajout_rpa_champ_telephone = null;
        $this->ajout_rpa_champ_fax = null;
        $this->entreprise_poser_question_sans_pj = null;
        $this->url_demarche_agent = null;
        $this->url_demarche_entreprise = null;
        $this->siret_detail_entite_achat = null;
        $this->presence_elu = null;
        $this->gerer_mon_service = null;
        $this->depouillement_enveloppe_depend_rat_enveloppe_precedente = null;
        $this->consultation_adresse_retrais_dossiers = null;
        $this->consultation_adresse_depot_offres = null;
        $this->consultation_caution_provisoire = null;
        $this->consultation_lieu_ouverture_plis = null;
        $this->consultation_qualification = null;
        $this->consultation_agrement = null;
        $this->consultation_echantillons_demandes = null;
        $this->consultation_reunion = null;
        $this->consultation_visite_des_lieux = null;
        $this->consultation_prix_acquisition = null;
        $this->resultat_analyse_avant_decision = null;
        $this->creation_inscrit_par_ates = null;
        $this->consultation_variantes_autorisees = null;
        $this->recherche_avancee_par_type_org = null;
        $this->menu_agent_societes_exclues = null;
        $this->recherche_avancee_par_domaines_activite = null;
        $this->recherche_avancee_par_qualification = null;
        $this->recherche_avancee_par_agrement = null;
        $this->contact_administratif_dans_detail_consultation_cote_entreprise = null;
        $this->consultation_pieces_dossiers = null;
        $this->gerer_adresses_service = null;
        $this->traduire_annonces = null;
        $this->afficher_bloc_actions_dans_details_annonces = null;
        $this->autoriser_une_seule_reponse_principale_par_entreprise = null;
        $this->generation_avis = null;
        $this->passation_appliquer_donnees_ensemble_lots = null;
        $this->autre_annonce_extrait_pv = null;
        $this->autre_annonce_rapport_achevement = null;
        $this->ajout_fichier_joint_autre_annonce = null;
        $this->consultation_mode_passation = null;
        $this->compte_entreprise_identifiant_unique = null;
        $this->gerer_certificats_agent = null;
        $this->autre_annonce_programme_previsionnel = null;
        $this->annuler_consultation = null;
        $this->cfe_entreprise_accessible_par_agent = null;
        $this->compte_entreprise_code_nace_referentiel = null;
        $this->code_nut_lt_referentiel = null;
        $this->lieux_execution = null;
        $this->compte_entreprise_domaine_activite_lt_referentiel = null;
        $this->consultation_domaines_activites_lt_referentiel = null;
        $this->compte_entreprise_agrement_lt_referentiel = null;
        $this->compte_entreprise_qualification_lt_referentiel = null;
        $this->reponse_pas_a_pas = null;
        $this->agent_controle_format_mot_de_passe = null;
        $this->entreprise_validation_email_inscription = null;
        $this->telecharger_dce_avec_authentification = null;
        $this->authentification_basic = null;
        $this->reglement_consultation = null;
        $this->annonces_marches = null;
        $this->cfe_date_fin_validite_obligatoire = null;
        $this->associer_documents_cfe_consultation = null;
        $this->compte_entreprise_region = null;
        $this->compte_entreprise_telephone2 = null;
        $this->compte_entreprise_cnss = null;
        $this->compte_entreprise_rcnum = null;
        $this->compte_entreprise_domaine_activite = null;
        $this->compte_inscrit_code_nic = null;
        $this->compte_entreprise_code_ape = null;
        $this->compte_entreprise_documents_commerciaux = null;
        $this->compte_entreprise_agrement = null;
        $this->compte_entreprise_moyens_humains = null;
        $this->compte_entreprise_activite_domaine_defense = null;
        $this->compte_entreprise_donnees_financieres = null;
        $this->enveloppe_anonymat = null;
        $this->publicite_format_xml = null;
        $this->article_133_generation_pf = null;
        $this->entreprise_repondre_consultation_apres_cloture = null;
        $this->telechargement_outil_verif_horodatage = null;
        $this->affichage_code_cpv = null;
        $this->consultation_domaines_activites = null;
        $this->statistiques_mesure_demat = null;
        $this->publication_procure = null;
        $this->menu_entreprise_toutes_les_consultations = null;
        $this->compte_entreprise_cp_obligatoire = null;
        $this->annuler_depot = null;
        $this->traduire_entite_achat_arabe = null;
        $this->traduire_organisme_arabe = null;
        $this->decision_cp = null;
        $this->decision_tranche_budgetaire = null;
        $this->decision_classement = null;
        $this->decision_afficher_detail_candidat_par_defaut = null;
        $this->article_133_upload_fichier = null;
        $this->multi_linguisme_agent = null;
        $this->compte_entreprise_ifu = null;
        $this->gestion_organisme_par_agent = null;
        $this->utiliser_lucene = null;
        $this->utiliser_page_html_lieux_execution = null;
        $this->prado_validateur_format_date = null;
        $this->prado_validateur_format_email = null;
        $this->socle_externe_ppp = null;
        $this->validation_format_champs_stricte = null;
        $this->poser_question_necessite_authentification = null;
        $this->autoriser_modif_profil_inscrit_ates = null;
        $this->unicite_reference_consultation = null;
        $this->registre_papier_rcnum_rcville_obligatoires = null;
        $this->registre_papier_adresse_cp_ville_obligatoires = null;
        $this->telecharger_dce_sans_identification = null;
        $this->gestion_entreprise_par_agent = null;
        $this->autoriser_caracteres_speciaux_dans_reference = null;
        $this->inscription_libre_entreprise = null;
        $this->afficher_code_service = null;
        $this->authenticate_agent_by_login = null;
        $this->authenticate_agent_by_cert = null;
        $this->generer_acte_dengagement = null;
        $this->entreprise_controle_format_mot_de_passe = null;
        $this->autre_annonce_information = null;
        $this->creer_autre_annonce = null;
        $this->consultation_clause = null;
        $this->panier_entreprise = null;
        $this->parametrage_publicite_par_type_procedure = null;
        $this->export_decision = null;
        $this->lieu_ouverture_plis_obligatoire = null;
        $this->regle_mise_en_ligne_par_entite_coordinatrice = null;
        $this->gestion_newsletter = null;
        $this->publicite_opoce = null;
        $this->gestion_modeles_formulaire = null;
        $this->gestion_adresses_facturation_jal = null;
        $this->publicite_marches_en_ligne = null;
        $this->dossier_additif = null;
        $this->type_marche = null;
        $this->type_prestation = null;
        $this->afficher_tjr_bloc_caracteristique_reponse = null;
        $this->alerte_metier = null;
        $this->bourse_a_la_sous_traitance = null;
        $this->publier_guides = null;
        $this->recherche_auto_completion = null;
        $this->statut_compte_entreprise = null;
        $this->gestion_organismes = null;
        $this->accueil_entreprise_personnalise = null;
        $this->interface_module_sub = null;
        $this->authentification_agent_multi_organismes = null;
        $this->partager_consultation = null;
        $this->annuaire_acheteurs_publics = null;
        $this->entreprise_actions_groupees = null;
        $this->lieux_execution_carte = null;
        $this->surcharge_referentiels = null;
        $this->mode_restriction_rgs = null;
        $this->autre_annonce_decision_resiliation = null;
        $this->autre_annonce_synthese_rapport_audit = null;
        $this->fiche_weka = null;
        $this->generation_automatique_mdp_agent = null;
        $this->generation_automatique_mdp_inscrit = null;
        $this->liste_ac_rgs = null;
        $this->liste_cons_org = null;
        $this->marche_public_simplifie_entreprise = null;
        $this->demande_validation_controleur = null;
        $this->acces_exec_contrats = null;
        $this->forme_juridique_groupement_attributaire = null;
        $this->date_limite_remise_plis_obligatoire = null;
        $this->modif_type_procedure = null;
        $this->donnees_complementaires_procedure = null;
        $this->forme_marche_forme_prix = null;
        $this->controle_unicite_num_marche = null;
        $this->affichage_num_marche = null;
        $this->affichage_date_fin_marche = null;
        $this->affichage_ice = null;
        $this->blocage_depot_hors_delai = null;
        $this->activer_suivi_pv = null;
        $this->captcha_validateur = null;
        $this->decision_depuis_resultat_analyse = null;
        $this->module_facture = null;
        $this->validation_entreprise_facturation = null;
        $this->bloquer_depot_si_env_non_depose = null;
        $this->bloquer_depot_signature_invalide = null;
        $this->consultation_import_lots = null;
        $this->depot_selection_lots = null;
        $this->modification_lots_apres_mise_en_ligne = null;
        $this->filtre_bdf_entreprise_valide = null;
        $this->affichage_identifiant_fiscale = null;
        $this->decision_creer_contrat = null;
        $this->generation_bi_cle = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonConfigurationPlateformePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
