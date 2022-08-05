<?php


/**
 * Base class that represents a row from the 'HabilitationAgent' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHabilitationAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonHabilitationAgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonHabilitationAgentPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_agent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the gestion_agent_pole field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_agent_pole;

    /**
     * The value for the gestion_fournisseurs_envois_postaux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_fournisseurs_envois_postaux;

    /**
     * The value for the gestion_bi_cles field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_bi_cles;

    /**
     * The value for the creer_consultation field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $creer_consultation;

    /**
     * The value for the modifier_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation;

    /**
     * The value for the valider_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_consultation;

    /**
     * The value for the publier_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publier_consultation;

    /**
     * The value for the suivre_consultation field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $suivre_consultation;

    /**
     * The value for the suivre_consultation_pole field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivre_consultation_pole;

    /**
     * The value for the supprimer_enveloppe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprimer_enveloppe;

    /**
     * The value for the supprimer_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprimer_consultation;

    /**
     * The value for the depouiller_candidature field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $depouiller_candidature;

    /**
     * The value for the depouiller_offre field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $depouiller_offre;

    /**
     * The value for the messagerie_securisee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $messagerie_securisee;

    /**
     * The value for the acces_registre_depots_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_registre_depots_papier;

    /**
     * The value for the acces_registre_retraits_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_registre_retraits_papier;

    /**
     * The value for the acces_registre_questions_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_registre_questions_papier;

    /**
     * The value for the gerer_encheres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_encheres;

    /**
     * The value for the suivre_encheres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivre_encheres;

    /**
     * The value for the suivi_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_entreprise;

    /**
     * The value for the envoi_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $envoi_boamp;

    /**
     * The value for the acces_classement_lot field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_classement_lot;

    /**
     * The value for the connecteur_sis field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $connecteur_sis;

    /**
     * The value for the connecteur_marco field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $connecteur_marco;

    /**
     * The value for the repondre_aux_questions field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $repondre_aux_questions;

    /**
     * The value for the appel_projet_formation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $appel_projet_formation;

    /**
     * The value for the utiliser_client_cao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $utiliser_client_cao;

    /**
     * The value for the notification_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $notification_boamp;

    /**
     * The value for the administrer_compte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_compte;

    /**
     * The value for the gestion_mapa field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_mapa;

    /**
     * The value for the gestion_type_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_type_validation;

    /**
     * The value for the approuver_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $approuver_consultation;

    /**
     * The value for the administrer_procedure field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_procedure;

    /**
     * The value for the restreindre_creation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $restreindre_creation;

    /**
     * The value for the creer_liste_marches field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_liste_marches;

    /**
     * The value for the gestion_commissions field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_commissions;

    /**
     * The value for the suivi_seul_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_seul_consultation;

    /**
     * The value for the attribution_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $attribution_marche;

    /**
     * The value for the fiche_recensement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $fiche_recensement;

    /**
     * The value for the declarer_infructueux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $declarer_infructueux;

    /**
     * The value for the declarer_sans_suite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $declarer_sans_suite;

    /**
     * The value for the creer_consultation_transverse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_consultation_transverse;

    /**
     * The value for the ouvrir_candidature_en_ligne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_candidature_en_ligne;

    /**
     * The value for the ouvrir_candidature_a_distance field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_candidature_a_distance;

    /**
     * The value for the refuser_enveloppe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $refuser_enveloppe;

    /**
     * The value for the gerer_admissibilite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_admissibilite;

    /**
     * The value for the restaurer_enveloppe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $restaurer_enveloppe;

    /**
     * The value for the ouvrir_anonymat_en_ligne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_anonymat_en_ligne;

    /**
     * The value for the ouvrir_offre_en_ligne field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_offre_en_ligne;

    /**
     * The value for the gestion_compte_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_compte_boamp;

    /**
     * The value for the gestion_agents field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_agents;

    /**
     * The value for the gestion_habilitations field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_habilitations;

    /**
     * The value for the gerer_mapa_inferieur_montant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_mapa_inferieur_montant;

    /**
     * The value for the gerer_mapa_superieur_montant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_mapa_superieur_montant;

    /**
     * The value for the modifier_consultation_avant_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation_avant_validation;

    /**
     * The value for the modifier_consultation_apres_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation_apres_validation;

    /**
     * The value for the acces_reponses field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $acces_reponses;

    /**
     * The value for the telechargement_groupe_anticipe_plis_chiffres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telechargement_groupe_anticipe_plis_chiffres;

    /**
     * The value for the telechargement_unitaire_plis_chiffres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telechargement_unitaire_plis_chiffres;

    /**
     * The value for the ouvrir_offre_a_distance field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_offre_a_distance;

    /**
     * The value for the creer_annonce_information field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_information;

    /**
     * The value for the saisie_marches field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $saisie_marches;

    /**
     * The value for the validation_marches field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $validation_marches;

    /**
     * The value for the publication_marches field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publication_marches;

    /**
     * The value for the gerer_statistiques_metier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_statistiques_metier;

    /**
     * The value for the gerer_archives field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_archives;

    /**
     * The value for the administrer_procedures_formalisees field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_procedures_formalisees;

    /**
     * The value for the creer_annonce_attribution field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_attribution;

    /**
     * The value for the acces_registre_retraits_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $acces_registre_retraits_electronique;

    /**
     * The value for the acces_registre_questions_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $acces_registre_questions_electronique;

    /**
     * The value for the acces_registre_depots_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $acces_registre_depots_electronique;

    /**
     * The value for the validation_simple field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $validation_simple;

    /**
     * The value for the validation_intermediaire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $validation_intermediaire;

    /**
     * The value for the validation_finale field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $validation_finale;

    /**
     * The value for the creer_suite_consultation field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $creer_suite_consultation;

    /**
     * The value for the hyper_admin field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $hyper_admin;

    /**
     * The value for the droit_gestion_services field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $droit_gestion_services;

    /**
     * The value for the suivi_acces field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_acces;

    /**
     * The value for the statistiques_site field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statistiques_site;

    /**
     * The value for the statistiques_qos field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statistiques_qos;

    /**
     * The value for the ouvrir_anonymat_a_distance field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouvrir_anonymat_a_distance;

    /**
     * The value for the gestion_compte_jal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_compte_jal;

    /**
     * The value for the gestion_centrale_pub field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_centrale_pub;

    /**
     * The value for the gestion_compte_groupe_moniteur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_compte_groupe_moniteur;

    /**
     * The value for the ouvrir_offre_technique_en_ligne field.
     * @var        string
     */
    protected $ouvrir_offre_technique_en_ligne;

    /**
     * The value for the ouvrir_offre_technique_a_distance field.
     * @var        string
     */
    protected $ouvrir_offre_technique_a_distance;

    /**
     * The value for the activation_compte_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $activation_compte_entreprise;

    /**
     * The value for the importer_enveloppe field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $importer_enveloppe;

    /**
     * The value for the suivi_seul_registre_depots_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_seul_registre_depots_papier;

    /**
     * The value for the suivi_seul_registre_retraits_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_seul_registre_retraits_papier;

    /**
     * The value for the suivi_seul_registre_questions_papier field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_seul_registre_questions_papier;

    /**
     * The value for the suivi_seul_registre_depots_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $suivi_seul_registre_depots_electronique;

    /**
     * The value for the suivi_seul_registre_retraits_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $suivi_seul_registre_retraits_electronique;

    /**
     * The value for the suivi_seul_registre_questions_electronique field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $suivi_seul_registre_questions_electronique;

    /**
     * The value for the modifier_consultation_mapa_inferieur_montant_apres_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation_mapa_inferieur_montant_apres_validation;

    /**
     * The value for the modifier_consultation_mapa_superieur_montant_apres_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation_mapa_superieur_montant_apres_validation;

    /**
     * The value for the modifier_consultation_procedures_formalisees_apres_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_consultation_procedures_formalisees_apres_validation;

    /**
     * The value for the gerer_les_entreprises field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_les_entreprises;

    /**
     * The value for the portee_societes_exclues field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $portee_societes_exclues;

    /**
     * The value for the portee_societes_exclues_tous_organismes field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $portee_societes_exclues_tous_organismes;

    /**
     * The value for the modifier_societes_exclues field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $modifier_societes_exclues;

    /**
     * The value for the supprimer_societes_exclues field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprimer_societes_exclues;

    /**
     * The value for the resultat_analyse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $resultat_analyse;

    /**
     * The value for the gerer_adresses_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_adresses_service;

    /**
     * The value for the gerer_mon_service field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_mon_service;

    /**
     * The value for the download_archives field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $download_archives;

    /**
     * The value for the creer_annonce_extrait_pv field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_extrait_pv;

    /**
     * The value for the creer_annonce_rapport_achevement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_rapport_achevement;

    /**
     * The value for the gestion_certificats_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_certificats_agent;

    /**
     * The value for the creer_avis_programme_previsionnel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_avis_programme_previsionnel;

    /**
     * The value for the annuler_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annuler_consultation;

    /**
     * The value for the envoyer_publicite field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $envoyer_publicite;

    /**
     * The value for the liste_marches_notifies field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $liste_marches_notifies;

    /**
     * The value for the suivre_message field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $suivre_message;

    /**
     * The value for the envoyer_message field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $envoyer_message;

    /**
     * The value for the suivi_flux_chorus_transversal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivi_flux_chorus_transversal;

    /**
     * The value for the gestion_mandataire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_mandataire;

    /**
     * The value for the gerer_newsletter field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_newsletter;

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
     * The value for the administrer_adresses_facturation_jal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_adresses_facturation_jal;

    /**
     * The value for the redaction_documents_redac field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $redaction_documents_redac;

    /**
     * The value for the validation_documents_redac field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $validation_documents_redac;

    /**
     * The value for the gestion_mise_disposition_pieces_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_mise_disposition_pieces_marche;

    /**
     * The value for the annuaire_acheteur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $annuaire_acheteur;

    /**
     * The value for the reprendre_integralement_article field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reprendre_integralement_article;

    /**
     * The value for the administrer_clauses field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_clauses;

    /**
     * The value for the valider_clauses field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_clauses;

    /**
     * The value for the administrer_canevas field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_canevas;

    /**
     * The value for the valider_canevas field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_canevas;

    /**
     * The value for the administrer_clauses_entite_achats field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_clauses_entite_achats;

    /**
     * The value for the generer_pieces_format_odt field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $generer_pieces_format_odt;

    /**
     * The value for the publier_version_clausier_editeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $publier_version_clausier_editeur;

    /**
     * The value for the administrer_clauses_editeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_clauses_editeur;

    /**
     * The value for the valider_clauses_editeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_clauses_editeur;

    /**
     * The value for the administrer_canevas_editeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $administrer_canevas_editeur;

    /**
     * The value for the valider_canevas_editeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_canevas_editeur;

    /**
     * The value for the decision_suivi_seul field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision_suivi_seul;

    /**
     * The value for the ouvrir_candidature_hors_ligne field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ouvrir_candidature_hors_ligne;

    /**
     * The value for the ouvrir_offre_hors_ligne field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ouvrir_offre_hors_ligne;

    /**
     * The value for the ouvrir_offre_technique_hors_ligne field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ouvrir_offre_technique_hors_ligne;

    /**
     * The value for the ouvrir_anonymat_hors_ligne field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ouvrir_anonymat_hors_ligne;

    /**
     * The value for the espace_collaboratif_gestionnaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $espace_collaboratif_gestionnaire;

    /**
     * The value for the espace_collaboratif_contributeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $espace_collaboratif_contributeur;

    /**
     * The value for the gerer_organismes field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_organismes;

    /**
     * The value for the gerer_associations_agents field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_associations_agents;

    /**
     * The value for the module_redaction_uniquement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $module_redaction_uniquement;

    /**
     * The value for the historique_navigation_inscrits field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $historique_navigation_inscrits;

    /**
     * The value for the telecharger_accords_cadres field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telecharger_accords_cadres;

    /**
     * The value for the creer_annonce_decision_resiliation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_decision_resiliation;

    /**
     * The value for the creer_annonce_synthese_rapport_audit field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $creer_annonce_synthese_rapport_audit;

    /**
     * The value for the gerer_operations field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_operations;

    /**
     * The value for the telecharger_siret_acheteur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $telecharger_siret_acheteur;

    /**
     * The value for the gerer_reouvertures_modification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_reouvertures_modification;

    /**
     * The value for the envoyer_demande_validation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $envoyer_demande_validation;

    /**
     * The value for the suivre_consultation_organisme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $suivre_consultation_organisme;

    /**
     * The value for the renseigner_montant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $renseigner_montant;

    /**
     * The value for the gestion_referentiel_contact field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_referentiel_contact;

    /**
     * The value for the gerer_cao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gerer_cao;

    /**
     * The value for the validation_acces_facture field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $validation_acces_facture;

    /**
     * The value for the gestion_travaux_cao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_travaux_cao;

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
        $this->id_agent = 0;
        $this->gestion_agent_pole = '0';
        $this->gestion_fournisseurs_envois_postaux = '0';
        $this->gestion_bi_cles = '0';
        $this->creer_consultation = '1';
        $this->modifier_consultation = '0';
        $this->valider_consultation = '0';
        $this->publier_consultation = '0';
        $this->suivre_consultation = '1';
        $this->suivre_consultation_pole = '0';
        $this->supprimer_enveloppe = '0';
        $this->supprimer_consultation = '0';
        $this->depouiller_candidature = '1';
        $this->depouiller_offre = '1';
        $this->messagerie_securisee = '0';
        $this->acces_registre_depots_papier = '0';
        $this->acces_registre_retraits_papier = '0';
        $this->acces_registre_questions_papier = '0';
        $this->gerer_encheres = '0';
        $this->suivre_encheres = '0';
        $this->suivi_entreprise = '0';
        $this->envoi_boamp = '0';
        $this->acces_classement_lot = '0';
        $this->connecteur_sis = '0';
        $this->connecteur_marco = '0';
        $this->repondre_aux_questions = '0';
        $this->appel_projet_formation = '0';
        $this->utiliser_client_cao = '0';
        $this->notification_boamp = '0';
        $this->administrer_compte = '0';
        $this->gestion_mapa = '0';
        $this->gestion_type_validation = '0';
        $this->approuver_consultation = '0';
        $this->administrer_procedure = '0';
        $this->restreindre_creation = '0';
        $this->creer_liste_marches = '0';
        $this->gestion_commissions = '0';
        $this->suivi_seul_consultation = '0';
        $this->attribution_marche = '0';
        $this->fiche_recensement = '0';
        $this->declarer_infructueux = '0';
        $this->declarer_sans_suite = '0';
        $this->creer_consultation_transverse = '0';
        $this->ouvrir_candidature_en_ligne = '0';
        $this->ouvrir_candidature_a_distance = '0';
        $this->refuser_enveloppe = '0';
        $this->gerer_admissibilite = '0';
        $this->restaurer_enveloppe = '0';
        $this->ouvrir_anonymat_en_ligne = '0';
        $this->ouvrir_offre_en_ligne = '0';
        $this->gestion_compte_boamp = '0';
        $this->gestion_agents = '0';
        $this->gestion_habilitations = '0';
        $this->gerer_mapa_inferieur_montant = '0';
        $this->gerer_mapa_superieur_montant = '0';
        $this->modifier_consultation_avant_validation = '0';
        $this->modifier_consultation_apres_validation = '0';
        $this->acces_reponses = '0';
        $this->telechargement_groupe_anticipe_plis_chiffres = '0';
        $this->telechargement_unitaire_plis_chiffres = '0';
        $this->ouvrir_offre_a_distance = '0';
        $this->creer_annonce_information = '0';
        $this->saisie_marches = '0';
        $this->validation_marches = '0';
        $this->publication_marches = '0';
        $this->gerer_statistiques_metier = '0';
        $this->gerer_archives = '0';
        $this->administrer_procedures_formalisees = '0';
        $this->creer_annonce_attribution = '0';
        $this->acces_registre_retraits_electronique = '1';
        $this->acces_registre_questions_electronique = '1';
        $this->acces_registre_depots_electronique = '1';
        $this->validation_simple = '1';
        $this->validation_intermediaire = '1';
        $this->validation_finale = '1';
        $this->creer_suite_consultation = '1';
        $this->hyper_admin = '0';
        $this->droit_gestion_services = '0';
        $this->suivi_acces = '0';
        $this->statistiques_site = '0';
        $this->statistiques_qos = '0';
        $this->ouvrir_anonymat_a_distance = '0';
        $this->gestion_compte_jal = '0';
        $this->gestion_centrale_pub = '0';
        $this->gestion_compte_groupe_moniteur = '0';
        $this->activation_compte_entreprise = '0';
        $this->importer_enveloppe = '0';
        $this->suivi_seul_registre_depots_papier = '0';
        $this->suivi_seul_registre_retraits_papier = '0';
        $this->suivi_seul_registre_questions_papier = '0';
        $this->suivi_seul_registre_depots_electronique = '1';
        $this->suivi_seul_registre_retraits_electronique = '1';
        $this->suivi_seul_registre_questions_electronique = '1';
        $this->modifier_consultation_mapa_inferieur_montant_apres_validation = '0';
        $this->modifier_consultation_mapa_superieur_montant_apres_validation = '0';
        $this->modifier_consultation_procedures_formalisees_apres_validation = '0';
        $this->gerer_les_entreprises = '0';
        $this->portee_societes_exclues = '0';
        $this->portee_societes_exclues_tous_organismes = '0';
        $this->modifier_societes_exclues = '0';
        $this->supprimer_societes_exclues = '0';
        $this->resultat_analyse = '0';
        $this->gerer_adresses_service = '0';
        $this->gerer_mon_service = '0';
        $this->download_archives = '0';
        $this->creer_annonce_extrait_pv = '0';
        $this->creer_annonce_rapport_achevement = '0';
        $this->gestion_certificats_agent = '0';
        $this->creer_avis_programme_previsionnel = '0';
        $this->annuler_consultation = '0';
        $this->envoyer_publicite = '1';
        $this->liste_marches_notifies = '0';
        $this->suivre_message = '1';
        $this->envoyer_message = '1';
        $this->suivi_flux_chorus_transversal = '0';
        $this->gestion_mandataire = '0';
        $this->gerer_newsletter = '0';
        $this->gestion_modeles_formulaire = '0';
        $this->gestion_adresses_facturation_jal = '0';
        $this->administrer_adresses_facturation_jal = '0';
        $this->redaction_documents_redac = '0';
        $this->validation_documents_redac = '0';
        $this->gestion_mise_disposition_pieces_marche = '0';
        $this->annuaire_acheteur = '0';
        $this->reprendre_integralement_article = '0';
        $this->administrer_clauses = '0';
        $this->valider_clauses = '0';
        $this->administrer_canevas = '0';
        $this->valider_canevas = '0';
        $this->administrer_clauses_entite_achats = '0';
        $this->generer_pieces_format_odt = '0';
        $this->publier_version_clausier_editeur = '0';
        $this->administrer_clauses_editeur = '0';
        $this->valider_clauses_editeur = '0';
        $this->administrer_canevas_editeur = '0';
        $this->valider_canevas_editeur = '0';
        $this->decision_suivi_seul = '0';
        $this->ouvrir_candidature_hors_ligne = '1';
        $this->ouvrir_offre_hors_ligne = '1';
        $this->ouvrir_offre_technique_hors_ligne = '1';
        $this->ouvrir_anonymat_hors_ligne = '1';
        $this->espace_collaboratif_gestionnaire = '0';
        $this->espace_collaboratif_contributeur = '0';
        $this->gerer_organismes = '0';
        $this->gerer_associations_agents = '0';
        $this->module_redaction_uniquement = '0';
        $this->historique_navigation_inscrits = '1';
        $this->telecharger_accords_cadres = '0';
        $this->creer_annonce_decision_resiliation = '0';
        $this->creer_annonce_synthese_rapport_audit = '0';
        $this->gerer_operations = '0';
        $this->telecharger_siret_acheteur = '0';
        $this->gerer_reouvertures_modification = '0';
        $this->envoyer_demande_validation = '0';
        $this->suivre_consultation_organisme = '0';
        $this->renseigner_montant = '0';
        $this->gestion_referentiel_contact = '0';
        $this->gerer_cao = '0';
        $this->validation_acces_facture = '0';
        $this->gestion_travaux_cao = '0';
    }

    /**
     * Initializes internal state of BaseCommonHabilitationAgent object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [gestion_agent_pole] column value.
     * 
     * @return string
     */
    public function getGestionAgentPole()
    {

        return $this->gestion_agent_pole;
    }

    /**
     * Get the [gestion_fournisseurs_envois_postaux] column value.
     * 
     * @return string
     */
    public function getGestionFournisseursEnvoisPostaux()
    {

        return $this->gestion_fournisseurs_envois_postaux;
    }

    /**
     * Get the [gestion_bi_cles] column value.
     * 
     * @return string
     */
    public function getGestionBiCles()
    {

        return $this->gestion_bi_cles;
    }

    /**
     * Get the [creer_consultation] column value.
     * 
     * @return string
     */
    public function getCreerConsultation()
    {

        return $this->creer_consultation;
    }

    /**
     * Get the [modifier_consultation] column value.
     * 
     * @return string
     */
    public function getModifierConsultation()
    {

        return $this->modifier_consultation;
    }

    /**
     * Get the [valider_consultation] column value.
     * 
     * @return string
     */
    public function getValiderConsultation()
    {

        return $this->valider_consultation;
    }

    /**
     * Get the [publier_consultation] column value.
     * 
     * @return string
     */
    public function getPublierConsultation()
    {

        return $this->publier_consultation;
    }

    /**
     * Get the [suivre_consultation] column value.
     * 
     * @return string
     */
    public function getSuivreConsultation()
    {

        return $this->suivre_consultation;
    }

    /**
     * Get the [suivre_consultation_pole] column value.
     * 
     * @return string
     */
    public function getSuivreConsultationPole()
    {

        return $this->suivre_consultation_pole;
    }

    /**
     * Get the [supprimer_enveloppe] column value.
     * 
     * @return string
     */
    public function getSupprimerEnveloppe()
    {

        return $this->supprimer_enveloppe;
    }

    /**
     * Get the [supprimer_consultation] column value.
     * 
     * @return string
     */
    public function getSupprimerConsultation()
    {

        return $this->supprimer_consultation;
    }

    /**
     * Get the [depouiller_candidature] column value.
     * 
     * @return string
     */
    public function getDepouillerCandidature()
    {

        return $this->depouiller_candidature;
    }

    /**
     * Get the [depouiller_offre] column value.
     * 
     * @return string
     */
    public function getDepouillerOffre()
    {

        return $this->depouiller_offre;
    }

    /**
     * Get the [messagerie_securisee] column value.
     * 
     * @return string
     */
    public function getMessagerieSecurisee()
    {

        return $this->messagerie_securisee;
    }

    /**
     * Get the [acces_registre_depots_papier] column value.
     * 
     * @return string
     */
    public function getAccesRegistreDepotsPapier()
    {

        return $this->acces_registre_depots_papier;
    }

    /**
     * Get the [acces_registre_retraits_papier] column value.
     * 
     * @return string
     */
    public function getAccesRegistreRetraitsPapier()
    {

        return $this->acces_registre_retraits_papier;
    }

    /**
     * Get the [acces_registre_questions_papier] column value.
     * 
     * @return string
     */
    public function getAccesRegistreQuestionsPapier()
    {

        return $this->acces_registre_questions_papier;
    }

    /**
     * Get the [gerer_encheres] column value.
     * 
     * @return string
     */
    public function getGererEncheres()
    {

        return $this->gerer_encheres;
    }

    /**
     * Get the [suivre_encheres] column value.
     * 
     * @return string
     */
    public function getSuivreEncheres()
    {

        return $this->suivre_encheres;
    }

    /**
     * Get the [suivi_entreprise] column value.
     * 
     * @return string
     */
    public function getSuiviEntreprise()
    {

        return $this->suivi_entreprise;
    }

    /**
     * Get the [envoi_boamp] column value.
     * 
     * @return string
     */
    public function getEnvoiBoamp()
    {

        return $this->envoi_boamp;
    }

    /**
     * Get the [acces_classement_lot] column value.
     * 
     * @return string
     */
    public function getAccesClassementLot()
    {

        return $this->acces_classement_lot;
    }

    /**
     * Get the [connecteur_sis] column value.
     * 
     * @return string
     */
    public function getConnecteurSis()
    {

        return $this->connecteur_sis;
    }

    /**
     * Get the [connecteur_marco] column value.
     * 
     * @return string
     */
    public function getConnecteurMarco()
    {

        return $this->connecteur_marco;
    }

    /**
     * Get the [repondre_aux_questions] column value.
     * 
     * @return string
     */
    public function getRepondreAuxQuestions()
    {

        return $this->repondre_aux_questions;
    }

    /**
     * Get the [appel_projet_formation] column value.
     * 
     * @return string
     */
    public function getAppelProjetFormation()
    {

        return $this->appel_projet_formation;
    }

    /**
     * Get the [utiliser_client_cao] column value.
     * 
     * @return string
     */
    public function getUtiliserClientCao()
    {

        return $this->utiliser_client_cao;
    }

    /**
     * Get the [notification_boamp] column value.
     * 
     * @return string
     */
    public function getNotificationBoamp()
    {

        return $this->notification_boamp;
    }

    /**
     * Get the [administrer_compte] column value.
     * 
     * @return string
     */
    public function getAdministrerCompte()
    {

        return $this->administrer_compte;
    }

    /**
     * Get the [gestion_mapa] column value.
     * 
     * @return string
     */
    public function getGestionMapa()
    {

        return $this->gestion_mapa;
    }

    /**
     * Get the [gestion_type_validation] column value.
     * 
     * @return string
     */
    public function getGestionTypeValidation()
    {

        return $this->gestion_type_validation;
    }

    /**
     * Get the [approuver_consultation] column value.
     * 
     * @return string
     */
    public function getApprouverConsultation()
    {

        return $this->approuver_consultation;
    }

    /**
     * Get the [administrer_procedure] column value.
     * 
     * @return string
     */
    public function getAdministrerProcedure()
    {

        return $this->administrer_procedure;
    }

    /**
     * Get the [restreindre_creation] column value.
     * 
     * @return string
     */
    public function getRestreindreCreation()
    {

        return $this->restreindre_creation;
    }

    /**
     * Get the [creer_liste_marches] column value.
     * 
     * @return string
     */
    public function getCreerListeMarches()
    {

        return $this->creer_liste_marches;
    }

    /**
     * Get the [gestion_commissions] column value.
     * 
     * @return string
     */
    public function getGestionCommissions()
    {

        return $this->gestion_commissions;
    }

    /**
     * Get the [suivi_seul_consultation] column value.
     * 
     * @return string
     */
    public function getSuiviSeulConsultation()
    {

        return $this->suivi_seul_consultation;
    }

    /**
     * Get the [attribution_marche] column value.
     * 
     * @return string
     */
    public function getAttributionMarche()
    {

        return $this->attribution_marche;
    }

    /**
     * Get the [fiche_recensement] column value.
     * 
     * @return string
     */
    public function getFicheRecensement()
    {

        return $this->fiche_recensement;
    }

    /**
     * Get the [declarer_infructueux] column value.
     * 
     * @return string
     */
    public function getDeclarerInfructueux()
    {

        return $this->declarer_infructueux;
    }

    /**
     * Get the [declarer_sans_suite] column value.
     * 
     * @return string
     */
    public function getDeclarerSansSuite()
    {

        return $this->declarer_sans_suite;
    }

    /**
     * Get the [creer_consultation_transverse] column value.
     * 
     * @return string
     */
    public function getCreerConsultationTransverse()
    {

        return $this->creer_consultation_transverse;
    }

    /**
     * Get the [ouvrir_candidature_en_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirCandidatureEnLigne()
    {

        return $this->ouvrir_candidature_en_ligne;
    }

    /**
     * Get the [ouvrir_candidature_a_distance] column value.
     * 
     * @return string
     */
    public function getOuvrirCandidatureADistance()
    {

        return $this->ouvrir_candidature_a_distance;
    }

    /**
     * Get the [refuser_enveloppe] column value.
     * 
     * @return string
     */
    public function getRefuserEnveloppe()
    {

        return $this->refuser_enveloppe;
    }

    /**
     * Get the [gerer_admissibilite] column value.
     * 
     * @return string
     */
    public function getGererAdmissibilite()
    {

        return $this->gerer_admissibilite;
    }

    /**
     * Get the [restaurer_enveloppe] column value.
     * 
     * @return string
     */
    public function getRestaurerEnveloppe()
    {

        return $this->restaurer_enveloppe;
    }

    /**
     * Get the [ouvrir_anonymat_en_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirAnonymatEnLigne()
    {

        return $this->ouvrir_anonymat_en_ligne;
    }

    /**
     * Get the [ouvrir_offre_en_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreEnLigne()
    {

        return $this->ouvrir_offre_en_ligne;
    }

    /**
     * Get the [gestion_compte_boamp] column value.
     * 
     * @return string
     */
    public function getGestionCompteBoamp()
    {

        return $this->gestion_compte_boamp;
    }

    /**
     * Get the [gestion_agents] column value.
     * 
     * @return string
     */
    public function getGestionAgents()
    {

        return $this->gestion_agents;
    }

    /**
     * Get the [gestion_habilitations] column value.
     * 
     * @return string
     */
    public function getGestionHabilitations()
    {

        return $this->gestion_habilitations;
    }

    /**
     * Get the [gerer_mapa_inferieur_montant] column value.
     * 
     * @return string
     */
    public function getGererMapaInferieurMontant()
    {

        return $this->gerer_mapa_inferieur_montant;
    }

    /**
     * Get the [gerer_mapa_superieur_montant] column value.
     * 
     * @return string
     */
    public function getGererMapaSuperieurMontant()
    {

        return $this->gerer_mapa_superieur_montant;
    }

    /**
     * Get the [modifier_consultation_avant_validation] column value.
     * 
     * @return string
     */
    public function getModifierConsultationAvantValidation()
    {

        return $this->modifier_consultation_avant_validation;
    }

    /**
     * Get the [modifier_consultation_apres_validation] column value.
     * 
     * @return string
     */
    public function getModifierConsultationApresValidation()
    {

        return $this->modifier_consultation_apres_validation;
    }

    /**
     * Get the [acces_reponses] column value.
     * 
     * @return string
     */
    public function getAccesReponses()
    {

        return $this->acces_reponses;
    }

    /**
     * Get the [telechargement_groupe_anticipe_plis_chiffres] column value.
     * 
     * @return string
     */
    public function getTelechargementGroupeAnticipePlisChiffres()
    {

        return $this->telechargement_groupe_anticipe_plis_chiffres;
    }

    /**
     * Get the [telechargement_unitaire_plis_chiffres] column value.
     * 
     * @return string
     */
    public function getTelechargementUnitairePlisChiffres()
    {

        return $this->telechargement_unitaire_plis_chiffres;
    }

    /**
     * Get the [ouvrir_offre_a_distance] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreADistance()
    {

        return $this->ouvrir_offre_a_distance;
    }

    /**
     * Get the [creer_annonce_information] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceInformation()
    {

        return $this->creer_annonce_information;
    }

    /**
     * Get the [saisie_marches] column value.
     * 
     * @return string
     */
    public function getSaisieMarches()
    {

        return $this->saisie_marches;
    }

    /**
     * Get the [validation_marches] column value.
     * 
     * @return string
     */
    public function getValidationMarches()
    {

        return $this->validation_marches;
    }

    /**
     * Get the [publication_marches] column value.
     * 
     * @return string
     */
    public function getPublicationMarches()
    {

        return $this->publication_marches;
    }

    /**
     * Get the [gerer_statistiques_metier] column value.
     * 
     * @return string
     */
    public function getGererStatistiquesMetier()
    {

        return $this->gerer_statistiques_metier;
    }

    /**
     * Get the [gerer_archives] column value.
     * 
     * @return string
     */
    public function getGererArchives()
    {

        return $this->gerer_archives;
    }

    /**
     * Get the [administrer_procedures_formalisees] column value.
     * 
     * @return string
     */
    public function getAdministrerProceduresFormalisees()
    {

        return $this->administrer_procedures_formalisees;
    }

    /**
     * Get the [creer_annonce_attribution] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceAttribution()
    {

        return $this->creer_annonce_attribution;
    }

    /**
     * Get the [acces_registre_retraits_electronique] column value.
     * 
     * @return string
     */
    public function getAccesRegistreRetraitsElectronique()
    {

        return $this->acces_registre_retraits_electronique;
    }

    /**
     * Get the [acces_registre_questions_electronique] column value.
     * 
     * @return string
     */
    public function getAccesRegistreQuestionsElectronique()
    {

        return $this->acces_registre_questions_electronique;
    }

    /**
     * Get the [acces_registre_depots_electronique] column value.
     * 
     * @return string
     */
    public function getAccesRegistreDepotsElectronique()
    {

        return $this->acces_registre_depots_electronique;
    }

    /**
     * Get the [validation_simple] column value.
     * 
     * @return string
     */
    public function getValidationSimple()
    {

        return $this->validation_simple;
    }

    /**
     * Get the [validation_intermediaire] column value.
     * 
     * @return string
     */
    public function getValidationIntermediaire()
    {

        return $this->validation_intermediaire;
    }

    /**
     * Get the [validation_finale] column value.
     * 
     * @return string
     */
    public function getValidationFinale()
    {

        return $this->validation_finale;
    }

    /**
     * Get the [creer_suite_consultation] column value.
     * 
     * @return string
     */
    public function getCreerSuiteConsultation()
    {

        return $this->creer_suite_consultation;
    }

    /**
     * Get the [hyper_admin] column value.
     * 
     * @return string
     */
    public function getHyperAdmin()
    {

        return $this->hyper_admin;
    }

    /**
     * Get the [droit_gestion_services] column value.
     * 
     * @return string
     */
    public function getDroitGestionServices()
    {

        return $this->droit_gestion_services;
    }

    /**
     * Get the [suivi_acces] column value.
     * 
     * @return string
     */
    public function getSuiviAcces()
    {

        return $this->suivi_acces;
    }

    /**
     * Get the [statistiques_site] column value.
     * 
     * @return string
     */
    public function getStatistiquesSite()
    {

        return $this->statistiques_site;
    }

    /**
     * Get the [statistiques_qos] column value.
     * 
     * @return string
     */
    public function getStatistiquesQos()
    {

        return $this->statistiques_qos;
    }

    /**
     * Get the [ouvrir_anonymat_a_distance] column value.
     * 
     * @return string
     */
    public function getOuvrirAnonymatADistance()
    {

        return $this->ouvrir_anonymat_a_distance;
    }

    /**
     * Get the [gestion_compte_jal] column value.
     * 
     * @return string
     */
    public function getGestionCompteJal()
    {

        return $this->gestion_compte_jal;
    }

    /**
     * Get the [gestion_centrale_pub] column value.
     * 
     * @return string
     */
    public function getGestionCentralePub()
    {

        return $this->gestion_centrale_pub;
    }

    /**
     * Get the [gestion_compte_groupe_moniteur] column value.
     * 
     * @return string
     */
    public function getGestionCompteGroupeMoniteur()
    {

        return $this->gestion_compte_groupe_moniteur;
    }

    /**
     * Get the [ouvrir_offre_technique_en_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreTechniqueEnLigne()
    {

        return $this->ouvrir_offre_technique_en_ligne;
    }

    /**
     * Get the [ouvrir_offre_technique_a_distance] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreTechniqueADistance()
    {

        return $this->ouvrir_offre_technique_a_distance;
    }

    /**
     * Get the [activation_compte_entreprise] column value.
     * 
     * @return string
     */
    public function getActivationCompteEntreprise()
    {

        return $this->activation_compte_entreprise;
    }

    /**
     * Get the [importer_enveloppe] column value.
     * 
     * @return string
     */
    public function getImporterEnveloppe()
    {

        return $this->importer_enveloppe;
    }

    /**
     * Get the [suivi_seul_registre_depots_papier] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreDepotsPapier()
    {

        return $this->suivi_seul_registre_depots_papier;
    }

    /**
     * Get the [suivi_seul_registre_retraits_papier] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreRetraitsPapier()
    {

        return $this->suivi_seul_registre_retraits_papier;
    }

    /**
     * Get the [suivi_seul_registre_questions_papier] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreQuestionsPapier()
    {

        return $this->suivi_seul_registre_questions_papier;
    }

    /**
     * Get the [suivi_seul_registre_depots_electronique] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreDepotsElectronique()
    {

        return $this->suivi_seul_registre_depots_electronique;
    }

    /**
     * Get the [suivi_seul_registre_retraits_electronique] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreRetraitsElectronique()
    {

        return $this->suivi_seul_registre_retraits_electronique;
    }

    /**
     * Get the [suivi_seul_registre_questions_electronique] column value.
     * 
     * @return string
     */
    public function getSuiviSeulRegistreQuestionsElectronique()
    {

        return $this->suivi_seul_registre_questions_electronique;
    }

    /**
     * Get the [modifier_consultation_mapa_inferieur_montant_apres_validation] column value.
     * 
     * @return string
     */
    public function getModifierConsultationMapaInferieurMontantApresValidation()
    {

        return $this->modifier_consultation_mapa_inferieur_montant_apres_validation;
    }

    /**
     * Get the [modifier_consultation_mapa_superieur_montant_apres_validation] column value.
     * 
     * @return string
     */
    public function getModifierConsultationMapaSuperieurMontantApresValidation()
    {

        return $this->modifier_consultation_mapa_superieur_montant_apres_validation;
    }

    /**
     * Get the [modifier_consultation_procedures_formalisees_apres_validation] column value.
     * 
     * @return string
     */
    public function getModifierConsultationProceduresFormaliseesApresValidation()
    {

        return $this->modifier_consultation_procedures_formalisees_apres_validation;
    }

    /**
     * Get the [gerer_les_entreprises] column value.
     * 
     * @return string
     */
    public function getGererLesEntreprises()
    {

        return $this->gerer_les_entreprises;
    }

    /**
     * Get the [portee_societes_exclues] column value.
     * 
     * @return string
     */
    public function getPorteeSocietesExclues()
    {

        return $this->portee_societes_exclues;
    }

    /**
     * Get the [portee_societes_exclues_tous_organismes] column value.
     * 
     * @return string
     */
    public function getPorteeSocietesExcluesTousOrganismes()
    {

        return $this->portee_societes_exclues_tous_organismes;
    }

    /**
     * Get the [modifier_societes_exclues] column value.
     * 
     * @return string
     */
    public function getModifierSocietesExclues()
    {

        return $this->modifier_societes_exclues;
    }

    /**
     * Get the [supprimer_societes_exclues] column value.
     * 
     * @return string
     */
    public function getSupprimerSocietesExclues()
    {

        return $this->supprimer_societes_exclues;
    }

    /**
     * Get the [resultat_analyse] column value.
     * 
     * @return string
     */
    public function getResultatAnalyse()
    {

        return $this->resultat_analyse;
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
     * Get the [gerer_mon_service] column value.
     * 
     * @return string
     */
    public function getGererMonService()
    {

        return $this->gerer_mon_service;
    }

    /**
     * Get the [download_archives] column value.
     * 
     * @return string
     */
    public function getDownloadArchives()
    {

        return $this->download_archives;
    }

    /**
     * Get the [creer_annonce_extrait_pv] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceExtraitPv()
    {

        return $this->creer_annonce_extrait_pv;
    }

    /**
     * Get the [creer_annonce_rapport_achevement] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceRapportAchevement()
    {

        return $this->creer_annonce_rapport_achevement;
    }

    /**
     * Get the [gestion_certificats_agent] column value.
     * 
     * @return string
     */
    public function getGestionCertificatsAgent()
    {

        return $this->gestion_certificats_agent;
    }

    /**
     * Get the [creer_avis_programme_previsionnel] column value.
     * 
     * @return string
     */
    public function getCreerAvisProgrammePrevisionnel()
    {

        return $this->creer_avis_programme_previsionnel;
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
     * Get the [envoyer_publicite] column value.
     * 
     * @return string
     */
    public function getEnvoyerPublicite()
    {

        return $this->envoyer_publicite;
    }

    /**
     * Get the [liste_marches_notifies] column value.
     * 
     * @return string
     */
    public function getListeMarchesNotifies()
    {

        return $this->liste_marches_notifies;
    }

    /**
     * Get the [suivre_message] column value.
     * 
     * @return string
     */
    public function getSuivreMessage()
    {

        return $this->suivre_message;
    }

    /**
     * Get the [envoyer_message] column value.
     * 
     * @return string
     */
    public function getEnvoyerMessage()
    {

        return $this->envoyer_message;
    }

    /**
     * Get the [suivi_flux_chorus_transversal] column value.
     * 
     * @return string
     */
    public function getSuiviFluxChorusTransversal()
    {

        return $this->suivi_flux_chorus_transversal;
    }

    /**
     * Get the [gestion_mandataire] column value.
     * 
     * @return string
     */
    public function getGestionMandataire()
    {

        return $this->gestion_mandataire;
    }

    /**
     * Get the [gerer_newsletter] column value.
     * 
     * @return string
     */
    public function getGererNewsletter()
    {

        return $this->gerer_newsletter;
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
     * Get the [administrer_adresses_facturation_jal] column value.
     * 
     * @return string
     */
    public function getAdministrerAdressesFacturationJal()
    {

        return $this->administrer_adresses_facturation_jal;
    }

    /**
     * Get the [redaction_documents_redac] column value.
     * 
     * @return string
     */
    public function getRedactionDocumentsRedac()
    {

        return $this->redaction_documents_redac;
    }

    /**
     * Get the [validation_documents_redac] column value.
     * 
     * @return string
     */
    public function getValidationDocumentsRedac()
    {

        return $this->validation_documents_redac;
    }

    /**
     * Get the [gestion_mise_disposition_pieces_marche] column value.
     * 
     * @return string
     */
    public function getGestionMiseDispositionPiecesMarche()
    {

        return $this->gestion_mise_disposition_pieces_marche;
    }

    /**
     * Get the [annuaire_acheteur] column value.
     * 
     * @return string
     */
    public function getAnnuaireAcheteur()
    {

        return $this->annuaire_acheteur;
    }

    /**
     * Get the [reprendre_integralement_article] column value.
     * 
     * @return string
     */
    public function getReprendreIntegralementArticle()
    {

        return $this->reprendre_integralement_article;
    }

    /**
     * Get the [administrer_clauses] column value.
     * 
     * @return string
     */
    public function getAdministrerClauses()
    {

        return $this->administrer_clauses;
    }

    /**
     * Get the [valider_clauses] column value.
     * 
     * @return string
     */
    public function getValiderClauses()
    {

        return $this->valider_clauses;
    }

    /**
     * Get the [administrer_canevas] column value.
     * 
     * @return string
     */
    public function getAdministrerCanevas()
    {

        return $this->administrer_canevas;
    }

    /**
     * Get the [valider_canevas] column value.
     * 
     * @return string
     */
    public function getValiderCanevas()
    {

        return $this->valider_canevas;
    }

    /**
     * Get the [administrer_clauses_entite_achats] column value.
     * 
     * @return string
     */
    public function getAdministrerClausesEntiteAchats()
    {

        return $this->administrer_clauses_entite_achats;
    }

    /**
     * Get the [generer_pieces_format_odt] column value.
     * 
     * @return string
     */
    public function getGenererPiecesFormatOdt()
    {

        return $this->generer_pieces_format_odt;
    }

    /**
     * Get the [publier_version_clausier_editeur] column value.
     * 
     * @return string
     */
    public function getPublierVersionClausierEditeur()
    {

        return $this->publier_version_clausier_editeur;
    }

    /**
     * Get the [administrer_clauses_editeur] column value.
     * 
     * @return string
     */
    public function getAdministrerClausesEditeur()
    {

        return $this->administrer_clauses_editeur;
    }

    /**
     * Get the [valider_clauses_editeur] column value.
     * 
     * @return string
     */
    public function getValiderClausesEditeur()
    {

        return $this->valider_clauses_editeur;
    }

    /**
     * Get the [administrer_canevas_editeur] column value.
     * 
     * @return string
     */
    public function getAdministrerCanevasEditeur()
    {

        return $this->administrer_canevas_editeur;
    }

    /**
     * Get the [valider_canevas_editeur] column value.
     * 
     * @return string
     */
    public function getValiderCanevasEditeur()
    {

        return $this->valider_canevas_editeur;
    }

    /**
     * Get the [decision_suivi_seul] column value.
     * 
     * @return string
     */
    public function getDecisionSuiviSeul()
    {

        return $this->decision_suivi_seul;
    }

    /**
     * Get the [ouvrir_candidature_hors_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirCandidatureHorsLigne()
    {

        return $this->ouvrir_candidature_hors_ligne;
    }

    /**
     * Get the [ouvrir_offre_hors_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreHorsLigne()
    {

        return $this->ouvrir_offre_hors_ligne;
    }

    /**
     * Get the [ouvrir_offre_technique_hors_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirOffreTechniqueHorsLigne()
    {

        return $this->ouvrir_offre_technique_hors_ligne;
    }

    /**
     * Get the [ouvrir_anonymat_hors_ligne] column value.
     * 
     * @return string
     */
    public function getOuvrirAnonymatHorsLigne()
    {

        return $this->ouvrir_anonymat_hors_ligne;
    }

    /**
     * Get the [espace_collaboratif_gestionnaire] column value.
     * 
     * @return string
     */
    public function getEspaceCollaboratifGestionnaire()
    {

        return $this->espace_collaboratif_gestionnaire;
    }

    /**
     * Get the [espace_collaboratif_contributeur] column value.
     * 
     * @return string
     */
    public function getEspaceCollaboratifContributeur()
    {

        return $this->espace_collaboratif_contributeur;
    }

    /**
     * Get the [gerer_organismes] column value.
     * 
     * @return string
     */
    public function getGererOrganismes()
    {

        return $this->gerer_organismes;
    }

    /**
     * Get the [gerer_associations_agents] column value.
     * 
     * @return string
     */
    public function getGererAssociationsAgents()
    {

        return $this->gerer_associations_agents;
    }

    /**
     * Get the [module_redaction_uniquement] column value.
     * 
     * @return string
     */
    public function getModuleRedactionUniquement()
    {

        return $this->module_redaction_uniquement;
    }

    /**
     * Get the [historique_navigation_inscrits] column value.
     * 
     * @return string
     */
    public function getHistoriqueNavigationInscrits()
    {

        return $this->historique_navigation_inscrits;
    }

    /**
     * Get the [telecharger_accords_cadres] column value.
     * 
     * @return string
     */
    public function getTelechargerAccordsCadres()
    {

        return $this->telecharger_accords_cadres;
    }

    /**
     * Get the [creer_annonce_decision_resiliation] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceDecisionResiliation()
    {

        return $this->creer_annonce_decision_resiliation;
    }

    /**
     * Get the [creer_annonce_synthese_rapport_audit] column value.
     * 
     * @return string
     */
    public function getCreerAnnonceSyntheseRapportAudit()
    {

        return $this->creer_annonce_synthese_rapport_audit;
    }

    /**
     * Get the [gerer_operations] column value.
     * 
     * @return string
     */
    public function getGererOperations()
    {

        return $this->gerer_operations;
    }

    /**
     * Get the [telecharger_siret_acheteur] column value.
     * 
     * @return string
     */
    public function getTelechargerSiretAcheteur()
    {

        return $this->telecharger_siret_acheteur;
    }

    /**
     * Get the [gerer_reouvertures_modification] column value.
     * 
     * @return string
     */
    public function getGererReouverturesModification()
    {

        return $this->gerer_reouvertures_modification;
    }

    /**
     * Get the [envoyer_demande_validation] column value.
     * 
     * @return string
     */
    public function getEnvoyerDemandeValidation()
    {

        return $this->envoyer_demande_validation;
    }

    /**
     * Get the [suivre_consultation_organisme] column value.
     * 
     * @return string
     */
    public function getSuivreConsultationOrganisme()
    {

        return $this->suivre_consultation_organisme;
    }

    /**
     * Get the [renseigner_montant] column value.
     * 
     * @return string
     */
    public function getRenseignerMontant()
    {

        return $this->renseigner_montant;
    }

    /**
     * Get the [gestion_referentiel_contact] column value.
     * 
     * @return string
     */
    public function getGestionReferentielContact()
    {

        return $this->gestion_referentiel_contact;
    }

    /**
     * Get the [gerer_cao] column value.
     * 
     * @return string
     */
    public function getGererCao()
    {

        return $this->gerer_cao;
    }

    /**
     * Get the [validation_acces_facture] column value.
     * 
     * @return string
     */
    public function getValidationAccesFacture()
    {

        return $this->validation_acces_facture;
    }

    /**
     * Get the [gestion_travaux_cao] column value.
     * 
     * @return string
     */
    public function getGestionTravauxCao()
    {

        return $this->gestion_travaux_cao;
    }

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [gestion_agent_pole] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionAgentPole($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_agent_pole !== $v) {
            $this->gestion_agent_pole = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_AGENT_POLE;
        }


        return $this;
    } // setGestionAgentPole()

    /**
     * Set the value of [gestion_fournisseurs_envois_postaux] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionFournisseursEnvoisPostaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_fournisseurs_envois_postaux !== $v) {
            $this->gestion_fournisseurs_envois_postaux = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX;
        }


        return $this;
    } // setGestionFournisseursEnvoisPostaux()

    /**
     * Set the value of [gestion_bi_cles] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionBiCles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_bi_cles !== $v) {
            $this->gestion_bi_cles = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_BI_CLES;
        }


        return $this;
    } // setGestionBiCles()

    /**
     * Set the value of [creer_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_consultation !== $v) {
            $this->creer_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_CONSULTATION;
        }


        return $this;
    } // setCreerConsultation()

    /**
     * Set the value of [modifier_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation !== $v) {
            $this->modifier_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION;
        }


        return $this;
    } // setModifierConsultation()

    /**
     * Set the value of [valider_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValiderConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_consultation !== $v) {
            $this->valider_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDER_CONSULTATION;
        }


        return $this;
    } // setValiderConsultation()

    /**
     * Set the value of [publier_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setPublierConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publier_consultation !== $v) {
            $this->publier_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::PUBLIER_CONSULTATION;
        }


        return $this;
    } // setPublierConsultation()

    /**
     * Set the value of [suivre_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuivreConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_consultation !== $v) {
            $this->suivre_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVRE_CONSULTATION;
        }


        return $this;
    } // setSuivreConsultation()

    /**
     * Set the value of [suivre_consultation_pole] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuivreConsultationPole($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_consultation_pole !== $v) {
            $this->suivre_consultation_pole = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE;
        }


        return $this;
    } // setSuivreConsultationPole()

    /**
     * Set the value of [supprimer_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSupprimerEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_enveloppe !== $v) {
            $this->supprimer_enveloppe = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE;
        }


        return $this;
    } // setSupprimerEnveloppe()

    /**
     * Set the value of [supprimer_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSupprimerConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_consultation !== $v) {
            $this->supprimer_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION;
        }


        return $this;
    } // setSupprimerConsultation()

    /**
     * Set the value of [depouiller_candidature] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDepouillerCandidature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depouiller_candidature !== $v) {
            $this->depouiller_candidature = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE;
        }


        return $this;
    } // setDepouillerCandidature()

    /**
     * Set the value of [depouiller_offre] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDepouillerOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depouiller_offre !== $v) {
            $this->depouiller_offre = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DEPOUILLER_OFFRE;
        }


        return $this;
    } // setDepouillerOffre()

    /**
     * Set the value of [messagerie_securisee] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setMessagerieSecurisee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->messagerie_securisee !== $v) {
            $this->messagerie_securisee = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE;
        }


        return $this;
    } // setMessagerieSecurisee()

    /**
     * Set the value of [acces_registre_depots_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreDepotsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_depots_papier !== $v) {
            $this->acces_registre_depots_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER;
        }


        return $this;
    } // setAccesRegistreDepotsPapier()

    /**
     * Set the value of [acces_registre_retraits_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreRetraitsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_retraits_papier !== $v) {
            $this->acces_registre_retraits_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER;
        }


        return $this;
    } // setAccesRegistreRetraitsPapier()

    /**
     * Set the value of [acces_registre_questions_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreQuestionsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_questions_papier !== $v) {
            $this->acces_registre_questions_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER;
        }


        return $this;
    } // setAccesRegistreQuestionsPapier()

    /**
     * Set the value of [gerer_encheres] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererEncheres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_encheres !== $v) {
            $this->gerer_encheres = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ENCHERES;
        }


        return $this;
    } // setGererEncheres()

    /**
     * Set the value of [suivre_encheres] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuivreEncheres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_encheres !== $v) {
            $this->suivre_encheres = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVRE_ENCHERES;
        }


        return $this;
    } // setSuivreEncheres()

    /**
     * Set the value of [suivi_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_entreprise !== $v) {
            $this->suivi_entreprise = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_ENTREPRISE;
        }


        return $this;
    } // setSuiviEntreprise()

    /**
     * Set the value of [envoi_boamp] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEnvoiBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_boamp !== $v) {
            $this->envoi_boamp = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ENVOI_BOAMP;
        }


        return $this;
    } // setEnvoiBoamp()

    /**
     * Set the value of [acces_classement_lot] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesClassementLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_classement_lot !== $v) {
            $this->acces_classement_lot = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT;
        }


        return $this;
    } // setAccesClassementLot()

    /**
     * Set the value of [connecteur_sis] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setConnecteurSis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->connecteur_sis !== $v) {
            $this->connecteur_sis = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CONNECTEUR_SIS;
        }


        return $this;
    } // setConnecteurSis()

    /**
     * Set the value of [connecteur_marco] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setConnecteurMarco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->connecteur_marco !== $v) {
            $this->connecteur_marco = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CONNECTEUR_MARCO;
        }


        return $this;
    } // setConnecteurMarco()

    /**
     * Set the value of [repondre_aux_questions] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRepondreAuxQuestions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->repondre_aux_questions !== $v) {
            $this->repondre_aux_questions = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS;
        }


        return $this;
    } // setRepondreAuxQuestions()

    /**
     * Set the value of [appel_projet_formation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAppelProjetFormation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->appel_projet_formation !== $v) {
            $this->appel_projet_formation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION;
        }


        return $this;
    } // setAppelProjetFormation()

    /**
     * Set the value of [utiliser_client_cao] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setUtiliserClientCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->utiliser_client_cao !== $v) {
            $this->utiliser_client_cao = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO;
        }


        return $this;
    } // setUtiliserClientCao()

    /**
     * Set the value of [notification_boamp] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setNotificationBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notification_boamp !== $v) {
            $this->notification_boamp = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::NOTIFICATION_BOAMP;
        }


        return $this;
    } // setNotificationBoamp()

    /**
     * Set the value of [administrer_compte] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerCompte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_compte !== $v) {
            $this->administrer_compte = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_COMPTE;
        }


        return $this;
    } // setAdministrerCompte()

    /**
     * Set the value of [gestion_mapa] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_mapa !== $v) {
            $this->gestion_mapa = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_MAPA;
        }


        return $this;
    } // setGestionMapa()

    /**
     * Set the value of [gestion_type_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionTypeValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_type_validation !== $v) {
            $this->gestion_type_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION;
        }


        return $this;
    } // setGestionTypeValidation()

    /**
     * Set the value of [approuver_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setApprouverConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->approuver_consultation !== $v) {
            $this->approuver_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::APPROUVER_CONSULTATION;
        }


        return $this;
    } // setApprouverConsultation()

    /**
     * Set the value of [administrer_procedure] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_procedure !== $v) {
            $this->administrer_procedure = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE;
        }


        return $this;
    } // setAdministrerProcedure()

    /**
     * Set the value of [restreindre_creation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRestreindreCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->restreindre_creation !== $v) {
            $this->restreindre_creation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::RESTREINDRE_CREATION;
        }


        return $this;
    } // setRestreindreCreation()

    /**
     * Set the value of [creer_liste_marches] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerListeMarches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_liste_marches !== $v) {
            $this->creer_liste_marches = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_LISTE_MARCHES;
        }


        return $this;
    } // setCreerListeMarches()

    /**
     * Set the value of [gestion_commissions] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCommissions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_commissions !== $v) {
            $this->gestion_commissions = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_COMMISSIONS;
        }


        return $this;
    } // setGestionCommissions()

    /**
     * Set the value of [suivi_seul_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_consultation !== $v) {
            $this->suivi_seul_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION;
        }


        return $this;
    } // setSuiviSeulConsultation()

    /**
     * Set the value of [attribution_marche] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAttributionMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attribution_marche !== $v) {
            $this->attribution_marche = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE;
        }


        return $this;
    } // setAttributionMarche()

    /**
     * Set the value of [fiche_recensement] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setFicheRecensement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fiche_recensement !== $v) {
            $this->fiche_recensement = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::FICHE_RECENSEMENT;
        }


        return $this;
    } // setFicheRecensement()

    /**
     * Set the value of [declarer_infructueux] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDeclarerInfructueux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->declarer_infructueux !== $v) {
            $this->declarer_infructueux = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX;
        }


        return $this;
    } // setDeclarerInfructueux()

    /**
     * Set the value of [declarer_sans_suite] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDeclarerSansSuite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->declarer_sans_suite !== $v) {
            $this->declarer_sans_suite = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DECLARER_SANS_SUITE;
        }


        return $this;
    } // setDeclarerSansSuite()

    /**
     * Set the value of [creer_consultation_transverse] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerConsultationTransverse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_consultation_transverse !== $v) {
            $this->creer_consultation_transverse = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE;
        }


        return $this;
    } // setCreerConsultationTransverse()

    /**
     * Set the value of [ouvrir_candidature_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirCandidatureEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_candidature_en_ligne !== $v) {
            $this->ouvrir_candidature_en_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE;
        }


        return $this;
    } // setOuvrirCandidatureEnLigne()

    /**
     * Set the value of [ouvrir_candidature_a_distance] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirCandidatureADistance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_candidature_a_distance !== $v) {
            $this->ouvrir_candidature_a_distance = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE;
        }


        return $this;
    } // setOuvrirCandidatureADistance()

    /**
     * Set the value of [refuser_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRefuserEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->refuser_enveloppe !== $v) {
            $this->refuser_enveloppe = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::REFUSER_ENVELOPPE;
        }


        return $this;
    } // setRefuserEnveloppe()

    /**
     * Set the value of [gerer_admissibilite] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererAdmissibilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_admissibilite !== $v) {
            $this->gerer_admissibilite = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ADMISSIBILITE;
        }


        return $this;
    } // setGererAdmissibilite()

    /**
     * Set the value of [restaurer_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRestaurerEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->restaurer_enveloppe !== $v) {
            $this->restaurer_enveloppe = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE;
        }


        return $this;
    } // setRestaurerEnveloppe()

    /**
     * Set the value of [ouvrir_anonymat_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirAnonymatEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_anonymat_en_ligne !== $v) {
            $this->ouvrir_anonymat_en_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE;
        }


        return $this;
    } // setOuvrirAnonymatEnLigne()

    /**
     * Set the value of [ouvrir_offre_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_en_ligne !== $v) {
            $this->ouvrir_offre_en_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE;
        }


        return $this;
    } // setOuvrirOffreEnLigne()

    /**
     * Set the value of [gestion_compte_boamp] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCompteBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_compte_boamp !== $v) {
            $this->gestion_compte_boamp = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP;
        }


        return $this;
    } // setGestionCompteBoamp()

    /**
     * Set the value of [gestion_agents] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionAgents($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_agents !== $v) {
            $this->gestion_agents = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_AGENTS;
        }


        return $this;
    } // setGestionAgents()

    /**
     * Set the value of [gestion_habilitations] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionHabilitations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_habilitations !== $v) {
            $this->gestion_habilitations = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_HABILITATIONS;
        }


        return $this;
    } // setGestionHabilitations()

    /**
     * Set the value of [gerer_mapa_inferieur_montant] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererMapaInferieurMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_mapa_inferieur_montant !== $v) {
            $this->gerer_mapa_inferieur_montant = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT;
        }


        return $this;
    } // setGererMapaInferieurMontant()

    /**
     * Set the value of [gerer_mapa_superieur_montant] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererMapaSuperieurMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_mapa_superieur_montant !== $v) {
            $this->gerer_mapa_superieur_montant = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT;
        }


        return $this;
    } // setGererMapaSuperieurMontant()

    /**
     * Set the value of [modifier_consultation_avant_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultationAvantValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation_avant_validation !== $v) {
            $this->modifier_consultation_avant_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION;
        }


        return $this;
    } // setModifierConsultationAvantValidation()

    /**
     * Set the value of [modifier_consultation_apres_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultationApresValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation_apres_validation !== $v) {
            $this->modifier_consultation_apres_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION;
        }


        return $this;
    } // setModifierConsultationApresValidation()

    /**
     * Set the value of [acces_reponses] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesReponses($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_reponses !== $v) {
            $this->acces_reponses = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REPONSES;
        }


        return $this;
    } // setAccesReponses()

    /**
     * Set the value of [telechargement_groupe_anticipe_plis_chiffres] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setTelechargementGroupeAnticipePlisChiffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telechargement_groupe_anticipe_plis_chiffres !== $v) {
            $this->telechargement_groupe_anticipe_plis_chiffres = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES;
        }


        return $this;
    } // setTelechargementGroupeAnticipePlisChiffres()

    /**
     * Set the value of [telechargement_unitaire_plis_chiffres] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setTelechargementUnitairePlisChiffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telechargement_unitaire_plis_chiffres !== $v) {
            $this->telechargement_unitaire_plis_chiffres = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES;
        }


        return $this;
    } // setTelechargementUnitairePlisChiffres()

    /**
     * Set the value of [ouvrir_offre_a_distance] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreADistance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_a_distance !== $v) {
            $this->ouvrir_offre_a_distance = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE;
        }


        return $this;
    } // setOuvrirOffreADistance()

    /**
     * Set the value of [creer_annonce_information] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceInformation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_information !== $v) {
            $this->creer_annonce_information = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION;
        }


        return $this;
    } // setCreerAnnonceInformation()

    /**
     * Set the value of [saisie_marches] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSaisieMarches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->saisie_marches !== $v) {
            $this->saisie_marches = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SAISIE_MARCHES;
        }


        return $this;
    } // setSaisieMarches()

    /**
     * Set the value of [validation_marches] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationMarches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_marches !== $v) {
            $this->validation_marches = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_MARCHES;
        }


        return $this;
    } // setValidationMarches()

    /**
     * Set the value of [publication_marches] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setPublicationMarches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publication_marches !== $v) {
            $this->publication_marches = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::PUBLICATION_MARCHES;
        }


        return $this;
    } // setPublicationMarches()

    /**
     * Set the value of [gerer_statistiques_metier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererStatistiquesMetier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_statistiques_metier !== $v) {
            $this->gerer_statistiques_metier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER;
        }


        return $this;
    } // setGererStatistiquesMetier()

    /**
     * Set the value of [gerer_archives] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererArchives($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_archives !== $v) {
            $this->gerer_archives = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ARCHIVES;
        }


        return $this;
    } // setGererArchives()

    /**
     * Set the value of [administrer_procedures_formalisees] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerProceduresFormalisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_procedures_formalisees !== $v) {
            $this->administrer_procedures_formalisees = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES;
        }


        return $this;
    } // setAdministrerProceduresFormalisees()

    /**
     * Set the value of [creer_annonce_attribution] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceAttribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_attribution !== $v) {
            $this->creer_annonce_attribution = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION;
        }


        return $this;
    } // setCreerAnnonceAttribution()

    /**
     * Set the value of [acces_registre_retraits_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreRetraitsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_retraits_electronique !== $v) {
            $this->acces_registre_retraits_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE;
        }


        return $this;
    } // setAccesRegistreRetraitsElectronique()

    /**
     * Set the value of [acces_registre_questions_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreQuestionsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_questions_electronique !== $v) {
            $this->acces_registre_questions_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE;
        }


        return $this;
    } // setAccesRegistreQuestionsElectronique()

    /**
     * Set the value of [acces_registre_depots_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAccesRegistreDepotsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acces_registre_depots_electronique !== $v) {
            $this->acces_registre_depots_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE;
        }


        return $this;
    } // setAccesRegistreDepotsElectronique()

    /**
     * Set the value of [validation_simple] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationSimple($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_simple !== $v) {
            $this->validation_simple = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_SIMPLE;
        }


        return $this;
    } // setValidationSimple()

    /**
     * Set the value of [validation_intermediaire] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationIntermediaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_intermediaire !== $v) {
            $this->validation_intermediaire = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE;
        }


        return $this;
    } // setValidationIntermediaire()

    /**
     * Set the value of [validation_finale] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationFinale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_finale !== $v) {
            $this->validation_finale = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_FINALE;
        }


        return $this;
    } // setValidationFinale()

    /**
     * Set the value of [creer_suite_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerSuiteConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_suite_consultation !== $v) {
            $this->creer_suite_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION;
        }


        return $this;
    } // setCreerSuiteConsultation()

    /**
     * Set the value of [hyper_admin] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setHyperAdmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hyper_admin !== $v) {
            $this->hyper_admin = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::HYPER_ADMIN;
        }


        return $this;
    } // setHyperAdmin()

    /**
     * Set the value of [droit_gestion_services] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDroitGestionServices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->droit_gestion_services !== $v) {
            $this->droit_gestion_services = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES;
        }


        return $this;
    } // setDroitGestionServices()

    /**
     * Set the value of [suivi_acces] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviAcces($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_acces !== $v) {
            $this->suivi_acces = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_ACCES;
        }


        return $this;
    } // setSuiviAcces()

    /**
     * Set the value of [statistiques_site] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setStatistiquesSite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statistiques_site !== $v) {
            $this->statistiques_site = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::STATISTIQUES_SITE;
        }


        return $this;
    } // setStatistiquesSite()

    /**
     * Set the value of [statistiques_qos] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setStatistiquesQos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statistiques_qos !== $v) {
            $this->statistiques_qos = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::STATISTIQUES_QOS;
        }


        return $this;
    } // setStatistiquesQos()

    /**
     * Set the value of [ouvrir_anonymat_a_distance] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirAnonymatADistance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_anonymat_a_distance !== $v) {
            $this->ouvrir_anonymat_a_distance = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE;
        }


        return $this;
    } // setOuvrirAnonymatADistance()

    /**
     * Set the value of [gestion_compte_jal] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCompteJal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_compte_jal !== $v) {
            $this->gestion_compte_jal = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_COMPTE_JAL;
        }


        return $this;
    } // setGestionCompteJal()

    /**
     * Set the value of [gestion_centrale_pub] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCentralePub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_centrale_pub !== $v) {
            $this->gestion_centrale_pub = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB;
        }


        return $this;
    } // setGestionCentralePub()

    /**
     * Set the value of [gestion_compte_groupe_moniteur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCompteGroupeMoniteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_compte_groupe_moniteur !== $v) {
            $this->gestion_compte_groupe_moniteur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR;
        }


        return $this;
    } // setGestionCompteGroupeMoniteur()

    /**
     * Set the value of [ouvrir_offre_technique_en_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreTechniqueEnLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_technique_en_ligne !== $v) {
            $this->ouvrir_offre_technique_en_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE;
        }


        return $this;
    } // setOuvrirOffreTechniqueEnLigne()

    /**
     * Set the value of [ouvrir_offre_technique_a_distance] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreTechniqueADistance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_technique_a_distance !== $v) {
            $this->ouvrir_offre_technique_a_distance = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE;
        }


        return $this;
    } // setOuvrirOffreTechniqueADistance()

    /**
     * Set the value of [activation_compte_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setActivationCompteEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activation_compte_entreprise !== $v) {
            $this->activation_compte_entreprise = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE;
        }


        return $this;
    } // setActivationCompteEntreprise()

    /**
     * Set the value of [importer_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setImporterEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->importer_enveloppe !== $v) {
            $this->importer_enveloppe = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE;
        }


        return $this;
    } // setImporterEnveloppe()

    /**
     * Set the value of [suivi_seul_registre_depots_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreDepotsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_depots_papier !== $v) {
            $this->suivi_seul_registre_depots_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER;
        }


        return $this;
    } // setSuiviSeulRegistreDepotsPapier()

    /**
     * Set the value of [suivi_seul_registre_retraits_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreRetraitsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_retraits_papier !== $v) {
            $this->suivi_seul_registre_retraits_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER;
        }


        return $this;
    } // setSuiviSeulRegistreRetraitsPapier()

    /**
     * Set the value of [suivi_seul_registre_questions_papier] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreQuestionsPapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_questions_papier !== $v) {
            $this->suivi_seul_registre_questions_papier = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER;
        }


        return $this;
    } // setSuiviSeulRegistreQuestionsPapier()

    /**
     * Set the value of [suivi_seul_registre_depots_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreDepotsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_depots_electronique !== $v) {
            $this->suivi_seul_registre_depots_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE;
        }


        return $this;
    } // setSuiviSeulRegistreDepotsElectronique()

    /**
     * Set the value of [suivi_seul_registre_retraits_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreRetraitsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_retraits_electronique !== $v) {
            $this->suivi_seul_registre_retraits_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE;
        }


        return $this;
    } // setSuiviSeulRegistreRetraitsElectronique()

    /**
     * Set the value of [suivi_seul_registre_questions_electronique] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviSeulRegistreQuestionsElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_seul_registre_questions_electronique !== $v) {
            $this->suivi_seul_registre_questions_electronique = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE;
        }


        return $this;
    } // setSuiviSeulRegistreQuestionsElectronique()

    /**
     * Set the value of [modifier_consultation_mapa_inferieur_montant_apres_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultationMapaInferieurMontantApresValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation_mapa_inferieur_montant_apres_validation !== $v) {
            $this->modifier_consultation_mapa_inferieur_montant_apres_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION;
        }


        return $this;
    } // setModifierConsultationMapaInferieurMontantApresValidation()

    /**
     * Set the value of [modifier_consultation_mapa_superieur_montant_apres_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultationMapaSuperieurMontantApresValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation_mapa_superieur_montant_apres_validation !== $v) {
            $this->modifier_consultation_mapa_superieur_montant_apres_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION;
        }


        return $this;
    } // setModifierConsultationMapaSuperieurMontantApresValidation()

    /**
     * Set the value of [modifier_consultation_procedures_formalisees_apres_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierConsultationProceduresFormaliseesApresValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_consultation_procedures_formalisees_apres_validation !== $v) {
            $this->modifier_consultation_procedures_formalisees_apres_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION;
        }


        return $this;
    } // setModifierConsultationProceduresFormaliseesApresValidation()

    /**
     * Set the value of [gerer_les_entreprises] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererLesEntreprises($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_les_entreprises !== $v) {
            $this->gerer_les_entreprises = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES;
        }


        return $this;
    } // setGererLesEntreprises()

    /**
     * Set the value of [portee_societes_exclues] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setPorteeSocietesExclues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portee_societes_exclues !== $v) {
            $this->portee_societes_exclues = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES;
        }


        return $this;
    } // setPorteeSocietesExclues()

    /**
     * Set the value of [portee_societes_exclues_tous_organismes] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setPorteeSocietesExcluesTousOrganismes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portee_societes_exclues_tous_organismes !== $v) {
            $this->portee_societes_exclues_tous_organismes = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES;
        }


        return $this;
    } // setPorteeSocietesExcluesTousOrganismes()

    /**
     * Set the value of [modifier_societes_exclues] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModifierSocietesExclues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modifier_societes_exclues !== $v) {
            $this->modifier_societes_exclues = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES;
        }


        return $this;
    } // setModifierSocietesExclues()

    /**
     * Set the value of [supprimer_societes_exclues] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSupprimerSocietesExclues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprimer_societes_exclues !== $v) {
            $this->supprimer_societes_exclues = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES;
        }


        return $this;
    } // setSupprimerSocietesExclues()

    /**
     * Set the value of [resultat_analyse] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setResultatAnalyse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resultat_analyse !== $v) {
            $this->resultat_analyse = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::RESULTAT_ANALYSE;
        }


        return $this;
    } // setResultatAnalyse()

    /**
     * Set the value of [gerer_adresses_service] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererAdressesService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_adresses_service !== $v) {
            $this->gerer_adresses_service = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE;
        }


        return $this;
    } // setGererAdressesService()

    /**
     * Set the value of [gerer_mon_service] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererMonService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_mon_service !== $v) {
            $this->gerer_mon_service = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_MON_SERVICE;
        }


        return $this;
    } // setGererMonService()

    /**
     * Set the value of [download_archives] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDownloadArchives($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->download_archives !== $v) {
            $this->download_archives = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES;
        }


        return $this;
    } // setDownloadArchives()

    /**
     * Set the value of [creer_annonce_extrait_pv] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceExtraitPv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_extrait_pv !== $v) {
            $this->creer_annonce_extrait_pv = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV;
        }


        return $this;
    } // setCreerAnnonceExtraitPv()

    /**
     * Set the value of [creer_annonce_rapport_achevement] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceRapportAchevement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_rapport_achevement !== $v) {
            $this->creer_annonce_rapport_achevement = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT;
        }


        return $this;
    } // setCreerAnnonceRapportAchevement()

    /**
     * Set the value of [gestion_certificats_agent] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionCertificatsAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_certificats_agent !== $v) {
            $this->gestion_certificats_agent = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT;
        }


        return $this;
    } // setGestionCertificatsAgent()

    /**
     * Set the value of [creer_avis_programme_previsionnel] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAvisProgrammePrevisionnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_avis_programme_previsionnel !== $v) {
            $this->creer_avis_programme_previsionnel = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL;
        }


        return $this;
    } // setCreerAvisProgrammePrevisionnel()

    /**
     * Set the value of [annuler_consultation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAnnulerConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuler_consultation !== $v) {
            $this->annuler_consultation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ANNULER_CONSULTATION;
        }


        return $this;
    } // setAnnulerConsultation()

    /**
     * Set the value of [envoyer_publicite] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEnvoyerPublicite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoyer_publicite !== $v) {
            $this->envoyer_publicite = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ENVOYER_PUBLICITE;
        }


        return $this;
    } // setEnvoyerPublicite()

    /**
     * Set the value of [liste_marches_notifies] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setListeMarchesNotifies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liste_marches_notifies !== $v) {
            $this->liste_marches_notifies = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES;
        }


        return $this;
    } // setListeMarchesNotifies()

    /**
     * Set the value of [suivre_message] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuivreMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_message !== $v) {
            $this->suivre_message = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVRE_MESSAGE;
        }


        return $this;
    } // setSuivreMessage()

    /**
     * Set the value of [envoyer_message] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEnvoyerMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoyer_message !== $v) {
            $this->envoyer_message = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ENVOYER_MESSAGE;
        }


        return $this;
    } // setEnvoyerMessage()

    /**
     * Set the value of [suivi_flux_chorus_transversal] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuiviFluxChorusTransversal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivi_flux_chorus_transversal !== $v) {
            $this->suivi_flux_chorus_transversal = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL;
        }


        return $this;
    } // setSuiviFluxChorusTransversal()

    /**
     * Set the value of [gestion_mandataire] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionMandataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_mandataire !== $v) {
            $this->gestion_mandataire = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_MANDATAIRE;
        }


        return $this;
    } // setGestionMandataire()

    /**
     * Set the value of [gerer_newsletter] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererNewsletter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_newsletter !== $v) {
            $this->gerer_newsletter = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_NEWSLETTER;
        }


        return $this;
    } // setGererNewsletter()

    /**
     * Set the value of [gestion_modeles_formulaire] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionModelesFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_modeles_formulaire !== $v) {
            $this->gestion_modeles_formulaire = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE;
        }


        return $this;
    } // setGestionModelesFormulaire()

    /**
     * Set the value of [gestion_adresses_facturation_jal] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionAdressesFacturationJal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_adresses_facturation_jal !== $v) {
            $this->gestion_adresses_facturation_jal = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL;
        }


        return $this;
    } // setGestionAdressesFacturationJal()

    /**
     * Set the value of [administrer_adresses_facturation_jal] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerAdressesFacturationJal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_adresses_facturation_jal !== $v) {
            $this->administrer_adresses_facturation_jal = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL;
        }


        return $this;
    } // setAdministrerAdressesFacturationJal()

    /**
     * Set the value of [redaction_documents_redac] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRedactionDocumentsRedac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->redaction_documents_redac !== $v) {
            $this->redaction_documents_redac = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC;
        }


        return $this;
    } // setRedactionDocumentsRedac()

    /**
     * Set the value of [validation_documents_redac] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationDocumentsRedac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_documents_redac !== $v) {
            $this->validation_documents_redac = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC;
        }


        return $this;
    } // setValidationDocumentsRedac()

    /**
     * Set the value of [gestion_mise_disposition_pieces_marche] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionMiseDispositionPiecesMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_mise_disposition_pieces_marche !== $v) {
            $this->gestion_mise_disposition_pieces_marche = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE;
        }


        return $this;
    } // setGestionMiseDispositionPiecesMarche()

    /**
     * Set the value of [annuaire_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAnnuaireAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annuaire_acheteur !== $v) {
            $this->annuaire_acheteur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR;
        }


        return $this;
    } // setAnnuaireAcheteur()

    /**
     * Set the value of [reprendre_integralement_article] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setReprendreIntegralementArticle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reprendre_integralement_article !== $v) {
            $this->reprendre_integralement_article = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE;
        }


        return $this;
    } // setReprendreIntegralementArticle()

    /**
     * Set the value of [administrer_clauses] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerClauses($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_clauses !== $v) {
            $this->administrer_clauses = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES;
        }


        return $this;
    } // setAdministrerClauses()

    /**
     * Set the value of [valider_clauses] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValiderClauses($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_clauses !== $v) {
            $this->valider_clauses = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDER_CLAUSES;
        }


        return $this;
    } // setValiderClauses()

    /**
     * Set the value of [administrer_canevas] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerCanevas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_canevas !== $v) {
            $this->administrer_canevas = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS;
        }


        return $this;
    } // setAdministrerCanevas()

    /**
     * Set the value of [valider_canevas] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValiderCanevas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_canevas !== $v) {
            $this->valider_canevas = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDER_CANEVAS;
        }


        return $this;
    } // setValiderCanevas()

    /**
     * Set the value of [administrer_clauses_entite_achats] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerClausesEntiteAchats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_clauses_entite_achats !== $v) {
            $this->administrer_clauses_entite_achats = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS;
        }


        return $this;
    } // setAdministrerClausesEntiteAchats()

    /**
     * Set the value of [generer_pieces_format_odt] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGenererPiecesFormatOdt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->generer_pieces_format_odt !== $v) {
            $this->generer_pieces_format_odt = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT;
        }


        return $this;
    } // setGenererPiecesFormatOdt()

    /**
     * Set the value of [publier_version_clausier_editeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setPublierVersionClausierEditeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publier_version_clausier_editeur !== $v) {
            $this->publier_version_clausier_editeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR;
        }


        return $this;
    } // setPublierVersionClausierEditeur()

    /**
     * Set the value of [administrer_clauses_editeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerClausesEditeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_clauses_editeur !== $v) {
            $this->administrer_clauses_editeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR;
        }


        return $this;
    } // setAdministrerClausesEditeur()

    /**
     * Set the value of [valider_clauses_editeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValiderClausesEditeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_clauses_editeur !== $v) {
            $this->valider_clauses_editeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR;
        }


        return $this;
    } // setValiderClausesEditeur()

    /**
     * Set the value of [administrer_canevas_editeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setAdministrerCanevasEditeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->administrer_canevas_editeur !== $v) {
            $this->administrer_canevas_editeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR;
        }


        return $this;
    } // setAdministrerCanevasEditeur()

    /**
     * Set the value of [valider_canevas_editeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValiderCanevasEditeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_canevas_editeur !== $v) {
            $this->valider_canevas_editeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR;
        }


        return $this;
    } // setValiderCanevasEditeur()

    /**
     * Set the value of [decision_suivi_seul] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setDecisionSuiviSeul($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision_suivi_seul !== $v) {
            $this->decision_suivi_seul = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL;
        }


        return $this;
    } // setDecisionSuiviSeul()

    /**
     * Set the value of [ouvrir_candidature_hors_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirCandidatureHorsLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_candidature_hors_ligne !== $v) {
            $this->ouvrir_candidature_hors_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE;
        }


        return $this;
    } // setOuvrirCandidatureHorsLigne()

    /**
     * Set the value of [ouvrir_offre_hors_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreHorsLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_hors_ligne !== $v) {
            $this->ouvrir_offre_hors_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE;
        }


        return $this;
    } // setOuvrirOffreHorsLigne()

    /**
     * Set the value of [ouvrir_offre_technique_hors_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirOffreTechniqueHorsLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_offre_technique_hors_ligne !== $v) {
            $this->ouvrir_offre_technique_hors_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE;
        }


        return $this;
    } // setOuvrirOffreTechniqueHorsLigne()

    /**
     * Set the value of [ouvrir_anonymat_hors_ligne] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setOuvrirAnonymatHorsLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouvrir_anonymat_hors_ligne !== $v) {
            $this->ouvrir_anonymat_hors_ligne = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE;
        }


        return $this;
    } // setOuvrirAnonymatHorsLigne()

    /**
     * Set the value of [espace_collaboratif_gestionnaire] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEspaceCollaboratifGestionnaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->espace_collaboratif_gestionnaire !== $v) {
            $this->espace_collaboratif_gestionnaire = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE;
        }


        return $this;
    } // setEspaceCollaboratifGestionnaire()

    /**
     * Set the value of [espace_collaboratif_contributeur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEspaceCollaboratifContributeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->espace_collaboratif_contributeur !== $v) {
            $this->espace_collaboratif_contributeur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR;
        }


        return $this;
    } // setEspaceCollaboratifContributeur()

    /**
     * Set the value of [gerer_organismes] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererOrganismes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_organismes !== $v) {
            $this->gerer_organismes = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ORGANISMES;
        }


        return $this;
    } // setGererOrganismes()

    /**
     * Set the value of [gerer_associations_agents] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererAssociationsAgents($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_associations_agents !== $v) {
            $this->gerer_associations_agents = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS;
        }


        return $this;
    } // setGererAssociationsAgents()

    /**
     * Set the value of [module_redaction_uniquement] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setModuleRedactionUniquement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_redaction_uniquement !== $v) {
            $this->module_redaction_uniquement = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT;
        }


        return $this;
    } // setModuleRedactionUniquement()

    /**
     * Set the value of [historique_navigation_inscrits] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setHistoriqueNavigationInscrits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->historique_navigation_inscrits !== $v) {
            $this->historique_navigation_inscrits = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS;
        }


        return $this;
    } // setHistoriqueNavigationInscrits()

    /**
     * Set the value of [telecharger_accords_cadres] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setTelechargerAccordsCadres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecharger_accords_cadres !== $v) {
            $this->telecharger_accords_cadres = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES;
        }


        return $this;
    } // setTelechargerAccordsCadres()

    /**
     * Set the value of [creer_annonce_decision_resiliation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceDecisionResiliation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_decision_resiliation !== $v) {
            $this->creer_annonce_decision_resiliation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION;
        }


        return $this;
    } // setCreerAnnonceDecisionResiliation()

    /**
     * Set the value of [creer_annonce_synthese_rapport_audit] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setCreerAnnonceSyntheseRapportAudit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->creer_annonce_synthese_rapport_audit !== $v) {
            $this->creer_annonce_synthese_rapport_audit = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT;
        }


        return $this;
    } // setCreerAnnonceSyntheseRapportAudit()

    /**
     * Set the value of [gerer_operations] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererOperations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_operations !== $v) {
            $this->gerer_operations = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_OPERATIONS;
        }


        return $this;
    } // setGererOperations()

    /**
     * Set the value of [telecharger_siret_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setTelechargerSiretAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecharger_siret_acheteur !== $v) {
            $this->telecharger_siret_acheteur = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR;
        }


        return $this;
    } // setTelechargerSiretAcheteur()

    /**
     * Set the value of [gerer_reouvertures_modification] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererReouverturesModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_reouvertures_modification !== $v) {
            $this->gerer_reouvertures_modification = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION;
        }


        return $this;
    } // setGererReouverturesModification()

    /**
     * Set the value of [envoyer_demande_validation] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setEnvoyerDemandeValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoyer_demande_validation !== $v) {
            $this->envoyer_demande_validation = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION;
        }


        return $this;
    } // setEnvoyerDemandeValidation()

    /**
     * Set the value of [suivre_consultation_organisme] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setSuivreConsultationOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->suivre_consultation_organisme !== $v) {
            $this->suivre_consultation_organisme = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME;
        }


        return $this;
    } // setSuivreConsultationOrganisme()

    /**
     * Set the value of [renseigner_montant] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setRenseignerMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->renseigner_montant !== $v) {
            $this->renseigner_montant = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::RENSEIGNER_MONTANT;
        }


        return $this;
    } // setRenseignerMontant()

    /**
     * Set the value of [gestion_referentiel_contact] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionReferentielContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_referentiel_contact !== $v) {
            $this->gestion_referentiel_contact = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT;
        }


        return $this;
    } // setGestionReferentielContact()

    /**
     * Set the value of [gerer_cao] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGererCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gerer_cao !== $v) {
            $this->gerer_cao = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GERER_CAO;
        }


        return $this;
    } // setGererCao()

    /**
     * Set the value of [validation_acces_facture] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setValidationAccesFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validation_acces_facture !== $v) {
            $this->validation_acces_facture = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE;
        }


        return $this;
    } // setValidationAccesFacture()

    /**
     * Set the value of [gestion_travaux_cao] column.
     * 
     * @param string $v new value
     * @return CommonHabilitationAgent The current object (for fluent API support)
     */
    public function setGestionTravauxCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_travaux_cao !== $v) {
            $this->gestion_travaux_cao = $v;
            $this->modifiedColumns[] = CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO;
        }


        return $this;
    } // setGestionTravauxCao()

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
            if ($this->id_agent !== 0) {
                return false;
            }

            if ($this->gestion_agent_pole !== '0') {
                return false;
            }

            if ($this->gestion_fournisseurs_envois_postaux !== '0') {
                return false;
            }

            if ($this->gestion_bi_cles !== '0') {
                return false;
            }

            if ($this->creer_consultation !== '1') {
                return false;
            }

            if ($this->modifier_consultation !== '0') {
                return false;
            }

            if ($this->valider_consultation !== '0') {
                return false;
            }

            if ($this->publier_consultation !== '0') {
                return false;
            }

            if ($this->suivre_consultation !== '1') {
                return false;
            }

            if ($this->suivre_consultation_pole !== '0') {
                return false;
            }

            if ($this->supprimer_enveloppe !== '0') {
                return false;
            }

            if ($this->supprimer_consultation !== '0') {
                return false;
            }

            if ($this->depouiller_candidature !== '1') {
                return false;
            }

            if ($this->depouiller_offre !== '1') {
                return false;
            }

            if ($this->messagerie_securisee !== '0') {
                return false;
            }

            if ($this->acces_registre_depots_papier !== '0') {
                return false;
            }

            if ($this->acces_registre_retraits_papier !== '0') {
                return false;
            }

            if ($this->acces_registre_questions_papier !== '0') {
                return false;
            }

            if ($this->gerer_encheres !== '0') {
                return false;
            }

            if ($this->suivre_encheres !== '0') {
                return false;
            }

            if ($this->suivi_entreprise !== '0') {
                return false;
            }

            if ($this->envoi_boamp !== '0') {
                return false;
            }

            if ($this->acces_classement_lot !== '0') {
                return false;
            }

            if ($this->connecteur_sis !== '0') {
                return false;
            }

            if ($this->connecteur_marco !== '0') {
                return false;
            }

            if ($this->repondre_aux_questions !== '0') {
                return false;
            }

            if ($this->appel_projet_formation !== '0') {
                return false;
            }

            if ($this->utiliser_client_cao !== '0') {
                return false;
            }

            if ($this->notification_boamp !== '0') {
                return false;
            }

            if ($this->administrer_compte !== '0') {
                return false;
            }

            if ($this->gestion_mapa !== '0') {
                return false;
            }

            if ($this->gestion_type_validation !== '0') {
                return false;
            }

            if ($this->approuver_consultation !== '0') {
                return false;
            }

            if ($this->administrer_procedure !== '0') {
                return false;
            }

            if ($this->restreindre_creation !== '0') {
                return false;
            }

            if ($this->creer_liste_marches !== '0') {
                return false;
            }

            if ($this->gestion_commissions !== '0') {
                return false;
            }

            if ($this->suivi_seul_consultation !== '0') {
                return false;
            }

            if ($this->attribution_marche !== '0') {
                return false;
            }

            if ($this->fiche_recensement !== '0') {
                return false;
            }

            if ($this->declarer_infructueux !== '0') {
                return false;
            }

            if ($this->declarer_sans_suite !== '0') {
                return false;
            }

            if ($this->creer_consultation_transverse !== '0') {
                return false;
            }

            if ($this->ouvrir_candidature_en_ligne !== '0') {
                return false;
            }

            if ($this->ouvrir_candidature_a_distance !== '0') {
                return false;
            }

            if ($this->refuser_enveloppe !== '0') {
                return false;
            }

            if ($this->gerer_admissibilite !== '0') {
                return false;
            }

            if ($this->restaurer_enveloppe !== '0') {
                return false;
            }

            if ($this->ouvrir_anonymat_en_ligne !== '0') {
                return false;
            }

            if ($this->ouvrir_offre_en_ligne !== '0') {
                return false;
            }

            if ($this->gestion_compte_boamp !== '0') {
                return false;
            }

            if ($this->gestion_agents !== '0') {
                return false;
            }

            if ($this->gestion_habilitations !== '0') {
                return false;
            }

            if ($this->gerer_mapa_inferieur_montant !== '0') {
                return false;
            }

            if ($this->gerer_mapa_superieur_montant !== '0') {
                return false;
            }

            if ($this->modifier_consultation_avant_validation !== '0') {
                return false;
            }

            if ($this->modifier_consultation_apres_validation !== '0') {
                return false;
            }

            if ($this->acces_reponses !== '0') {
                return false;
            }

            if ($this->telechargement_groupe_anticipe_plis_chiffres !== '0') {
                return false;
            }

            if ($this->telechargement_unitaire_plis_chiffres !== '0') {
                return false;
            }

            if ($this->ouvrir_offre_a_distance !== '0') {
                return false;
            }

            if ($this->creer_annonce_information !== '0') {
                return false;
            }

            if ($this->saisie_marches !== '0') {
                return false;
            }

            if ($this->validation_marches !== '0') {
                return false;
            }

            if ($this->publication_marches !== '0') {
                return false;
            }

            if ($this->gerer_statistiques_metier !== '0') {
                return false;
            }

            if ($this->gerer_archives !== '0') {
                return false;
            }

            if ($this->administrer_procedures_formalisees !== '0') {
                return false;
            }

            if ($this->creer_annonce_attribution !== '0') {
                return false;
            }

            if ($this->acces_registre_retraits_electronique !== '1') {
                return false;
            }

            if ($this->acces_registre_questions_electronique !== '1') {
                return false;
            }

            if ($this->acces_registre_depots_electronique !== '1') {
                return false;
            }

            if ($this->validation_simple !== '1') {
                return false;
            }

            if ($this->validation_intermediaire !== '1') {
                return false;
            }

            if ($this->validation_finale !== '1') {
                return false;
            }

            if ($this->creer_suite_consultation !== '1') {
                return false;
            }

            if ($this->hyper_admin !== '0') {
                return false;
            }

            if ($this->droit_gestion_services !== '0') {
                return false;
            }

            if ($this->suivi_acces !== '0') {
                return false;
            }

            if ($this->statistiques_site !== '0') {
                return false;
            }

            if ($this->statistiques_qos !== '0') {
                return false;
            }

            if ($this->ouvrir_anonymat_a_distance !== '0') {
                return false;
            }

            if ($this->gestion_compte_jal !== '0') {
                return false;
            }

            if ($this->gestion_centrale_pub !== '0') {
                return false;
            }

            if ($this->gestion_compte_groupe_moniteur !== '0') {
                return false;
            }

            if ($this->activation_compte_entreprise !== '0') {
                return false;
            }

            if ($this->importer_enveloppe !== '0') {
                return false;
            }

            if ($this->suivi_seul_registre_depots_papier !== '0') {
                return false;
            }

            if ($this->suivi_seul_registre_retraits_papier !== '0') {
                return false;
            }

            if ($this->suivi_seul_registre_questions_papier !== '0') {
                return false;
            }

            if ($this->suivi_seul_registre_depots_electronique !== '1') {
                return false;
            }

            if ($this->suivi_seul_registre_retraits_electronique !== '1') {
                return false;
            }

            if ($this->suivi_seul_registre_questions_electronique !== '1') {
                return false;
            }

            if ($this->modifier_consultation_mapa_inferieur_montant_apres_validation !== '0') {
                return false;
            }

            if ($this->modifier_consultation_mapa_superieur_montant_apres_validation !== '0') {
                return false;
            }

            if ($this->modifier_consultation_procedures_formalisees_apres_validation !== '0') {
                return false;
            }

            if ($this->gerer_les_entreprises !== '0') {
                return false;
            }

            if ($this->portee_societes_exclues !== '0') {
                return false;
            }

            if ($this->portee_societes_exclues_tous_organismes !== '0') {
                return false;
            }

            if ($this->modifier_societes_exclues !== '0') {
                return false;
            }

            if ($this->supprimer_societes_exclues !== '0') {
                return false;
            }

            if ($this->resultat_analyse !== '0') {
                return false;
            }

            if ($this->gerer_adresses_service !== '0') {
                return false;
            }

            if ($this->gerer_mon_service !== '0') {
                return false;
            }

            if ($this->download_archives !== '0') {
                return false;
            }

            if ($this->creer_annonce_extrait_pv !== '0') {
                return false;
            }

            if ($this->creer_annonce_rapport_achevement !== '0') {
                return false;
            }

            if ($this->gestion_certificats_agent !== '0') {
                return false;
            }

            if ($this->creer_avis_programme_previsionnel !== '0') {
                return false;
            }

            if ($this->annuler_consultation !== '0') {
                return false;
            }

            if ($this->envoyer_publicite !== '1') {
                return false;
            }

            if ($this->liste_marches_notifies !== '0') {
                return false;
            }

            if ($this->suivre_message !== '1') {
                return false;
            }

            if ($this->envoyer_message !== '1') {
                return false;
            }

            if ($this->suivi_flux_chorus_transversal !== '0') {
                return false;
            }

            if ($this->gestion_mandataire !== '0') {
                return false;
            }

            if ($this->gerer_newsletter !== '0') {
                return false;
            }

            if ($this->gestion_modeles_formulaire !== '0') {
                return false;
            }

            if ($this->gestion_adresses_facturation_jal !== '0') {
                return false;
            }

            if ($this->administrer_adresses_facturation_jal !== '0') {
                return false;
            }

            if ($this->redaction_documents_redac !== '0') {
                return false;
            }

            if ($this->validation_documents_redac !== '0') {
                return false;
            }

            if ($this->gestion_mise_disposition_pieces_marche !== '0') {
                return false;
            }

            if ($this->annuaire_acheteur !== '0') {
                return false;
            }

            if ($this->reprendre_integralement_article !== '0') {
                return false;
            }

            if ($this->administrer_clauses !== '0') {
                return false;
            }

            if ($this->valider_clauses !== '0') {
                return false;
            }

            if ($this->administrer_canevas !== '0') {
                return false;
            }

            if ($this->valider_canevas !== '0') {
                return false;
            }

            if ($this->administrer_clauses_entite_achats !== '0') {
                return false;
            }

            if ($this->generer_pieces_format_odt !== '0') {
                return false;
            }

            if ($this->publier_version_clausier_editeur !== '0') {
                return false;
            }

            if ($this->administrer_clauses_editeur !== '0') {
                return false;
            }

            if ($this->valider_clauses_editeur !== '0') {
                return false;
            }

            if ($this->administrer_canevas_editeur !== '0') {
                return false;
            }

            if ($this->valider_canevas_editeur !== '0') {
                return false;
            }

            if ($this->decision_suivi_seul !== '0') {
                return false;
            }

            if ($this->ouvrir_candidature_hors_ligne !== '1') {
                return false;
            }

            if ($this->ouvrir_offre_hors_ligne !== '1') {
                return false;
            }

            if ($this->ouvrir_offre_technique_hors_ligne !== '1') {
                return false;
            }

            if ($this->ouvrir_anonymat_hors_ligne !== '1') {
                return false;
            }

            if ($this->espace_collaboratif_gestionnaire !== '0') {
                return false;
            }

            if ($this->espace_collaboratif_contributeur !== '0') {
                return false;
            }

            if ($this->gerer_organismes !== '0') {
                return false;
            }

            if ($this->gerer_associations_agents !== '0') {
                return false;
            }

            if ($this->module_redaction_uniquement !== '0') {
                return false;
            }

            if ($this->historique_navigation_inscrits !== '1') {
                return false;
            }

            if ($this->telecharger_accords_cadres !== '0') {
                return false;
            }

            if ($this->creer_annonce_decision_resiliation !== '0') {
                return false;
            }

            if ($this->creer_annonce_synthese_rapport_audit !== '0') {
                return false;
            }

            if ($this->gerer_operations !== '0') {
                return false;
            }

            if ($this->telecharger_siret_acheteur !== '0') {
                return false;
            }

            if ($this->gerer_reouvertures_modification !== '0') {
                return false;
            }

            if ($this->envoyer_demande_validation !== '0') {
                return false;
            }

            if ($this->suivre_consultation_organisme !== '0') {
                return false;
            }

            if ($this->renseigner_montant !== '0') {
                return false;
            }

            if ($this->gestion_referentiel_contact !== '0') {
                return false;
            }

            if ($this->gerer_cao !== '0') {
                return false;
            }

            if ($this->validation_acces_facture !== '0') {
                return false;
            }

            if ($this->gestion_travaux_cao !== '0') {
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

            $this->id_agent = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->gestion_agent_pole = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->gestion_fournisseurs_envois_postaux = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->gestion_bi_cles = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->creer_consultation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->modifier_consultation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->valider_consultation = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->publier_consultation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->suivre_consultation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->suivre_consultation_pole = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->supprimer_enveloppe = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->supprimer_consultation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->depouiller_candidature = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->depouiller_offre = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->messagerie_securisee = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->acces_registre_depots_papier = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->acces_registre_retraits_papier = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->acces_registre_questions_papier = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->gerer_encheres = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->suivre_encheres = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->suivi_entreprise = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->envoi_boamp = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->acces_classement_lot = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->connecteur_sis = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->connecteur_marco = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->repondre_aux_questions = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->appel_projet_formation = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->utiliser_client_cao = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->notification_boamp = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->administrer_compte = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->gestion_mapa = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->gestion_type_validation = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->approuver_consultation = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->administrer_procedure = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->restreindre_creation = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->creer_liste_marches = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->gestion_commissions = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->suivi_seul_consultation = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->attribution_marche = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->fiche_recensement = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->declarer_infructueux = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->declarer_sans_suite = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->creer_consultation_transverse = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->ouvrir_candidature_en_ligne = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->ouvrir_candidature_a_distance = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->refuser_enveloppe = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->gerer_admissibilite = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->restaurer_enveloppe = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->ouvrir_anonymat_en_ligne = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->ouvrir_offre_en_ligne = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->gestion_compte_boamp = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->gestion_agents = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->gestion_habilitations = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->gerer_mapa_inferieur_montant = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->gerer_mapa_superieur_montant = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->modifier_consultation_avant_validation = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->modifier_consultation_apres_validation = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->acces_reponses = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->telechargement_groupe_anticipe_plis_chiffres = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->telechargement_unitaire_plis_chiffres = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->ouvrir_offre_a_distance = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->creer_annonce_information = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->saisie_marches = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->validation_marches = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->publication_marches = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->gerer_statistiques_metier = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->gerer_archives = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->administrer_procedures_formalisees = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->creer_annonce_attribution = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->acces_registre_retraits_electronique = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->acces_registre_questions_electronique = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->acces_registre_depots_electronique = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->validation_simple = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->validation_intermediaire = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->validation_finale = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->creer_suite_consultation = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->hyper_admin = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->droit_gestion_services = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->suivi_acces = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->statistiques_site = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->statistiques_qos = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->ouvrir_anonymat_a_distance = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->gestion_compte_jal = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->gestion_centrale_pub = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->gestion_compte_groupe_moniteur = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->ouvrir_offre_technique_en_ligne = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->ouvrir_offre_technique_a_distance = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->activation_compte_entreprise = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->importer_enveloppe = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->suivi_seul_registre_depots_papier = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->suivi_seul_registre_retraits_papier = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->suivi_seul_registre_questions_papier = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->suivi_seul_registre_depots_electronique = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->suivi_seul_registre_retraits_electronique = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->suivi_seul_registre_questions_electronique = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->modifier_consultation_mapa_inferieur_montant_apres_validation = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->modifier_consultation_mapa_superieur_montant_apres_validation = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->modifier_consultation_procedures_formalisees_apres_validation = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->gerer_les_entreprises = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->portee_societes_exclues = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->portee_societes_exclues_tous_organismes = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->modifier_societes_exclues = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->supprimer_societes_exclues = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->resultat_analyse = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->gerer_adresses_service = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->gerer_mon_service = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->download_archives = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->creer_annonce_extrait_pv = ($row[$startcol + 107] !== null) ? (string) $row[$startcol + 107] : null;
            $this->creer_annonce_rapport_achevement = ($row[$startcol + 108] !== null) ? (string) $row[$startcol + 108] : null;
            $this->gestion_certificats_agent = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->creer_avis_programme_previsionnel = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->annuler_consultation = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->envoyer_publicite = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->liste_marches_notifies = ($row[$startcol + 113] !== null) ? (string) $row[$startcol + 113] : null;
            $this->suivre_message = ($row[$startcol + 114] !== null) ? (string) $row[$startcol + 114] : null;
            $this->envoyer_message = ($row[$startcol + 115] !== null) ? (string) $row[$startcol + 115] : null;
            $this->suivi_flux_chorus_transversal = ($row[$startcol + 116] !== null) ? (string) $row[$startcol + 116] : null;
            $this->gestion_mandataire = ($row[$startcol + 117] !== null) ? (string) $row[$startcol + 117] : null;
            $this->gerer_newsletter = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->gestion_modeles_formulaire = ($row[$startcol + 119] !== null) ? (string) $row[$startcol + 119] : null;
            $this->gestion_adresses_facturation_jal = ($row[$startcol + 120] !== null) ? (string) $row[$startcol + 120] : null;
            $this->administrer_adresses_facturation_jal = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
            $this->redaction_documents_redac = ($row[$startcol + 122] !== null) ? (string) $row[$startcol + 122] : null;
            $this->validation_documents_redac = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->gestion_mise_disposition_pieces_marche = ($row[$startcol + 124] !== null) ? (string) $row[$startcol + 124] : null;
            $this->annuaire_acheteur = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->reprendre_integralement_article = ($row[$startcol + 126] !== null) ? (string) $row[$startcol + 126] : null;
            $this->administrer_clauses = ($row[$startcol + 127] !== null) ? (string) $row[$startcol + 127] : null;
            $this->valider_clauses = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->administrer_canevas = ($row[$startcol + 129] !== null) ? (string) $row[$startcol + 129] : null;
            $this->valider_canevas = ($row[$startcol + 130] !== null) ? (string) $row[$startcol + 130] : null;
            $this->administrer_clauses_entite_achats = ($row[$startcol + 131] !== null) ? (string) $row[$startcol + 131] : null;
            $this->generer_pieces_format_odt = ($row[$startcol + 132] !== null) ? (string) $row[$startcol + 132] : null;
            $this->publier_version_clausier_editeur = ($row[$startcol + 133] !== null) ? (string) $row[$startcol + 133] : null;
            $this->administrer_clauses_editeur = ($row[$startcol + 134] !== null) ? (string) $row[$startcol + 134] : null;
            $this->valider_clauses_editeur = ($row[$startcol + 135] !== null) ? (string) $row[$startcol + 135] : null;
            $this->administrer_canevas_editeur = ($row[$startcol + 136] !== null) ? (string) $row[$startcol + 136] : null;
            $this->valider_canevas_editeur = ($row[$startcol + 137] !== null) ? (string) $row[$startcol + 137] : null;
            $this->decision_suivi_seul = ($row[$startcol + 138] !== null) ? (string) $row[$startcol + 138] : null;
            $this->ouvrir_candidature_hors_ligne = ($row[$startcol + 139] !== null) ? (string) $row[$startcol + 139] : null;
            $this->ouvrir_offre_hors_ligne = ($row[$startcol + 140] !== null) ? (string) $row[$startcol + 140] : null;
            $this->ouvrir_offre_technique_hors_ligne = ($row[$startcol + 141] !== null) ? (string) $row[$startcol + 141] : null;
            $this->ouvrir_anonymat_hors_ligne = ($row[$startcol + 142] !== null) ? (string) $row[$startcol + 142] : null;
            $this->espace_collaboratif_gestionnaire = ($row[$startcol + 143] !== null) ? (string) $row[$startcol + 143] : null;
            $this->espace_collaboratif_contributeur = ($row[$startcol + 144] !== null) ? (string) $row[$startcol + 144] : null;
            $this->gerer_organismes = ($row[$startcol + 145] !== null) ? (string) $row[$startcol + 145] : null;
            $this->gerer_associations_agents = ($row[$startcol + 146] !== null) ? (string) $row[$startcol + 146] : null;
            $this->module_redaction_uniquement = ($row[$startcol + 147] !== null) ? (string) $row[$startcol + 147] : null;
            $this->historique_navigation_inscrits = ($row[$startcol + 148] !== null) ? (string) $row[$startcol + 148] : null;
            $this->telecharger_accords_cadres = ($row[$startcol + 149] !== null) ? (string) $row[$startcol + 149] : null;
            $this->creer_annonce_decision_resiliation = ($row[$startcol + 150] !== null) ? (string) $row[$startcol + 150] : null;
            $this->creer_annonce_synthese_rapport_audit = ($row[$startcol + 151] !== null) ? (string) $row[$startcol + 151] : null;
            $this->gerer_operations = ($row[$startcol + 152] !== null) ? (string) $row[$startcol + 152] : null;
            $this->telecharger_siret_acheteur = ($row[$startcol + 153] !== null) ? (string) $row[$startcol + 153] : null;
            $this->gerer_reouvertures_modification = ($row[$startcol + 154] !== null) ? (string) $row[$startcol + 154] : null;
            $this->envoyer_demande_validation = ($row[$startcol + 155] !== null) ? (string) $row[$startcol + 155] : null;
            $this->suivre_consultation_organisme = ($row[$startcol + 156] !== null) ? (string) $row[$startcol + 156] : null;
            $this->renseigner_montant = ($row[$startcol + 157] !== null) ? (string) $row[$startcol + 157] : null;
            $this->gestion_referentiel_contact = ($row[$startcol + 158] !== null) ? (string) $row[$startcol + 158] : null;
            $this->gerer_cao = ($row[$startcol + 159] !== null) ? (string) $row[$startcol + 159] : null;
            $this->validation_acces_facture = ($row[$startcol + 160] !== null) ? (string) $row[$startcol + 160] : null;
            $this->gestion_travaux_cao = ($row[$startcol + 161] !== null) ? (string) $row[$startcol + 161] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 162; // 162 = CommonHabilitationAgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonHabilitationAgent object", $e);
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
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonHabilitationAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonHabilitationAgentQuery::create()
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
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonHabilitationAgentPeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_AGENT_POLE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_agent_pole`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_fournisseurs_envois_postaux`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_BI_CLES)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_bi_cles`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`creer_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`valider_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLIER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`publier_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`suivre_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE)) {
            $modifiedColumns[':p' . $index++]  = '`suivre_consultation_pole`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`supprimer_enveloppe`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`supprimer_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE)) {
            $modifiedColumns[':p' . $index++]  = '`depouiller_candidature`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DEPOUILLER_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`depouiller_offre`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE)) {
            $modifiedColumns[':p' . $index++]  = '`messagerie_securisee`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_depots_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_retraits_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_questions_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ENCHERES)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_encheres`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_ENCHERES)) {
            $modifiedColumns[':p' . $index++]  = '`suivre_encheres`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_entreprise`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOI_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_boamp`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT)) {
            $modifiedColumns[':p' . $index++]  = '`acces_classement_lot`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CONNECTEUR_SIS)) {
            $modifiedColumns[':p' . $index++]  = '`connecteur_sis`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CONNECTEUR_MARCO)) {
            $modifiedColumns[':p' . $index++]  = '`connecteur_marco`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`repondre_aux_questions`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`appel_projet_formation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`utiliser_client_CAO`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::NOTIFICATION_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`notification_boamp`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_compte`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_mapa`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_type_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::APPROUVER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`approuver_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_procedure`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESTREINDRE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`restreindre_creation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_LISTE_MARCHES)) {
            $modifiedColumns[':p' . $index++]  = '`creer_liste_marches`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMMISSIONS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_commissions`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`attribution_marche`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::FICHE_RECENSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`fiche_recensement`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX)) {
            $modifiedColumns[':p' . $index++]  = '`declarer_infructueux`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECLARER_SANS_SUITE)) {
            $modifiedColumns[':p' . $index++]  = '`declarer_sans_suite`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE)) {
            $modifiedColumns[':p' . $index++]  = '`creer_consultation_transverse`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_candidature_en_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_candidature_a_distance`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REFUSER_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`refuser_enveloppe`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ADMISSIBILITE)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_admissibilite`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`restaurer_enveloppe`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_anonymat_en_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_en_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_compte_boamp`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_AGENTS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_agents`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_HABILITATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_habilitations`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_mapa_inferieur_montant`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_mapa_superieur_montant`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation_avant_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation_apres_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REPONSES)) {
            $modifiedColumns[':p' . $index++]  = '`acces_reponses`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`telechargement_groupe_anticipe_plis_chiffres`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`telechargement_unitaire_plis_chiffres`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_a_distance`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_information`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SAISIE_MARCHES)) {
            $modifiedColumns[':p' . $index++]  = '`saisie_marches`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_MARCHES)) {
            $modifiedColumns[':p' . $index++]  = '`validation_marches`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLICATION_MARCHES)) {
            $modifiedColumns[':p' . $index++]  = '`publication_marches`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_statistiques_metier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ARCHIVES)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_archives`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_procedures_formalisees`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_attribution`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_retraits_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_questions_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`acces_registre_depots_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_SIMPLE)) {
            $modifiedColumns[':p' . $index++]  = '`validation_simple`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`validation_intermediaire`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_FINALE)) {
            $modifiedColumns[':p' . $index++]  = '`validation_finale`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`creer_suite_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::HYPER_ADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`hyper_admin`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES)) {
            $modifiedColumns[':p' . $index++]  = '`droit_gestion_services`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_ACCES)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_acces`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::STATISTIQUES_SITE)) {
            $modifiedColumns[':p' . $index++]  = '`statistiques_site`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::STATISTIQUES_QOS)) {
            $modifiedColumns[':p' . $index++]  = '`statistiques_QoS`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_anonymat_a_distance`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_JAL)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_compte_jal`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_centrale_pub`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`Gestion_Compte_Groupe_Moniteur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_technique_en_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_technique_a_distance`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`activation_compte_entreprise`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`importer_enveloppe`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_depots_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_retraits_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_questions_papier`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_depots_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_retraits_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_seul_registre_questions_electronique`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation_mapa_inferieur_montant_apres_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation_mapa_superieur_montant_apres_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_consultation_procedures_formalisees_apres_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_les_entreprises`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES)) {
            $modifiedColumns[':p' . $index++]  = '`portee_societes_exclues`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES)) {
            $modifiedColumns[':p' . $index++]  = '`portee_societes_exclues_tous_organismes`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES)) {
            $modifiedColumns[':p' . $index++]  = '`modifier_societes_exclues`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES)) {
            $modifiedColumns[':p' . $index++]  = '`supprimer_societes_exclues`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESULTAT_ANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`resultat_analyse`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_adresses_service`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MON_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_mon_service`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES)) {
            $modifiedColumns[':p' . $index++]  = '`download_archives`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_extrait_pv`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_rapport_achevement`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_certificats_agent`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`creer_avis_programme_previsionnel`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ANNULER_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`annuler_consultation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_PUBLICITE)) {
            $modifiedColumns[':p' . $index++]  = '`envoyer_publicite`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES)) {
            $modifiedColumns[':p' . $index++]  = '`liste_marches_notifies`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`suivre_message`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`envoyer_message`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL)) {
            $modifiedColumns[':p' . $index++]  = '`suivi_flux_chorus_transversal`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MANDATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_mandataire`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_NEWSLETTER)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_newsletter`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_modeles_formulaire`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_adresses_facturation_jal`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_adresses_facturation_jal`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC)) {
            $modifiedColumns[':p' . $index++]  = '`redaction_documents_redac`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC)) {
            $modifiedColumns[':p' . $index++]  = '`validation_documents_redac`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_mise_disposition_pieces_marche`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`annuaire_acheteur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE)) {
            $modifiedColumns[':p' . $index++]  = '`reprendre_integralement_article`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_clauses`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CLAUSES)) {
            $modifiedColumns[':p' . $index++]  = '`valider_clauses`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_canevas`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CANEVAS)) {
            $modifiedColumns[':p' . $index++]  = '`valider_canevas`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_clauses_entite_achats`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT)) {
            $modifiedColumns[':p' . $index++]  = '`generer_pieces_format_odt`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`publier_version_clausier_editeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_clauses_editeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`valider_clauses_editeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`administrer_canevas_editeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`valider_canevas_editeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL)) {
            $modifiedColumns[':p' . $index++]  = '`decision_suivi_seul`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_candidature_hors_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_hors_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_offre_technique_hors_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`ouvrir_anonymat_hors_ligne`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`espace_collaboratif_gestionnaire`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`espace_collaboratif_contributeur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ORGANISMES)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_organismes`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_associations_agents`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`module_redaction_uniquement`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS)) {
            $modifiedColumns[':p' . $index++]  = '`historique_navigation_inscrits`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES)) {
            $modifiedColumns[':p' . $index++]  = '`telecharger_accords_cadres`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_decision_resiliation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT)) {
            $modifiedColumns[':p' . $index++]  = '`creer_annonce_synthese_rapport_audit`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_OPERATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_operations`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`telecharger_siret_acheteur`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_reouvertures_modification`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`envoyer_demande_validation`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`suivre_consultation_organisme`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RENSEIGNER_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`renseigner_montant`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_referentiel_contact`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`gerer_cao`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`validation_acces_facture`';
        }
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_travaux_cao`';
        }

        $sql = sprintf(
            'INSERT INTO `HabilitationAgent` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`gestion_agent_pole`':						
                        $stmt->bindValue($identifier, $this->gestion_agent_pole, PDO::PARAM_STR);
                        break;
                    case '`gestion_fournisseurs_envois_postaux`':						
                        $stmt->bindValue($identifier, $this->gestion_fournisseurs_envois_postaux, PDO::PARAM_STR);
                        break;
                    case '`gestion_bi_cles`':						
                        $stmt->bindValue($identifier, $this->gestion_bi_cles, PDO::PARAM_STR);
                        break;
                    case '`creer_consultation`':						
                        $stmt->bindValue($identifier, $this->creer_consultation, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation, PDO::PARAM_STR);
                        break;
                    case '`valider_consultation`':						
                        $stmt->bindValue($identifier, $this->valider_consultation, PDO::PARAM_STR);
                        break;
                    case '`publier_consultation`':						
                        $stmt->bindValue($identifier, $this->publier_consultation, PDO::PARAM_STR);
                        break;
                    case '`suivre_consultation`':						
                        $stmt->bindValue($identifier, $this->suivre_consultation, PDO::PARAM_STR);
                        break;
                    case '`suivre_consultation_pole`':						
                        $stmt->bindValue($identifier, $this->suivre_consultation_pole, PDO::PARAM_STR);
                        break;
                    case '`supprimer_enveloppe`':						
                        $stmt->bindValue($identifier, $this->supprimer_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`supprimer_consultation`':						
                        $stmt->bindValue($identifier, $this->supprimer_consultation, PDO::PARAM_STR);
                        break;
                    case '`depouiller_candidature`':						
                        $stmt->bindValue($identifier, $this->depouiller_candidature, PDO::PARAM_STR);
                        break;
                    case '`depouiller_offre`':						
                        $stmt->bindValue($identifier, $this->depouiller_offre, PDO::PARAM_STR);
                        break;
                    case '`messagerie_securisee`':						
                        $stmt->bindValue($identifier, $this->messagerie_securisee, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_depots_papier`':						
                        $stmt->bindValue($identifier, $this->acces_registre_depots_papier, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_retraits_papier`':						
                        $stmt->bindValue($identifier, $this->acces_registre_retraits_papier, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_questions_papier`':						
                        $stmt->bindValue($identifier, $this->acces_registre_questions_papier, PDO::PARAM_STR);
                        break;
                    case '`gerer_encheres`':						
                        $stmt->bindValue($identifier, $this->gerer_encheres, PDO::PARAM_STR);
                        break;
                    case '`suivre_encheres`':						
                        $stmt->bindValue($identifier, $this->suivre_encheres, PDO::PARAM_STR);
                        break;
                    case '`suivi_entreprise`':						
                        $stmt->bindValue($identifier, $this->suivi_entreprise, PDO::PARAM_STR);
                        break;
                    case '`envoi_boamp`':						
                        $stmt->bindValue($identifier, $this->envoi_boamp, PDO::PARAM_STR);
                        break;
                    case '`acces_classement_lot`':						
                        $stmt->bindValue($identifier, $this->acces_classement_lot, PDO::PARAM_STR);
                        break;
                    case '`connecteur_sis`':						
                        $stmt->bindValue($identifier, $this->connecteur_sis, PDO::PARAM_STR);
                        break;
                    case '`connecteur_marco`':						
                        $stmt->bindValue($identifier, $this->connecteur_marco, PDO::PARAM_STR);
                        break;
                    case '`repondre_aux_questions`':						
                        $stmt->bindValue($identifier, $this->repondre_aux_questions, PDO::PARAM_STR);
                        break;
                    case '`appel_projet_formation`':						
                        $stmt->bindValue($identifier, $this->appel_projet_formation, PDO::PARAM_STR);
                        break;
                    case '`utiliser_client_CAO`':						
                        $stmt->bindValue($identifier, $this->utiliser_client_cao, PDO::PARAM_STR);
                        break;
                    case '`notification_boamp`':						
                        $stmt->bindValue($identifier, $this->notification_boamp, PDO::PARAM_STR);
                        break;
                    case '`administrer_compte`':						
                        $stmt->bindValue($identifier, $this->administrer_compte, PDO::PARAM_STR);
                        break;
                    case '`gestion_mapa`':						
                        $stmt->bindValue($identifier, $this->gestion_mapa, PDO::PARAM_STR);
                        break;
                    case '`gestion_type_validation`':						
                        $stmt->bindValue($identifier, $this->gestion_type_validation, PDO::PARAM_STR);
                        break;
                    case '`approuver_consultation`':						
                        $stmt->bindValue($identifier, $this->approuver_consultation, PDO::PARAM_STR);
                        break;
                    case '`administrer_procedure`':						
                        $stmt->bindValue($identifier, $this->administrer_procedure, PDO::PARAM_STR);
                        break;
                    case '`restreindre_creation`':						
                        $stmt->bindValue($identifier, $this->restreindre_creation, PDO::PARAM_STR);
                        break;
                    case '`creer_liste_marches`':						
                        $stmt->bindValue($identifier, $this->creer_liste_marches, PDO::PARAM_STR);
                        break;
                    case '`gestion_commissions`':						
                        $stmt->bindValue($identifier, $this->gestion_commissions, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_consultation`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_consultation, PDO::PARAM_STR);
                        break;
                    case '`attribution_marche`':						
                        $stmt->bindValue($identifier, $this->attribution_marche, PDO::PARAM_STR);
                        break;
                    case '`fiche_recensement`':						
                        $stmt->bindValue($identifier, $this->fiche_recensement, PDO::PARAM_STR);
                        break;
                    case '`declarer_infructueux`':						
                        $stmt->bindValue($identifier, $this->declarer_infructueux, PDO::PARAM_STR);
                        break;
                    case '`declarer_sans_suite`':						
                        $stmt->bindValue($identifier, $this->declarer_sans_suite, PDO::PARAM_STR);
                        break;
                    case '`creer_consultation_transverse`':						
                        $stmt->bindValue($identifier, $this->creer_consultation_transverse, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_candidature_en_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_candidature_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_candidature_a_distance`':						
                        $stmt->bindValue($identifier, $this->ouvrir_candidature_a_distance, PDO::PARAM_STR);
                        break;
                    case '`refuser_enveloppe`':						
                        $stmt->bindValue($identifier, $this->refuser_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`gerer_admissibilite`':						
                        $stmt->bindValue($identifier, $this->gerer_admissibilite, PDO::PARAM_STR);
                        break;
                    case '`restaurer_enveloppe`':						
                        $stmt->bindValue($identifier, $this->restaurer_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_anonymat_en_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_anonymat_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_en_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`gestion_compte_boamp`':						
                        $stmt->bindValue($identifier, $this->gestion_compte_boamp, PDO::PARAM_STR);
                        break;
                    case '`gestion_agents`':						
                        $stmt->bindValue($identifier, $this->gestion_agents, PDO::PARAM_STR);
                        break;
                    case '`gestion_habilitations`':						
                        $stmt->bindValue($identifier, $this->gestion_habilitations, PDO::PARAM_STR);
                        break;
                    case '`gerer_mapa_inferieur_montant`':						
                        $stmt->bindValue($identifier, $this->gerer_mapa_inferieur_montant, PDO::PARAM_STR);
                        break;
                    case '`gerer_mapa_superieur_montant`':						
                        $stmt->bindValue($identifier, $this->gerer_mapa_superieur_montant, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation_avant_validation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation_avant_validation, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation_apres_validation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation_apres_validation, PDO::PARAM_STR);
                        break;
                    case '`acces_reponses`':						
                        $stmt->bindValue($identifier, $this->acces_reponses, PDO::PARAM_STR);
                        break;
                    case '`telechargement_groupe_anticipe_plis_chiffres`':						
                        $stmt->bindValue($identifier, $this->telechargement_groupe_anticipe_plis_chiffres, PDO::PARAM_STR);
                        break;
                    case '`telechargement_unitaire_plis_chiffres`':						
                        $stmt->bindValue($identifier, $this->telechargement_unitaire_plis_chiffres, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_a_distance`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_a_distance, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_information`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_information, PDO::PARAM_STR);
                        break;
                    case '`saisie_marches`':						
                        $stmt->bindValue($identifier, $this->saisie_marches, PDO::PARAM_STR);
                        break;
                    case '`validation_marches`':						
                        $stmt->bindValue($identifier, $this->validation_marches, PDO::PARAM_STR);
                        break;
                    case '`publication_marches`':						
                        $stmt->bindValue($identifier, $this->publication_marches, PDO::PARAM_STR);
                        break;
                    case '`gerer_statistiques_metier`':						
                        $stmt->bindValue($identifier, $this->gerer_statistiques_metier, PDO::PARAM_STR);
                        break;
                    case '`gerer_archives`':						
                        $stmt->bindValue($identifier, $this->gerer_archives, PDO::PARAM_STR);
                        break;
                    case '`administrer_procedures_formalisees`':						
                        $stmt->bindValue($identifier, $this->administrer_procedures_formalisees, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_attribution`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_attribution, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_retraits_electronique`':						
                        $stmt->bindValue($identifier, $this->acces_registre_retraits_electronique, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_questions_electronique`':						
                        $stmt->bindValue($identifier, $this->acces_registre_questions_electronique, PDO::PARAM_STR);
                        break;
                    case '`acces_registre_depots_electronique`':						
                        $stmt->bindValue($identifier, $this->acces_registre_depots_electronique, PDO::PARAM_STR);
                        break;
                    case '`validation_simple`':						
                        $stmt->bindValue($identifier, $this->validation_simple, PDO::PARAM_STR);
                        break;
                    case '`validation_intermediaire`':						
                        $stmt->bindValue($identifier, $this->validation_intermediaire, PDO::PARAM_STR);
                        break;
                    case '`validation_finale`':						
                        $stmt->bindValue($identifier, $this->validation_finale, PDO::PARAM_STR);
                        break;
                    case '`creer_suite_consultation`':						
                        $stmt->bindValue($identifier, $this->creer_suite_consultation, PDO::PARAM_STR);
                        break;
                    case '`hyper_admin`':						
                        $stmt->bindValue($identifier, $this->hyper_admin, PDO::PARAM_STR);
                        break;
                    case '`droit_gestion_services`':						
                        $stmt->bindValue($identifier, $this->droit_gestion_services, PDO::PARAM_STR);
                        break;
                    case '`suivi_acces`':						
                        $stmt->bindValue($identifier, $this->suivi_acces, PDO::PARAM_STR);
                        break;
                    case '`statistiques_site`':						
                        $stmt->bindValue($identifier, $this->statistiques_site, PDO::PARAM_STR);
                        break;
                    case '`statistiques_QoS`':						
                        $stmt->bindValue($identifier, $this->statistiques_qos, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_anonymat_a_distance`':						
                        $stmt->bindValue($identifier, $this->ouvrir_anonymat_a_distance, PDO::PARAM_STR);
                        break;
                    case '`gestion_compte_jal`':						
                        $stmt->bindValue($identifier, $this->gestion_compte_jal, PDO::PARAM_STR);
                        break;
                    case '`gestion_centrale_pub`':						
                        $stmt->bindValue($identifier, $this->gestion_centrale_pub, PDO::PARAM_STR);
                        break;
                    case '`Gestion_Compte_Groupe_Moniteur`':						
                        $stmt->bindValue($identifier, $this->gestion_compte_groupe_moniteur, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_technique_en_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_technique_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_technique_a_distance`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_technique_a_distance, PDO::PARAM_STR);
                        break;
                    case '`activation_compte_entreprise`':						
                        $stmt->bindValue($identifier, $this->activation_compte_entreprise, PDO::PARAM_STR);
                        break;
                    case '`importer_enveloppe`':						
                        $stmt->bindValue($identifier, $this->importer_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_depots_papier`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_depots_papier, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_retraits_papier`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_retraits_papier, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_questions_papier`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_questions_papier, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_depots_electronique`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_depots_electronique, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_retraits_electronique`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_retraits_electronique, PDO::PARAM_STR);
                        break;
                    case '`suivi_seul_registre_questions_electronique`':						
                        $stmt->bindValue($identifier, $this->suivi_seul_registre_questions_electronique, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation_mapa_inferieur_montant_apres_validation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation_mapa_inferieur_montant_apres_validation, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation_mapa_superieur_montant_apres_validation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation_mapa_superieur_montant_apres_validation, PDO::PARAM_STR);
                        break;
                    case '`modifier_consultation_procedures_formalisees_apres_validation`':						
                        $stmt->bindValue($identifier, $this->modifier_consultation_procedures_formalisees_apres_validation, PDO::PARAM_STR);
                        break;
                    case '`gerer_les_entreprises`':						
                        $stmt->bindValue($identifier, $this->gerer_les_entreprises, PDO::PARAM_STR);
                        break;
                    case '`portee_societes_exclues`':						
                        $stmt->bindValue($identifier, $this->portee_societes_exclues, PDO::PARAM_STR);
                        break;
                    case '`portee_societes_exclues_tous_organismes`':						
                        $stmt->bindValue($identifier, $this->portee_societes_exclues_tous_organismes, PDO::PARAM_STR);
                        break;
                    case '`modifier_societes_exclues`':						
                        $stmt->bindValue($identifier, $this->modifier_societes_exclues, PDO::PARAM_STR);
                        break;
                    case '`supprimer_societes_exclues`':						
                        $stmt->bindValue($identifier, $this->supprimer_societes_exclues, PDO::PARAM_STR);
                        break;
                    case '`resultat_analyse`':						
                        $stmt->bindValue($identifier, $this->resultat_analyse, PDO::PARAM_STR);
                        break;
                    case '`gerer_adresses_service`':						
                        $stmt->bindValue($identifier, $this->gerer_adresses_service, PDO::PARAM_STR);
                        break;
                    case '`gerer_mon_service`':						
                        $stmt->bindValue($identifier, $this->gerer_mon_service, PDO::PARAM_STR);
                        break;
                    case '`download_archives`':						
                        $stmt->bindValue($identifier, $this->download_archives, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_extrait_pv`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_extrait_pv, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_rapport_achevement`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_rapport_achevement, PDO::PARAM_STR);
                        break;
                    case '`gestion_certificats_agent`':						
                        $stmt->bindValue($identifier, $this->gestion_certificats_agent, PDO::PARAM_STR);
                        break;
                    case '`creer_avis_programme_previsionnel`':						
                        $stmt->bindValue($identifier, $this->creer_avis_programme_previsionnel, PDO::PARAM_STR);
                        break;
                    case '`annuler_consultation`':						
                        $stmt->bindValue($identifier, $this->annuler_consultation, PDO::PARAM_STR);
                        break;
                    case '`envoyer_publicite`':						
                        $stmt->bindValue($identifier, $this->envoyer_publicite, PDO::PARAM_STR);
                        break;
                    case '`liste_marches_notifies`':						
                        $stmt->bindValue($identifier, $this->liste_marches_notifies, PDO::PARAM_STR);
                        break;
                    case '`suivre_message`':						
                        $stmt->bindValue($identifier, $this->suivre_message, PDO::PARAM_STR);
                        break;
                    case '`envoyer_message`':						
                        $stmt->bindValue($identifier, $this->envoyer_message, PDO::PARAM_STR);
                        break;
                    case '`suivi_flux_chorus_transversal`':						
                        $stmt->bindValue($identifier, $this->suivi_flux_chorus_transversal, PDO::PARAM_STR);
                        break;
                    case '`gestion_mandataire`':						
                        $stmt->bindValue($identifier, $this->gestion_mandataire, PDO::PARAM_STR);
                        break;
                    case '`gerer_newsletter`':						
                        $stmt->bindValue($identifier, $this->gerer_newsletter, PDO::PARAM_STR);
                        break;
                    case '`gestion_modeles_formulaire`':						
                        $stmt->bindValue($identifier, $this->gestion_modeles_formulaire, PDO::PARAM_STR);
                        break;
                    case '`gestion_adresses_facturation_jal`':						
                        $stmt->bindValue($identifier, $this->gestion_adresses_facturation_jal, PDO::PARAM_STR);
                        break;
                    case '`administrer_adresses_facturation_jal`':						
                        $stmt->bindValue($identifier, $this->administrer_adresses_facturation_jal, PDO::PARAM_STR);
                        break;
                    case '`redaction_documents_redac`':						
                        $stmt->bindValue($identifier, $this->redaction_documents_redac, PDO::PARAM_STR);
                        break;
                    case '`validation_documents_redac`':						
                        $stmt->bindValue($identifier, $this->validation_documents_redac, PDO::PARAM_STR);
                        break;
                    case '`gestion_mise_disposition_pieces_marche`':						
                        $stmt->bindValue($identifier, $this->gestion_mise_disposition_pieces_marche, PDO::PARAM_STR);
                        break;
                    case '`annuaire_acheteur`':						
                        $stmt->bindValue($identifier, $this->annuaire_acheteur, PDO::PARAM_STR);
                        break;
                    case '`reprendre_integralement_article`':						
                        $stmt->bindValue($identifier, $this->reprendre_integralement_article, PDO::PARAM_STR);
                        break;
                    case '`administrer_clauses`':						
                        $stmt->bindValue($identifier, $this->administrer_clauses, PDO::PARAM_STR);
                        break;
                    case '`valider_clauses`':						
                        $stmt->bindValue($identifier, $this->valider_clauses, PDO::PARAM_STR);
                        break;
                    case '`administrer_canevas`':						
                        $stmt->bindValue($identifier, $this->administrer_canevas, PDO::PARAM_STR);
                        break;
                    case '`valider_canevas`':						
                        $stmt->bindValue($identifier, $this->valider_canevas, PDO::PARAM_STR);
                        break;
                    case '`administrer_clauses_entite_achats`':						
                        $stmt->bindValue($identifier, $this->administrer_clauses_entite_achats, PDO::PARAM_STR);
                        break;
                    case '`generer_pieces_format_odt`':						
                        $stmt->bindValue($identifier, $this->generer_pieces_format_odt, PDO::PARAM_STR);
                        break;
                    case '`publier_version_clausier_editeur`':						
                        $stmt->bindValue($identifier, $this->publier_version_clausier_editeur, PDO::PARAM_STR);
                        break;
                    case '`administrer_clauses_editeur`':						
                        $stmt->bindValue($identifier, $this->administrer_clauses_editeur, PDO::PARAM_STR);
                        break;
                    case '`valider_clauses_editeur`':						
                        $stmt->bindValue($identifier, $this->valider_clauses_editeur, PDO::PARAM_STR);
                        break;
                    case '`administrer_canevas_editeur`':						
                        $stmt->bindValue($identifier, $this->administrer_canevas_editeur, PDO::PARAM_STR);
                        break;
                    case '`valider_canevas_editeur`':						
                        $stmt->bindValue($identifier, $this->valider_canevas_editeur, PDO::PARAM_STR);
                        break;
                    case '`decision_suivi_seul`':						
                        $stmt->bindValue($identifier, $this->decision_suivi_seul, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_candidature_hors_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_candidature_hors_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_hors_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_hors_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_offre_technique_hors_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_offre_technique_hors_ligne, PDO::PARAM_STR);
                        break;
                    case '`ouvrir_anonymat_hors_ligne`':						
                        $stmt->bindValue($identifier, $this->ouvrir_anonymat_hors_ligne, PDO::PARAM_STR);
                        break;
                    case '`espace_collaboratif_gestionnaire`':						
                        $stmt->bindValue($identifier, $this->espace_collaboratif_gestionnaire, PDO::PARAM_STR);
                        break;
                    case '`espace_collaboratif_contributeur`':						
                        $stmt->bindValue($identifier, $this->espace_collaboratif_contributeur, PDO::PARAM_STR);
                        break;
                    case '`gerer_organismes`':						
                        $stmt->bindValue($identifier, $this->gerer_organismes, PDO::PARAM_STR);
                        break;
                    case '`gerer_associations_agents`':						
                        $stmt->bindValue($identifier, $this->gerer_associations_agents, PDO::PARAM_STR);
                        break;
                    case '`module_redaction_uniquement`':						
                        $stmt->bindValue($identifier, $this->module_redaction_uniquement, PDO::PARAM_STR);
                        break;
                    case '`historique_navigation_inscrits`':						
                        $stmt->bindValue($identifier, $this->historique_navigation_inscrits, PDO::PARAM_STR);
                        break;
                    case '`telecharger_accords_cadres`':						
                        $stmt->bindValue($identifier, $this->telecharger_accords_cadres, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_decision_resiliation`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_decision_resiliation, PDO::PARAM_STR);
                        break;
                    case '`creer_annonce_synthese_rapport_audit`':						
                        $stmt->bindValue($identifier, $this->creer_annonce_synthese_rapport_audit, PDO::PARAM_STR);
                        break;
                    case '`gerer_operations`':						
                        $stmt->bindValue($identifier, $this->gerer_operations, PDO::PARAM_STR);
                        break;
                    case '`telecharger_siret_acheteur`':						
                        $stmt->bindValue($identifier, $this->telecharger_siret_acheteur, PDO::PARAM_STR);
                        break;
                    case '`gerer_reouvertures_modification`':						
                        $stmt->bindValue($identifier, $this->gerer_reouvertures_modification, PDO::PARAM_STR);
                        break;
                    case '`envoyer_demande_validation`':						
                        $stmt->bindValue($identifier, $this->envoyer_demande_validation, PDO::PARAM_STR);
                        break;
                    case '`suivre_consultation_organisme`':						
                        $stmt->bindValue($identifier, $this->suivre_consultation_organisme, PDO::PARAM_STR);
                        break;
                    case '`renseigner_montant`':						
                        $stmt->bindValue($identifier, $this->renseigner_montant, PDO::PARAM_STR);
                        break;
                    case '`gestion_referentiel_contact`':						
                        $stmt->bindValue($identifier, $this->gestion_referentiel_contact, PDO::PARAM_STR);
                        break;
                    case '`gerer_cao`':						
                        $stmt->bindValue($identifier, $this->gerer_cao, PDO::PARAM_STR);
                        break;
                    case '`validation_acces_facture`':						
                        $stmt->bindValue($identifier, $this->validation_acces_facture, PDO::PARAM_STR);
                        break;
                    case '`gestion_travaux_cao`':						
                        $stmt->bindValue($identifier, $this->gestion_travaux_cao, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = CommonHabilitationAgentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonHabilitationAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAgent();
                break;
            case 1:
                return $this->getGestionAgentPole();
                break;
            case 2:
                return $this->getGestionFournisseursEnvoisPostaux();
                break;
            case 3:
                return $this->getGestionBiCles();
                break;
            case 4:
                return $this->getCreerConsultation();
                break;
            case 5:
                return $this->getModifierConsultation();
                break;
            case 6:
                return $this->getValiderConsultation();
                break;
            case 7:
                return $this->getPublierConsultation();
                break;
            case 8:
                return $this->getSuivreConsultation();
                break;
            case 9:
                return $this->getSuivreConsultationPole();
                break;
            case 10:
                return $this->getSupprimerEnveloppe();
                break;
            case 11:
                return $this->getSupprimerConsultation();
                break;
            case 12:
                return $this->getDepouillerCandidature();
                break;
            case 13:
                return $this->getDepouillerOffre();
                break;
            case 14:
                return $this->getMessagerieSecurisee();
                break;
            case 15:
                return $this->getAccesRegistreDepotsPapier();
                break;
            case 16:
                return $this->getAccesRegistreRetraitsPapier();
                break;
            case 17:
                return $this->getAccesRegistreQuestionsPapier();
                break;
            case 18:
                return $this->getGererEncheres();
                break;
            case 19:
                return $this->getSuivreEncheres();
                break;
            case 20:
                return $this->getSuiviEntreprise();
                break;
            case 21:
                return $this->getEnvoiBoamp();
                break;
            case 22:
                return $this->getAccesClassementLot();
                break;
            case 23:
                return $this->getConnecteurSis();
                break;
            case 24:
                return $this->getConnecteurMarco();
                break;
            case 25:
                return $this->getRepondreAuxQuestions();
                break;
            case 26:
                return $this->getAppelProjetFormation();
                break;
            case 27:
                return $this->getUtiliserClientCao();
                break;
            case 28:
                return $this->getNotificationBoamp();
                break;
            case 29:
                return $this->getAdministrerCompte();
                break;
            case 30:
                return $this->getGestionMapa();
                break;
            case 31:
                return $this->getGestionTypeValidation();
                break;
            case 32:
                return $this->getApprouverConsultation();
                break;
            case 33:
                return $this->getAdministrerProcedure();
                break;
            case 34:
                return $this->getRestreindreCreation();
                break;
            case 35:
                return $this->getCreerListeMarches();
                break;
            case 36:
                return $this->getGestionCommissions();
                break;
            case 37:
                return $this->getSuiviSeulConsultation();
                break;
            case 38:
                return $this->getAttributionMarche();
                break;
            case 39:
                return $this->getFicheRecensement();
                break;
            case 40:
                return $this->getDeclarerInfructueux();
                break;
            case 41:
                return $this->getDeclarerSansSuite();
                break;
            case 42:
                return $this->getCreerConsultationTransverse();
                break;
            case 43:
                return $this->getOuvrirCandidatureEnLigne();
                break;
            case 44:
                return $this->getOuvrirCandidatureADistance();
                break;
            case 45:
                return $this->getRefuserEnveloppe();
                break;
            case 46:
                return $this->getGererAdmissibilite();
                break;
            case 47:
                return $this->getRestaurerEnveloppe();
                break;
            case 48:
                return $this->getOuvrirAnonymatEnLigne();
                break;
            case 49:
                return $this->getOuvrirOffreEnLigne();
                break;
            case 50:
                return $this->getGestionCompteBoamp();
                break;
            case 51:
                return $this->getGestionAgents();
                break;
            case 52:
                return $this->getGestionHabilitations();
                break;
            case 53:
                return $this->getGererMapaInferieurMontant();
                break;
            case 54:
                return $this->getGererMapaSuperieurMontant();
                break;
            case 55:
                return $this->getModifierConsultationAvantValidation();
                break;
            case 56:
                return $this->getModifierConsultationApresValidation();
                break;
            case 57:
                return $this->getAccesReponses();
                break;
            case 58:
                return $this->getTelechargementGroupeAnticipePlisChiffres();
                break;
            case 59:
                return $this->getTelechargementUnitairePlisChiffres();
                break;
            case 60:
                return $this->getOuvrirOffreADistance();
                break;
            case 61:
                return $this->getCreerAnnonceInformation();
                break;
            case 62:
                return $this->getSaisieMarches();
                break;
            case 63:
                return $this->getValidationMarches();
                break;
            case 64:
                return $this->getPublicationMarches();
                break;
            case 65:
                return $this->getGererStatistiquesMetier();
                break;
            case 66:
                return $this->getGererArchives();
                break;
            case 67:
                return $this->getAdministrerProceduresFormalisees();
                break;
            case 68:
                return $this->getCreerAnnonceAttribution();
                break;
            case 69:
                return $this->getAccesRegistreRetraitsElectronique();
                break;
            case 70:
                return $this->getAccesRegistreQuestionsElectronique();
                break;
            case 71:
                return $this->getAccesRegistreDepotsElectronique();
                break;
            case 72:
                return $this->getValidationSimple();
                break;
            case 73:
                return $this->getValidationIntermediaire();
                break;
            case 74:
                return $this->getValidationFinale();
                break;
            case 75:
                return $this->getCreerSuiteConsultation();
                break;
            case 76:
                return $this->getHyperAdmin();
                break;
            case 77:
                return $this->getDroitGestionServices();
                break;
            case 78:
                return $this->getSuiviAcces();
                break;
            case 79:
                return $this->getStatistiquesSite();
                break;
            case 80:
                return $this->getStatistiquesQos();
                break;
            case 81:
                return $this->getOuvrirAnonymatADistance();
                break;
            case 82:
                return $this->getGestionCompteJal();
                break;
            case 83:
                return $this->getGestionCentralePub();
                break;
            case 84:
                return $this->getGestionCompteGroupeMoniteur();
                break;
            case 85:
                return $this->getOuvrirOffreTechniqueEnLigne();
                break;
            case 86:
                return $this->getOuvrirOffreTechniqueADistance();
                break;
            case 87:
                return $this->getActivationCompteEntreprise();
                break;
            case 88:
                return $this->getImporterEnveloppe();
                break;
            case 89:
                return $this->getSuiviSeulRegistreDepotsPapier();
                break;
            case 90:
                return $this->getSuiviSeulRegistreRetraitsPapier();
                break;
            case 91:
                return $this->getSuiviSeulRegistreQuestionsPapier();
                break;
            case 92:
                return $this->getSuiviSeulRegistreDepotsElectronique();
                break;
            case 93:
                return $this->getSuiviSeulRegistreRetraitsElectronique();
                break;
            case 94:
                return $this->getSuiviSeulRegistreQuestionsElectronique();
                break;
            case 95:
                return $this->getModifierConsultationMapaInferieurMontantApresValidation();
                break;
            case 96:
                return $this->getModifierConsultationMapaSuperieurMontantApresValidation();
                break;
            case 97:
                return $this->getModifierConsultationProceduresFormaliseesApresValidation();
                break;
            case 98:
                return $this->getGererLesEntreprises();
                break;
            case 99:
                return $this->getPorteeSocietesExclues();
                break;
            case 100:
                return $this->getPorteeSocietesExcluesTousOrganismes();
                break;
            case 101:
                return $this->getModifierSocietesExclues();
                break;
            case 102:
                return $this->getSupprimerSocietesExclues();
                break;
            case 103:
                return $this->getResultatAnalyse();
                break;
            case 104:
                return $this->getGererAdressesService();
                break;
            case 105:
                return $this->getGererMonService();
                break;
            case 106:
                return $this->getDownloadArchives();
                break;
            case 107:
                return $this->getCreerAnnonceExtraitPv();
                break;
            case 108:
                return $this->getCreerAnnonceRapportAchevement();
                break;
            case 109:
                return $this->getGestionCertificatsAgent();
                break;
            case 110:
                return $this->getCreerAvisProgrammePrevisionnel();
                break;
            case 111:
                return $this->getAnnulerConsultation();
                break;
            case 112:
                return $this->getEnvoyerPublicite();
                break;
            case 113:
                return $this->getListeMarchesNotifies();
                break;
            case 114:
                return $this->getSuivreMessage();
                break;
            case 115:
                return $this->getEnvoyerMessage();
                break;
            case 116:
                return $this->getSuiviFluxChorusTransversal();
                break;
            case 117:
                return $this->getGestionMandataire();
                break;
            case 118:
                return $this->getGererNewsletter();
                break;
            case 119:
                return $this->getGestionModelesFormulaire();
                break;
            case 120:
                return $this->getGestionAdressesFacturationJal();
                break;
            case 121:
                return $this->getAdministrerAdressesFacturationJal();
                break;
            case 122:
                return $this->getRedactionDocumentsRedac();
                break;
            case 123:
                return $this->getValidationDocumentsRedac();
                break;
            case 124:
                return $this->getGestionMiseDispositionPiecesMarche();
                break;
            case 125:
                return $this->getAnnuaireAcheteur();
                break;
            case 126:
                return $this->getReprendreIntegralementArticle();
                break;
            case 127:
                return $this->getAdministrerClauses();
                break;
            case 128:
                return $this->getValiderClauses();
                break;
            case 129:
                return $this->getAdministrerCanevas();
                break;
            case 130:
                return $this->getValiderCanevas();
                break;
            case 131:
                return $this->getAdministrerClausesEntiteAchats();
                break;
            case 132:
                return $this->getGenererPiecesFormatOdt();
                break;
            case 133:
                return $this->getPublierVersionClausierEditeur();
                break;
            case 134:
                return $this->getAdministrerClausesEditeur();
                break;
            case 135:
                return $this->getValiderClausesEditeur();
                break;
            case 136:
                return $this->getAdministrerCanevasEditeur();
                break;
            case 137:
                return $this->getValiderCanevasEditeur();
                break;
            case 138:
                return $this->getDecisionSuiviSeul();
                break;
            case 139:
                return $this->getOuvrirCandidatureHorsLigne();
                break;
            case 140:
                return $this->getOuvrirOffreHorsLigne();
                break;
            case 141:
                return $this->getOuvrirOffreTechniqueHorsLigne();
                break;
            case 142:
                return $this->getOuvrirAnonymatHorsLigne();
                break;
            case 143:
                return $this->getEspaceCollaboratifGestionnaire();
                break;
            case 144:
                return $this->getEspaceCollaboratifContributeur();
                break;
            case 145:
                return $this->getGererOrganismes();
                break;
            case 146:
                return $this->getGererAssociationsAgents();
                break;
            case 147:
                return $this->getModuleRedactionUniquement();
                break;
            case 148:
                return $this->getHistoriqueNavigationInscrits();
                break;
            case 149:
                return $this->getTelechargerAccordsCadres();
                break;
            case 150:
                return $this->getCreerAnnonceDecisionResiliation();
                break;
            case 151:
                return $this->getCreerAnnonceSyntheseRapportAudit();
                break;
            case 152:
                return $this->getGererOperations();
                break;
            case 153:
                return $this->getTelechargerSiretAcheteur();
                break;
            case 154:
                return $this->getGererReouverturesModification();
                break;
            case 155:
                return $this->getEnvoyerDemandeValidation();
                break;
            case 156:
                return $this->getSuivreConsultationOrganisme();
                break;
            case 157:
                return $this->getRenseignerMontant();
                break;
            case 158:
                return $this->getGestionReferentielContact();
                break;
            case 159:
                return $this->getGererCao();
                break;
            case 160:
                return $this->getValidationAccesFacture();
                break;
            case 161:
                return $this->getGestionTravauxCao();
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
        if (isset($alreadyDumpedObjects['CommonHabilitationAgent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonHabilitationAgent'][$this->getPrimaryKey()] = true;
        $keys = CommonHabilitationAgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAgent(),
            $keys[1] => $this->getGestionAgentPole(),
            $keys[2] => $this->getGestionFournisseursEnvoisPostaux(),
            $keys[3] => $this->getGestionBiCles(),
            $keys[4] => $this->getCreerConsultation(),
            $keys[5] => $this->getModifierConsultation(),
            $keys[6] => $this->getValiderConsultation(),
            $keys[7] => $this->getPublierConsultation(),
            $keys[8] => $this->getSuivreConsultation(),
            $keys[9] => $this->getSuivreConsultationPole(),
            $keys[10] => $this->getSupprimerEnveloppe(),
            $keys[11] => $this->getSupprimerConsultation(),
            $keys[12] => $this->getDepouillerCandidature(),
            $keys[13] => $this->getDepouillerOffre(),
            $keys[14] => $this->getMessagerieSecurisee(),
            $keys[15] => $this->getAccesRegistreDepotsPapier(),
            $keys[16] => $this->getAccesRegistreRetraitsPapier(),
            $keys[17] => $this->getAccesRegistreQuestionsPapier(),
            $keys[18] => $this->getGererEncheres(),
            $keys[19] => $this->getSuivreEncheres(),
            $keys[20] => $this->getSuiviEntreprise(),
            $keys[21] => $this->getEnvoiBoamp(),
            $keys[22] => $this->getAccesClassementLot(),
            $keys[23] => $this->getConnecteurSis(),
            $keys[24] => $this->getConnecteurMarco(),
            $keys[25] => $this->getRepondreAuxQuestions(),
            $keys[26] => $this->getAppelProjetFormation(),
            $keys[27] => $this->getUtiliserClientCao(),
            $keys[28] => $this->getNotificationBoamp(),
            $keys[29] => $this->getAdministrerCompte(),
            $keys[30] => $this->getGestionMapa(),
            $keys[31] => $this->getGestionTypeValidation(),
            $keys[32] => $this->getApprouverConsultation(),
            $keys[33] => $this->getAdministrerProcedure(),
            $keys[34] => $this->getRestreindreCreation(),
            $keys[35] => $this->getCreerListeMarches(),
            $keys[36] => $this->getGestionCommissions(),
            $keys[37] => $this->getSuiviSeulConsultation(),
            $keys[38] => $this->getAttributionMarche(),
            $keys[39] => $this->getFicheRecensement(),
            $keys[40] => $this->getDeclarerInfructueux(),
            $keys[41] => $this->getDeclarerSansSuite(),
            $keys[42] => $this->getCreerConsultationTransverse(),
            $keys[43] => $this->getOuvrirCandidatureEnLigne(),
            $keys[44] => $this->getOuvrirCandidatureADistance(),
            $keys[45] => $this->getRefuserEnveloppe(),
            $keys[46] => $this->getGererAdmissibilite(),
            $keys[47] => $this->getRestaurerEnveloppe(),
            $keys[48] => $this->getOuvrirAnonymatEnLigne(),
            $keys[49] => $this->getOuvrirOffreEnLigne(),
            $keys[50] => $this->getGestionCompteBoamp(),
            $keys[51] => $this->getGestionAgents(),
            $keys[52] => $this->getGestionHabilitations(),
            $keys[53] => $this->getGererMapaInferieurMontant(),
            $keys[54] => $this->getGererMapaSuperieurMontant(),
            $keys[55] => $this->getModifierConsultationAvantValidation(),
            $keys[56] => $this->getModifierConsultationApresValidation(),
            $keys[57] => $this->getAccesReponses(),
            $keys[58] => $this->getTelechargementGroupeAnticipePlisChiffres(),
            $keys[59] => $this->getTelechargementUnitairePlisChiffres(),
            $keys[60] => $this->getOuvrirOffreADistance(),
            $keys[61] => $this->getCreerAnnonceInformation(),
            $keys[62] => $this->getSaisieMarches(),
            $keys[63] => $this->getValidationMarches(),
            $keys[64] => $this->getPublicationMarches(),
            $keys[65] => $this->getGererStatistiquesMetier(),
            $keys[66] => $this->getGererArchives(),
            $keys[67] => $this->getAdministrerProceduresFormalisees(),
            $keys[68] => $this->getCreerAnnonceAttribution(),
            $keys[69] => $this->getAccesRegistreRetraitsElectronique(),
            $keys[70] => $this->getAccesRegistreQuestionsElectronique(),
            $keys[71] => $this->getAccesRegistreDepotsElectronique(),
            $keys[72] => $this->getValidationSimple(),
            $keys[73] => $this->getValidationIntermediaire(),
            $keys[74] => $this->getValidationFinale(),
            $keys[75] => $this->getCreerSuiteConsultation(),
            $keys[76] => $this->getHyperAdmin(),
            $keys[77] => $this->getDroitGestionServices(),
            $keys[78] => $this->getSuiviAcces(),
            $keys[79] => $this->getStatistiquesSite(),
            $keys[80] => $this->getStatistiquesQos(),
            $keys[81] => $this->getOuvrirAnonymatADistance(),
            $keys[82] => $this->getGestionCompteJal(),
            $keys[83] => $this->getGestionCentralePub(),
            $keys[84] => $this->getGestionCompteGroupeMoniteur(),
            $keys[85] => $this->getOuvrirOffreTechniqueEnLigne(),
            $keys[86] => $this->getOuvrirOffreTechniqueADistance(),
            $keys[87] => $this->getActivationCompteEntreprise(),
            $keys[88] => $this->getImporterEnveloppe(),
            $keys[89] => $this->getSuiviSeulRegistreDepotsPapier(),
            $keys[90] => $this->getSuiviSeulRegistreRetraitsPapier(),
            $keys[91] => $this->getSuiviSeulRegistreQuestionsPapier(),
            $keys[92] => $this->getSuiviSeulRegistreDepotsElectronique(),
            $keys[93] => $this->getSuiviSeulRegistreRetraitsElectronique(),
            $keys[94] => $this->getSuiviSeulRegistreQuestionsElectronique(),
            $keys[95] => $this->getModifierConsultationMapaInferieurMontantApresValidation(),
            $keys[96] => $this->getModifierConsultationMapaSuperieurMontantApresValidation(),
            $keys[97] => $this->getModifierConsultationProceduresFormaliseesApresValidation(),
            $keys[98] => $this->getGererLesEntreprises(),
            $keys[99] => $this->getPorteeSocietesExclues(),
            $keys[100] => $this->getPorteeSocietesExcluesTousOrganismes(),
            $keys[101] => $this->getModifierSocietesExclues(),
            $keys[102] => $this->getSupprimerSocietesExclues(),
            $keys[103] => $this->getResultatAnalyse(),
            $keys[104] => $this->getGererAdressesService(),
            $keys[105] => $this->getGererMonService(),
            $keys[106] => $this->getDownloadArchives(),
            $keys[107] => $this->getCreerAnnonceExtraitPv(),
            $keys[108] => $this->getCreerAnnonceRapportAchevement(),
            $keys[109] => $this->getGestionCertificatsAgent(),
            $keys[110] => $this->getCreerAvisProgrammePrevisionnel(),
            $keys[111] => $this->getAnnulerConsultation(),
            $keys[112] => $this->getEnvoyerPublicite(),
            $keys[113] => $this->getListeMarchesNotifies(),
            $keys[114] => $this->getSuivreMessage(),
            $keys[115] => $this->getEnvoyerMessage(),
            $keys[116] => $this->getSuiviFluxChorusTransversal(),
            $keys[117] => $this->getGestionMandataire(),
            $keys[118] => $this->getGererNewsletter(),
            $keys[119] => $this->getGestionModelesFormulaire(),
            $keys[120] => $this->getGestionAdressesFacturationJal(),
            $keys[121] => $this->getAdministrerAdressesFacturationJal(),
            $keys[122] => $this->getRedactionDocumentsRedac(),
            $keys[123] => $this->getValidationDocumentsRedac(),
            $keys[124] => $this->getGestionMiseDispositionPiecesMarche(),
            $keys[125] => $this->getAnnuaireAcheteur(),
            $keys[126] => $this->getReprendreIntegralementArticle(),
            $keys[127] => $this->getAdministrerClauses(),
            $keys[128] => $this->getValiderClauses(),
            $keys[129] => $this->getAdministrerCanevas(),
            $keys[130] => $this->getValiderCanevas(),
            $keys[131] => $this->getAdministrerClausesEntiteAchats(),
            $keys[132] => $this->getGenererPiecesFormatOdt(),
            $keys[133] => $this->getPublierVersionClausierEditeur(),
            $keys[134] => $this->getAdministrerClausesEditeur(),
            $keys[135] => $this->getValiderClausesEditeur(),
            $keys[136] => $this->getAdministrerCanevasEditeur(),
            $keys[137] => $this->getValiderCanevasEditeur(),
            $keys[138] => $this->getDecisionSuiviSeul(),
            $keys[139] => $this->getOuvrirCandidatureHorsLigne(),
            $keys[140] => $this->getOuvrirOffreHorsLigne(),
            $keys[141] => $this->getOuvrirOffreTechniqueHorsLigne(),
            $keys[142] => $this->getOuvrirAnonymatHorsLigne(),
            $keys[143] => $this->getEspaceCollaboratifGestionnaire(),
            $keys[144] => $this->getEspaceCollaboratifContributeur(),
            $keys[145] => $this->getGererOrganismes(),
            $keys[146] => $this->getGererAssociationsAgents(),
            $keys[147] => $this->getModuleRedactionUniquement(),
            $keys[148] => $this->getHistoriqueNavigationInscrits(),
            $keys[149] => $this->getTelechargerAccordsCadres(),
            $keys[150] => $this->getCreerAnnonceDecisionResiliation(),
            $keys[151] => $this->getCreerAnnonceSyntheseRapportAudit(),
            $keys[152] => $this->getGererOperations(),
            $keys[153] => $this->getTelechargerSiretAcheteur(),
            $keys[154] => $this->getGererReouverturesModification(),
            $keys[155] => $this->getEnvoyerDemandeValidation(),
            $keys[156] => $this->getSuivreConsultationOrganisme(),
            $keys[157] => $this->getRenseignerMontant(),
            $keys[158] => $this->getGestionReferentielContact(),
            $keys[159] => $this->getGererCao(),
            $keys[160] => $this->getValidationAccesFacture(),
            $keys[161] => $this->getGestionTravauxCao(),
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
        $pos = CommonHabilitationAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAgent($value);
                break;
            case 1:
                $this->setGestionAgentPole($value);
                break;
            case 2:
                $this->setGestionFournisseursEnvoisPostaux($value);
                break;
            case 3:
                $this->setGestionBiCles($value);
                break;
            case 4:
                $this->setCreerConsultation($value);
                break;
            case 5:
                $this->setModifierConsultation($value);
                break;
            case 6:
                $this->setValiderConsultation($value);
                break;
            case 7:
                $this->setPublierConsultation($value);
                break;
            case 8:
                $this->setSuivreConsultation($value);
                break;
            case 9:
                $this->setSuivreConsultationPole($value);
                break;
            case 10:
                $this->setSupprimerEnveloppe($value);
                break;
            case 11:
                $this->setSupprimerConsultation($value);
                break;
            case 12:
                $this->setDepouillerCandidature($value);
                break;
            case 13:
                $this->setDepouillerOffre($value);
                break;
            case 14:
                $this->setMessagerieSecurisee($value);
                break;
            case 15:
                $this->setAccesRegistreDepotsPapier($value);
                break;
            case 16:
                $this->setAccesRegistreRetraitsPapier($value);
                break;
            case 17:
                $this->setAccesRegistreQuestionsPapier($value);
                break;
            case 18:
                $this->setGererEncheres($value);
                break;
            case 19:
                $this->setSuivreEncheres($value);
                break;
            case 20:
                $this->setSuiviEntreprise($value);
                break;
            case 21:
                $this->setEnvoiBoamp($value);
                break;
            case 22:
                $this->setAccesClassementLot($value);
                break;
            case 23:
                $this->setConnecteurSis($value);
                break;
            case 24:
                $this->setConnecteurMarco($value);
                break;
            case 25:
                $this->setRepondreAuxQuestions($value);
                break;
            case 26:
                $this->setAppelProjetFormation($value);
                break;
            case 27:
                $this->setUtiliserClientCao($value);
                break;
            case 28:
                $this->setNotificationBoamp($value);
                break;
            case 29:
                $this->setAdministrerCompte($value);
                break;
            case 30:
                $this->setGestionMapa($value);
                break;
            case 31:
                $this->setGestionTypeValidation($value);
                break;
            case 32:
                $this->setApprouverConsultation($value);
                break;
            case 33:
                $this->setAdministrerProcedure($value);
                break;
            case 34:
                $this->setRestreindreCreation($value);
                break;
            case 35:
                $this->setCreerListeMarches($value);
                break;
            case 36:
                $this->setGestionCommissions($value);
                break;
            case 37:
                $this->setSuiviSeulConsultation($value);
                break;
            case 38:
                $this->setAttributionMarche($value);
                break;
            case 39:
                $this->setFicheRecensement($value);
                break;
            case 40:
                $this->setDeclarerInfructueux($value);
                break;
            case 41:
                $this->setDeclarerSansSuite($value);
                break;
            case 42:
                $this->setCreerConsultationTransverse($value);
                break;
            case 43:
                $this->setOuvrirCandidatureEnLigne($value);
                break;
            case 44:
                $this->setOuvrirCandidatureADistance($value);
                break;
            case 45:
                $this->setRefuserEnveloppe($value);
                break;
            case 46:
                $this->setGererAdmissibilite($value);
                break;
            case 47:
                $this->setRestaurerEnveloppe($value);
                break;
            case 48:
                $this->setOuvrirAnonymatEnLigne($value);
                break;
            case 49:
                $this->setOuvrirOffreEnLigne($value);
                break;
            case 50:
                $this->setGestionCompteBoamp($value);
                break;
            case 51:
                $this->setGestionAgents($value);
                break;
            case 52:
                $this->setGestionHabilitations($value);
                break;
            case 53:
                $this->setGererMapaInferieurMontant($value);
                break;
            case 54:
                $this->setGererMapaSuperieurMontant($value);
                break;
            case 55:
                $this->setModifierConsultationAvantValidation($value);
                break;
            case 56:
                $this->setModifierConsultationApresValidation($value);
                break;
            case 57:
                $this->setAccesReponses($value);
                break;
            case 58:
                $this->setTelechargementGroupeAnticipePlisChiffres($value);
                break;
            case 59:
                $this->setTelechargementUnitairePlisChiffres($value);
                break;
            case 60:
                $this->setOuvrirOffreADistance($value);
                break;
            case 61:
                $this->setCreerAnnonceInformation($value);
                break;
            case 62:
                $this->setSaisieMarches($value);
                break;
            case 63:
                $this->setValidationMarches($value);
                break;
            case 64:
                $this->setPublicationMarches($value);
                break;
            case 65:
                $this->setGererStatistiquesMetier($value);
                break;
            case 66:
                $this->setGererArchives($value);
                break;
            case 67:
                $this->setAdministrerProceduresFormalisees($value);
                break;
            case 68:
                $this->setCreerAnnonceAttribution($value);
                break;
            case 69:
                $this->setAccesRegistreRetraitsElectronique($value);
                break;
            case 70:
                $this->setAccesRegistreQuestionsElectronique($value);
                break;
            case 71:
                $this->setAccesRegistreDepotsElectronique($value);
                break;
            case 72:
                $this->setValidationSimple($value);
                break;
            case 73:
                $this->setValidationIntermediaire($value);
                break;
            case 74:
                $this->setValidationFinale($value);
                break;
            case 75:
                $this->setCreerSuiteConsultation($value);
                break;
            case 76:
                $this->setHyperAdmin($value);
                break;
            case 77:
                $this->setDroitGestionServices($value);
                break;
            case 78:
                $this->setSuiviAcces($value);
                break;
            case 79:
                $this->setStatistiquesSite($value);
                break;
            case 80:
                $this->setStatistiquesQos($value);
                break;
            case 81:
                $this->setOuvrirAnonymatADistance($value);
                break;
            case 82:
                $this->setGestionCompteJal($value);
                break;
            case 83:
                $this->setGestionCentralePub($value);
                break;
            case 84:
                $this->setGestionCompteGroupeMoniteur($value);
                break;
            case 85:
                $this->setOuvrirOffreTechniqueEnLigne($value);
                break;
            case 86:
                $this->setOuvrirOffreTechniqueADistance($value);
                break;
            case 87:
                $this->setActivationCompteEntreprise($value);
                break;
            case 88:
                $this->setImporterEnveloppe($value);
                break;
            case 89:
                $this->setSuiviSeulRegistreDepotsPapier($value);
                break;
            case 90:
                $this->setSuiviSeulRegistreRetraitsPapier($value);
                break;
            case 91:
                $this->setSuiviSeulRegistreQuestionsPapier($value);
                break;
            case 92:
                $this->setSuiviSeulRegistreDepotsElectronique($value);
                break;
            case 93:
                $this->setSuiviSeulRegistreRetraitsElectronique($value);
                break;
            case 94:
                $this->setSuiviSeulRegistreQuestionsElectronique($value);
                break;
            case 95:
                $this->setModifierConsultationMapaInferieurMontantApresValidation($value);
                break;
            case 96:
                $this->setModifierConsultationMapaSuperieurMontantApresValidation($value);
                break;
            case 97:
                $this->setModifierConsultationProceduresFormaliseesApresValidation($value);
                break;
            case 98:
                $this->setGererLesEntreprises($value);
                break;
            case 99:
                $this->setPorteeSocietesExclues($value);
                break;
            case 100:
                $this->setPorteeSocietesExcluesTousOrganismes($value);
                break;
            case 101:
                $this->setModifierSocietesExclues($value);
                break;
            case 102:
                $this->setSupprimerSocietesExclues($value);
                break;
            case 103:
                $this->setResultatAnalyse($value);
                break;
            case 104:
                $this->setGererAdressesService($value);
                break;
            case 105:
                $this->setGererMonService($value);
                break;
            case 106:
                $this->setDownloadArchives($value);
                break;
            case 107:
                $this->setCreerAnnonceExtraitPv($value);
                break;
            case 108:
                $this->setCreerAnnonceRapportAchevement($value);
                break;
            case 109:
                $this->setGestionCertificatsAgent($value);
                break;
            case 110:
                $this->setCreerAvisProgrammePrevisionnel($value);
                break;
            case 111:
                $this->setAnnulerConsultation($value);
                break;
            case 112:
                $this->setEnvoyerPublicite($value);
                break;
            case 113:
                $this->setListeMarchesNotifies($value);
                break;
            case 114:
                $this->setSuivreMessage($value);
                break;
            case 115:
                $this->setEnvoyerMessage($value);
                break;
            case 116:
                $this->setSuiviFluxChorusTransversal($value);
                break;
            case 117:
                $this->setGestionMandataire($value);
                break;
            case 118:
                $this->setGererNewsletter($value);
                break;
            case 119:
                $this->setGestionModelesFormulaire($value);
                break;
            case 120:
                $this->setGestionAdressesFacturationJal($value);
                break;
            case 121:
                $this->setAdministrerAdressesFacturationJal($value);
                break;
            case 122:
                $this->setRedactionDocumentsRedac($value);
                break;
            case 123:
                $this->setValidationDocumentsRedac($value);
                break;
            case 124:
                $this->setGestionMiseDispositionPiecesMarche($value);
                break;
            case 125:
                $this->setAnnuaireAcheteur($value);
                break;
            case 126:
                $this->setReprendreIntegralementArticle($value);
                break;
            case 127:
                $this->setAdministrerClauses($value);
                break;
            case 128:
                $this->setValiderClauses($value);
                break;
            case 129:
                $this->setAdministrerCanevas($value);
                break;
            case 130:
                $this->setValiderCanevas($value);
                break;
            case 131:
                $this->setAdministrerClausesEntiteAchats($value);
                break;
            case 132:
                $this->setGenererPiecesFormatOdt($value);
                break;
            case 133:
                $this->setPublierVersionClausierEditeur($value);
                break;
            case 134:
                $this->setAdministrerClausesEditeur($value);
                break;
            case 135:
                $this->setValiderClausesEditeur($value);
                break;
            case 136:
                $this->setAdministrerCanevasEditeur($value);
                break;
            case 137:
                $this->setValiderCanevasEditeur($value);
                break;
            case 138:
                $this->setDecisionSuiviSeul($value);
                break;
            case 139:
                $this->setOuvrirCandidatureHorsLigne($value);
                break;
            case 140:
                $this->setOuvrirOffreHorsLigne($value);
                break;
            case 141:
                $this->setOuvrirOffreTechniqueHorsLigne($value);
                break;
            case 142:
                $this->setOuvrirAnonymatHorsLigne($value);
                break;
            case 143:
                $this->setEspaceCollaboratifGestionnaire($value);
                break;
            case 144:
                $this->setEspaceCollaboratifContributeur($value);
                break;
            case 145:
                $this->setGererOrganismes($value);
                break;
            case 146:
                $this->setGererAssociationsAgents($value);
                break;
            case 147:
                $this->setModuleRedactionUniquement($value);
                break;
            case 148:
                $this->setHistoriqueNavigationInscrits($value);
                break;
            case 149:
                $this->setTelechargerAccordsCadres($value);
                break;
            case 150:
                $this->setCreerAnnonceDecisionResiliation($value);
                break;
            case 151:
                $this->setCreerAnnonceSyntheseRapportAudit($value);
                break;
            case 152:
                $this->setGererOperations($value);
                break;
            case 153:
                $this->setTelechargerSiretAcheteur($value);
                break;
            case 154:
                $this->setGererReouverturesModification($value);
                break;
            case 155:
                $this->setEnvoyerDemandeValidation($value);
                break;
            case 156:
                $this->setSuivreConsultationOrganisme($value);
                break;
            case 157:
                $this->setRenseignerMontant($value);
                break;
            case 158:
                $this->setGestionReferentielContact($value);
                break;
            case 159:
                $this->setGererCao($value);
                break;
            case 160:
                $this->setValidationAccesFacture($value);
                break;
            case 161:
                $this->setGestionTravauxCao($value);
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
        $keys = CommonHabilitationAgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAgent($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGestionAgentPole($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGestionFournisseursEnvoisPostaux($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGestionBiCles($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCreerConsultation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setModifierConsultation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setValiderConsultation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPublierConsultation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSuivreConsultation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSuivreConsultationPole($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSupprimerEnveloppe($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSupprimerConsultation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDepouillerCandidature($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDepouillerOffre($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMessagerieSecurisee($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAccesRegistreDepotsPapier($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAccesRegistreRetraitsPapier($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAccesRegistreQuestionsPapier($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setGererEncheres($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSuivreEncheres($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSuiviEntreprise($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEnvoiBoamp($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAccesClassementLot($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setConnecteurSis($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setConnecteurMarco($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRepondreAuxQuestions($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setAppelProjetFormation($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setUtiliserClientCao($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setNotificationBoamp($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAdministrerCompte($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setGestionMapa($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setGestionTypeValidation($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setApprouverConsultation($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAdministrerProcedure($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setRestreindreCreation($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCreerListeMarches($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setGestionCommissions($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSuiviSeulConsultation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setAttributionMarche($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setFicheRecensement($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDeclarerInfructueux($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDeclarerSansSuite($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCreerConsultationTransverse($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setOuvrirCandidatureEnLigne($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setOuvrirCandidatureADistance($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setRefuserEnveloppe($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setGererAdmissibilite($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setRestaurerEnveloppe($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setOuvrirAnonymatEnLigne($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setOuvrirOffreEnLigne($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setGestionCompteBoamp($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setGestionAgents($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setGestionHabilitations($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setGererMapaInferieurMontant($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setGererMapaSuperieurMontant($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setModifierConsultationAvantValidation($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setModifierConsultationApresValidation($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setAccesReponses($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setTelechargementGroupeAnticipePlisChiffres($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setTelechargementUnitairePlisChiffres($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setOuvrirOffreADistance($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setCreerAnnonceInformation($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setSaisieMarches($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setValidationMarches($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setPublicationMarches($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setGererStatistiquesMetier($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setGererArchives($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setAdministrerProceduresFormalisees($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setCreerAnnonceAttribution($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setAccesRegistreRetraitsElectronique($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setAccesRegistreQuestionsElectronique($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setAccesRegistreDepotsElectronique($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setValidationSimple($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setValidationIntermediaire($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setValidationFinale($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setCreerSuiteConsultation($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setHyperAdmin($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setDroitGestionServices($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setSuiviAcces($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setStatistiquesSite($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setStatistiquesQos($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setOuvrirAnonymatADistance($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setGestionCompteJal($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setGestionCentralePub($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setGestionCompteGroupeMoniteur($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setOuvrirOffreTechniqueEnLigne($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setOuvrirOffreTechniqueADistance($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setActivationCompteEntreprise($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setImporterEnveloppe($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setSuiviSeulRegistreDepotsPapier($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setSuiviSeulRegistreRetraitsPapier($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setSuiviSeulRegistreQuestionsPapier($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setSuiviSeulRegistreDepotsElectronique($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setSuiviSeulRegistreRetraitsElectronique($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setSuiviSeulRegistreQuestionsElectronique($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setModifierConsultationMapaInferieurMontantApresValidation($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setModifierConsultationMapaSuperieurMontantApresValidation($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setModifierConsultationProceduresFormaliseesApresValidation($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setGererLesEntreprises($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setPorteeSocietesExclues($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setPorteeSocietesExcluesTousOrganismes($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setModifierSocietesExclues($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setSupprimerSocietesExclues($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setResultatAnalyse($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setGererAdressesService($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setGererMonService($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setDownloadArchives($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setCreerAnnonceExtraitPv($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setCreerAnnonceRapportAchevement($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setGestionCertificatsAgent($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setCreerAvisProgrammePrevisionnel($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setAnnulerConsultation($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setEnvoyerPublicite($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setListeMarchesNotifies($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setSuivreMessage($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setEnvoyerMessage($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setSuiviFluxChorusTransversal($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setGestionMandataire($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setGererNewsletter($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setGestionModelesFormulaire($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setGestionAdressesFacturationJal($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setAdministrerAdressesFacturationJal($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setRedactionDocumentsRedac($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setValidationDocumentsRedac($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setGestionMiseDispositionPiecesMarche($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setAnnuaireAcheteur($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setReprendreIntegralementArticle($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setAdministrerClauses($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setValiderClauses($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setAdministrerCanevas($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setValiderCanevas($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setAdministrerClausesEntiteAchats($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setGenererPiecesFormatOdt($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setPublierVersionClausierEditeur($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setAdministrerClausesEditeur($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setValiderClausesEditeur($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setAdministrerCanevasEditeur($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setValiderCanevasEditeur($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setDecisionSuiviSeul($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setOuvrirCandidatureHorsLigne($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setOuvrirOffreHorsLigne($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setOuvrirOffreTechniqueHorsLigne($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setOuvrirAnonymatHorsLigne($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setEspaceCollaboratifGestionnaire($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setEspaceCollaboratifContributeur($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setGererOrganismes($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setGererAssociationsAgents($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setModuleRedactionUniquement($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setHistoriqueNavigationInscrits($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setTelechargerAccordsCadres($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setCreerAnnonceDecisionResiliation($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setCreerAnnonceSyntheseRapportAudit($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setGererOperations($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setTelechargerSiretAcheteur($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setGererReouverturesModification($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setEnvoyerDemandeValidation($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setSuivreConsultationOrganisme($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setRenseignerMontant($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setGestionReferentielContact($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setGererCao($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setValidationAccesFacture($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setGestionTravauxCao($arr[$keys[161]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonHabilitationAgentPeer::ID_AGENT)) $criteria->add(CommonHabilitationAgentPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_AGENT_POLE)) $criteria->add(CommonHabilitationAgentPeer::GESTION_AGENT_POLE, $this->gestion_agent_pole);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX)) $criteria->add(CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX, $this->gestion_fournisseurs_envois_postaux);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_BI_CLES)) $criteria->add(CommonHabilitationAgentPeer::GESTION_BI_CLES, $this->gestion_bi_cles);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::CREER_CONSULTATION, $this->creer_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION, $this->modifier_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::VALIDER_CONSULTATION, $this->valider_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLIER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::PUBLIER_CONSULTATION, $this->publier_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION, $this->suivre_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE)) $criteria->add(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE, $this->suivre_consultation_pole);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE)) $criteria->add(CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE, $this->supprimer_enveloppe);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION, $this->supprimer_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE)) $criteria->add(CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE, $this->depouiller_candidature);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DEPOUILLER_OFFRE)) $criteria->add(CommonHabilitationAgentPeer::DEPOUILLER_OFFRE, $this->depouiller_offre);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE)) $criteria->add(CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE, $this->messagerie_securisee);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER, $this->acces_registre_depots_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER, $this->acces_registre_retraits_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER, $this->acces_registre_questions_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ENCHERES)) $criteria->add(CommonHabilitationAgentPeer::GERER_ENCHERES, $this->gerer_encheres);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_ENCHERES)) $criteria->add(CommonHabilitationAgentPeer::SUIVRE_ENCHERES, $this->suivre_encheres);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_ENTREPRISE)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_ENTREPRISE, $this->suivi_entreprise);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOI_BOAMP)) $criteria->add(CommonHabilitationAgentPeer::ENVOI_BOAMP, $this->envoi_boamp);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT)) $criteria->add(CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT, $this->acces_classement_lot);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CONNECTEUR_SIS)) $criteria->add(CommonHabilitationAgentPeer::CONNECTEUR_SIS, $this->connecteur_sis);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CONNECTEUR_MARCO)) $criteria->add(CommonHabilitationAgentPeer::CONNECTEUR_MARCO, $this->connecteur_marco);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS)) $criteria->add(CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS, $this->repondre_aux_questions);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION)) $criteria->add(CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION, $this->appel_projet_formation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO)) $criteria->add(CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO, $this->utiliser_client_cao);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::NOTIFICATION_BOAMP)) $criteria->add(CommonHabilitationAgentPeer::NOTIFICATION_BOAMP, $this->notification_boamp);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_COMPTE)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_COMPTE, $this->administrer_compte);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MAPA)) $criteria->add(CommonHabilitationAgentPeer::GESTION_MAPA, $this->gestion_mapa);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION, $this->gestion_type_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::APPROUVER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::APPROUVER_CONSULTATION, $this->approuver_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE, $this->administrer_procedure);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESTREINDRE_CREATION)) $criteria->add(CommonHabilitationAgentPeer::RESTREINDRE_CREATION, $this->restreindre_creation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_LISTE_MARCHES)) $criteria->add(CommonHabilitationAgentPeer::CREER_LISTE_MARCHES, $this->creer_liste_marches);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMMISSIONS)) $criteria->add(CommonHabilitationAgentPeer::GESTION_COMMISSIONS, $this->gestion_commissions);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION, $this->suivi_seul_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE)) $criteria->add(CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE, $this->attribution_marche);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::FICHE_RECENSEMENT)) $criteria->add(CommonHabilitationAgentPeer::FICHE_RECENSEMENT, $this->fiche_recensement);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX)) $criteria->add(CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX, $this->declarer_infructueux);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECLARER_SANS_SUITE)) $criteria->add(CommonHabilitationAgentPeer::DECLARER_SANS_SUITE, $this->declarer_sans_suite);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE)) $criteria->add(CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE, $this->creer_consultation_transverse);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE, $this->ouvrir_candidature_en_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE, $this->ouvrir_candidature_a_distance);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REFUSER_ENVELOPPE)) $criteria->add(CommonHabilitationAgentPeer::REFUSER_ENVELOPPE, $this->refuser_enveloppe);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ADMISSIBILITE)) $criteria->add(CommonHabilitationAgentPeer::GERER_ADMISSIBILITE, $this->gerer_admissibilite);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE)) $criteria->add(CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE, $this->restaurer_enveloppe);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE, $this->ouvrir_anonymat_en_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE, $this->ouvrir_offre_en_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP)) $criteria->add(CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP, $this->gestion_compte_boamp);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_AGENTS)) $criteria->add(CommonHabilitationAgentPeer::GESTION_AGENTS, $this->gestion_agents);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_HABILITATIONS)) $criteria->add(CommonHabilitationAgentPeer::GESTION_HABILITATIONS, $this->gestion_habilitations);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT)) $criteria->add(CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT, $this->gerer_mapa_inferieur_montant);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT)) $criteria->add(CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT, $this->gerer_mapa_superieur_montant);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION, $this->modifier_consultation_avant_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION, $this->modifier_consultation_apres_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REPONSES)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REPONSES, $this->acces_reponses);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES)) $criteria->add(CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES, $this->telechargement_groupe_anticipe_plis_chiffres);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES)) $criteria->add(CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES, $this->telechargement_unitaire_plis_chiffres);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE, $this->ouvrir_offre_a_distance);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION, $this->creer_annonce_information);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SAISIE_MARCHES)) $criteria->add(CommonHabilitationAgentPeer::SAISIE_MARCHES, $this->saisie_marches);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_MARCHES)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_MARCHES, $this->validation_marches);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLICATION_MARCHES)) $criteria->add(CommonHabilitationAgentPeer::PUBLICATION_MARCHES, $this->publication_marches);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER)) $criteria->add(CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER, $this->gerer_statistiques_metier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ARCHIVES)) $criteria->add(CommonHabilitationAgentPeer::GERER_ARCHIVES, $this->gerer_archives);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES, $this->administrer_procedures_formalisees);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION, $this->creer_annonce_attribution);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE, $this->acces_registre_retraits_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE, $this->acces_registre_questions_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE, $this->acces_registre_depots_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_SIMPLE)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_SIMPLE, $this->validation_simple);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE, $this->validation_intermediaire);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_FINALE)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_FINALE, $this->validation_finale);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION, $this->creer_suite_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::HYPER_ADMIN)) $criteria->add(CommonHabilitationAgentPeer::HYPER_ADMIN, $this->hyper_admin);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES)) $criteria->add(CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES, $this->droit_gestion_services);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_ACCES)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_ACCES, $this->suivi_acces);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::STATISTIQUES_SITE)) $criteria->add(CommonHabilitationAgentPeer::STATISTIQUES_SITE, $this->statistiques_site);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::STATISTIQUES_QOS)) $criteria->add(CommonHabilitationAgentPeer::STATISTIQUES_QOS, $this->statistiques_qos);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE, $this->ouvrir_anonymat_a_distance);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_JAL)) $criteria->add(CommonHabilitationAgentPeer::GESTION_COMPTE_JAL, $this->gestion_compte_jal);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB)) $criteria->add(CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB, $this->gestion_centrale_pub);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR)) $criteria->add(CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR, $this->gestion_compte_groupe_moniteur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE, $this->ouvrir_offre_technique_en_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE, $this->ouvrir_offre_technique_a_distance);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE)) $criteria->add(CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE, $this->activation_compte_entreprise);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE)) $criteria->add(CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE, $this->importer_enveloppe);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER, $this->suivi_seul_registre_depots_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER, $this->suivi_seul_registre_retraits_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER, $this->suivi_seul_registre_questions_papier);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE, $this->suivi_seul_registre_depots_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE, $this->suivi_seul_registre_retraits_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE, $this->suivi_seul_registre_questions_electronique);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION, $this->modifier_consultation_mapa_inferieur_montant_apres_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION, $this->modifier_consultation_mapa_superieur_montant_apres_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION, $this->modifier_consultation_procedures_formalisees_apres_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES)) $criteria->add(CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES, $this->gerer_les_entreprises);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES)) $criteria->add(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES, $this->portee_societes_exclues);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES)) $criteria->add(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES, $this->portee_societes_exclues_tous_organismes);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES)) $criteria->add(CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES, $this->modifier_societes_exclues);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES)) $criteria->add(CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES, $this->supprimer_societes_exclues);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RESULTAT_ANALYSE)) $criteria->add(CommonHabilitationAgentPeer::RESULTAT_ANALYSE, $this->resultat_analyse);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE)) $criteria->add(CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE, $this->gerer_adresses_service);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_MON_SERVICE)) $criteria->add(CommonHabilitationAgentPeer::GERER_MON_SERVICE, $this->gerer_mon_service);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES)) $criteria->add(CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES, $this->download_archives);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV, $this->creer_annonce_extrait_pv);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT, $this->creer_annonce_rapport_achevement);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT)) $criteria->add(CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT, $this->gestion_certificats_agent);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL)) $criteria->add(CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL, $this->creer_avis_programme_previsionnel);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ANNULER_CONSULTATION)) $criteria->add(CommonHabilitationAgentPeer::ANNULER_CONSULTATION, $this->annuler_consultation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_PUBLICITE)) $criteria->add(CommonHabilitationAgentPeer::ENVOYER_PUBLICITE, $this->envoyer_publicite);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES)) $criteria->add(CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES, $this->liste_marches_notifies);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_MESSAGE)) $criteria->add(CommonHabilitationAgentPeer::SUIVRE_MESSAGE, $this->suivre_message);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_MESSAGE)) $criteria->add(CommonHabilitationAgentPeer::ENVOYER_MESSAGE, $this->envoyer_message);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL)) $criteria->add(CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL, $this->suivi_flux_chorus_transversal);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MANDATAIRE)) $criteria->add(CommonHabilitationAgentPeer::GESTION_MANDATAIRE, $this->gestion_mandataire);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_NEWSLETTER)) $criteria->add(CommonHabilitationAgentPeer::GERER_NEWSLETTER, $this->gerer_newsletter);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE)) $criteria->add(CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE, $this->gestion_modeles_formulaire);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL)) $criteria->add(CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL, $this->gestion_adresses_facturation_jal);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL, $this->administrer_adresses_facturation_jal);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC)) $criteria->add(CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC, $this->redaction_documents_redac);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC, $this->validation_documents_redac);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE)) $criteria->add(CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE, $this->gestion_mise_disposition_pieces_marche);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR)) $criteria->add(CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR, $this->annuaire_acheteur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE)) $criteria->add(CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE, $this->reprendre_integralement_article);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES, $this->administrer_clauses);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CLAUSES)) $criteria->add(CommonHabilitationAgentPeer::VALIDER_CLAUSES, $this->valider_clauses);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS, $this->administrer_canevas);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CANEVAS)) $criteria->add(CommonHabilitationAgentPeer::VALIDER_CANEVAS, $this->valider_canevas);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS, $this->administrer_clauses_entite_achats);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT)) $criteria->add(CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT, $this->generer_pieces_format_odt);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR)) $criteria->add(CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR, $this->publier_version_clausier_editeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR, $this->administrer_clauses_editeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR)) $criteria->add(CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR, $this->valider_clauses_editeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR)) $criteria->add(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR, $this->administrer_canevas_editeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR)) $criteria->add(CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR, $this->valider_canevas_editeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL)) $criteria->add(CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL, $this->decision_suivi_seul);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE, $this->ouvrir_candidature_hors_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE, $this->ouvrir_offre_hors_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE, $this->ouvrir_offre_technique_hors_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE)) $criteria->add(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE, $this->ouvrir_anonymat_hors_ligne);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE)) $criteria->add(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE, $this->espace_collaboratif_gestionnaire);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR)) $criteria->add(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR, $this->espace_collaboratif_contributeur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ORGANISMES)) $criteria->add(CommonHabilitationAgentPeer::GERER_ORGANISMES, $this->gerer_organismes);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS)) $criteria->add(CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS, $this->gerer_associations_agents);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT)) $criteria->add(CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT, $this->module_redaction_uniquement);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS)) $criteria->add(CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS, $this->historique_navigation_inscrits);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES)) $criteria->add(CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES, $this->telecharger_accords_cadres);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION, $this->creer_annonce_decision_resiliation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT)) $criteria->add(CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT, $this->creer_annonce_synthese_rapport_audit);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_OPERATIONS)) $criteria->add(CommonHabilitationAgentPeer::GERER_OPERATIONS, $this->gerer_operations);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR)) $criteria->add(CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR, $this->telecharger_siret_acheteur);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION)) $criteria->add(CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION, $this->gerer_reouvertures_modification);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION)) $criteria->add(CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION, $this->envoyer_demande_validation);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME)) $criteria->add(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME, $this->suivre_consultation_organisme);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::RENSEIGNER_MONTANT)) $criteria->add(CommonHabilitationAgentPeer::RENSEIGNER_MONTANT, $this->renseigner_montant);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT)) $criteria->add(CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT, $this->gestion_referentiel_contact);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GERER_CAO)) $criteria->add(CommonHabilitationAgentPeer::GERER_CAO, $this->gerer_cao);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE)) $criteria->add(CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE, $this->validation_acces_facture);
        if ($this->isColumnModified(CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO)) $criteria->add(CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO, $this->gestion_travaux_cao);

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
        $criteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);
        $criteria->add(CommonHabilitationAgentPeer::ID_AGENT, $this->id_agent);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAgent();
    }

    /**
     * Generic method to set the primary key (id_agent column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAgent($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAgent();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonHabilitationAgent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGestionAgentPole($this->getGestionAgentPole());
        $copyObj->setGestionFournisseursEnvoisPostaux($this->getGestionFournisseursEnvoisPostaux());
        $copyObj->setGestionBiCles($this->getGestionBiCles());
        $copyObj->setCreerConsultation($this->getCreerConsultation());
        $copyObj->setModifierConsultation($this->getModifierConsultation());
        $copyObj->setValiderConsultation($this->getValiderConsultation());
        $copyObj->setPublierConsultation($this->getPublierConsultation());
        $copyObj->setSuivreConsultation($this->getSuivreConsultation());
        $copyObj->setSuivreConsultationPole($this->getSuivreConsultationPole());
        $copyObj->setSupprimerEnveloppe($this->getSupprimerEnveloppe());
        $copyObj->setSupprimerConsultation($this->getSupprimerConsultation());
        $copyObj->setDepouillerCandidature($this->getDepouillerCandidature());
        $copyObj->setDepouillerOffre($this->getDepouillerOffre());
        $copyObj->setMessagerieSecurisee($this->getMessagerieSecurisee());
        $copyObj->setAccesRegistreDepotsPapier($this->getAccesRegistreDepotsPapier());
        $copyObj->setAccesRegistreRetraitsPapier($this->getAccesRegistreRetraitsPapier());
        $copyObj->setAccesRegistreQuestionsPapier($this->getAccesRegistreQuestionsPapier());
        $copyObj->setGererEncheres($this->getGererEncheres());
        $copyObj->setSuivreEncheres($this->getSuivreEncheres());
        $copyObj->setSuiviEntreprise($this->getSuiviEntreprise());
        $copyObj->setEnvoiBoamp($this->getEnvoiBoamp());
        $copyObj->setAccesClassementLot($this->getAccesClassementLot());
        $copyObj->setConnecteurSis($this->getConnecteurSis());
        $copyObj->setConnecteurMarco($this->getConnecteurMarco());
        $copyObj->setRepondreAuxQuestions($this->getRepondreAuxQuestions());
        $copyObj->setAppelProjetFormation($this->getAppelProjetFormation());
        $copyObj->setUtiliserClientCao($this->getUtiliserClientCao());
        $copyObj->setNotificationBoamp($this->getNotificationBoamp());
        $copyObj->setAdministrerCompte($this->getAdministrerCompte());
        $copyObj->setGestionMapa($this->getGestionMapa());
        $copyObj->setGestionTypeValidation($this->getGestionTypeValidation());
        $copyObj->setApprouverConsultation($this->getApprouverConsultation());
        $copyObj->setAdministrerProcedure($this->getAdministrerProcedure());
        $copyObj->setRestreindreCreation($this->getRestreindreCreation());
        $copyObj->setCreerListeMarches($this->getCreerListeMarches());
        $copyObj->setGestionCommissions($this->getGestionCommissions());
        $copyObj->setSuiviSeulConsultation($this->getSuiviSeulConsultation());
        $copyObj->setAttributionMarche($this->getAttributionMarche());
        $copyObj->setFicheRecensement($this->getFicheRecensement());
        $copyObj->setDeclarerInfructueux($this->getDeclarerInfructueux());
        $copyObj->setDeclarerSansSuite($this->getDeclarerSansSuite());
        $copyObj->setCreerConsultationTransverse($this->getCreerConsultationTransverse());
        $copyObj->setOuvrirCandidatureEnLigne($this->getOuvrirCandidatureEnLigne());
        $copyObj->setOuvrirCandidatureADistance($this->getOuvrirCandidatureADistance());
        $copyObj->setRefuserEnveloppe($this->getRefuserEnveloppe());
        $copyObj->setGererAdmissibilite($this->getGererAdmissibilite());
        $copyObj->setRestaurerEnveloppe($this->getRestaurerEnveloppe());
        $copyObj->setOuvrirAnonymatEnLigne($this->getOuvrirAnonymatEnLigne());
        $copyObj->setOuvrirOffreEnLigne($this->getOuvrirOffreEnLigne());
        $copyObj->setGestionCompteBoamp($this->getGestionCompteBoamp());
        $copyObj->setGestionAgents($this->getGestionAgents());
        $copyObj->setGestionHabilitations($this->getGestionHabilitations());
        $copyObj->setGererMapaInferieurMontant($this->getGererMapaInferieurMontant());
        $copyObj->setGererMapaSuperieurMontant($this->getGererMapaSuperieurMontant());
        $copyObj->setModifierConsultationAvantValidation($this->getModifierConsultationAvantValidation());
        $copyObj->setModifierConsultationApresValidation($this->getModifierConsultationApresValidation());
        $copyObj->setAccesReponses($this->getAccesReponses());
        $copyObj->setTelechargementGroupeAnticipePlisChiffres($this->getTelechargementGroupeAnticipePlisChiffres());
        $copyObj->setTelechargementUnitairePlisChiffres($this->getTelechargementUnitairePlisChiffres());
        $copyObj->setOuvrirOffreADistance($this->getOuvrirOffreADistance());
        $copyObj->setCreerAnnonceInformation($this->getCreerAnnonceInformation());
        $copyObj->setSaisieMarches($this->getSaisieMarches());
        $copyObj->setValidationMarches($this->getValidationMarches());
        $copyObj->setPublicationMarches($this->getPublicationMarches());
        $copyObj->setGererStatistiquesMetier($this->getGererStatistiquesMetier());
        $copyObj->setGererArchives($this->getGererArchives());
        $copyObj->setAdministrerProceduresFormalisees($this->getAdministrerProceduresFormalisees());
        $copyObj->setCreerAnnonceAttribution($this->getCreerAnnonceAttribution());
        $copyObj->setAccesRegistreRetraitsElectronique($this->getAccesRegistreRetraitsElectronique());
        $copyObj->setAccesRegistreQuestionsElectronique($this->getAccesRegistreQuestionsElectronique());
        $copyObj->setAccesRegistreDepotsElectronique($this->getAccesRegistreDepotsElectronique());
        $copyObj->setValidationSimple($this->getValidationSimple());
        $copyObj->setValidationIntermediaire($this->getValidationIntermediaire());
        $copyObj->setValidationFinale($this->getValidationFinale());
        $copyObj->setCreerSuiteConsultation($this->getCreerSuiteConsultation());
        $copyObj->setHyperAdmin($this->getHyperAdmin());
        $copyObj->setDroitGestionServices($this->getDroitGestionServices());
        $copyObj->setSuiviAcces($this->getSuiviAcces());
        $copyObj->setStatistiquesSite($this->getStatistiquesSite());
        $copyObj->setStatistiquesQos($this->getStatistiquesQos());
        $copyObj->setOuvrirAnonymatADistance($this->getOuvrirAnonymatADistance());
        $copyObj->setGestionCompteJal($this->getGestionCompteJal());
        $copyObj->setGestionCentralePub($this->getGestionCentralePub());
        $copyObj->setGestionCompteGroupeMoniteur($this->getGestionCompteGroupeMoniteur());
        $copyObj->setOuvrirOffreTechniqueEnLigne($this->getOuvrirOffreTechniqueEnLigne());
        $copyObj->setOuvrirOffreTechniqueADistance($this->getOuvrirOffreTechniqueADistance());
        $copyObj->setActivationCompteEntreprise($this->getActivationCompteEntreprise());
        $copyObj->setImporterEnveloppe($this->getImporterEnveloppe());
        $copyObj->setSuiviSeulRegistreDepotsPapier($this->getSuiviSeulRegistreDepotsPapier());
        $copyObj->setSuiviSeulRegistreRetraitsPapier($this->getSuiviSeulRegistreRetraitsPapier());
        $copyObj->setSuiviSeulRegistreQuestionsPapier($this->getSuiviSeulRegistreQuestionsPapier());
        $copyObj->setSuiviSeulRegistreDepotsElectronique($this->getSuiviSeulRegistreDepotsElectronique());
        $copyObj->setSuiviSeulRegistreRetraitsElectronique($this->getSuiviSeulRegistreRetraitsElectronique());
        $copyObj->setSuiviSeulRegistreQuestionsElectronique($this->getSuiviSeulRegistreQuestionsElectronique());
        $copyObj->setModifierConsultationMapaInferieurMontantApresValidation($this->getModifierConsultationMapaInferieurMontantApresValidation());
        $copyObj->setModifierConsultationMapaSuperieurMontantApresValidation($this->getModifierConsultationMapaSuperieurMontantApresValidation());
        $copyObj->setModifierConsultationProceduresFormaliseesApresValidation($this->getModifierConsultationProceduresFormaliseesApresValidation());
        $copyObj->setGererLesEntreprises($this->getGererLesEntreprises());
        $copyObj->setPorteeSocietesExclues($this->getPorteeSocietesExclues());
        $copyObj->setPorteeSocietesExcluesTousOrganismes($this->getPorteeSocietesExcluesTousOrganismes());
        $copyObj->setModifierSocietesExclues($this->getModifierSocietesExclues());
        $copyObj->setSupprimerSocietesExclues($this->getSupprimerSocietesExclues());
        $copyObj->setResultatAnalyse($this->getResultatAnalyse());
        $copyObj->setGererAdressesService($this->getGererAdressesService());
        $copyObj->setGererMonService($this->getGererMonService());
        $copyObj->setDownloadArchives($this->getDownloadArchives());
        $copyObj->setCreerAnnonceExtraitPv($this->getCreerAnnonceExtraitPv());
        $copyObj->setCreerAnnonceRapportAchevement($this->getCreerAnnonceRapportAchevement());
        $copyObj->setGestionCertificatsAgent($this->getGestionCertificatsAgent());
        $copyObj->setCreerAvisProgrammePrevisionnel($this->getCreerAvisProgrammePrevisionnel());
        $copyObj->setAnnulerConsultation($this->getAnnulerConsultation());
        $copyObj->setEnvoyerPublicite($this->getEnvoyerPublicite());
        $copyObj->setListeMarchesNotifies($this->getListeMarchesNotifies());
        $copyObj->setSuivreMessage($this->getSuivreMessage());
        $copyObj->setEnvoyerMessage($this->getEnvoyerMessage());
        $copyObj->setSuiviFluxChorusTransversal($this->getSuiviFluxChorusTransversal());
        $copyObj->setGestionMandataire($this->getGestionMandataire());
        $copyObj->setGererNewsletter($this->getGererNewsletter());
        $copyObj->setGestionModelesFormulaire($this->getGestionModelesFormulaire());
        $copyObj->setGestionAdressesFacturationJal($this->getGestionAdressesFacturationJal());
        $copyObj->setAdministrerAdressesFacturationJal($this->getAdministrerAdressesFacturationJal());
        $copyObj->setRedactionDocumentsRedac($this->getRedactionDocumentsRedac());
        $copyObj->setValidationDocumentsRedac($this->getValidationDocumentsRedac());
        $copyObj->setGestionMiseDispositionPiecesMarche($this->getGestionMiseDispositionPiecesMarche());
        $copyObj->setAnnuaireAcheteur($this->getAnnuaireAcheteur());
        $copyObj->setReprendreIntegralementArticle($this->getReprendreIntegralementArticle());
        $copyObj->setAdministrerClauses($this->getAdministrerClauses());
        $copyObj->setValiderClauses($this->getValiderClauses());
        $copyObj->setAdministrerCanevas($this->getAdministrerCanevas());
        $copyObj->setValiderCanevas($this->getValiderCanevas());
        $copyObj->setAdministrerClausesEntiteAchats($this->getAdministrerClausesEntiteAchats());
        $copyObj->setGenererPiecesFormatOdt($this->getGenererPiecesFormatOdt());
        $copyObj->setPublierVersionClausierEditeur($this->getPublierVersionClausierEditeur());
        $copyObj->setAdministrerClausesEditeur($this->getAdministrerClausesEditeur());
        $copyObj->setValiderClausesEditeur($this->getValiderClausesEditeur());
        $copyObj->setAdministrerCanevasEditeur($this->getAdministrerCanevasEditeur());
        $copyObj->setValiderCanevasEditeur($this->getValiderCanevasEditeur());
        $copyObj->setDecisionSuiviSeul($this->getDecisionSuiviSeul());
        $copyObj->setOuvrirCandidatureHorsLigne($this->getOuvrirCandidatureHorsLigne());
        $copyObj->setOuvrirOffreHorsLigne($this->getOuvrirOffreHorsLigne());
        $copyObj->setOuvrirOffreTechniqueHorsLigne($this->getOuvrirOffreTechniqueHorsLigne());
        $copyObj->setOuvrirAnonymatHorsLigne($this->getOuvrirAnonymatHorsLigne());
        $copyObj->setEspaceCollaboratifGestionnaire($this->getEspaceCollaboratifGestionnaire());
        $copyObj->setEspaceCollaboratifContributeur($this->getEspaceCollaboratifContributeur());
        $copyObj->setGererOrganismes($this->getGererOrganismes());
        $copyObj->setGererAssociationsAgents($this->getGererAssociationsAgents());
        $copyObj->setModuleRedactionUniquement($this->getModuleRedactionUniquement());
        $copyObj->setHistoriqueNavigationInscrits($this->getHistoriqueNavigationInscrits());
        $copyObj->setTelechargerAccordsCadres($this->getTelechargerAccordsCadres());
        $copyObj->setCreerAnnonceDecisionResiliation($this->getCreerAnnonceDecisionResiliation());
        $copyObj->setCreerAnnonceSyntheseRapportAudit($this->getCreerAnnonceSyntheseRapportAudit());
        $copyObj->setGererOperations($this->getGererOperations());
        $copyObj->setTelechargerSiretAcheteur($this->getTelechargerSiretAcheteur());
        $copyObj->setGererReouverturesModification($this->getGererReouverturesModification());
        $copyObj->setEnvoyerDemandeValidation($this->getEnvoyerDemandeValidation());
        $copyObj->setSuivreConsultationOrganisme($this->getSuivreConsultationOrganisme());
        $copyObj->setRenseignerMontant($this->getRenseignerMontant());
        $copyObj->setGestionReferentielContact($this->getGestionReferentielContact());
        $copyObj->setGererCao($this->getGererCao());
        $copyObj->setValidationAccesFacture($this->getValidationAccesFacture());
        $copyObj->setGestionTravauxCao($this->getGestionTravauxCao());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAgent('0'); // this is a auto-increment column, so set to default value
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
     * @return CommonHabilitationAgent Clone of current object.
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
     * @return CommonHabilitationAgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonHabilitationAgentPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_agent = null;
        $this->gestion_agent_pole = null;
        $this->gestion_fournisseurs_envois_postaux = null;
        $this->gestion_bi_cles = null;
        $this->creer_consultation = null;
        $this->modifier_consultation = null;
        $this->valider_consultation = null;
        $this->publier_consultation = null;
        $this->suivre_consultation = null;
        $this->suivre_consultation_pole = null;
        $this->supprimer_enveloppe = null;
        $this->supprimer_consultation = null;
        $this->depouiller_candidature = null;
        $this->depouiller_offre = null;
        $this->messagerie_securisee = null;
        $this->acces_registre_depots_papier = null;
        $this->acces_registre_retraits_papier = null;
        $this->acces_registre_questions_papier = null;
        $this->gerer_encheres = null;
        $this->suivre_encheres = null;
        $this->suivi_entreprise = null;
        $this->envoi_boamp = null;
        $this->acces_classement_lot = null;
        $this->connecteur_sis = null;
        $this->connecteur_marco = null;
        $this->repondre_aux_questions = null;
        $this->appel_projet_formation = null;
        $this->utiliser_client_cao = null;
        $this->notification_boamp = null;
        $this->administrer_compte = null;
        $this->gestion_mapa = null;
        $this->gestion_type_validation = null;
        $this->approuver_consultation = null;
        $this->administrer_procedure = null;
        $this->restreindre_creation = null;
        $this->creer_liste_marches = null;
        $this->gestion_commissions = null;
        $this->suivi_seul_consultation = null;
        $this->attribution_marche = null;
        $this->fiche_recensement = null;
        $this->declarer_infructueux = null;
        $this->declarer_sans_suite = null;
        $this->creer_consultation_transverse = null;
        $this->ouvrir_candidature_en_ligne = null;
        $this->ouvrir_candidature_a_distance = null;
        $this->refuser_enveloppe = null;
        $this->gerer_admissibilite = null;
        $this->restaurer_enveloppe = null;
        $this->ouvrir_anonymat_en_ligne = null;
        $this->ouvrir_offre_en_ligne = null;
        $this->gestion_compte_boamp = null;
        $this->gestion_agents = null;
        $this->gestion_habilitations = null;
        $this->gerer_mapa_inferieur_montant = null;
        $this->gerer_mapa_superieur_montant = null;
        $this->modifier_consultation_avant_validation = null;
        $this->modifier_consultation_apres_validation = null;
        $this->acces_reponses = null;
        $this->telechargement_groupe_anticipe_plis_chiffres = null;
        $this->telechargement_unitaire_plis_chiffres = null;
        $this->ouvrir_offre_a_distance = null;
        $this->creer_annonce_information = null;
        $this->saisie_marches = null;
        $this->validation_marches = null;
        $this->publication_marches = null;
        $this->gerer_statistiques_metier = null;
        $this->gerer_archives = null;
        $this->administrer_procedures_formalisees = null;
        $this->creer_annonce_attribution = null;
        $this->acces_registre_retraits_electronique = null;
        $this->acces_registre_questions_electronique = null;
        $this->acces_registre_depots_electronique = null;
        $this->validation_simple = null;
        $this->validation_intermediaire = null;
        $this->validation_finale = null;
        $this->creer_suite_consultation = null;
        $this->hyper_admin = null;
        $this->droit_gestion_services = null;
        $this->suivi_acces = null;
        $this->statistiques_site = null;
        $this->statistiques_qos = null;
        $this->ouvrir_anonymat_a_distance = null;
        $this->gestion_compte_jal = null;
        $this->gestion_centrale_pub = null;
        $this->gestion_compte_groupe_moniteur = null;
        $this->ouvrir_offre_technique_en_ligne = null;
        $this->ouvrir_offre_technique_a_distance = null;
        $this->activation_compte_entreprise = null;
        $this->importer_enveloppe = null;
        $this->suivi_seul_registre_depots_papier = null;
        $this->suivi_seul_registre_retraits_papier = null;
        $this->suivi_seul_registre_questions_papier = null;
        $this->suivi_seul_registre_depots_electronique = null;
        $this->suivi_seul_registre_retraits_electronique = null;
        $this->suivi_seul_registre_questions_electronique = null;
        $this->modifier_consultation_mapa_inferieur_montant_apres_validation = null;
        $this->modifier_consultation_mapa_superieur_montant_apres_validation = null;
        $this->modifier_consultation_procedures_formalisees_apres_validation = null;
        $this->gerer_les_entreprises = null;
        $this->portee_societes_exclues = null;
        $this->portee_societes_exclues_tous_organismes = null;
        $this->modifier_societes_exclues = null;
        $this->supprimer_societes_exclues = null;
        $this->resultat_analyse = null;
        $this->gerer_adresses_service = null;
        $this->gerer_mon_service = null;
        $this->download_archives = null;
        $this->creer_annonce_extrait_pv = null;
        $this->creer_annonce_rapport_achevement = null;
        $this->gestion_certificats_agent = null;
        $this->creer_avis_programme_previsionnel = null;
        $this->annuler_consultation = null;
        $this->envoyer_publicite = null;
        $this->liste_marches_notifies = null;
        $this->suivre_message = null;
        $this->envoyer_message = null;
        $this->suivi_flux_chorus_transversal = null;
        $this->gestion_mandataire = null;
        $this->gerer_newsletter = null;
        $this->gestion_modeles_formulaire = null;
        $this->gestion_adresses_facturation_jal = null;
        $this->administrer_adresses_facturation_jal = null;
        $this->redaction_documents_redac = null;
        $this->validation_documents_redac = null;
        $this->gestion_mise_disposition_pieces_marche = null;
        $this->annuaire_acheteur = null;
        $this->reprendre_integralement_article = null;
        $this->administrer_clauses = null;
        $this->valider_clauses = null;
        $this->administrer_canevas = null;
        $this->valider_canevas = null;
        $this->administrer_clauses_entite_achats = null;
        $this->generer_pieces_format_odt = null;
        $this->publier_version_clausier_editeur = null;
        $this->administrer_clauses_editeur = null;
        $this->valider_clauses_editeur = null;
        $this->administrer_canevas_editeur = null;
        $this->valider_canevas_editeur = null;
        $this->decision_suivi_seul = null;
        $this->ouvrir_candidature_hors_ligne = null;
        $this->ouvrir_offre_hors_ligne = null;
        $this->ouvrir_offre_technique_hors_ligne = null;
        $this->ouvrir_anonymat_hors_ligne = null;
        $this->espace_collaboratif_gestionnaire = null;
        $this->espace_collaboratif_contributeur = null;
        $this->gerer_organismes = null;
        $this->gerer_associations_agents = null;
        $this->module_redaction_uniquement = null;
        $this->historique_navigation_inscrits = null;
        $this->telecharger_accords_cadres = null;
        $this->creer_annonce_decision_resiliation = null;
        $this->creer_annonce_synthese_rapport_audit = null;
        $this->gerer_operations = null;
        $this->telecharger_siret_acheteur = null;
        $this->gerer_reouvertures_modification = null;
        $this->envoyer_demande_validation = null;
        $this->suivre_consultation_organisme = null;
        $this->renseigner_montant = null;
        $this->gestion_referentiel_contact = null;
        $this->gerer_cao = null;
        $this->validation_acces_facture = null;
        $this->gestion_travaux_cao = null;
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
        return (string) $this->exportTo(CommonHabilitationAgentPeer::DEFAULT_STRING_FORMAT);
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
