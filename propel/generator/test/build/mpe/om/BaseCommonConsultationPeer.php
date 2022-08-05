<?php


/**
 * Base static class for performing query and update operations on the 'consultation' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonConsultationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'consultation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonConsultation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonConsultationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 262;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 262;

    /** the column name for the reference field */
    const REFERENCE = 'consultation.reference';

    /** the column name for the organisme field */
    const ORGANISME = 'consultation.organisme';

    /** the column name for the reference_utilisateur field */
    const REFERENCE_UTILISATEUR = 'consultation.reference_utilisateur';

    /** the column name for the categorie field */
    const CATEGORIE = 'consultation.categorie';

    /** the column name for the titre field */
    const TITRE = 'consultation.titre';

    /** the column name for the resume field */
    const RESUME = 'consultation.resume';

    /** the column name for the datedebut field */
    const DATEDEBUT = 'consultation.datedebut';

    /** the column name for the datefin field */
    const DATEFIN = 'consultation.datefin';

    /** the column name for the datevalidation field */
    const DATEVALIDATION = 'consultation.datevalidation';

    /** the column name for the type_procedure field */
    const TYPE_PROCEDURE = 'consultation.type_procedure';

    /** the column name for the code_procedure field */
    const CODE_PROCEDURE = 'consultation.code_procedure';

    /** the column name for the reponse_electronique field */
    const REPONSE_ELECTRONIQUE = 'consultation.reponse_electronique';

    /** the column name for the num_procedure field */
    const NUM_PROCEDURE = 'consultation.num_procedure';

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'consultation.id_type_procedure';

    /** the column name for the id_type_avis field */
    const ID_TYPE_AVIS = 'consultation.id_type_avis';

    /** the column name for the lieu_execution field */
    const LIEU_EXECUTION = 'consultation.lieu_execution';

    /** the column name for the type_mise_en_ligne field */
    const TYPE_MISE_EN_LIGNE = 'consultation.type_mise_en_ligne';

    /** the column name for the datemiseenligne field */
    const DATEMISEENLIGNE = 'consultation.datemiseenligne';

    /** the column name for the is_tiers_avis field */
    const IS_TIERS_AVIS = 'consultation.is_tiers_avis';

    /** the column name for the url field */
    const URL = 'consultation.url';

    /** the column name for the datefin_sad field */
    const DATEFIN_SAD = 'consultation.datefin_sad';

    /** the column name for the is_sys_acq_dyn field */
    const IS_SYS_ACQ_DYN = 'consultation.is_sys_acq_dyn';

    /** the column name for the reference_consultation_init field */
    const REFERENCE_CONSULTATION_INIT = 'consultation.reference_consultation_init';

    /** the column name for the signature_offre field */
    const SIGNATURE_OFFRE = 'consultation.signature_offre';

    /** the column name for the id_type_validation field */
    const ID_TYPE_VALIDATION = 'consultation.id_type_validation';

    /** the column name for the etat_approbation field */
    const ETAT_APPROBATION = 'consultation.etat_approbation';

    /** the column name for the etat_validation field */
    const ETAT_VALIDATION = 'consultation.etat_validation';

    /** the column name for the champ_supp_invisible field */
    const CHAMP_SUPP_INVISIBLE = 'consultation.champ_supp_invisible';

    /** the column name for the code_cpv_1 field */
    const CODE_CPV_1 = 'consultation.code_cpv_1';

    /** the column name for the code_cpv_2 field */
    const CODE_CPV_2 = 'consultation.code_cpv_2';

    /** the column name for the publication_europe field */
    const PUBLICATION_EUROPE = 'consultation.publication_europe';

    /** the column name for the etat_publication field */
    const ETAT_PUBLICATION = 'consultation.etat_publication';

    /** the column name for the poursuivre_affichage field */
    const POURSUIVRE_AFFICHAGE = 'consultation.poursuivre_affichage';

    /** the column name for the nbr_telechargement_dce field */
    const NBR_TELECHARGEMENT_DCE = 'consultation.nbr_telechargement_dce';

    /** the column name for the service_id field */
    const SERVICE_ID = 'consultation.service_id';

    /** the column name for the service_associe_id field */
    const SERVICE_ASSOCIE_ID = 'consultation.service_associe_id';

    /** the column name for the detail_consultation field */
    const DETAIL_CONSULTATION = 'consultation.detail_consultation';

    /** the column name for the date_fin_affichage field */
    const DATE_FIN_AFFICHAGE = 'consultation.date_fin_affichage';

    /** the column name for the depouillable_phase_consultation field */
    const DEPOUILLABLE_PHASE_CONSULTATION = 'consultation.depouillable_phase_consultation';

    /** the column name for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE = 'consultation.consultation_transverse';

    /** the column name for the consultation_achat_publique field */
    const CONSULTATION_ACHAT_PUBLIQUE = 'consultation.consultation_achat_publique';

    /** the column name for the url_consultation_achat_publique field */
    const URL_CONSULTATION_ACHAT_PUBLIQUE = 'consultation.url_consultation_achat_publique';

    /** the column name for the partial_dce_download field */
    const PARTIAL_DCE_DOWNLOAD = 'consultation.partial_dce_download';

    /** the column name for the tirage_plan field */
    const TIRAGE_PLAN = 'consultation.tirage_plan';

    /** the column name for the tireur_plan field */
    const TIREUR_PLAN = 'consultation.tireur_plan';

    /** the column name for the date_mise_en_ligne_calcule field */
    const DATE_MISE_EN_LIGNE_CALCULE = 'consultation.date_mise_en_ligne_calcule';

    /** the column name for the accessibilite_en field */
    const ACCESSIBILITE_EN = 'consultation.accessibilite_en';

    /** the column name for the accessibilite_es field */
    const ACCESSIBILITE_ES = 'consultation.accessibilite_es';

    /** the column name for the nbr_reponse field */
    const NBR_REPONSE = 'consultation.nbr_reponse';

    /** the column name for the id_type_procedure_org field */
    const ID_TYPE_PROCEDURE_ORG = 'consultation.id_type_procedure_org';

    /** the column name for the organisme_consultation_init field */
    const ORGANISME_CONSULTATION_INIT = 'consultation.organisme_consultation_init';

    /** the column name for the tirage_descriptif field */
    const TIRAGE_DESCRIPTIF = 'consultation.tirage_descriptif';

    /** the column name for the date_validation_intermediaire field */
    const DATE_VALIDATION_INTERMEDIAIRE = 'consultation.date_validation_intermediaire';

    /** the column name for the accessibilite_fr field */
    const ACCESSIBILITE_FR = 'consultation.accessibilite_fr';

    /** the column name for the id_tr_accessibilite field */
    const ID_TR_ACCESSIBILITE = 'consultation.id_tr_accessibilite';

    /** the column name for the accessibilite_cz field */
    const ACCESSIBILITE_CZ = 'consultation.accessibilite_cz';

    /** the column name for the accessibilite_du field */
    const ACCESSIBILITE_DU = 'consultation.accessibilite_du';

    /** the column name for the accessibilite_su field */
    const ACCESSIBILITE_SU = 'consultation.accessibilite_su';

    /** the column name for the accessibilite_ar field */
    const ACCESSIBILITE_AR = 'consultation.accessibilite_ar';

    /** the column name for the alloti field */
    const ALLOTI = 'consultation.alloti';

    /** the column name for the numero_phase field */
    const NUMERO_PHASE = 'consultation.numero_phase';

    /** the column name for the consultation_externe field */
    const CONSULTATION_EXTERNE = 'consultation.consultation_externe';

    /** the column name for the url_consultation_externe field */
    const URL_CONSULTATION_EXTERNE = 'consultation.url_consultation_externe';

    /** the column name for the org_denomination field */
    const ORG_DENOMINATION = 'consultation.org_denomination';

    /** the column name for the domaines_activites field */
    const DOMAINES_ACTIVITES = 'consultation.domaines_activites';

    /** the column name for the id_affaire field */
    const ID_AFFAIRE = 'consultation.id_affaire';

    /** the column name for the adresse_retrais_dossiers field */
    const ADRESSE_RETRAIS_DOSSIERS = 'consultation.adresse_retrais_dossiers';

    /** the column name for the caution_provisoire field */
    const CAUTION_PROVISOIRE = 'consultation.caution_provisoire';

    /** the column name for the adresse_depot_offres field */
    const ADRESSE_DEPOT_OFFRES = 'consultation.adresse_depot_offres';

    /** the column name for the lieu_ouverture_plis field */
    const LIEU_OUVERTURE_PLIS = 'consultation.lieu_ouverture_plis';

    /** the column name for the prix_aquisition_plans field */
    const PRIX_AQUISITION_PLANS = 'consultation.prix_aquisition_plans';

    /** the column name for the qualification field */
    const QUALIFICATION = 'consultation.qualification';

    /** the column name for the agrements field */
    const AGREMENTS = 'consultation.agrements';

    /** the column name for the add_echantillion field */
    const ADD_ECHANTILLION = 'consultation.add_echantillion';

    /** the column name for the date_limite_echantillion field */
    const DATE_LIMITE_ECHANTILLION = 'consultation.date_limite_echantillion';

    /** the column name for the add_reunion field */
    const ADD_REUNION = 'consultation.add_reunion';

    /** the column name for the date_reunion field */
    const DATE_REUNION = 'consultation.date_reunion';

    /** the column name for the variantes field */
    const VARIANTES = 'consultation.variantes';

    /** the column name for the adresse_retrais_dossiers_ar field */
    const ADRESSE_RETRAIS_DOSSIERS_AR = 'consultation.adresse_retrais_dossiers_ar';

    /** the column name for the adresse_depot_offres_ar field */
    const ADRESSE_DEPOT_OFFRES_AR = 'consultation.adresse_depot_offres_ar';

    /** the column name for the lieu_ouverture_plis_ar field */
    const LIEU_OUVERTURE_PLIS_AR = 'consultation.lieu_ouverture_plis_ar';

    /** the column name for the pieces_dossier_admin field */
    const PIECES_DOSSIER_ADMIN = 'consultation.pieces_dossier_admin';

    /** the column name for the pieces_dossier_admin_fr field */
    const PIECES_DOSSIER_ADMIN_FR = 'consultation.pieces_dossier_admin_fr';

    /** the column name for the pieces_dossier_admin_en field */
    const PIECES_DOSSIER_ADMIN_EN = 'consultation.pieces_dossier_admin_en';

    /** the column name for the pieces_dossier_admin_es field */
    const PIECES_DOSSIER_ADMIN_ES = 'consultation.pieces_dossier_admin_es';

    /** the column name for the pieces_dossier_admin_su field */
    const PIECES_DOSSIER_ADMIN_SU = 'consultation.pieces_dossier_admin_su';

    /** the column name for the pieces_dossier_admin_du field */
    const PIECES_DOSSIER_ADMIN_DU = 'consultation.pieces_dossier_admin_du';

    /** the column name for the pieces_dossier_admin_cz field */
    const PIECES_DOSSIER_ADMIN_CZ = 'consultation.pieces_dossier_admin_cz';

    /** the column name for the pieces_dossier_admin_ar field */
    const PIECES_DOSSIER_ADMIN_AR = 'consultation.pieces_dossier_admin_ar';

    /** the column name for the pieces_dossier_tech field */
    const PIECES_DOSSIER_TECH = 'consultation.pieces_dossier_tech';

    /** the column name for the pieces_dossier_tech_fr field */
    const PIECES_DOSSIER_TECH_FR = 'consultation.pieces_dossier_tech_fr';

    /** the column name for the pieces_dossier_tech_en field */
    const PIECES_DOSSIER_TECH_EN = 'consultation.pieces_dossier_tech_en';

    /** the column name for the pieces_dossier_tech_es field */
    const PIECES_DOSSIER_TECH_ES = 'consultation.pieces_dossier_tech_es';

    /** the column name for the pieces_dossier_tech_su field */
    const PIECES_DOSSIER_TECH_SU = 'consultation.pieces_dossier_tech_su';

    /** the column name for the pieces_dossier_tech_du field */
    const PIECES_DOSSIER_TECH_DU = 'consultation.pieces_dossier_tech_du';

    /** the column name for the pieces_dossier_tech_cz field */
    const PIECES_DOSSIER_TECH_CZ = 'consultation.pieces_dossier_tech_cz';

    /** the column name for the pieces_dossier_tech_ar field */
    const PIECES_DOSSIER_TECH_AR = 'consultation.pieces_dossier_tech_ar';

    /** the column name for the pieces_dossier_additif field */
    const PIECES_DOSSIER_ADDITIF = 'consultation.pieces_dossier_additif';

    /** the column name for the pieces_dossier_additif_fr field */
    const PIECES_DOSSIER_ADDITIF_FR = 'consultation.pieces_dossier_additif_fr';

    /** the column name for the pieces_dossier_additif_en field */
    const PIECES_DOSSIER_ADDITIF_EN = 'consultation.pieces_dossier_additif_en';

    /** the column name for the pieces_dossier_additif_es field */
    const PIECES_DOSSIER_ADDITIF_ES = 'consultation.pieces_dossier_additif_es';

    /** the column name for the pieces_dossier_additif_su field */
    const PIECES_DOSSIER_ADDITIF_SU = 'consultation.pieces_dossier_additif_su';

    /** the column name for the pieces_dossier_additif_du field */
    const PIECES_DOSSIER_ADDITIF_DU = 'consultation.pieces_dossier_additif_du';

    /** the column name for the pieces_dossier_additif_cz field */
    const PIECES_DOSSIER_ADDITIF_CZ = 'consultation.pieces_dossier_additif_cz';

    /** the column name for the pieces_dossier_additif_ar field */
    const PIECES_DOSSIER_ADDITIF_AR = 'consultation.pieces_dossier_additif_ar';

    /** the column name for the id_rpa field */
    const ID_RPA = 'consultation.id_rpa';

    /** the column name for the detail_consultation_fr field */
    const DETAIL_CONSULTATION_FR = 'consultation.detail_consultation_fr';

    /** the column name for the detail_consultation_en field */
    const DETAIL_CONSULTATION_EN = 'consultation.detail_consultation_en';

    /** the column name for the detail_consultation_es field */
    const DETAIL_CONSULTATION_ES = 'consultation.detail_consultation_es';

    /** the column name for the detail_consultation_su field */
    const DETAIL_CONSULTATION_SU = 'consultation.detail_consultation_su';

    /** the column name for the detail_consultation_du field */
    const DETAIL_CONSULTATION_DU = 'consultation.detail_consultation_du';

    /** the column name for the detail_consultation_cz field */
    const DETAIL_CONSULTATION_CZ = 'consultation.detail_consultation_cz';

    /** the column name for the detail_consultation_ar field */
    const DETAIL_CONSULTATION_AR = 'consultation.detail_consultation_ar';

    /** the column name for the echantillon field */
    const ECHANTILLON = 'consultation.echantillon';

    /** the column name for the reunion field */
    const REUNION = 'consultation.reunion';

    /** the column name for the visites_lieux field */
    const VISITES_LIEUX = 'consultation.visites_lieux';

    /** the column name for the variante_calcule field */
    const VARIANTE_CALCULE = 'consultation.variante_calcule';

    /** the column name for the adresse_retrais_dossiers_fr field */
    const ADRESSE_RETRAIS_DOSSIERS_FR = 'consultation.adresse_retrais_dossiers_fr';

    /** the column name for the adresse_retrais_dossiers_en field */
    const ADRESSE_RETRAIS_DOSSIERS_EN = 'consultation.adresse_retrais_dossiers_en';

    /** the column name for the adresse_retrais_dossiers_es field */
    const ADRESSE_RETRAIS_DOSSIERS_ES = 'consultation.adresse_retrais_dossiers_es';

    /** the column name for the adresse_retrais_dossiers_su field */
    const ADRESSE_RETRAIS_DOSSIERS_SU = 'consultation.adresse_retrais_dossiers_su';

    /** the column name for the adresse_retrais_dossiers_du field */
    const ADRESSE_RETRAIS_DOSSIERS_DU = 'consultation.adresse_retrais_dossiers_du';

    /** the column name for the adresse_retrais_dossiers_cz field */
    const ADRESSE_RETRAIS_DOSSIERS_CZ = 'consultation.adresse_retrais_dossiers_cz';

    /** the column name for the adresse_depot_offres_fr field */
    const ADRESSE_DEPOT_OFFRES_FR = 'consultation.adresse_depot_offres_fr';

    /** the column name for the adresse_depot_offres_en field */
    const ADRESSE_DEPOT_OFFRES_EN = 'consultation.adresse_depot_offres_en';

    /** the column name for the adresse_depot_offres_es field */
    const ADRESSE_DEPOT_OFFRES_ES = 'consultation.adresse_depot_offres_es';

    /** the column name for the adresse_depot_offres_su field */
    const ADRESSE_DEPOT_OFFRES_SU = 'consultation.adresse_depot_offres_su';

    /** the column name for the adresse_depot_offres_du field */
    const ADRESSE_DEPOT_OFFRES_DU = 'consultation.adresse_depot_offres_du';

    /** the column name for the adresse_depot_offres_cz field */
    const ADRESSE_DEPOT_OFFRES_CZ = 'consultation.adresse_depot_offres_cz';

    /** the column name for the lieu_ouverture_plis_fr field */
    const LIEU_OUVERTURE_PLIS_FR = 'consultation.lieu_ouverture_plis_fr';

    /** the column name for the lieu_ouverture_plis_en field */
    const LIEU_OUVERTURE_PLIS_EN = 'consultation.lieu_ouverture_plis_en';

    /** the column name for the lieu_ouverture_plis_es field */
    const LIEU_OUVERTURE_PLIS_ES = 'consultation.lieu_ouverture_plis_es';

    /** the column name for the lieu_ouverture_plis_su field */
    const LIEU_OUVERTURE_PLIS_SU = 'consultation.lieu_ouverture_plis_su';

    /** the column name for the lieu_ouverture_plis_du field */
    const LIEU_OUVERTURE_PLIS_DU = 'consultation.lieu_ouverture_plis_du';

    /** the column name for the lieu_ouverture_plis_cz field */
    const LIEU_OUVERTURE_PLIS_CZ = 'consultation.lieu_ouverture_plis_cz';

    /** the column name for the add_echantillion_fr field */
    const ADD_ECHANTILLION_FR = 'consultation.add_echantillion_fr';

    /** the column name for the add_echantillion_en field */
    const ADD_ECHANTILLION_EN = 'consultation.add_echantillion_en';

    /** the column name for the add_echantillion_es field */
    const ADD_ECHANTILLION_ES = 'consultation.add_echantillion_es';

    /** the column name for the add_echantillion_su field */
    const ADD_ECHANTILLION_SU = 'consultation.add_echantillion_su';

    /** the column name for the add_echantillion_du field */
    const ADD_ECHANTILLION_DU = 'consultation.add_echantillion_du';

    /** the column name for the add_echantillion_cz field */
    const ADD_ECHANTILLION_CZ = 'consultation.add_echantillion_cz';

    /** the column name for the add_echantillion_ar field */
    const ADD_ECHANTILLION_AR = 'consultation.add_echantillion_ar';

    /** the column name for the add_reunion_fr field */
    const ADD_REUNION_FR = 'consultation.add_reunion_fr';

    /** the column name for the add_reunion_en field */
    const ADD_REUNION_EN = 'consultation.add_reunion_en';

    /** the column name for the add_reunion_es field */
    const ADD_REUNION_ES = 'consultation.add_reunion_es';

    /** the column name for the add_reunion_su field */
    const ADD_REUNION_SU = 'consultation.add_reunion_su';

    /** the column name for the add_reunion_du field */
    const ADD_REUNION_DU = 'consultation.add_reunion_du';

    /** the column name for the add_reunion_cz field */
    const ADD_REUNION_CZ = 'consultation.add_reunion_cz';

    /** the column name for the add_reunion_ar field */
    const ADD_REUNION_AR = 'consultation.add_reunion_ar';

    /** the column name for the mode_passation field */
    const MODE_PASSATION = 'consultation.mode_passation';

    /** the column name for the consultation_annulee field */
    const CONSULTATION_ANNULEE = 'consultation.consultation_annulee';

    /** the column name for the Compte_Boamp_Associe field */
    const COMPTE_BOAMP_ASSOCIE = 'consultation.Compte_Boamp_Associe';

    /** the column name for the accessibilite_it field */
    const ACCESSIBILITE_IT = 'consultation.accessibilite_it';

    /** the column name for the adresse_depot_offres_it field */
    const ADRESSE_DEPOT_OFFRES_IT = 'consultation.adresse_depot_offres_it';

    /** the column name for the lieu_ouverture_plis_it field */
    const LIEU_OUVERTURE_PLIS_IT = 'consultation.lieu_ouverture_plis_it';

    /** the column name for the adresse_retrais_dossiers_it field */
    const ADRESSE_RETRAIS_DOSSIERS_IT = 'consultation.adresse_retrais_dossiers_it';

    /** the column name for the pieces_dossier_admin_it field */
    const PIECES_DOSSIER_ADMIN_IT = 'consultation.pieces_dossier_admin_it';

    /** the column name for the pieces_dossier_tech_it field */
    const PIECES_DOSSIER_TECH_IT = 'consultation.pieces_dossier_tech_it';

    /** the column name for the pieces_dossier_additif_it field */
    const PIECES_DOSSIER_ADDITIF_IT = 'consultation.pieces_dossier_additif_it';

    /** the column name for the detail_consultation_it field */
    const DETAIL_CONSULTATION_IT = 'consultation.detail_consultation_it';

    /** the column name for the add_echantillion_it field */
    const ADD_ECHANTILLION_IT = 'consultation.add_echantillion_it';

    /** the column name for the add_reunion_it field */
    const ADD_REUNION_IT = 'consultation.add_reunion_it';

    /** the column name for the codes_nuts field */
    const CODES_NUTS = 'consultation.codes_nuts';

    /** the column name for the intitule field */
    const INTITULE = 'consultation.intitule';

    /** the column name for the id_tr_intitule field */
    const ID_TR_INTITULE = 'consultation.id_tr_intitule';

    /** the column name for the objet field */
    const OBJET = 'consultation.objet';

    /** the column name for the id_tr_objet field */
    const ID_TR_OBJET = 'consultation.id_tr_objet';

    /** the column name for the date_decision field */
    const DATE_DECISION = 'consultation.date_decision';

    /** the column name for the type_acces field */
    const TYPE_ACCES = 'consultation.type_acces';

    /** the column name for the autoriser_reponse_electronique field */
    const AUTORISER_REPONSE_ELECTRONIQUE = 'consultation.autoriser_reponse_electronique';

    /** the column name for the regle_mise_en_ligne field */
    const REGLE_MISE_EN_LIGNE = 'consultation.regle_mise_en_ligne';

    /** the column name for the id_regle_validation field */
    const ID_REGLE_VALIDATION = 'consultation.id_regle_validation';

    /** the column name for the intitule_fr field */
    const INTITULE_FR = 'consultation.intitule_fr';

    /** the column name for the intitule_en field */
    const INTITULE_EN = 'consultation.intitule_en';

    /** the column name for the intitule_es field */
    const INTITULE_ES = 'consultation.intitule_es';

    /** the column name for the intitule_su field */
    const INTITULE_SU = 'consultation.intitule_su';

    /** the column name for the intitule_du field */
    const INTITULE_DU = 'consultation.intitule_du';

    /** the column name for the intitule_cz field */
    const INTITULE_CZ = 'consultation.intitule_cz';

    /** the column name for the intitule_ar field */
    const INTITULE_AR = 'consultation.intitule_ar';

    /** the column name for the intitule_it field */
    const INTITULE_IT = 'consultation.intitule_it';

    /** the column name for the objet_fr field */
    const OBJET_FR = 'consultation.objet_fr';

    /** the column name for the objet_en field */
    const OBJET_EN = 'consultation.objet_en';

    /** the column name for the objet_es field */
    const OBJET_ES = 'consultation.objet_es';

    /** the column name for the objet_su field */
    const OBJET_SU = 'consultation.objet_su';

    /** the column name for the objet_du field */
    const OBJET_DU = 'consultation.objet_du';

    /** the column name for the objet_cz field */
    const OBJET_CZ = 'consultation.objet_cz';

    /** the column name for the objet_ar field */
    const OBJET_AR = 'consultation.objet_ar';

    /** the column name for the objet_it field */
    const OBJET_IT = 'consultation.objet_it';

    /** the column name for the clause_sociale field */
    const CLAUSE_SOCIALE = 'consultation.clause_sociale';

    /** the column name for the clause_environnementale field */
    const CLAUSE_ENVIRONNEMENTALE = 'consultation.clause_environnementale';

    /** the column name for the reponse_obligatoire field */
    const REPONSE_OBLIGATOIRE = 'consultation.reponse_obligatoire';

    /** the column name for the autoriser_publicite field */
    const AUTORISER_PUBLICITE = 'consultation.autoriser_publicite';

    /** the column name for the type_envoi field */
    const TYPE_ENVOI = 'consultation.type_envoi';

    /** the column name for the chiffrement_offre field */
    const CHIFFREMENT_OFFRE = 'consultation.chiffrement_offre';

    /** the column name for the env_candidature field */
    const ENV_CANDIDATURE = 'consultation.env_candidature';

    /** the column name for the env_offre field */
    const ENV_OFFRE = 'consultation.env_offre';

    /** the column name for the env_anonymat field */
    const ENV_ANONYMAT = 'consultation.env_anonymat';

    /** the column name for the id_etat_consultation field */
    const ID_ETAT_CONSULTATION = 'consultation.id_etat_consultation';

    /** the column name for the reference_connecteur field */
    const REFERENCE_CONNECTEUR = 'consultation.reference_connecteur';

    /** the column name for the cons_statut field */
    const CONS_STATUT = 'consultation.cons_statut';

    /** the column name for the id_approbateur field */
    const ID_APPROBATEUR = 'consultation.id_approbateur';

    /** the column name for the id_valideur field */
    const ID_VALIDEUR = 'consultation.id_valideur';

    /** the column name for the service_validation field */
    const SERVICE_VALIDATION = 'consultation.service_validation';

    /** the column name for the id_createur field */
    const ID_CREATEUR = 'consultation.id_createur';

    /** the column name for the nom_createur field */
    const NOM_CREATEUR = 'consultation.nom_createur';

    /** the column name for the prenom_createur field */
    const PRENOM_CREATEUR = 'consultation.prenom_createur';

    /** the column name for the signature_acte_engagement field */
    const SIGNATURE_ACTE_ENGAGEMENT = 'consultation.signature_acte_engagement';

    /** the column name for the archiveMetaDescription field */
    const ARCHIVEMETADESCRIPTION = 'consultation.archiveMetaDescription';

    /** the column name for the archiveMetaMotsClef field */
    const ARCHIVEMETAMOTSCLEF = 'consultation.archiveMetaMotsClef';

    /** the column name for the archiveIdBlobZip field */
    const ARCHIVEIDBLOBZIP = 'consultation.archiveIdBlobZip';

    /** the column name for the decision_partielle field */
    const DECISION_PARTIELLE = 'consultation.decision_partielle';

    /** the column name for the type_decision_a_renseigner field */
    const TYPE_DECISION_A_RENSEIGNER = 'consultation.type_decision_a_renseigner';

    /** the column name for the type_decision_attribution_marche field */
    const TYPE_DECISION_ATTRIBUTION_MARCHE = 'consultation.type_decision_attribution_marche';

    /** the column name for the type_decision_declaration_sans_suite field */
    const TYPE_DECISION_DECLARATION_SANS_SUITE = 'consultation.type_decision_declaration_sans_suite';

    /** the column name for the type_decision_declaration_infructueux field */
    const TYPE_DECISION_DECLARATION_INFRUCTUEUX = 'consultation.type_decision_declaration_infructueux';

    /** the column name for the type_decision_selection_entreprise field */
    const TYPE_DECISION_SELECTION_ENTREPRISE = 'consultation.type_decision_selection_entreprise';

    /** the column name for the type_decision_attribution_accord_cadre field */
    const TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE = 'consultation.type_decision_attribution_accord_cadre';

    /** the column name for the type_decision_admission_sad field */
    const TYPE_DECISION_ADMISSION_SAD = 'consultation.type_decision_admission_sad';

    /** the column name for the type_decision_autre field */
    const TYPE_DECISION_AUTRE = 'consultation.type_decision_autre';

    /** the column name for the id_archiveur field */
    const ID_ARCHIVEUR = 'consultation.id_archiveur';

    /** the column name for the prenom_nom_agent_telechargement_plis field */
    const PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS = 'consultation.prenom_nom_agent_telechargement_plis';

    /** the column name for the id_agent_telechargement_plis field */
    const ID_AGENT_TELECHARGEMENT_PLIS = 'consultation.id_agent_telechargement_plis';

    /** the column name for the path_telechargement_plis field */
    const PATH_TELECHARGEMENT_PLIS = 'consultation.path_telechargement_plis';

    /** the column name for the date_telechargement_plis field */
    const DATE_TELECHARGEMENT_PLIS = 'consultation.date_telechargement_plis';

    /** the column name for the service_validation_intermediaire field */
    const SERVICE_VALIDATION_INTERMEDIAIRE = 'consultation.service_validation_intermediaire';

    /** the column name for the env_offre_technique field */
    const ENV_OFFRE_TECHNIQUE = 'consultation.env_offre_technique';

    /** the column name for the ref_org_partenaire field */
    const REF_ORG_PARTENAIRE = 'consultation.ref_org_partenaire';

    /** the column name for the date_archivage field */
    const DATE_ARCHIVAGE = 'consultation.date_archivage';

    /** the column name for the date_decision_annulation field */
    const DATE_DECISION_ANNULATION = 'consultation.date_decision_annulation';

    /** the column name for the commentaire_annulation field */
    const COMMENTAIRE_ANNULATION = 'consultation.commentaire_annulation';

    /** the column name for the date_mise_en_ligne_souhaitee field */
    const DATE_MISE_EN_LIGNE_SOUHAITEE = 'consultation.date_mise_en_ligne_souhaitee';

    /** the column name for the etat_en_attente_validation field */
    const ETAT_EN_ATTENTE_VALIDATION = 'consultation.etat_en_attente_validation';

    /** the column name for the dossier_additif field */
    const DOSSIER_ADDITIF = 'consultation.dossier_additif';

    /** the column name for the type_marche field */
    const TYPE_MARCHE = 'consultation.type_marche';

    /** the column name for the type_prestation field */
    const TYPE_PRESTATION = 'consultation.type_prestation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'consultation.date_modification';

    /** the column name for the delai_partiel field */
    const DELAI_PARTIEL = 'consultation.delai_partiel';

    /** the column name for the dateFinLocale field */
    const DATEFINLOCALE = 'consultation.dateFinLocale';

    /** the column name for the lieuResidence field */
    const LIEURESIDENCE = 'consultation.lieuResidence';

    /** the column name for the alerte field */
    const ALERTE = 'consultation.alerte';

    /** the column name for the doublon field */
    const DOUBLON = 'consultation.doublon';

    /** the column name for the denomination_adapte field */
    const DENOMINATION_ADAPTE = 'consultation.denomination_adapte';

    /** the column name for the url_consultation_avis_pub field */
    const URL_CONSULTATION_AVIS_PUB = 'consultation.url_consultation_avis_pub';

    /** the column name for the doublon_de field */
    const DOUBLON_DE = 'consultation.doublon_de';

    /** the column name for the entite_adjudicatrice field */
    const ENTITE_ADJUDICATRICE = 'consultation.entite_adjudicatrice';

    /** the column name for the code_operation field */
    const CODE_OPERATION = 'consultation.code_operation';

    /** the column name for the clause_sociale_condition_execution field */
    const CLAUSE_SOCIALE_CONDITION_EXECUTION = 'consultation.clause_sociale_condition_execution';

    /** the column name for the clause_sociale_insertion field */
    const CLAUSE_SOCIALE_INSERTION = 'consultation.clause_sociale_insertion';

    /** the column name for the clause_sociale_ateliers_proteges field */
    const CLAUSE_SOCIALE_ATELIERS_PROTEGES = 'consultation.clause_sociale_ateliers_proteges';

    /** the column name for the clause_env_specs_techniques field */
    const CLAUSE_ENV_SPECS_TECHNIQUES = 'consultation.clause_env_specs_techniques';

    /** the column name for the clause_env_cond_execution field */
    const CLAUSE_ENV_COND_EXECUTION = 'consultation.clause_env_cond_execution';

    /** the column name for the clause_env_criteres_select field */
    const CLAUSE_ENV_CRITERES_SELECT = 'consultation.clause_env_criteres_select';

    /** the column name for the id_donnee_complementaire field */
    const ID_DONNEE_COMPLEMENTAIRE = 'consultation.id_donnee_complementaire';

    /** the column name for the donnee_complementaire_obligatoire field */
    const DONNEE_COMPLEMENTAIRE_OBLIGATOIRE = 'consultation.donnee_complementaire_obligatoire';

    /** the column name for the mode_ouverture_reponse field */
    const MODE_OUVERTURE_REPONSE = 'consultation.mode_ouverture_reponse';

    /** the column name for the id_fichier_annulation field */
    const ID_FICHIER_ANNULATION = 'consultation.id_fichier_annulation';

    /** the column name for the idOperation field */
    const IDOPERATION = 'consultation.idOperation';

    /** the column name for the marche_public_simplifie field */
    const MARCHE_PUBLIC_SIMPLIFIE = 'consultation.marche_public_simplifie';

    /** the column name for the infos_blocs_atlas field */
    const INFOS_BLOCS_ATLAS = 'consultation.infos_blocs_atlas';

    /** the column name for the DATE_FIN_UNIX field */
    const DATE_FIN_UNIX = 'consultation.DATE_FIN_UNIX';

    /** the column name for the date_achevement field */
    const DATE_ACHEVEMENT = 'consultation.date_achevement';

    /** the column name for the nombre_de_lots field */
    const NOMBRE_DE_LOTS = 'consultation.nombre_de_lots';

    /** The enumerated values for the etat_approbation field */
    const ETAT_APPROBATION_0 = '0';
    const ETAT_APPROBATION_1 = '1';

    /** The enumerated values for the etat_validation field */
    const ETAT_VALIDATION_0 = '0';
    const ETAT_VALIDATION_1 = '1';

    /** The enumerated values for the publication_europe field */
    const PUBLICATION_EUROPE_0 = '0';
    const PUBLICATION_EUROPE_1 = '1';

    /** The enumerated values for the depouillable_phase_consultation field */
    const DEPOUILLABLE_PHASE_CONSULTATION_0 = '0';
    const DEPOUILLABLE_PHASE_CONSULTATION_1 = '1';

    /** The enumerated values for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE_0 = '0';
    const CONSULTATION_TRANSVERSE_1 = '1';

    /** The enumerated values for the consultation_achat_publique field */
    const CONSULTATION_ACHAT_PUBLIQUE_0 = '0';
    const CONSULTATION_ACHAT_PUBLIQUE_1 = '1';

    /** The enumerated values for the accessibilite_fr field */
    const ACCESSIBILITE_FR_0 = '0';
    const ACCESSIBILITE_FR_1 = '1';

    /** The enumerated values for the accessibilite_cz field */
    const ACCESSIBILITE_CZ_0 = '0';
    const ACCESSIBILITE_CZ_1 = '1';

    /** The enumerated values for the accessibilite_du field */
    const ACCESSIBILITE_DU_0 = '0';
    const ACCESSIBILITE_DU_1 = '1';

    /** The enumerated values for the accessibilite_su field */
    const ACCESSIBILITE_SU_0 = '0';
    const ACCESSIBILITE_SU_1 = '1';

    /** The enumerated values for the accessibilite_ar field */
    const ACCESSIBILITE_AR_0 = '0';
    const ACCESSIBILITE_AR_1 = '1';

    /** The enumerated values for the alloti field */
    const ALLOTI_0 = '0';
    const ALLOTI_1 = '1';

    /** The enumerated values for the consultation_externe field */
    const CONSULTATION_EXTERNE_0 = '0';
    const CONSULTATION_EXTERNE_1 = '1';

    /** The enumerated values for the echantillon field */
    const ECHANTILLON_0 = '0';
    const ECHANTILLON_1 = '1';

    /** The enumerated values for the reunion field */
    const REUNION_0 = '0';
    const REUNION_1 = '1';

    /** The enumerated values for the visites_lieux field */
    const VISITES_LIEUX_0 = '0';
    const VISITES_LIEUX_1 = '1';

    /** The enumerated values for the variante_calcule field */
    const VARIANTE_CALCULE_0 = '0';
    const VARIANTE_CALCULE_1 = '1';

    /** The enumerated values for the consultation_annulee field */
    const CONSULTATION_ANNULEE_0 = '0';
    const CONSULTATION_ANNULEE_1 = '1';

    /** The enumerated values for the accessibilite_it field */
    const ACCESSIBILITE_IT_0 = '0';
    const ACCESSIBILITE_IT_1 = '1';

    /** The enumerated values for the clause_sociale field */
    const CLAUSE_SOCIALE_0 = '0';
    const CLAUSE_SOCIALE_1 = '1';
    const CLAUSE_SOCIALE_2 = '2';

    /** The enumerated values for the clause_environnementale field */
    const CLAUSE_ENVIRONNEMENTALE_0 = '0';
    const CLAUSE_ENVIRONNEMENTALE_1 = '1';
    const CLAUSE_ENVIRONNEMENTALE_2 = '2';

    /** The enumerated values for the signature_acte_engagement field */
    const SIGNATURE_ACTE_ENGAGEMENT_0 = '0';
    const SIGNATURE_ACTE_ENGAGEMENT_1 = '1';

    /** The enumerated values for the decision_partielle field */
    const DECISION_PARTIELLE_0 = '0';
    const DECISION_PARTIELLE_1 = '1';

    /** The enumerated values for the type_decision_a_renseigner field */
    const TYPE_DECISION_A_RENSEIGNER_0 = '0';
    const TYPE_DECISION_A_RENSEIGNER_1 = '1';

    /** The enumerated values for the type_decision_attribution_marche field */
    const TYPE_DECISION_ATTRIBUTION_MARCHE_0 = '0';
    const TYPE_DECISION_ATTRIBUTION_MARCHE_1 = '1';

    /** The enumerated values for the type_decision_declaration_sans_suite field */
    const TYPE_DECISION_DECLARATION_SANS_SUITE_0 = '0';
    const TYPE_DECISION_DECLARATION_SANS_SUITE_1 = '1';

    /** The enumerated values for the type_decision_declaration_infructueux field */
    const TYPE_DECISION_DECLARATION_INFRUCTUEUX_0 = '0';
    const TYPE_DECISION_DECLARATION_INFRUCTUEUX_1 = '1';

    /** The enumerated values for the type_decision_selection_entreprise field */
    const TYPE_DECISION_SELECTION_ENTREPRISE_0 = '0';
    const TYPE_DECISION_SELECTION_ENTREPRISE_1 = '1';

    /** The enumerated values for the type_decision_attribution_accord_cadre field */
    const TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE_0 = '0';
    const TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE_1 = '1';

    /** The enumerated values for the type_decision_admission_sad field */
    const TYPE_DECISION_ADMISSION_SAD_0 = '0';
    const TYPE_DECISION_ADMISSION_SAD_1 = '1';

    /** The enumerated values for the type_decision_autre field */
    const TYPE_DECISION_AUTRE_0 = '0';
    const TYPE_DECISION_AUTRE_1 = '1';

    /** The enumerated values for the etat_en_attente_validation field */
    const ETAT_EN_ATTENTE_VALIDATION_0 = '0';
    const ETAT_EN_ATTENTE_VALIDATION_1 = '1';

    /** The enumerated values for the dossier_additif field */
    const DOSSIER_ADDITIF_0 = '0';
    const DOSSIER_ADDITIF_1 = '1';

    /** The enumerated values for the delai_partiel field */
    const DELAI_PARTIEL_0 = '0';
    const DELAI_PARTIEL_1 = '1';

    /** The enumerated values for the alerte field */
    const ALERTE_0 = '0';
    const ALERTE_1 = '1';

    /** The enumerated values for the doublon field */
    const DOUBLON_0 = '0';
    const DOUBLON_1 = '1';

    /** The enumerated values for the entite_adjudicatrice field */
    const ENTITE_ADJUDICATRICE_0 = '0';
    const ENTITE_ADJUDICATRICE_1 = '1';

    /** The enumerated values for the donnee_complementaire_obligatoire field */
    const DONNEE_COMPLEMENTAIRE_OBLIGATOIRE_0 = '0';
    const DONNEE_COMPLEMENTAIRE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the mode_ouverture_reponse field */
    const MODE_OUVERTURE_REPONSE_0 = '0';
    const MODE_OUVERTURE_REPONSE_1 = '1';

    /** The enumerated values for the marche_public_simplifie field */
    const MARCHE_PUBLIC_SIMPLIFIE_0 = '0';
    const MARCHE_PUBLIC_SIMPLIFIE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonConsultation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonConsultation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationPeer::$fieldNames[CommonConsultationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Reference', 'Organisme', 'ReferenceUtilisateur', 'Categorie', 'Titre', 'Resume', 'Datedebut', 'Datefin', 'Datevalidation', 'TypeProcedure', 'CodeProcedure', 'ReponseElectronique', 'NumProcedure', 'IdTypeProcedure', 'IdTypeAvis', 'LieuExecution', 'TypeMiseEnLigne', 'Datemiseenligne', 'IsTiersAvis', 'Url', 'DatefinSad', 'IsSysAcqDyn', 'ReferenceConsultationInit', 'SignatureOffre', 'IdTypeValidation', 'EtatApprobation', 'EtatValidation', 'ChampSuppInvisible', 'CodeCpv1', 'CodeCpv2', 'PublicationEurope', 'EtatPublication', 'PoursuivreAffichage', 'NbrTelechargementDce', 'ServiceId', 'ServiceAssocieId', 'DetailConsultation', 'DateFinAffichage', 'DepouillablePhaseConsultation', 'ConsultationTransverse', 'ConsultationAchatPublique', 'UrlConsultationAchatPublique', 'PartialDceDownload', 'TiragePlan', 'TireurPlan', 'DateMiseEnLigneCalcule', 'AccessibiliteEn', 'AccessibiliteEs', 'NbrReponse', 'IdTypeProcedureOrg', 'OrganismeConsultationInit', 'TirageDescriptif', 'DateValidationIntermediaire', 'AccessibiliteFr', 'IdTrAccessibilite', 'AccessibiliteCz', 'AccessibiliteDu', 'AccessibiliteSu', 'AccessibiliteAr', 'Alloti', 'NumeroPhase', 'ConsultationExterne', 'UrlConsultationExterne', 'OrgDenomination', 'DomainesActivites', 'IdAffaire', 'AdresseRetraisDossiers', 'CautionProvisoire', 'AdresseDepotOffres', 'LieuOuverturePlis', 'PrixAquisitionPlans', 'Qualification', 'Agrements', 'AddEchantillion', 'DateLimiteEchantillion', 'AddReunion', 'DateReunion', 'Variantes', 'AdresseRetraisDossiersAr', 'AdresseDepotOffresAr', 'LieuOuverturePlisAr', 'PiecesDossierAdmin', 'PiecesDossierAdminFr', 'PiecesDossierAdminEn', 'PiecesDossierAdminEs', 'PiecesDossierAdminSu', 'PiecesDossierAdminDu', 'PiecesDossierAdminCz', 'PiecesDossierAdminAr', 'PiecesDossierTech', 'PiecesDossierTechFr', 'PiecesDossierTechEn', 'PiecesDossierTechEs', 'PiecesDossierTechSu', 'PiecesDossierTechDu', 'PiecesDossierTechCz', 'PiecesDossierTechAr', 'PiecesDossierAdditif', 'PiecesDossierAdditifFr', 'PiecesDossierAdditifEn', 'PiecesDossierAdditifEs', 'PiecesDossierAdditifSu', 'PiecesDossierAdditifDu', 'PiecesDossierAdditifCz', 'PiecesDossierAdditifAr', 'IdRpa', 'DetailConsultationFr', 'DetailConsultationEn', 'DetailConsultationEs', 'DetailConsultationSu', 'DetailConsultationDu', 'DetailConsultationCz', 'DetailConsultationAr', 'Echantillon', 'Reunion', 'VisitesLieux', 'VarianteCalcule', 'AdresseRetraisDossiersFr', 'AdresseRetraisDossiersEn', 'AdresseRetraisDossiersEs', 'AdresseRetraisDossiersSu', 'AdresseRetraisDossiersDu', 'AdresseRetraisDossiersCz', 'AdresseDepotOffresFr', 'AdresseDepotOffresEn', 'AdresseDepotOffresEs', 'AdresseDepotOffresSu', 'AdresseDepotOffresDu', 'AdresseDepotOffresCz', 'LieuOuverturePlisFr', 'LieuOuverturePlisEn', 'LieuOuverturePlisEs', 'LieuOuverturePlisSu', 'LieuOuverturePlisDu', 'LieuOuverturePlisCz', 'AddEchantillionFr', 'AddEchantillionEn', 'AddEchantillionEs', 'AddEchantillionSu', 'AddEchantillionDu', 'AddEchantillionCz', 'AddEchantillionAr', 'AddReunionFr', 'AddReunionEn', 'AddReunionEs', 'AddReunionSu', 'AddReunionDu', 'AddReunionCz', 'AddReunionAr', 'ModePassation', 'ConsultationAnnulee', 'CompteBoampAssocie', 'AccessibiliteIt', 'AdresseDepotOffresIt', 'LieuOuverturePlisIt', 'AdresseRetraisDossiersIt', 'PiecesDossierAdminIt', 'PiecesDossierTechIt', 'PiecesDossierAdditifIt', 'DetailConsultationIt', 'AddEchantillionIt', 'AddReunionIt', 'CodesNuts', 'Intitule', 'IdTrIntitule', 'Objet', 'IdTrObjet', 'DateDecision', 'TypeAcces', 'AutoriserReponseElectronique', 'RegleMiseEnLigne', 'IdRegleValidation', 'IntituleFr', 'IntituleEn', 'IntituleEs', 'IntituleSu', 'IntituleDu', 'IntituleCz', 'IntituleAr', 'IntituleIt', 'ObjetFr', 'ObjetEn', 'ObjetEs', 'ObjetSu', 'ObjetDu', 'ObjetCz', 'ObjetAr', 'ObjetIt', 'ClauseSociale', 'ClauseEnvironnementale', 'ReponseObligatoire', 'AutoriserPublicite', 'TypeEnvoi', 'ChiffrementOffre', 'EnvCandidature', 'EnvOffre', 'EnvAnonymat', 'IdEtatConsultation', 'ReferenceConnecteur', 'ConsStatut', 'IdApprobateur', 'IdValideur', 'ServiceValidation', 'IdCreateur', 'NomCreateur', 'PrenomCreateur', 'SignatureActeEngagement', 'Archivemetadescription', 'Archivemetamotsclef', 'Archiveidblobzip', 'DecisionPartielle', 'TypeDecisionARenseigner', 'TypeDecisionAttributionMarche', 'TypeDecisionDeclarationSansSuite', 'TypeDecisionDeclarationInfructueux', 'TypeDecisionSelectionEntreprise', 'TypeDecisionAttributionAccordCadre', 'TypeDecisionAdmissionSad', 'TypeDecisionAutre', 'IdArchiveur', 'PrenomNomAgentTelechargementPlis', 'IdAgentTelechargementPlis', 'PathTelechargementPlis', 'DateTelechargementPlis', 'ServiceValidationIntermediaire', 'EnvOffreTechnique', 'RefOrgPartenaire', 'DateArchivage', 'DateDecisionAnnulation', 'CommentaireAnnulation', 'DateMiseEnLigneSouhaitee', 'EtatEnAttenteValidation', 'DossierAdditif', 'TypeMarche', 'TypePrestation', 'DateModification', 'DelaiPartiel', 'Datefinlocale', 'Lieuresidence', 'Alerte', 'Doublon', 'DenominationAdapte', 'UrlConsultationAvisPub', 'DoublonDe', 'EntiteAdjudicatrice', 'CodeOperation', 'ClauseSocialeConditionExecution', 'ClauseSocialeInsertion', 'ClauseSocialeAteliersProteges', 'ClauseEnvSpecsTechniques', 'ClauseEnvCondExecution', 'ClauseEnvCriteresSelect', 'IdDonneeComplementaire', 'DonneeComplementaireObligatoire', 'ModeOuvertureReponse', 'IdFichierAnnulation', 'Idoperation', 'MarchePublicSimplifie', 'InfosBlocsAtlas', 'DateFinUnix', 'DateAchevement', 'NombreDeLots', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('reference', 'organisme', 'referenceUtilisateur', 'categorie', 'titre', 'resume', 'datedebut', 'datefin', 'datevalidation', 'typeProcedure', 'codeProcedure', 'reponseElectronique', 'numProcedure', 'idTypeProcedure', 'idTypeAvis', 'lieuExecution', 'typeMiseEnLigne', 'datemiseenligne', 'isTiersAvis', 'url', 'datefinSad', 'isSysAcqDyn', 'referenceConsultationInit', 'signatureOffre', 'idTypeValidation', 'etatApprobation', 'etatValidation', 'champSuppInvisible', 'codeCpv1', 'codeCpv2', 'publicationEurope', 'etatPublication', 'poursuivreAffichage', 'nbrTelechargementDce', 'serviceId', 'serviceAssocieId', 'detailConsultation', 'dateFinAffichage', 'depouillablePhaseConsultation', 'consultationTransverse', 'consultationAchatPublique', 'urlConsultationAchatPublique', 'partialDceDownload', 'tiragePlan', 'tireurPlan', 'dateMiseEnLigneCalcule', 'accessibiliteEn', 'accessibiliteEs', 'nbrReponse', 'idTypeProcedureOrg', 'organismeConsultationInit', 'tirageDescriptif', 'dateValidationIntermediaire', 'accessibiliteFr', 'idTrAccessibilite', 'accessibiliteCz', 'accessibiliteDu', 'accessibiliteSu', 'accessibiliteAr', 'alloti', 'numeroPhase', 'consultationExterne', 'urlConsultationExterne', 'orgDenomination', 'domainesActivites', 'idAffaire', 'adresseRetraisDossiers', 'cautionProvisoire', 'adresseDepotOffres', 'lieuOuverturePlis', 'prixAquisitionPlans', 'qualification', 'agrements', 'addEchantillion', 'dateLimiteEchantillion', 'addReunion', 'dateReunion', 'variantes', 'adresseRetraisDossiersAr', 'adresseDepotOffresAr', 'lieuOuverturePlisAr', 'piecesDossierAdmin', 'piecesDossierAdminFr', 'piecesDossierAdminEn', 'piecesDossierAdminEs', 'piecesDossierAdminSu', 'piecesDossierAdminDu', 'piecesDossierAdminCz', 'piecesDossierAdminAr', 'piecesDossierTech', 'piecesDossierTechFr', 'piecesDossierTechEn', 'piecesDossierTechEs', 'piecesDossierTechSu', 'piecesDossierTechDu', 'piecesDossierTechCz', 'piecesDossierTechAr', 'piecesDossierAdditif', 'piecesDossierAdditifFr', 'piecesDossierAdditifEn', 'piecesDossierAdditifEs', 'piecesDossierAdditifSu', 'piecesDossierAdditifDu', 'piecesDossierAdditifCz', 'piecesDossierAdditifAr', 'idRpa', 'detailConsultationFr', 'detailConsultationEn', 'detailConsultationEs', 'detailConsultationSu', 'detailConsultationDu', 'detailConsultationCz', 'detailConsultationAr', 'echantillon', 'reunion', 'visitesLieux', 'varianteCalcule', 'adresseRetraisDossiersFr', 'adresseRetraisDossiersEn', 'adresseRetraisDossiersEs', 'adresseRetraisDossiersSu', 'adresseRetraisDossiersDu', 'adresseRetraisDossiersCz', 'adresseDepotOffresFr', 'adresseDepotOffresEn', 'adresseDepotOffresEs', 'adresseDepotOffresSu', 'adresseDepotOffresDu', 'adresseDepotOffresCz', 'lieuOuverturePlisFr', 'lieuOuverturePlisEn', 'lieuOuverturePlisEs', 'lieuOuverturePlisSu', 'lieuOuverturePlisDu', 'lieuOuverturePlisCz', 'addEchantillionFr', 'addEchantillionEn', 'addEchantillionEs', 'addEchantillionSu', 'addEchantillionDu', 'addEchantillionCz', 'addEchantillionAr', 'addReunionFr', 'addReunionEn', 'addReunionEs', 'addReunionSu', 'addReunionDu', 'addReunionCz', 'addReunionAr', 'modePassation', 'consultationAnnulee', 'compteBoampAssocie', 'accessibiliteIt', 'adresseDepotOffresIt', 'lieuOuverturePlisIt', 'adresseRetraisDossiersIt', 'piecesDossierAdminIt', 'piecesDossierTechIt', 'piecesDossierAdditifIt', 'detailConsultationIt', 'addEchantillionIt', 'addReunionIt', 'codesNuts', 'intitule', 'idTrIntitule', 'objet', 'idTrObjet', 'dateDecision', 'typeAcces', 'autoriserReponseElectronique', 'regleMiseEnLigne', 'idRegleValidation', 'intituleFr', 'intituleEn', 'intituleEs', 'intituleSu', 'intituleDu', 'intituleCz', 'intituleAr', 'intituleIt', 'objetFr', 'objetEn', 'objetEs', 'objetSu', 'objetDu', 'objetCz', 'objetAr', 'objetIt', 'clauseSociale', 'clauseEnvironnementale', 'reponseObligatoire', 'autoriserPublicite', 'typeEnvoi', 'chiffrementOffre', 'envCandidature', 'envOffre', 'envAnonymat', 'idEtatConsultation', 'referenceConnecteur', 'consStatut', 'idApprobateur', 'idValideur', 'serviceValidation', 'idCreateur', 'nomCreateur', 'prenomCreateur', 'signatureActeEngagement', 'archivemetadescription', 'archivemetamotsclef', 'archiveidblobzip', 'decisionPartielle', 'typeDecisionARenseigner', 'typeDecisionAttributionMarche', 'typeDecisionDeclarationSansSuite', 'typeDecisionDeclarationInfructueux', 'typeDecisionSelectionEntreprise', 'typeDecisionAttributionAccordCadre', 'typeDecisionAdmissionSad', 'typeDecisionAutre', 'idArchiveur', 'prenomNomAgentTelechargementPlis', 'idAgentTelechargementPlis', 'pathTelechargementPlis', 'dateTelechargementPlis', 'serviceValidationIntermediaire', 'envOffreTechnique', 'refOrgPartenaire', 'dateArchivage', 'dateDecisionAnnulation', 'commentaireAnnulation', 'dateMiseEnLigneSouhaitee', 'etatEnAttenteValidation', 'dossierAdditif', 'typeMarche', 'typePrestation', 'dateModification', 'delaiPartiel', 'datefinlocale', 'lieuresidence', 'alerte', 'doublon', 'denominationAdapte', 'urlConsultationAvisPub', 'doublonDe', 'entiteAdjudicatrice', 'codeOperation', 'clauseSocialeConditionExecution', 'clauseSocialeInsertion', 'clauseSocialeAteliersProteges', 'clauseEnvSpecsTechniques', 'clauseEnvCondExecution', 'clauseEnvCriteresSelect', 'idDonneeComplementaire', 'donneeComplementaireObligatoire', 'modeOuvertureReponse', 'idFichierAnnulation', 'idoperation', 'marchePublicSimplifie', 'infosBlocsAtlas', 'dateFinUnix', 'dateAchevement', 'nombreDeLots', ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationPeer::REFERENCE, CommonConsultationPeer::ORGANISME, CommonConsultationPeer::REFERENCE_UTILISATEUR, CommonConsultationPeer::CATEGORIE, CommonConsultationPeer::TITRE, CommonConsultationPeer::RESUME, CommonConsultationPeer::DATEDEBUT, CommonConsultationPeer::DATEFIN, CommonConsultationPeer::DATEVALIDATION, CommonConsultationPeer::TYPE_PROCEDURE, CommonConsultationPeer::CODE_PROCEDURE, CommonConsultationPeer::REPONSE_ELECTRONIQUE, CommonConsultationPeer::NUM_PROCEDURE, CommonConsultationPeer::ID_TYPE_PROCEDURE, CommonConsultationPeer::ID_TYPE_AVIS, CommonConsultationPeer::LIEU_EXECUTION, CommonConsultationPeer::TYPE_MISE_EN_LIGNE, CommonConsultationPeer::DATEMISEENLIGNE, CommonConsultationPeer::IS_TIERS_AVIS, CommonConsultationPeer::URL, CommonConsultationPeer::DATEFIN_SAD, CommonConsultationPeer::IS_SYS_ACQ_DYN, CommonConsultationPeer::REFERENCE_CONSULTATION_INIT, CommonConsultationPeer::SIGNATURE_OFFRE, CommonConsultationPeer::ID_TYPE_VALIDATION, CommonConsultationPeer::ETAT_APPROBATION, CommonConsultationPeer::ETAT_VALIDATION, CommonConsultationPeer::CHAMP_SUPP_INVISIBLE, CommonConsultationPeer::CODE_CPV_1, CommonConsultationPeer::CODE_CPV_2, CommonConsultationPeer::PUBLICATION_EUROPE, CommonConsultationPeer::ETAT_PUBLICATION, CommonConsultationPeer::POURSUIVRE_AFFICHAGE, CommonConsultationPeer::NBR_TELECHARGEMENT_DCE, CommonConsultationPeer::SERVICE_ID, CommonConsultationPeer::SERVICE_ASSOCIE_ID, CommonConsultationPeer::DETAIL_CONSULTATION, CommonConsultationPeer::DATE_FIN_AFFICHAGE, CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION, CommonConsultationPeer::CONSULTATION_TRANSVERSE, CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE, CommonConsultationPeer::URL_CONSULTATION_ACHAT_PUBLIQUE, CommonConsultationPeer::PARTIAL_DCE_DOWNLOAD, CommonConsultationPeer::TIRAGE_PLAN, CommonConsultationPeer::TIREUR_PLAN, CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE, CommonConsultationPeer::ACCESSIBILITE_EN, CommonConsultationPeer::ACCESSIBILITE_ES, CommonConsultationPeer::NBR_REPONSE, CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG, CommonConsultationPeer::ORGANISME_CONSULTATION_INIT, CommonConsultationPeer::TIRAGE_DESCRIPTIF, CommonConsultationPeer::DATE_VALIDATION_INTERMEDIAIRE, CommonConsultationPeer::ACCESSIBILITE_FR, CommonConsultationPeer::ID_TR_ACCESSIBILITE, CommonConsultationPeer::ACCESSIBILITE_CZ, CommonConsultationPeer::ACCESSIBILITE_DU, CommonConsultationPeer::ACCESSIBILITE_SU, CommonConsultationPeer::ACCESSIBILITE_AR, CommonConsultationPeer::ALLOTI, CommonConsultationPeer::NUMERO_PHASE, CommonConsultationPeer::CONSULTATION_EXTERNE, CommonConsultationPeer::URL_CONSULTATION_EXTERNE, CommonConsultationPeer::ORG_DENOMINATION, CommonConsultationPeer::DOMAINES_ACTIVITES, CommonConsultationPeer::ID_AFFAIRE, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS, CommonConsultationPeer::CAUTION_PROVISOIRE, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES, CommonConsultationPeer::LIEU_OUVERTURE_PLIS, CommonConsultationPeer::PRIX_AQUISITION_PLANS, CommonConsultationPeer::QUALIFICATION, CommonConsultationPeer::AGREMENTS, CommonConsultationPeer::ADD_ECHANTILLION, CommonConsultationPeer::DATE_LIMITE_ECHANTILLION, CommonConsultationPeer::ADD_REUNION, CommonConsultationPeer::DATE_REUNION, CommonConsultationPeer::VARIANTES, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_AR, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_AR, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_AR, CommonConsultationPeer::PIECES_DOSSIER_ADMIN, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_FR, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_EN, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_ES, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_SU, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_DU, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_CZ, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_AR, CommonConsultationPeer::PIECES_DOSSIER_TECH, CommonConsultationPeer::PIECES_DOSSIER_TECH_FR, CommonConsultationPeer::PIECES_DOSSIER_TECH_EN, CommonConsultationPeer::PIECES_DOSSIER_TECH_ES, CommonConsultationPeer::PIECES_DOSSIER_TECH_SU, CommonConsultationPeer::PIECES_DOSSIER_TECH_DU, CommonConsultationPeer::PIECES_DOSSIER_TECH_CZ, CommonConsultationPeer::PIECES_DOSSIER_TECH_AR, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_FR, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_EN, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_ES, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_SU, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_DU, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_CZ, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_AR, CommonConsultationPeer::ID_RPA, CommonConsultationPeer::DETAIL_CONSULTATION_FR, CommonConsultationPeer::DETAIL_CONSULTATION_EN, CommonConsultationPeer::DETAIL_CONSULTATION_ES, CommonConsultationPeer::DETAIL_CONSULTATION_SU, CommonConsultationPeer::DETAIL_CONSULTATION_DU, CommonConsultationPeer::DETAIL_CONSULTATION_CZ, CommonConsultationPeer::DETAIL_CONSULTATION_AR, CommonConsultationPeer::ECHANTILLON, CommonConsultationPeer::REUNION, CommonConsultationPeer::VISITES_LIEUX, CommonConsultationPeer::VARIANTE_CALCULE, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_FR, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_EN, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_ES, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_SU, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_DU, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_CZ, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_FR, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_EN, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_ES, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_SU, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_DU, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_CZ, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_FR, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_EN, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_ES, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_SU, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_DU, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_CZ, CommonConsultationPeer::ADD_ECHANTILLION_FR, CommonConsultationPeer::ADD_ECHANTILLION_EN, CommonConsultationPeer::ADD_ECHANTILLION_ES, CommonConsultationPeer::ADD_ECHANTILLION_SU, CommonConsultationPeer::ADD_ECHANTILLION_DU, CommonConsultationPeer::ADD_ECHANTILLION_CZ, CommonConsultationPeer::ADD_ECHANTILLION_AR, CommonConsultationPeer::ADD_REUNION_FR, CommonConsultationPeer::ADD_REUNION_EN, CommonConsultationPeer::ADD_REUNION_ES, CommonConsultationPeer::ADD_REUNION_SU, CommonConsultationPeer::ADD_REUNION_DU, CommonConsultationPeer::ADD_REUNION_CZ, CommonConsultationPeer::ADD_REUNION_AR, CommonConsultationPeer::MODE_PASSATION, CommonConsultationPeer::CONSULTATION_ANNULEE, CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE, CommonConsultationPeer::ACCESSIBILITE_IT, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_IT, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_IT, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_IT, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_IT, CommonConsultationPeer::PIECES_DOSSIER_TECH_IT, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_IT, CommonConsultationPeer::DETAIL_CONSULTATION_IT, CommonConsultationPeer::ADD_ECHANTILLION_IT, CommonConsultationPeer::ADD_REUNION_IT, CommonConsultationPeer::CODES_NUTS, CommonConsultationPeer::INTITULE, CommonConsultationPeer::ID_TR_INTITULE, CommonConsultationPeer::OBJET, CommonConsultationPeer::ID_TR_OBJET, CommonConsultationPeer::DATE_DECISION, CommonConsultationPeer::TYPE_ACCES, CommonConsultationPeer::AUTORISER_REPONSE_ELECTRONIQUE, CommonConsultationPeer::REGLE_MISE_EN_LIGNE, CommonConsultationPeer::ID_REGLE_VALIDATION, CommonConsultationPeer::INTITULE_FR, CommonConsultationPeer::INTITULE_EN, CommonConsultationPeer::INTITULE_ES, CommonConsultationPeer::INTITULE_SU, CommonConsultationPeer::INTITULE_DU, CommonConsultationPeer::INTITULE_CZ, CommonConsultationPeer::INTITULE_AR, CommonConsultationPeer::INTITULE_IT, CommonConsultationPeer::OBJET_FR, CommonConsultationPeer::OBJET_EN, CommonConsultationPeer::OBJET_ES, CommonConsultationPeer::OBJET_SU, CommonConsultationPeer::OBJET_DU, CommonConsultationPeer::OBJET_CZ, CommonConsultationPeer::OBJET_AR, CommonConsultationPeer::OBJET_IT, CommonConsultationPeer::CLAUSE_SOCIALE, CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE, CommonConsultationPeer::REPONSE_OBLIGATOIRE, CommonConsultationPeer::AUTORISER_PUBLICITE, CommonConsultationPeer::TYPE_ENVOI, CommonConsultationPeer::CHIFFREMENT_OFFRE, CommonConsultationPeer::ENV_CANDIDATURE, CommonConsultationPeer::ENV_OFFRE, CommonConsultationPeer::ENV_ANONYMAT, CommonConsultationPeer::ID_ETAT_CONSULTATION, CommonConsultationPeer::REFERENCE_CONNECTEUR, CommonConsultationPeer::CONS_STATUT, CommonConsultationPeer::ID_APPROBATEUR, CommonConsultationPeer::ID_VALIDEUR, CommonConsultationPeer::SERVICE_VALIDATION, CommonConsultationPeer::ID_CREATEUR, CommonConsultationPeer::NOM_CREATEUR, CommonConsultationPeer::PRENOM_CREATEUR, CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT, CommonConsultationPeer::ARCHIVEMETADESCRIPTION, CommonConsultationPeer::ARCHIVEMETAMOTSCLEF, CommonConsultationPeer::ARCHIVEIDBLOBZIP, CommonConsultationPeer::DECISION_PARTIELLE, CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER, CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE, CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE, CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX, CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE, CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE, CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD, CommonConsultationPeer::TYPE_DECISION_AUTRE, CommonConsultationPeer::ID_ARCHIVEUR, CommonConsultationPeer::PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS, CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS, CommonConsultationPeer::PATH_TELECHARGEMENT_PLIS, CommonConsultationPeer::DATE_TELECHARGEMENT_PLIS, CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE, CommonConsultationPeer::ENV_OFFRE_TECHNIQUE, CommonConsultationPeer::REF_ORG_PARTENAIRE, CommonConsultationPeer::DATE_ARCHIVAGE, CommonConsultationPeer::DATE_DECISION_ANNULATION, CommonConsultationPeer::COMMENTAIRE_ANNULATION, CommonConsultationPeer::DATE_MISE_EN_LIGNE_SOUHAITEE, CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION, CommonConsultationPeer::DOSSIER_ADDITIF, CommonConsultationPeer::TYPE_MARCHE, CommonConsultationPeer::TYPE_PRESTATION, CommonConsultationPeer::DATE_MODIFICATION, CommonConsultationPeer::DELAI_PARTIEL, CommonConsultationPeer::DATEFINLOCALE, CommonConsultationPeer::LIEURESIDENCE, CommonConsultationPeer::ALERTE, CommonConsultationPeer::DOUBLON, CommonConsultationPeer::DENOMINATION_ADAPTE, CommonConsultationPeer::URL_CONSULTATION_AVIS_PUB, CommonConsultationPeer::DOUBLON_DE, CommonConsultationPeer::ENTITE_ADJUDICATRICE, CommonConsultationPeer::CODE_OPERATION, CommonConsultationPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION, CommonConsultationPeer::CLAUSE_SOCIALE_INSERTION, CommonConsultationPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES, CommonConsultationPeer::CLAUSE_ENV_SPECS_TECHNIQUES, CommonConsultationPeer::CLAUSE_ENV_COND_EXECUTION, CommonConsultationPeer::CLAUSE_ENV_CRITERES_SELECT, CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE, CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE, CommonConsultationPeer::MODE_OUVERTURE_REPONSE, CommonConsultationPeer::ID_FICHIER_ANNULATION, CommonConsultationPeer::IDOPERATION, CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE, CommonConsultationPeer::INFOS_BLOCS_ATLAS, CommonConsultationPeer::DATE_FIN_UNIX, CommonConsultationPeer::DATE_ACHEVEMENT, CommonConsultationPeer::NOMBRE_DE_LOTS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFERENCE', 'ORGANISME', 'REFERENCE_UTILISATEUR', 'CATEGORIE', 'TITRE', 'RESUME', 'DATEDEBUT', 'DATEFIN', 'DATEVALIDATION', 'TYPE_PROCEDURE', 'CODE_PROCEDURE', 'REPONSE_ELECTRONIQUE', 'NUM_PROCEDURE', 'ID_TYPE_PROCEDURE', 'ID_TYPE_AVIS', 'LIEU_EXECUTION', 'TYPE_MISE_EN_LIGNE', 'DATEMISEENLIGNE', 'IS_TIERS_AVIS', 'URL', 'DATEFIN_SAD', 'IS_SYS_ACQ_DYN', 'REFERENCE_CONSULTATION_INIT', 'SIGNATURE_OFFRE', 'ID_TYPE_VALIDATION', 'ETAT_APPROBATION', 'ETAT_VALIDATION', 'CHAMP_SUPP_INVISIBLE', 'CODE_CPV_1', 'CODE_CPV_2', 'PUBLICATION_EUROPE', 'ETAT_PUBLICATION', 'POURSUIVRE_AFFICHAGE', 'NBR_TELECHARGEMENT_DCE', 'SERVICE_ID', 'SERVICE_ASSOCIE_ID', 'DETAIL_CONSULTATION', 'DATE_FIN_AFFICHAGE', 'DEPOUILLABLE_PHASE_CONSULTATION', 'CONSULTATION_TRANSVERSE', 'CONSULTATION_ACHAT_PUBLIQUE', 'URL_CONSULTATION_ACHAT_PUBLIQUE', 'PARTIAL_DCE_DOWNLOAD', 'TIRAGE_PLAN', 'TIREUR_PLAN', 'DATE_MISE_EN_LIGNE_CALCULE', 'ACCESSIBILITE_EN', 'ACCESSIBILITE_ES', 'NBR_REPONSE', 'ID_TYPE_PROCEDURE_ORG', 'ORGANISME_CONSULTATION_INIT', 'TIRAGE_DESCRIPTIF', 'DATE_VALIDATION_INTERMEDIAIRE', 'ACCESSIBILITE_FR', 'ID_TR_ACCESSIBILITE', 'ACCESSIBILITE_CZ', 'ACCESSIBILITE_DU', 'ACCESSIBILITE_SU', 'ACCESSIBILITE_AR', 'ALLOTI', 'NUMERO_PHASE', 'CONSULTATION_EXTERNE', 'URL_CONSULTATION_EXTERNE', 'ORG_DENOMINATION', 'DOMAINES_ACTIVITES', 'ID_AFFAIRE', 'ADRESSE_RETRAIS_DOSSIERS', 'CAUTION_PROVISOIRE', 'ADRESSE_DEPOT_OFFRES', 'LIEU_OUVERTURE_PLIS', 'PRIX_AQUISITION_PLANS', 'QUALIFICATION', 'AGREMENTS', 'ADD_ECHANTILLION', 'DATE_LIMITE_ECHANTILLION', 'ADD_REUNION', 'DATE_REUNION', 'VARIANTES', 'ADRESSE_RETRAIS_DOSSIERS_AR', 'ADRESSE_DEPOT_OFFRES_AR', 'LIEU_OUVERTURE_PLIS_AR', 'PIECES_DOSSIER_ADMIN', 'PIECES_DOSSIER_ADMIN_FR', 'PIECES_DOSSIER_ADMIN_EN', 'PIECES_DOSSIER_ADMIN_ES', 'PIECES_DOSSIER_ADMIN_SU', 'PIECES_DOSSIER_ADMIN_DU', 'PIECES_DOSSIER_ADMIN_CZ', 'PIECES_DOSSIER_ADMIN_AR', 'PIECES_DOSSIER_TECH', 'PIECES_DOSSIER_TECH_FR', 'PIECES_DOSSIER_TECH_EN', 'PIECES_DOSSIER_TECH_ES', 'PIECES_DOSSIER_TECH_SU', 'PIECES_DOSSIER_TECH_DU', 'PIECES_DOSSIER_TECH_CZ', 'PIECES_DOSSIER_TECH_AR', 'PIECES_DOSSIER_ADDITIF', 'PIECES_DOSSIER_ADDITIF_FR', 'PIECES_DOSSIER_ADDITIF_EN', 'PIECES_DOSSIER_ADDITIF_ES', 'PIECES_DOSSIER_ADDITIF_SU', 'PIECES_DOSSIER_ADDITIF_DU', 'PIECES_DOSSIER_ADDITIF_CZ', 'PIECES_DOSSIER_ADDITIF_AR', 'ID_RPA', 'DETAIL_CONSULTATION_FR', 'DETAIL_CONSULTATION_EN', 'DETAIL_CONSULTATION_ES', 'DETAIL_CONSULTATION_SU', 'DETAIL_CONSULTATION_DU', 'DETAIL_CONSULTATION_CZ', 'DETAIL_CONSULTATION_AR', 'ECHANTILLON', 'REUNION', 'VISITES_LIEUX', 'VARIANTE_CALCULE', 'ADRESSE_RETRAIS_DOSSIERS_FR', 'ADRESSE_RETRAIS_DOSSIERS_EN', 'ADRESSE_RETRAIS_DOSSIERS_ES', 'ADRESSE_RETRAIS_DOSSIERS_SU', 'ADRESSE_RETRAIS_DOSSIERS_DU', 'ADRESSE_RETRAIS_DOSSIERS_CZ', 'ADRESSE_DEPOT_OFFRES_FR', 'ADRESSE_DEPOT_OFFRES_EN', 'ADRESSE_DEPOT_OFFRES_ES', 'ADRESSE_DEPOT_OFFRES_SU', 'ADRESSE_DEPOT_OFFRES_DU', 'ADRESSE_DEPOT_OFFRES_CZ', 'LIEU_OUVERTURE_PLIS_FR', 'LIEU_OUVERTURE_PLIS_EN', 'LIEU_OUVERTURE_PLIS_ES', 'LIEU_OUVERTURE_PLIS_SU', 'LIEU_OUVERTURE_PLIS_DU', 'LIEU_OUVERTURE_PLIS_CZ', 'ADD_ECHANTILLION_FR', 'ADD_ECHANTILLION_EN', 'ADD_ECHANTILLION_ES', 'ADD_ECHANTILLION_SU', 'ADD_ECHANTILLION_DU', 'ADD_ECHANTILLION_CZ', 'ADD_ECHANTILLION_AR', 'ADD_REUNION_FR', 'ADD_REUNION_EN', 'ADD_REUNION_ES', 'ADD_REUNION_SU', 'ADD_REUNION_DU', 'ADD_REUNION_CZ', 'ADD_REUNION_AR', 'MODE_PASSATION', 'CONSULTATION_ANNULEE', 'COMPTE_BOAMP_ASSOCIE', 'ACCESSIBILITE_IT', 'ADRESSE_DEPOT_OFFRES_IT', 'LIEU_OUVERTURE_PLIS_IT', 'ADRESSE_RETRAIS_DOSSIERS_IT', 'PIECES_DOSSIER_ADMIN_IT', 'PIECES_DOSSIER_TECH_IT', 'PIECES_DOSSIER_ADDITIF_IT', 'DETAIL_CONSULTATION_IT', 'ADD_ECHANTILLION_IT', 'ADD_REUNION_IT', 'CODES_NUTS', 'INTITULE', 'ID_TR_INTITULE', 'OBJET', 'ID_TR_OBJET', 'DATE_DECISION', 'TYPE_ACCES', 'AUTORISER_REPONSE_ELECTRONIQUE', 'REGLE_MISE_EN_LIGNE', 'ID_REGLE_VALIDATION', 'INTITULE_FR', 'INTITULE_EN', 'INTITULE_ES', 'INTITULE_SU', 'INTITULE_DU', 'INTITULE_CZ', 'INTITULE_AR', 'INTITULE_IT', 'OBJET_FR', 'OBJET_EN', 'OBJET_ES', 'OBJET_SU', 'OBJET_DU', 'OBJET_CZ', 'OBJET_AR', 'OBJET_IT', 'CLAUSE_SOCIALE', 'CLAUSE_ENVIRONNEMENTALE', 'REPONSE_OBLIGATOIRE', 'AUTORISER_PUBLICITE', 'TYPE_ENVOI', 'CHIFFREMENT_OFFRE', 'ENV_CANDIDATURE', 'ENV_OFFRE', 'ENV_ANONYMAT', 'ID_ETAT_CONSULTATION', 'REFERENCE_CONNECTEUR', 'CONS_STATUT', 'ID_APPROBATEUR', 'ID_VALIDEUR', 'SERVICE_VALIDATION', 'ID_CREATEUR', 'NOM_CREATEUR', 'PRENOM_CREATEUR', 'SIGNATURE_ACTE_ENGAGEMENT', 'ARCHIVEMETADESCRIPTION', 'ARCHIVEMETAMOTSCLEF', 'ARCHIVEIDBLOBZIP', 'DECISION_PARTIELLE', 'TYPE_DECISION_A_RENSEIGNER', 'TYPE_DECISION_ATTRIBUTION_MARCHE', 'TYPE_DECISION_DECLARATION_SANS_SUITE', 'TYPE_DECISION_DECLARATION_INFRUCTUEUX', 'TYPE_DECISION_SELECTION_ENTREPRISE', 'TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE', 'TYPE_DECISION_ADMISSION_SAD', 'TYPE_DECISION_AUTRE', 'ID_ARCHIVEUR', 'PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS', 'ID_AGENT_TELECHARGEMENT_PLIS', 'PATH_TELECHARGEMENT_PLIS', 'DATE_TELECHARGEMENT_PLIS', 'SERVICE_VALIDATION_INTERMEDIAIRE', 'ENV_OFFRE_TECHNIQUE', 'REF_ORG_PARTENAIRE', 'DATE_ARCHIVAGE', 'DATE_DECISION_ANNULATION', 'COMMENTAIRE_ANNULATION', 'DATE_MISE_EN_LIGNE_SOUHAITEE', 'ETAT_EN_ATTENTE_VALIDATION', 'DOSSIER_ADDITIF', 'TYPE_MARCHE', 'TYPE_PRESTATION', 'DATE_MODIFICATION', 'DELAI_PARTIEL', 'DATEFINLOCALE', 'LIEURESIDENCE', 'ALERTE', 'DOUBLON', 'DENOMINATION_ADAPTE', 'URL_CONSULTATION_AVIS_PUB', 'DOUBLON_DE', 'ENTITE_ADJUDICATRICE', 'CODE_OPERATION', 'CLAUSE_SOCIALE_CONDITION_EXECUTION', 'CLAUSE_SOCIALE_INSERTION', 'CLAUSE_SOCIALE_ATELIERS_PROTEGES', 'CLAUSE_ENV_SPECS_TECHNIQUES', 'CLAUSE_ENV_COND_EXECUTION', 'CLAUSE_ENV_CRITERES_SELECT', 'ID_DONNEE_COMPLEMENTAIRE', 'DONNEE_COMPLEMENTAIRE_OBLIGATOIRE', 'MODE_OUVERTURE_REPONSE', 'ID_FICHIER_ANNULATION', 'IDOPERATION', 'MARCHE_PUBLIC_SIMPLIFIE', 'INFOS_BLOCS_ATLAS', 'DATE_FIN_UNIX', 'DATE_ACHEVEMENT', 'NOMBRE_DE_LOTS', ),
        BasePeer::TYPE_FIELDNAME => array ('reference', 'organisme', 'reference_utilisateur', 'categorie', 'titre', 'resume', 'datedebut', 'datefin', 'datevalidation', 'type_procedure', 'code_procedure', 'reponse_electronique', 'num_procedure', 'id_type_procedure', 'id_type_avis', 'lieu_execution', 'type_mise_en_ligne', 'datemiseenligne', 'is_tiers_avis', 'url', 'datefin_sad', 'is_sys_acq_dyn', 'reference_consultation_init', 'signature_offre', 'id_type_validation', 'etat_approbation', 'etat_validation', 'champ_supp_invisible', 'code_cpv_1', 'code_cpv_2', 'publication_europe', 'etat_publication', 'poursuivre_affichage', 'nbr_telechargement_dce', 'service_id', 'service_associe_id', 'detail_consultation', 'date_fin_affichage', 'depouillable_phase_consultation', 'consultation_transverse', 'consultation_achat_publique', 'url_consultation_achat_publique', 'partial_dce_download', 'tirage_plan', 'tireur_plan', 'date_mise_en_ligne_calcule', 'accessibilite_en', 'accessibilite_es', 'nbr_reponse', 'id_type_procedure_org', 'organisme_consultation_init', 'tirage_descriptif', 'date_validation_intermediaire', 'accessibilite_fr', 'id_tr_accessibilite', 'accessibilite_cz', 'accessibilite_du', 'accessibilite_su', 'accessibilite_ar', 'alloti', 'numero_phase', 'consultation_externe', 'url_consultation_externe', 'org_denomination', 'domaines_activites', 'id_affaire', 'adresse_retrais_dossiers', 'caution_provisoire', 'adresse_depot_offres', 'lieu_ouverture_plis', 'prix_aquisition_plans', 'qualification', 'agrements', 'add_echantillion', 'date_limite_echantillion', 'add_reunion', 'date_reunion', 'variantes', 'adresse_retrais_dossiers_ar', 'adresse_depot_offres_ar', 'lieu_ouverture_plis_ar', 'pieces_dossier_admin', 'pieces_dossier_admin_fr', 'pieces_dossier_admin_en', 'pieces_dossier_admin_es', 'pieces_dossier_admin_su', 'pieces_dossier_admin_du', 'pieces_dossier_admin_cz', 'pieces_dossier_admin_ar', 'pieces_dossier_tech', 'pieces_dossier_tech_fr', 'pieces_dossier_tech_en', 'pieces_dossier_tech_es', 'pieces_dossier_tech_su', 'pieces_dossier_tech_du', 'pieces_dossier_tech_cz', 'pieces_dossier_tech_ar', 'pieces_dossier_additif', 'pieces_dossier_additif_fr', 'pieces_dossier_additif_en', 'pieces_dossier_additif_es', 'pieces_dossier_additif_su', 'pieces_dossier_additif_du', 'pieces_dossier_additif_cz', 'pieces_dossier_additif_ar', 'id_rpa', 'detail_consultation_fr', 'detail_consultation_en', 'detail_consultation_es', 'detail_consultation_su', 'detail_consultation_du', 'detail_consultation_cz', 'detail_consultation_ar', 'echantillon', 'reunion', 'visites_lieux', 'variante_calcule', 'adresse_retrais_dossiers_fr', 'adresse_retrais_dossiers_en', 'adresse_retrais_dossiers_es', 'adresse_retrais_dossiers_su', 'adresse_retrais_dossiers_du', 'adresse_retrais_dossiers_cz', 'adresse_depot_offres_fr', 'adresse_depot_offres_en', 'adresse_depot_offres_es', 'adresse_depot_offres_su', 'adresse_depot_offres_du', 'adresse_depot_offres_cz', 'lieu_ouverture_plis_fr', 'lieu_ouverture_plis_en', 'lieu_ouverture_plis_es', 'lieu_ouverture_plis_su', 'lieu_ouverture_plis_du', 'lieu_ouverture_plis_cz', 'add_echantillion_fr', 'add_echantillion_en', 'add_echantillion_es', 'add_echantillion_su', 'add_echantillion_du', 'add_echantillion_cz', 'add_echantillion_ar', 'add_reunion_fr', 'add_reunion_en', 'add_reunion_es', 'add_reunion_su', 'add_reunion_du', 'add_reunion_cz', 'add_reunion_ar', 'mode_passation', 'consultation_annulee', 'Compte_Boamp_Associe', 'accessibilite_it', 'adresse_depot_offres_it', 'lieu_ouverture_plis_it', 'adresse_retrais_dossiers_it', 'pieces_dossier_admin_it', 'pieces_dossier_tech_it', 'pieces_dossier_additif_it', 'detail_consultation_it', 'add_echantillion_it', 'add_reunion_it', 'codes_nuts', 'intitule', 'id_tr_intitule', 'objet', 'id_tr_objet', 'date_decision', 'type_acces', 'autoriser_reponse_electronique', 'regle_mise_en_ligne', 'id_regle_validation', 'intitule_fr', 'intitule_en', 'intitule_es', 'intitule_su', 'intitule_du', 'intitule_cz', 'intitule_ar', 'intitule_it', 'objet_fr', 'objet_en', 'objet_es', 'objet_su', 'objet_du', 'objet_cz', 'objet_ar', 'objet_it', 'clause_sociale', 'clause_environnementale', 'reponse_obligatoire', 'autoriser_publicite', 'type_envoi', 'chiffrement_offre', 'env_candidature', 'env_offre', 'env_anonymat', 'id_etat_consultation', 'reference_connecteur', 'cons_statut', 'id_approbateur', 'id_valideur', 'service_validation', 'id_createur', 'nom_createur', 'prenom_createur', 'signature_acte_engagement', 'archiveMetaDescription', 'archiveMetaMotsClef', 'archiveIdBlobZip', 'decision_partielle', 'type_decision_a_renseigner', 'type_decision_attribution_marche', 'type_decision_declaration_sans_suite', 'type_decision_declaration_infructueux', 'type_decision_selection_entreprise', 'type_decision_attribution_accord_cadre', 'type_decision_admission_sad', 'type_decision_autre', 'id_archiveur', 'prenom_nom_agent_telechargement_plis', 'id_agent_telechargement_plis', 'path_telechargement_plis', 'date_telechargement_plis', 'service_validation_intermediaire', 'env_offre_technique', 'ref_org_partenaire', 'date_archivage', 'date_decision_annulation', 'commentaire_annulation', 'date_mise_en_ligne_souhaitee', 'etat_en_attente_validation', 'dossier_additif', 'type_marche', 'type_prestation', 'date_modification', 'delai_partiel', 'dateFinLocale', 'lieuResidence', 'alerte', 'doublon', 'denomination_adapte', 'url_consultation_avis_pub', 'doublon_de', 'entite_adjudicatrice', 'code_operation', 'clause_sociale_condition_execution', 'clause_sociale_insertion', 'clause_sociale_ateliers_proteges', 'clause_env_specs_techniques', 'clause_env_cond_execution', 'clause_env_criteres_select', 'id_donnee_complementaire', 'donnee_complementaire_obligatoire', 'mode_ouverture_reponse', 'id_fichier_annulation', 'idOperation', 'marche_public_simplifie', 'infos_blocs_atlas', 'DATE_FIN_UNIX', 'date_achevement', 'nombre_de_lots', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonConsultationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Reference' => 0, 'Organisme' => 1, 'ReferenceUtilisateur' => 2, 'Categorie' => 3, 'Titre' => 4, 'Resume' => 5, 'Datedebut' => 6, 'Datefin' => 7, 'Datevalidation' => 8, 'TypeProcedure' => 9, 'CodeProcedure' => 10, 'ReponseElectronique' => 11, 'NumProcedure' => 12, 'IdTypeProcedure' => 13, 'IdTypeAvis' => 14, 'LieuExecution' => 15, 'TypeMiseEnLigne' => 16, 'Datemiseenligne' => 17, 'IsTiersAvis' => 18, 'Url' => 19, 'DatefinSad' => 20, 'IsSysAcqDyn' => 21, 'ReferenceConsultationInit' => 22, 'SignatureOffre' => 23, 'IdTypeValidation' => 24, 'EtatApprobation' => 25, 'EtatValidation' => 26, 'ChampSuppInvisible' => 27, 'CodeCpv1' => 28, 'CodeCpv2' => 29, 'PublicationEurope' => 30, 'EtatPublication' => 31, 'PoursuivreAffichage' => 32, 'NbrTelechargementDce' => 33, 'ServiceId' => 34, 'ServiceAssocieId' => 35, 'DetailConsultation' => 36, 'DateFinAffichage' => 37, 'DepouillablePhaseConsultation' => 38, 'ConsultationTransverse' => 39, 'ConsultationAchatPublique' => 40, 'UrlConsultationAchatPublique' => 41, 'PartialDceDownload' => 42, 'TiragePlan' => 43, 'TireurPlan' => 44, 'DateMiseEnLigneCalcule' => 45, 'AccessibiliteEn' => 46, 'AccessibiliteEs' => 47, 'NbrReponse' => 48, 'IdTypeProcedureOrg' => 49, 'OrganismeConsultationInit' => 50, 'TirageDescriptif' => 51, 'DateValidationIntermediaire' => 52, 'AccessibiliteFr' => 53, 'IdTrAccessibilite' => 54, 'AccessibiliteCz' => 55, 'AccessibiliteDu' => 56, 'AccessibiliteSu' => 57, 'AccessibiliteAr' => 58, 'Alloti' => 59, 'NumeroPhase' => 60, 'ConsultationExterne' => 61, 'UrlConsultationExterne' => 62, 'OrgDenomination' => 63, 'DomainesActivites' => 64, 'IdAffaire' => 65, 'AdresseRetraisDossiers' => 66, 'CautionProvisoire' => 67, 'AdresseDepotOffres' => 68, 'LieuOuverturePlis' => 69, 'PrixAquisitionPlans' => 70, 'Qualification' => 71, 'Agrements' => 72, 'AddEchantillion' => 73, 'DateLimiteEchantillion' => 74, 'AddReunion' => 75, 'DateReunion' => 76, 'Variantes' => 77, 'AdresseRetraisDossiersAr' => 78, 'AdresseDepotOffresAr' => 79, 'LieuOuverturePlisAr' => 80, 'PiecesDossierAdmin' => 81, 'PiecesDossierAdminFr' => 82, 'PiecesDossierAdminEn' => 83, 'PiecesDossierAdminEs' => 84, 'PiecesDossierAdminSu' => 85, 'PiecesDossierAdminDu' => 86, 'PiecesDossierAdminCz' => 87, 'PiecesDossierAdminAr' => 88, 'PiecesDossierTech' => 89, 'PiecesDossierTechFr' => 90, 'PiecesDossierTechEn' => 91, 'PiecesDossierTechEs' => 92, 'PiecesDossierTechSu' => 93, 'PiecesDossierTechDu' => 94, 'PiecesDossierTechCz' => 95, 'PiecesDossierTechAr' => 96, 'PiecesDossierAdditif' => 97, 'PiecesDossierAdditifFr' => 98, 'PiecesDossierAdditifEn' => 99, 'PiecesDossierAdditifEs' => 100, 'PiecesDossierAdditifSu' => 101, 'PiecesDossierAdditifDu' => 102, 'PiecesDossierAdditifCz' => 103, 'PiecesDossierAdditifAr' => 104, 'IdRpa' => 105, 'DetailConsultationFr' => 106, 'DetailConsultationEn' => 107, 'DetailConsultationEs' => 108, 'DetailConsultationSu' => 109, 'DetailConsultationDu' => 110, 'DetailConsultationCz' => 111, 'DetailConsultationAr' => 112, 'Echantillon' => 113, 'Reunion' => 114, 'VisitesLieux' => 115, 'VarianteCalcule' => 116, 'AdresseRetraisDossiersFr' => 117, 'AdresseRetraisDossiersEn' => 118, 'AdresseRetraisDossiersEs' => 119, 'AdresseRetraisDossiersSu' => 120, 'AdresseRetraisDossiersDu' => 121, 'AdresseRetraisDossiersCz' => 122, 'AdresseDepotOffresFr' => 123, 'AdresseDepotOffresEn' => 124, 'AdresseDepotOffresEs' => 125, 'AdresseDepotOffresSu' => 126, 'AdresseDepotOffresDu' => 127, 'AdresseDepotOffresCz' => 128, 'LieuOuverturePlisFr' => 129, 'LieuOuverturePlisEn' => 130, 'LieuOuverturePlisEs' => 131, 'LieuOuverturePlisSu' => 132, 'LieuOuverturePlisDu' => 133, 'LieuOuverturePlisCz' => 134, 'AddEchantillionFr' => 135, 'AddEchantillionEn' => 136, 'AddEchantillionEs' => 137, 'AddEchantillionSu' => 138, 'AddEchantillionDu' => 139, 'AddEchantillionCz' => 140, 'AddEchantillionAr' => 141, 'AddReunionFr' => 142, 'AddReunionEn' => 143, 'AddReunionEs' => 144, 'AddReunionSu' => 145, 'AddReunionDu' => 146, 'AddReunionCz' => 147, 'AddReunionAr' => 148, 'ModePassation' => 149, 'ConsultationAnnulee' => 150, 'CompteBoampAssocie' => 151, 'AccessibiliteIt' => 152, 'AdresseDepotOffresIt' => 153, 'LieuOuverturePlisIt' => 154, 'AdresseRetraisDossiersIt' => 155, 'PiecesDossierAdminIt' => 156, 'PiecesDossierTechIt' => 157, 'PiecesDossierAdditifIt' => 158, 'DetailConsultationIt' => 159, 'AddEchantillionIt' => 160, 'AddReunionIt' => 161, 'CodesNuts' => 162, 'Intitule' => 163, 'IdTrIntitule' => 164, 'Objet' => 165, 'IdTrObjet' => 166, 'DateDecision' => 167, 'TypeAcces' => 168, 'AutoriserReponseElectronique' => 169, 'RegleMiseEnLigne' => 170, 'IdRegleValidation' => 171, 'IntituleFr' => 172, 'IntituleEn' => 173, 'IntituleEs' => 174, 'IntituleSu' => 175, 'IntituleDu' => 176, 'IntituleCz' => 177, 'IntituleAr' => 178, 'IntituleIt' => 179, 'ObjetFr' => 180, 'ObjetEn' => 181, 'ObjetEs' => 182, 'ObjetSu' => 183, 'ObjetDu' => 184, 'ObjetCz' => 185, 'ObjetAr' => 186, 'ObjetIt' => 187, 'ClauseSociale' => 188, 'ClauseEnvironnementale' => 189, 'ReponseObligatoire' => 190, 'AutoriserPublicite' => 191, 'TypeEnvoi' => 192, 'ChiffrementOffre' => 193, 'EnvCandidature' => 194, 'EnvOffre' => 195, 'EnvAnonymat' => 196, 'IdEtatConsultation' => 197, 'ReferenceConnecteur' => 198, 'ConsStatut' => 199, 'IdApprobateur' => 200, 'IdValideur' => 201, 'ServiceValidation' => 202, 'IdCreateur' => 203, 'NomCreateur' => 204, 'PrenomCreateur' => 205, 'SignatureActeEngagement' => 206, 'Archivemetadescription' => 207, 'Archivemetamotsclef' => 208, 'Archiveidblobzip' => 209, 'DecisionPartielle' => 210, 'TypeDecisionARenseigner' => 211, 'TypeDecisionAttributionMarche' => 212, 'TypeDecisionDeclarationSansSuite' => 213, 'TypeDecisionDeclarationInfructueux' => 214, 'TypeDecisionSelectionEntreprise' => 215, 'TypeDecisionAttributionAccordCadre' => 216, 'TypeDecisionAdmissionSad' => 217, 'TypeDecisionAutre' => 218, 'IdArchiveur' => 219, 'PrenomNomAgentTelechargementPlis' => 220, 'IdAgentTelechargementPlis' => 221, 'PathTelechargementPlis' => 222, 'DateTelechargementPlis' => 223, 'ServiceValidationIntermediaire' => 224, 'EnvOffreTechnique' => 225, 'RefOrgPartenaire' => 226, 'DateArchivage' => 227, 'DateDecisionAnnulation' => 228, 'CommentaireAnnulation' => 229, 'DateMiseEnLigneSouhaitee' => 230, 'EtatEnAttenteValidation' => 231, 'DossierAdditif' => 232, 'TypeMarche' => 233, 'TypePrestation' => 234, 'DateModification' => 235, 'DelaiPartiel' => 236, 'Datefinlocale' => 237, 'Lieuresidence' => 238, 'Alerte' => 239, 'Doublon' => 240, 'DenominationAdapte' => 241, 'UrlConsultationAvisPub' => 242, 'DoublonDe' => 243, 'EntiteAdjudicatrice' => 244, 'CodeOperation' => 245, 'ClauseSocialeConditionExecution' => 246, 'ClauseSocialeInsertion' => 247, 'ClauseSocialeAteliersProteges' => 248, 'ClauseEnvSpecsTechniques' => 249, 'ClauseEnvCondExecution' => 250, 'ClauseEnvCriteresSelect' => 251, 'IdDonneeComplementaire' => 252, 'DonneeComplementaireObligatoire' => 253, 'ModeOuvertureReponse' => 254, 'IdFichierAnnulation' => 255, 'Idoperation' => 256, 'MarchePublicSimplifie' => 257, 'InfosBlocsAtlas' => 258, 'DateFinUnix' => 259, 'DateAchevement' => 260, 'NombreDeLots' => 261, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('reference' => 0, 'organisme' => 1, 'referenceUtilisateur' => 2, 'categorie' => 3, 'titre' => 4, 'resume' => 5, 'datedebut' => 6, 'datefin' => 7, 'datevalidation' => 8, 'typeProcedure' => 9, 'codeProcedure' => 10, 'reponseElectronique' => 11, 'numProcedure' => 12, 'idTypeProcedure' => 13, 'idTypeAvis' => 14, 'lieuExecution' => 15, 'typeMiseEnLigne' => 16, 'datemiseenligne' => 17, 'isTiersAvis' => 18, 'url' => 19, 'datefinSad' => 20, 'isSysAcqDyn' => 21, 'referenceConsultationInit' => 22, 'signatureOffre' => 23, 'idTypeValidation' => 24, 'etatApprobation' => 25, 'etatValidation' => 26, 'champSuppInvisible' => 27, 'codeCpv1' => 28, 'codeCpv2' => 29, 'publicationEurope' => 30, 'etatPublication' => 31, 'poursuivreAffichage' => 32, 'nbrTelechargementDce' => 33, 'serviceId' => 34, 'serviceAssocieId' => 35, 'detailConsultation' => 36, 'dateFinAffichage' => 37, 'depouillablePhaseConsultation' => 38, 'consultationTransverse' => 39, 'consultationAchatPublique' => 40, 'urlConsultationAchatPublique' => 41, 'partialDceDownload' => 42, 'tiragePlan' => 43, 'tireurPlan' => 44, 'dateMiseEnLigneCalcule' => 45, 'accessibiliteEn' => 46, 'accessibiliteEs' => 47, 'nbrReponse' => 48, 'idTypeProcedureOrg' => 49, 'organismeConsultationInit' => 50, 'tirageDescriptif' => 51, 'dateValidationIntermediaire' => 52, 'accessibiliteFr' => 53, 'idTrAccessibilite' => 54, 'accessibiliteCz' => 55, 'accessibiliteDu' => 56, 'accessibiliteSu' => 57, 'accessibiliteAr' => 58, 'alloti' => 59, 'numeroPhase' => 60, 'consultationExterne' => 61, 'urlConsultationExterne' => 62, 'orgDenomination' => 63, 'domainesActivites' => 64, 'idAffaire' => 65, 'adresseRetraisDossiers' => 66, 'cautionProvisoire' => 67, 'adresseDepotOffres' => 68, 'lieuOuverturePlis' => 69, 'prixAquisitionPlans' => 70, 'qualification' => 71, 'agrements' => 72, 'addEchantillion' => 73, 'dateLimiteEchantillion' => 74, 'addReunion' => 75, 'dateReunion' => 76, 'variantes' => 77, 'adresseRetraisDossiersAr' => 78, 'adresseDepotOffresAr' => 79, 'lieuOuverturePlisAr' => 80, 'piecesDossierAdmin' => 81, 'piecesDossierAdminFr' => 82, 'piecesDossierAdminEn' => 83, 'piecesDossierAdminEs' => 84, 'piecesDossierAdminSu' => 85, 'piecesDossierAdminDu' => 86, 'piecesDossierAdminCz' => 87, 'piecesDossierAdminAr' => 88, 'piecesDossierTech' => 89, 'piecesDossierTechFr' => 90, 'piecesDossierTechEn' => 91, 'piecesDossierTechEs' => 92, 'piecesDossierTechSu' => 93, 'piecesDossierTechDu' => 94, 'piecesDossierTechCz' => 95, 'piecesDossierTechAr' => 96, 'piecesDossierAdditif' => 97, 'piecesDossierAdditifFr' => 98, 'piecesDossierAdditifEn' => 99, 'piecesDossierAdditifEs' => 100, 'piecesDossierAdditifSu' => 101, 'piecesDossierAdditifDu' => 102, 'piecesDossierAdditifCz' => 103, 'piecesDossierAdditifAr' => 104, 'idRpa' => 105, 'detailConsultationFr' => 106, 'detailConsultationEn' => 107, 'detailConsultationEs' => 108, 'detailConsultationSu' => 109, 'detailConsultationDu' => 110, 'detailConsultationCz' => 111, 'detailConsultationAr' => 112, 'echantillon' => 113, 'reunion' => 114, 'visitesLieux' => 115, 'varianteCalcule' => 116, 'adresseRetraisDossiersFr' => 117, 'adresseRetraisDossiersEn' => 118, 'adresseRetraisDossiersEs' => 119, 'adresseRetraisDossiersSu' => 120, 'adresseRetraisDossiersDu' => 121, 'adresseRetraisDossiersCz' => 122, 'adresseDepotOffresFr' => 123, 'adresseDepotOffresEn' => 124, 'adresseDepotOffresEs' => 125, 'adresseDepotOffresSu' => 126, 'adresseDepotOffresDu' => 127, 'adresseDepotOffresCz' => 128, 'lieuOuverturePlisFr' => 129, 'lieuOuverturePlisEn' => 130, 'lieuOuverturePlisEs' => 131, 'lieuOuverturePlisSu' => 132, 'lieuOuverturePlisDu' => 133, 'lieuOuverturePlisCz' => 134, 'addEchantillionFr' => 135, 'addEchantillionEn' => 136, 'addEchantillionEs' => 137, 'addEchantillionSu' => 138, 'addEchantillionDu' => 139, 'addEchantillionCz' => 140, 'addEchantillionAr' => 141, 'addReunionFr' => 142, 'addReunionEn' => 143, 'addReunionEs' => 144, 'addReunionSu' => 145, 'addReunionDu' => 146, 'addReunionCz' => 147, 'addReunionAr' => 148, 'modePassation' => 149, 'consultationAnnulee' => 150, 'compteBoampAssocie' => 151, 'accessibiliteIt' => 152, 'adresseDepotOffresIt' => 153, 'lieuOuverturePlisIt' => 154, 'adresseRetraisDossiersIt' => 155, 'piecesDossierAdminIt' => 156, 'piecesDossierTechIt' => 157, 'piecesDossierAdditifIt' => 158, 'detailConsultationIt' => 159, 'addEchantillionIt' => 160, 'addReunionIt' => 161, 'codesNuts' => 162, 'intitule' => 163, 'idTrIntitule' => 164, 'objet' => 165, 'idTrObjet' => 166, 'dateDecision' => 167, 'typeAcces' => 168, 'autoriserReponseElectronique' => 169, 'regleMiseEnLigne' => 170, 'idRegleValidation' => 171, 'intituleFr' => 172, 'intituleEn' => 173, 'intituleEs' => 174, 'intituleSu' => 175, 'intituleDu' => 176, 'intituleCz' => 177, 'intituleAr' => 178, 'intituleIt' => 179, 'objetFr' => 180, 'objetEn' => 181, 'objetEs' => 182, 'objetSu' => 183, 'objetDu' => 184, 'objetCz' => 185, 'objetAr' => 186, 'objetIt' => 187, 'clauseSociale' => 188, 'clauseEnvironnementale' => 189, 'reponseObligatoire' => 190, 'autoriserPublicite' => 191, 'typeEnvoi' => 192, 'chiffrementOffre' => 193, 'envCandidature' => 194, 'envOffre' => 195, 'envAnonymat' => 196, 'idEtatConsultation' => 197, 'referenceConnecteur' => 198, 'consStatut' => 199, 'idApprobateur' => 200, 'idValideur' => 201, 'serviceValidation' => 202, 'idCreateur' => 203, 'nomCreateur' => 204, 'prenomCreateur' => 205, 'signatureActeEngagement' => 206, 'archivemetadescription' => 207, 'archivemetamotsclef' => 208, 'archiveidblobzip' => 209, 'decisionPartielle' => 210, 'typeDecisionARenseigner' => 211, 'typeDecisionAttributionMarche' => 212, 'typeDecisionDeclarationSansSuite' => 213, 'typeDecisionDeclarationInfructueux' => 214, 'typeDecisionSelectionEntreprise' => 215, 'typeDecisionAttributionAccordCadre' => 216, 'typeDecisionAdmissionSad' => 217, 'typeDecisionAutre' => 218, 'idArchiveur' => 219, 'prenomNomAgentTelechargementPlis' => 220, 'idAgentTelechargementPlis' => 221, 'pathTelechargementPlis' => 222, 'dateTelechargementPlis' => 223, 'serviceValidationIntermediaire' => 224, 'envOffreTechnique' => 225, 'refOrgPartenaire' => 226, 'dateArchivage' => 227, 'dateDecisionAnnulation' => 228, 'commentaireAnnulation' => 229, 'dateMiseEnLigneSouhaitee' => 230, 'etatEnAttenteValidation' => 231, 'dossierAdditif' => 232, 'typeMarche' => 233, 'typePrestation' => 234, 'dateModification' => 235, 'delaiPartiel' => 236, 'datefinlocale' => 237, 'lieuresidence' => 238, 'alerte' => 239, 'doublon' => 240, 'denominationAdapte' => 241, 'urlConsultationAvisPub' => 242, 'doublonDe' => 243, 'entiteAdjudicatrice' => 244, 'codeOperation' => 245, 'clauseSocialeConditionExecution' => 246, 'clauseSocialeInsertion' => 247, 'clauseSocialeAteliersProteges' => 248, 'clauseEnvSpecsTechniques' => 249, 'clauseEnvCondExecution' => 250, 'clauseEnvCriteresSelect' => 251, 'idDonneeComplementaire' => 252, 'donneeComplementaireObligatoire' => 253, 'modeOuvertureReponse' => 254, 'idFichierAnnulation' => 255, 'idoperation' => 256, 'marchePublicSimplifie' => 257, 'infosBlocsAtlas' => 258, 'dateFinUnix' => 259, 'dateAchevement' => 260, 'nombreDeLots' => 261, ),
        BasePeer::TYPE_COLNAME => array (CommonConsultationPeer::REFERENCE => 0, CommonConsultationPeer::ORGANISME => 1, CommonConsultationPeer::REFERENCE_UTILISATEUR => 2, CommonConsultationPeer::CATEGORIE => 3, CommonConsultationPeer::TITRE => 4, CommonConsultationPeer::RESUME => 5, CommonConsultationPeer::DATEDEBUT => 6, CommonConsultationPeer::DATEFIN => 7, CommonConsultationPeer::DATEVALIDATION => 8, CommonConsultationPeer::TYPE_PROCEDURE => 9, CommonConsultationPeer::CODE_PROCEDURE => 10, CommonConsultationPeer::REPONSE_ELECTRONIQUE => 11, CommonConsultationPeer::NUM_PROCEDURE => 12, CommonConsultationPeer::ID_TYPE_PROCEDURE => 13, CommonConsultationPeer::ID_TYPE_AVIS => 14, CommonConsultationPeer::LIEU_EXECUTION => 15, CommonConsultationPeer::TYPE_MISE_EN_LIGNE => 16, CommonConsultationPeer::DATEMISEENLIGNE => 17, CommonConsultationPeer::IS_TIERS_AVIS => 18, CommonConsultationPeer::URL => 19, CommonConsultationPeer::DATEFIN_SAD => 20, CommonConsultationPeer::IS_SYS_ACQ_DYN => 21, CommonConsultationPeer::REFERENCE_CONSULTATION_INIT => 22, CommonConsultationPeer::SIGNATURE_OFFRE => 23, CommonConsultationPeer::ID_TYPE_VALIDATION => 24, CommonConsultationPeer::ETAT_APPROBATION => 25, CommonConsultationPeer::ETAT_VALIDATION => 26, CommonConsultationPeer::CHAMP_SUPP_INVISIBLE => 27, CommonConsultationPeer::CODE_CPV_1 => 28, CommonConsultationPeer::CODE_CPV_2 => 29, CommonConsultationPeer::PUBLICATION_EUROPE => 30, CommonConsultationPeer::ETAT_PUBLICATION => 31, CommonConsultationPeer::POURSUIVRE_AFFICHAGE => 32, CommonConsultationPeer::NBR_TELECHARGEMENT_DCE => 33, CommonConsultationPeer::SERVICE_ID => 34, CommonConsultationPeer::SERVICE_ASSOCIE_ID => 35, CommonConsultationPeer::DETAIL_CONSULTATION => 36, CommonConsultationPeer::DATE_FIN_AFFICHAGE => 37, CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION => 38, CommonConsultationPeer::CONSULTATION_TRANSVERSE => 39, CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE => 40, CommonConsultationPeer::URL_CONSULTATION_ACHAT_PUBLIQUE => 41, CommonConsultationPeer::PARTIAL_DCE_DOWNLOAD => 42, CommonConsultationPeer::TIRAGE_PLAN => 43, CommonConsultationPeer::TIREUR_PLAN => 44, CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE => 45, CommonConsultationPeer::ACCESSIBILITE_EN => 46, CommonConsultationPeer::ACCESSIBILITE_ES => 47, CommonConsultationPeer::NBR_REPONSE => 48, CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG => 49, CommonConsultationPeer::ORGANISME_CONSULTATION_INIT => 50, CommonConsultationPeer::TIRAGE_DESCRIPTIF => 51, CommonConsultationPeer::DATE_VALIDATION_INTERMEDIAIRE => 52, CommonConsultationPeer::ACCESSIBILITE_FR => 53, CommonConsultationPeer::ID_TR_ACCESSIBILITE => 54, CommonConsultationPeer::ACCESSIBILITE_CZ => 55, CommonConsultationPeer::ACCESSIBILITE_DU => 56, CommonConsultationPeer::ACCESSIBILITE_SU => 57, CommonConsultationPeer::ACCESSIBILITE_AR => 58, CommonConsultationPeer::ALLOTI => 59, CommonConsultationPeer::NUMERO_PHASE => 60, CommonConsultationPeer::CONSULTATION_EXTERNE => 61, CommonConsultationPeer::URL_CONSULTATION_EXTERNE => 62, CommonConsultationPeer::ORG_DENOMINATION => 63, CommonConsultationPeer::DOMAINES_ACTIVITES => 64, CommonConsultationPeer::ID_AFFAIRE => 65, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS => 66, CommonConsultationPeer::CAUTION_PROVISOIRE => 67, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES => 68, CommonConsultationPeer::LIEU_OUVERTURE_PLIS => 69, CommonConsultationPeer::PRIX_AQUISITION_PLANS => 70, CommonConsultationPeer::QUALIFICATION => 71, CommonConsultationPeer::AGREMENTS => 72, CommonConsultationPeer::ADD_ECHANTILLION => 73, CommonConsultationPeer::DATE_LIMITE_ECHANTILLION => 74, CommonConsultationPeer::ADD_REUNION => 75, CommonConsultationPeer::DATE_REUNION => 76, CommonConsultationPeer::VARIANTES => 77, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_AR => 78, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_AR => 79, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_AR => 80, CommonConsultationPeer::PIECES_DOSSIER_ADMIN => 81, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_FR => 82, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_EN => 83, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_ES => 84, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_SU => 85, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_DU => 86, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_CZ => 87, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_AR => 88, CommonConsultationPeer::PIECES_DOSSIER_TECH => 89, CommonConsultationPeer::PIECES_DOSSIER_TECH_FR => 90, CommonConsultationPeer::PIECES_DOSSIER_TECH_EN => 91, CommonConsultationPeer::PIECES_DOSSIER_TECH_ES => 92, CommonConsultationPeer::PIECES_DOSSIER_TECH_SU => 93, CommonConsultationPeer::PIECES_DOSSIER_TECH_DU => 94, CommonConsultationPeer::PIECES_DOSSIER_TECH_CZ => 95, CommonConsultationPeer::PIECES_DOSSIER_TECH_AR => 96, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF => 97, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_FR => 98, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_EN => 99, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_ES => 100, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_SU => 101, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_DU => 102, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_CZ => 103, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_AR => 104, CommonConsultationPeer::ID_RPA => 105, CommonConsultationPeer::DETAIL_CONSULTATION_FR => 106, CommonConsultationPeer::DETAIL_CONSULTATION_EN => 107, CommonConsultationPeer::DETAIL_CONSULTATION_ES => 108, CommonConsultationPeer::DETAIL_CONSULTATION_SU => 109, CommonConsultationPeer::DETAIL_CONSULTATION_DU => 110, CommonConsultationPeer::DETAIL_CONSULTATION_CZ => 111, CommonConsultationPeer::DETAIL_CONSULTATION_AR => 112, CommonConsultationPeer::ECHANTILLON => 113, CommonConsultationPeer::REUNION => 114, CommonConsultationPeer::VISITES_LIEUX => 115, CommonConsultationPeer::VARIANTE_CALCULE => 116, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_FR => 117, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_EN => 118, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_ES => 119, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_SU => 120, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_DU => 121, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_CZ => 122, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_FR => 123, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_EN => 124, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_ES => 125, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_SU => 126, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_DU => 127, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_CZ => 128, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_FR => 129, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_EN => 130, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_ES => 131, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_SU => 132, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_DU => 133, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_CZ => 134, CommonConsultationPeer::ADD_ECHANTILLION_FR => 135, CommonConsultationPeer::ADD_ECHANTILLION_EN => 136, CommonConsultationPeer::ADD_ECHANTILLION_ES => 137, CommonConsultationPeer::ADD_ECHANTILLION_SU => 138, CommonConsultationPeer::ADD_ECHANTILLION_DU => 139, CommonConsultationPeer::ADD_ECHANTILLION_CZ => 140, CommonConsultationPeer::ADD_ECHANTILLION_AR => 141, CommonConsultationPeer::ADD_REUNION_FR => 142, CommonConsultationPeer::ADD_REUNION_EN => 143, CommonConsultationPeer::ADD_REUNION_ES => 144, CommonConsultationPeer::ADD_REUNION_SU => 145, CommonConsultationPeer::ADD_REUNION_DU => 146, CommonConsultationPeer::ADD_REUNION_CZ => 147, CommonConsultationPeer::ADD_REUNION_AR => 148, CommonConsultationPeer::MODE_PASSATION => 149, CommonConsultationPeer::CONSULTATION_ANNULEE => 150, CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE => 151, CommonConsultationPeer::ACCESSIBILITE_IT => 152, CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_IT => 153, CommonConsultationPeer::LIEU_OUVERTURE_PLIS_IT => 154, CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_IT => 155, CommonConsultationPeer::PIECES_DOSSIER_ADMIN_IT => 156, CommonConsultationPeer::PIECES_DOSSIER_TECH_IT => 157, CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_IT => 158, CommonConsultationPeer::DETAIL_CONSULTATION_IT => 159, CommonConsultationPeer::ADD_ECHANTILLION_IT => 160, CommonConsultationPeer::ADD_REUNION_IT => 161, CommonConsultationPeer::CODES_NUTS => 162, CommonConsultationPeer::INTITULE => 163, CommonConsultationPeer::ID_TR_INTITULE => 164, CommonConsultationPeer::OBJET => 165, CommonConsultationPeer::ID_TR_OBJET => 166, CommonConsultationPeer::DATE_DECISION => 167, CommonConsultationPeer::TYPE_ACCES => 168, CommonConsultationPeer::AUTORISER_REPONSE_ELECTRONIQUE => 169, CommonConsultationPeer::REGLE_MISE_EN_LIGNE => 170, CommonConsultationPeer::ID_REGLE_VALIDATION => 171, CommonConsultationPeer::INTITULE_FR => 172, CommonConsultationPeer::INTITULE_EN => 173, CommonConsultationPeer::INTITULE_ES => 174, CommonConsultationPeer::INTITULE_SU => 175, CommonConsultationPeer::INTITULE_DU => 176, CommonConsultationPeer::INTITULE_CZ => 177, CommonConsultationPeer::INTITULE_AR => 178, CommonConsultationPeer::INTITULE_IT => 179, CommonConsultationPeer::OBJET_FR => 180, CommonConsultationPeer::OBJET_EN => 181, CommonConsultationPeer::OBJET_ES => 182, CommonConsultationPeer::OBJET_SU => 183, CommonConsultationPeer::OBJET_DU => 184, CommonConsultationPeer::OBJET_CZ => 185, CommonConsultationPeer::OBJET_AR => 186, CommonConsultationPeer::OBJET_IT => 187, CommonConsultationPeer::CLAUSE_SOCIALE => 188, CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE => 189, CommonConsultationPeer::REPONSE_OBLIGATOIRE => 190, CommonConsultationPeer::AUTORISER_PUBLICITE => 191, CommonConsultationPeer::TYPE_ENVOI => 192, CommonConsultationPeer::CHIFFREMENT_OFFRE => 193, CommonConsultationPeer::ENV_CANDIDATURE => 194, CommonConsultationPeer::ENV_OFFRE => 195, CommonConsultationPeer::ENV_ANONYMAT => 196, CommonConsultationPeer::ID_ETAT_CONSULTATION => 197, CommonConsultationPeer::REFERENCE_CONNECTEUR => 198, CommonConsultationPeer::CONS_STATUT => 199, CommonConsultationPeer::ID_APPROBATEUR => 200, CommonConsultationPeer::ID_VALIDEUR => 201, CommonConsultationPeer::SERVICE_VALIDATION => 202, CommonConsultationPeer::ID_CREATEUR => 203, CommonConsultationPeer::NOM_CREATEUR => 204, CommonConsultationPeer::PRENOM_CREATEUR => 205, CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT => 206, CommonConsultationPeer::ARCHIVEMETADESCRIPTION => 207, CommonConsultationPeer::ARCHIVEMETAMOTSCLEF => 208, CommonConsultationPeer::ARCHIVEIDBLOBZIP => 209, CommonConsultationPeer::DECISION_PARTIELLE => 210, CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER => 211, CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE => 212, CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE => 213, CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX => 214, CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE => 215, CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE => 216, CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD => 217, CommonConsultationPeer::TYPE_DECISION_AUTRE => 218, CommonConsultationPeer::ID_ARCHIVEUR => 219, CommonConsultationPeer::PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS => 220, CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS => 221, CommonConsultationPeer::PATH_TELECHARGEMENT_PLIS => 222, CommonConsultationPeer::DATE_TELECHARGEMENT_PLIS => 223, CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE => 224, CommonConsultationPeer::ENV_OFFRE_TECHNIQUE => 225, CommonConsultationPeer::REF_ORG_PARTENAIRE => 226, CommonConsultationPeer::DATE_ARCHIVAGE => 227, CommonConsultationPeer::DATE_DECISION_ANNULATION => 228, CommonConsultationPeer::COMMENTAIRE_ANNULATION => 229, CommonConsultationPeer::DATE_MISE_EN_LIGNE_SOUHAITEE => 230, CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION => 231, CommonConsultationPeer::DOSSIER_ADDITIF => 232, CommonConsultationPeer::TYPE_MARCHE => 233, CommonConsultationPeer::TYPE_PRESTATION => 234, CommonConsultationPeer::DATE_MODIFICATION => 235, CommonConsultationPeer::DELAI_PARTIEL => 236, CommonConsultationPeer::DATEFINLOCALE => 237, CommonConsultationPeer::LIEURESIDENCE => 238, CommonConsultationPeer::ALERTE => 239, CommonConsultationPeer::DOUBLON => 240, CommonConsultationPeer::DENOMINATION_ADAPTE => 241, CommonConsultationPeer::URL_CONSULTATION_AVIS_PUB => 242, CommonConsultationPeer::DOUBLON_DE => 243, CommonConsultationPeer::ENTITE_ADJUDICATRICE => 244, CommonConsultationPeer::CODE_OPERATION => 245, CommonConsultationPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION => 246, CommonConsultationPeer::CLAUSE_SOCIALE_INSERTION => 247, CommonConsultationPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES => 248, CommonConsultationPeer::CLAUSE_ENV_SPECS_TECHNIQUES => 249, CommonConsultationPeer::CLAUSE_ENV_COND_EXECUTION => 250, CommonConsultationPeer::CLAUSE_ENV_CRITERES_SELECT => 251, CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE => 252, CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE => 253, CommonConsultationPeer::MODE_OUVERTURE_REPONSE => 254, CommonConsultationPeer::ID_FICHIER_ANNULATION => 255, CommonConsultationPeer::IDOPERATION => 256, CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE => 257, CommonConsultationPeer::INFOS_BLOCS_ATLAS => 258, CommonConsultationPeer::DATE_FIN_UNIX => 259, CommonConsultationPeer::DATE_ACHEVEMENT => 260, CommonConsultationPeer::NOMBRE_DE_LOTS => 261, ),
        BasePeer::TYPE_RAW_COLNAME => array ('REFERENCE' => 0, 'ORGANISME' => 1, 'REFERENCE_UTILISATEUR' => 2, 'CATEGORIE' => 3, 'TITRE' => 4, 'RESUME' => 5, 'DATEDEBUT' => 6, 'DATEFIN' => 7, 'DATEVALIDATION' => 8, 'TYPE_PROCEDURE' => 9, 'CODE_PROCEDURE' => 10, 'REPONSE_ELECTRONIQUE' => 11, 'NUM_PROCEDURE' => 12, 'ID_TYPE_PROCEDURE' => 13, 'ID_TYPE_AVIS' => 14, 'LIEU_EXECUTION' => 15, 'TYPE_MISE_EN_LIGNE' => 16, 'DATEMISEENLIGNE' => 17, 'IS_TIERS_AVIS' => 18, 'URL' => 19, 'DATEFIN_SAD' => 20, 'IS_SYS_ACQ_DYN' => 21, 'REFERENCE_CONSULTATION_INIT' => 22, 'SIGNATURE_OFFRE' => 23, 'ID_TYPE_VALIDATION' => 24, 'ETAT_APPROBATION' => 25, 'ETAT_VALIDATION' => 26, 'CHAMP_SUPP_INVISIBLE' => 27, 'CODE_CPV_1' => 28, 'CODE_CPV_2' => 29, 'PUBLICATION_EUROPE' => 30, 'ETAT_PUBLICATION' => 31, 'POURSUIVRE_AFFICHAGE' => 32, 'NBR_TELECHARGEMENT_DCE' => 33, 'SERVICE_ID' => 34, 'SERVICE_ASSOCIE_ID' => 35, 'DETAIL_CONSULTATION' => 36, 'DATE_FIN_AFFICHAGE' => 37, 'DEPOUILLABLE_PHASE_CONSULTATION' => 38, 'CONSULTATION_TRANSVERSE' => 39, 'CONSULTATION_ACHAT_PUBLIQUE' => 40, 'URL_CONSULTATION_ACHAT_PUBLIQUE' => 41, 'PARTIAL_DCE_DOWNLOAD' => 42, 'TIRAGE_PLAN' => 43, 'TIREUR_PLAN' => 44, 'DATE_MISE_EN_LIGNE_CALCULE' => 45, 'ACCESSIBILITE_EN' => 46, 'ACCESSIBILITE_ES' => 47, 'NBR_REPONSE' => 48, 'ID_TYPE_PROCEDURE_ORG' => 49, 'ORGANISME_CONSULTATION_INIT' => 50, 'TIRAGE_DESCRIPTIF' => 51, 'DATE_VALIDATION_INTERMEDIAIRE' => 52, 'ACCESSIBILITE_FR' => 53, 'ID_TR_ACCESSIBILITE' => 54, 'ACCESSIBILITE_CZ' => 55, 'ACCESSIBILITE_DU' => 56, 'ACCESSIBILITE_SU' => 57, 'ACCESSIBILITE_AR' => 58, 'ALLOTI' => 59, 'NUMERO_PHASE' => 60, 'CONSULTATION_EXTERNE' => 61, 'URL_CONSULTATION_EXTERNE' => 62, 'ORG_DENOMINATION' => 63, 'DOMAINES_ACTIVITES' => 64, 'ID_AFFAIRE' => 65, 'ADRESSE_RETRAIS_DOSSIERS' => 66, 'CAUTION_PROVISOIRE' => 67, 'ADRESSE_DEPOT_OFFRES' => 68, 'LIEU_OUVERTURE_PLIS' => 69, 'PRIX_AQUISITION_PLANS' => 70, 'QUALIFICATION' => 71, 'AGREMENTS' => 72, 'ADD_ECHANTILLION' => 73, 'DATE_LIMITE_ECHANTILLION' => 74, 'ADD_REUNION' => 75, 'DATE_REUNION' => 76, 'VARIANTES' => 77, 'ADRESSE_RETRAIS_DOSSIERS_AR' => 78, 'ADRESSE_DEPOT_OFFRES_AR' => 79, 'LIEU_OUVERTURE_PLIS_AR' => 80, 'PIECES_DOSSIER_ADMIN' => 81, 'PIECES_DOSSIER_ADMIN_FR' => 82, 'PIECES_DOSSIER_ADMIN_EN' => 83, 'PIECES_DOSSIER_ADMIN_ES' => 84, 'PIECES_DOSSIER_ADMIN_SU' => 85, 'PIECES_DOSSIER_ADMIN_DU' => 86, 'PIECES_DOSSIER_ADMIN_CZ' => 87, 'PIECES_DOSSIER_ADMIN_AR' => 88, 'PIECES_DOSSIER_TECH' => 89, 'PIECES_DOSSIER_TECH_FR' => 90, 'PIECES_DOSSIER_TECH_EN' => 91, 'PIECES_DOSSIER_TECH_ES' => 92, 'PIECES_DOSSIER_TECH_SU' => 93, 'PIECES_DOSSIER_TECH_DU' => 94, 'PIECES_DOSSIER_TECH_CZ' => 95, 'PIECES_DOSSIER_TECH_AR' => 96, 'PIECES_DOSSIER_ADDITIF' => 97, 'PIECES_DOSSIER_ADDITIF_FR' => 98, 'PIECES_DOSSIER_ADDITIF_EN' => 99, 'PIECES_DOSSIER_ADDITIF_ES' => 100, 'PIECES_DOSSIER_ADDITIF_SU' => 101, 'PIECES_DOSSIER_ADDITIF_DU' => 102, 'PIECES_DOSSIER_ADDITIF_CZ' => 103, 'PIECES_DOSSIER_ADDITIF_AR' => 104, 'ID_RPA' => 105, 'DETAIL_CONSULTATION_FR' => 106, 'DETAIL_CONSULTATION_EN' => 107, 'DETAIL_CONSULTATION_ES' => 108, 'DETAIL_CONSULTATION_SU' => 109, 'DETAIL_CONSULTATION_DU' => 110, 'DETAIL_CONSULTATION_CZ' => 111, 'DETAIL_CONSULTATION_AR' => 112, 'ECHANTILLON' => 113, 'REUNION' => 114, 'VISITES_LIEUX' => 115, 'VARIANTE_CALCULE' => 116, 'ADRESSE_RETRAIS_DOSSIERS_FR' => 117, 'ADRESSE_RETRAIS_DOSSIERS_EN' => 118, 'ADRESSE_RETRAIS_DOSSIERS_ES' => 119, 'ADRESSE_RETRAIS_DOSSIERS_SU' => 120, 'ADRESSE_RETRAIS_DOSSIERS_DU' => 121, 'ADRESSE_RETRAIS_DOSSIERS_CZ' => 122, 'ADRESSE_DEPOT_OFFRES_FR' => 123, 'ADRESSE_DEPOT_OFFRES_EN' => 124, 'ADRESSE_DEPOT_OFFRES_ES' => 125, 'ADRESSE_DEPOT_OFFRES_SU' => 126, 'ADRESSE_DEPOT_OFFRES_DU' => 127, 'ADRESSE_DEPOT_OFFRES_CZ' => 128, 'LIEU_OUVERTURE_PLIS_FR' => 129, 'LIEU_OUVERTURE_PLIS_EN' => 130, 'LIEU_OUVERTURE_PLIS_ES' => 131, 'LIEU_OUVERTURE_PLIS_SU' => 132, 'LIEU_OUVERTURE_PLIS_DU' => 133, 'LIEU_OUVERTURE_PLIS_CZ' => 134, 'ADD_ECHANTILLION_FR' => 135, 'ADD_ECHANTILLION_EN' => 136, 'ADD_ECHANTILLION_ES' => 137, 'ADD_ECHANTILLION_SU' => 138, 'ADD_ECHANTILLION_DU' => 139, 'ADD_ECHANTILLION_CZ' => 140, 'ADD_ECHANTILLION_AR' => 141, 'ADD_REUNION_FR' => 142, 'ADD_REUNION_EN' => 143, 'ADD_REUNION_ES' => 144, 'ADD_REUNION_SU' => 145, 'ADD_REUNION_DU' => 146, 'ADD_REUNION_CZ' => 147, 'ADD_REUNION_AR' => 148, 'MODE_PASSATION' => 149, 'CONSULTATION_ANNULEE' => 150, 'COMPTE_BOAMP_ASSOCIE' => 151, 'ACCESSIBILITE_IT' => 152, 'ADRESSE_DEPOT_OFFRES_IT' => 153, 'LIEU_OUVERTURE_PLIS_IT' => 154, 'ADRESSE_RETRAIS_DOSSIERS_IT' => 155, 'PIECES_DOSSIER_ADMIN_IT' => 156, 'PIECES_DOSSIER_TECH_IT' => 157, 'PIECES_DOSSIER_ADDITIF_IT' => 158, 'DETAIL_CONSULTATION_IT' => 159, 'ADD_ECHANTILLION_IT' => 160, 'ADD_REUNION_IT' => 161, 'CODES_NUTS' => 162, 'INTITULE' => 163, 'ID_TR_INTITULE' => 164, 'OBJET' => 165, 'ID_TR_OBJET' => 166, 'DATE_DECISION' => 167, 'TYPE_ACCES' => 168, 'AUTORISER_REPONSE_ELECTRONIQUE' => 169, 'REGLE_MISE_EN_LIGNE' => 170, 'ID_REGLE_VALIDATION' => 171, 'INTITULE_FR' => 172, 'INTITULE_EN' => 173, 'INTITULE_ES' => 174, 'INTITULE_SU' => 175, 'INTITULE_DU' => 176, 'INTITULE_CZ' => 177, 'INTITULE_AR' => 178, 'INTITULE_IT' => 179, 'OBJET_FR' => 180, 'OBJET_EN' => 181, 'OBJET_ES' => 182, 'OBJET_SU' => 183, 'OBJET_DU' => 184, 'OBJET_CZ' => 185, 'OBJET_AR' => 186, 'OBJET_IT' => 187, 'CLAUSE_SOCIALE' => 188, 'CLAUSE_ENVIRONNEMENTALE' => 189, 'REPONSE_OBLIGATOIRE' => 190, 'AUTORISER_PUBLICITE' => 191, 'TYPE_ENVOI' => 192, 'CHIFFREMENT_OFFRE' => 193, 'ENV_CANDIDATURE' => 194, 'ENV_OFFRE' => 195, 'ENV_ANONYMAT' => 196, 'ID_ETAT_CONSULTATION' => 197, 'REFERENCE_CONNECTEUR' => 198, 'CONS_STATUT' => 199, 'ID_APPROBATEUR' => 200, 'ID_VALIDEUR' => 201, 'SERVICE_VALIDATION' => 202, 'ID_CREATEUR' => 203, 'NOM_CREATEUR' => 204, 'PRENOM_CREATEUR' => 205, 'SIGNATURE_ACTE_ENGAGEMENT' => 206, 'ARCHIVEMETADESCRIPTION' => 207, 'ARCHIVEMETAMOTSCLEF' => 208, 'ARCHIVEIDBLOBZIP' => 209, 'DECISION_PARTIELLE' => 210, 'TYPE_DECISION_A_RENSEIGNER' => 211, 'TYPE_DECISION_ATTRIBUTION_MARCHE' => 212, 'TYPE_DECISION_DECLARATION_SANS_SUITE' => 213, 'TYPE_DECISION_DECLARATION_INFRUCTUEUX' => 214, 'TYPE_DECISION_SELECTION_ENTREPRISE' => 215, 'TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE' => 216, 'TYPE_DECISION_ADMISSION_SAD' => 217, 'TYPE_DECISION_AUTRE' => 218, 'ID_ARCHIVEUR' => 219, 'PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS' => 220, 'ID_AGENT_TELECHARGEMENT_PLIS' => 221, 'PATH_TELECHARGEMENT_PLIS' => 222, 'DATE_TELECHARGEMENT_PLIS' => 223, 'SERVICE_VALIDATION_INTERMEDIAIRE' => 224, 'ENV_OFFRE_TECHNIQUE' => 225, 'REF_ORG_PARTENAIRE' => 226, 'DATE_ARCHIVAGE' => 227, 'DATE_DECISION_ANNULATION' => 228, 'COMMENTAIRE_ANNULATION' => 229, 'DATE_MISE_EN_LIGNE_SOUHAITEE' => 230, 'ETAT_EN_ATTENTE_VALIDATION' => 231, 'DOSSIER_ADDITIF' => 232, 'TYPE_MARCHE' => 233, 'TYPE_PRESTATION' => 234, 'DATE_MODIFICATION' => 235, 'DELAI_PARTIEL' => 236, 'DATEFINLOCALE' => 237, 'LIEURESIDENCE' => 238, 'ALERTE' => 239, 'DOUBLON' => 240, 'DENOMINATION_ADAPTE' => 241, 'URL_CONSULTATION_AVIS_PUB' => 242, 'DOUBLON_DE' => 243, 'ENTITE_ADJUDICATRICE' => 244, 'CODE_OPERATION' => 245, 'CLAUSE_SOCIALE_CONDITION_EXECUTION' => 246, 'CLAUSE_SOCIALE_INSERTION' => 247, 'CLAUSE_SOCIALE_ATELIERS_PROTEGES' => 248, 'CLAUSE_ENV_SPECS_TECHNIQUES' => 249, 'CLAUSE_ENV_COND_EXECUTION' => 250, 'CLAUSE_ENV_CRITERES_SELECT' => 251, 'ID_DONNEE_COMPLEMENTAIRE' => 252, 'DONNEE_COMPLEMENTAIRE_OBLIGATOIRE' => 253, 'MODE_OUVERTURE_REPONSE' => 254, 'ID_FICHIER_ANNULATION' => 255, 'IDOPERATION' => 256, 'MARCHE_PUBLIC_SIMPLIFIE' => 257, 'INFOS_BLOCS_ATLAS' => 258, 'DATE_FIN_UNIX' => 259, 'DATE_ACHEVEMENT' => 260, 'NOMBRE_DE_LOTS' => 261, ),
        BasePeer::TYPE_FIELDNAME => array ('reference' => 0, 'organisme' => 1, 'reference_utilisateur' => 2, 'categorie' => 3, 'titre' => 4, 'resume' => 5, 'datedebut' => 6, 'datefin' => 7, 'datevalidation' => 8, 'type_procedure' => 9, 'code_procedure' => 10, 'reponse_electronique' => 11, 'num_procedure' => 12, 'id_type_procedure' => 13, 'id_type_avis' => 14, 'lieu_execution' => 15, 'type_mise_en_ligne' => 16, 'datemiseenligne' => 17, 'is_tiers_avis' => 18, 'url' => 19, 'datefin_sad' => 20, 'is_sys_acq_dyn' => 21, 'reference_consultation_init' => 22, 'signature_offre' => 23, 'id_type_validation' => 24, 'etat_approbation' => 25, 'etat_validation' => 26, 'champ_supp_invisible' => 27, 'code_cpv_1' => 28, 'code_cpv_2' => 29, 'publication_europe' => 30, 'etat_publication' => 31, 'poursuivre_affichage' => 32, 'nbr_telechargement_dce' => 33, 'service_id' => 34, 'service_associe_id' => 35, 'detail_consultation' => 36, 'date_fin_affichage' => 37, 'depouillable_phase_consultation' => 38, 'consultation_transverse' => 39, 'consultation_achat_publique' => 40, 'url_consultation_achat_publique' => 41, 'partial_dce_download' => 42, 'tirage_plan' => 43, 'tireur_plan' => 44, 'date_mise_en_ligne_calcule' => 45, 'accessibilite_en' => 46, 'accessibilite_es' => 47, 'nbr_reponse' => 48, 'id_type_procedure_org' => 49, 'organisme_consultation_init' => 50, 'tirage_descriptif' => 51, 'date_validation_intermediaire' => 52, 'accessibilite_fr' => 53, 'id_tr_accessibilite' => 54, 'accessibilite_cz' => 55, 'accessibilite_du' => 56, 'accessibilite_su' => 57, 'accessibilite_ar' => 58, 'alloti' => 59, 'numero_phase' => 60, 'consultation_externe' => 61, 'url_consultation_externe' => 62, 'org_denomination' => 63, 'domaines_activites' => 64, 'id_affaire' => 65, 'adresse_retrais_dossiers' => 66, 'caution_provisoire' => 67, 'adresse_depot_offres' => 68, 'lieu_ouverture_plis' => 69, 'prix_aquisition_plans' => 70, 'qualification' => 71, 'agrements' => 72, 'add_echantillion' => 73, 'date_limite_echantillion' => 74, 'add_reunion' => 75, 'date_reunion' => 76, 'variantes' => 77, 'adresse_retrais_dossiers_ar' => 78, 'adresse_depot_offres_ar' => 79, 'lieu_ouverture_plis_ar' => 80, 'pieces_dossier_admin' => 81, 'pieces_dossier_admin_fr' => 82, 'pieces_dossier_admin_en' => 83, 'pieces_dossier_admin_es' => 84, 'pieces_dossier_admin_su' => 85, 'pieces_dossier_admin_du' => 86, 'pieces_dossier_admin_cz' => 87, 'pieces_dossier_admin_ar' => 88, 'pieces_dossier_tech' => 89, 'pieces_dossier_tech_fr' => 90, 'pieces_dossier_tech_en' => 91, 'pieces_dossier_tech_es' => 92, 'pieces_dossier_tech_su' => 93, 'pieces_dossier_tech_du' => 94, 'pieces_dossier_tech_cz' => 95, 'pieces_dossier_tech_ar' => 96, 'pieces_dossier_additif' => 97, 'pieces_dossier_additif_fr' => 98, 'pieces_dossier_additif_en' => 99, 'pieces_dossier_additif_es' => 100, 'pieces_dossier_additif_su' => 101, 'pieces_dossier_additif_du' => 102, 'pieces_dossier_additif_cz' => 103, 'pieces_dossier_additif_ar' => 104, 'id_rpa' => 105, 'detail_consultation_fr' => 106, 'detail_consultation_en' => 107, 'detail_consultation_es' => 108, 'detail_consultation_su' => 109, 'detail_consultation_du' => 110, 'detail_consultation_cz' => 111, 'detail_consultation_ar' => 112, 'echantillon' => 113, 'reunion' => 114, 'visites_lieux' => 115, 'variante_calcule' => 116, 'adresse_retrais_dossiers_fr' => 117, 'adresse_retrais_dossiers_en' => 118, 'adresse_retrais_dossiers_es' => 119, 'adresse_retrais_dossiers_su' => 120, 'adresse_retrais_dossiers_du' => 121, 'adresse_retrais_dossiers_cz' => 122, 'adresse_depot_offres_fr' => 123, 'adresse_depot_offres_en' => 124, 'adresse_depot_offres_es' => 125, 'adresse_depot_offres_su' => 126, 'adresse_depot_offres_du' => 127, 'adresse_depot_offres_cz' => 128, 'lieu_ouverture_plis_fr' => 129, 'lieu_ouverture_plis_en' => 130, 'lieu_ouverture_plis_es' => 131, 'lieu_ouverture_plis_su' => 132, 'lieu_ouverture_plis_du' => 133, 'lieu_ouverture_plis_cz' => 134, 'add_echantillion_fr' => 135, 'add_echantillion_en' => 136, 'add_echantillion_es' => 137, 'add_echantillion_su' => 138, 'add_echantillion_du' => 139, 'add_echantillion_cz' => 140, 'add_echantillion_ar' => 141, 'add_reunion_fr' => 142, 'add_reunion_en' => 143, 'add_reunion_es' => 144, 'add_reunion_su' => 145, 'add_reunion_du' => 146, 'add_reunion_cz' => 147, 'add_reunion_ar' => 148, 'mode_passation' => 149, 'consultation_annulee' => 150, 'Compte_Boamp_Associe' => 151, 'accessibilite_it' => 152, 'adresse_depot_offres_it' => 153, 'lieu_ouverture_plis_it' => 154, 'adresse_retrais_dossiers_it' => 155, 'pieces_dossier_admin_it' => 156, 'pieces_dossier_tech_it' => 157, 'pieces_dossier_additif_it' => 158, 'detail_consultation_it' => 159, 'add_echantillion_it' => 160, 'add_reunion_it' => 161, 'codes_nuts' => 162, 'intitule' => 163, 'id_tr_intitule' => 164, 'objet' => 165, 'id_tr_objet' => 166, 'date_decision' => 167, 'type_acces' => 168, 'autoriser_reponse_electronique' => 169, 'regle_mise_en_ligne' => 170, 'id_regle_validation' => 171, 'intitule_fr' => 172, 'intitule_en' => 173, 'intitule_es' => 174, 'intitule_su' => 175, 'intitule_du' => 176, 'intitule_cz' => 177, 'intitule_ar' => 178, 'intitule_it' => 179, 'objet_fr' => 180, 'objet_en' => 181, 'objet_es' => 182, 'objet_su' => 183, 'objet_du' => 184, 'objet_cz' => 185, 'objet_ar' => 186, 'objet_it' => 187, 'clause_sociale' => 188, 'clause_environnementale' => 189, 'reponse_obligatoire' => 190, 'autoriser_publicite' => 191, 'type_envoi' => 192, 'chiffrement_offre' => 193, 'env_candidature' => 194, 'env_offre' => 195, 'env_anonymat' => 196, 'id_etat_consultation' => 197, 'reference_connecteur' => 198, 'cons_statut' => 199, 'id_approbateur' => 200, 'id_valideur' => 201, 'service_validation' => 202, 'id_createur' => 203, 'nom_createur' => 204, 'prenom_createur' => 205, 'signature_acte_engagement' => 206, 'archiveMetaDescription' => 207, 'archiveMetaMotsClef' => 208, 'archiveIdBlobZip' => 209, 'decision_partielle' => 210, 'type_decision_a_renseigner' => 211, 'type_decision_attribution_marche' => 212, 'type_decision_declaration_sans_suite' => 213, 'type_decision_declaration_infructueux' => 214, 'type_decision_selection_entreprise' => 215, 'type_decision_attribution_accord_cadre' => 216, 'type_decision_admission_sad' => 217, 'type_decision_autre' => 218, 'id_archiveur' => 219, 'prenom_nom_agent_telechargement_plis' => 220, 'id_agent_telechargement_plis' => 221, 'path_telechargement_plis' => 222, 'date_telechargement_plis' => 223, 'service_validation_intermediaire' => 224, 'env_offre_technique' => 225, 'ref_org_partenaire' => 226, 'date_archivage' => 227, 'date_decision_annulation' => 228, 'commentaire_annulation' => 229, 'date_mise_en_ligne_souhaitee' => 230, 'etat_en_attente_validation' => 231, 'dossier_additif' => 232, 'type_marche' => 233, 'type_prestation' => 234, 'date_modification' => 235, 'delai_partiel' => 236, 'dateFinLocale' => 237, 'lieuResidence' => 238, 'alerte' => 239, 'doublon' => 240, 'denomination_adapte' => 241, 'url_consultation_avis_pub' => 242, 'doublon_de' => 243, 'entite_adjudicatrice' => 244, 'code_operation' => 245, 'clause_sociale_condition_execution' => 246, 'clause_sociale_insertion' => 247, 'clause_sociale_ateliers_proteges' => 248, 'clause_env_specs_techniques' => 249, 'clause_env_cond_execution' => 250, 'clause_env_criteres_select' => 251, 'id_donnee_complementaire' => 252, 'donnee_complementaire_obligatoire' => 253, 'mode_ouverture_reponse' => 254, 'id_fichier_annulation' => 255, 'idOperation' => 256, 'marche_public_simplifie' => 257, 'infos_blocs_atlas' => 258, 'DATE_FIN_UNIX' => 259, 'date_achevement' => 260, 'nombre_de_lots' => 261, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonConsultationPeer::ETAT_APPROBATION => array(
            CommonConsultationPeer::ETAT_APPROBATION_0,
            CommonConsultationPeer::ETAT_APPROBATION_1,
        ),
        CommonConsultationPeer::ETAT_VALIDATION => array(
            CommonConsultationPeer::ETAT_VALIDATION_0,
            CommonConsultationPeer::ETAT_VALIDATION_1,
        ),
        CommonConsultationPeer::PUBLICATION_EUROPE => array(
            CommonConsultationPeer::PUBLICATION_EUROPE_0,
            CommonConsultationPeer::PUBLICATION_EUROPE_1,
        ),
        CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION => array(
            CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION_0,
            CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION_1,
        ),
        CommonConsultationPeer::CONSULTATION_TRANSVERSE => array(
            CommonConsultationPeer::CONSULTATION_TRANSVERSE_0,
            CommonConsultationPeer::CONSULTATION_TRANSVERSE_1,
        ),
        CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE => array(
            CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE_0,
            CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_FR => array(
            CommonConsultationPeer::ACCESSIBILITE_FR_0,
            CommonConsultationPeer::ACCESSIBILITE_FR_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_CZ => array(
            CommonConsultationPeer::ACCESSIBILITE_CZ_0,
            CommonConsultationPeer::ACCESSIBILITE_CZ_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_DU => array(
            CommonConsultationPeer::ACCESSIBILITE_DU_0,
            CommonConsultationPeer::ACCESSIBILITE_DU_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_SU => array(
            CommonConsultationPeer::ACCESSIBILITE_SU_0,
            CommonConsultationPeer::ACCESSIBILITE_SU_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_AR => array(
            CommonConsultationPeer::ACCESSIBILITE_AR_0,
            CommonConsultationPeer::ACCESSIBILITE_AR_1,
        ),
        CommonConsultationPeer::ALLOTI => array(
            CommonConsultationPeer::ALLOTI_0,
            CommonConsultationPeer::ALLOTI_1,
        ),
        CommonConsultationPeer::CONSULTATION_EXTERNE => array(
            CommonConsultationPeer::CONSULTATION_EXTERNE_0,
            CommonConsultationPeer::CONSULTATION_EXTERNE_1,
        ),
        CommonConsultationPeer::ECHANTILLON => array(
            CommonConsultationPeer::ECHANTILLON_0,
            CommonConsultationPeer::ECHANTILLON_1,
        ),
        CommonConsultationPeer::REUNION => array(
            CommonConsultationPeer::REUNION_0,
            CommonConsultationPeer::REUNION_1,
        ),
        CommonConsultationPeer::VISITES_LIEUX => array(
            CommonConsultationPeer::VISITES_LIEUX_0,
            CommonConsultationPeer::VISITES_LIEUX_1,
        ),
        CommonConsultationPeer::VARIANTE_CALCULE => array(
            CommonConsultationPeer::VARIANTE_CALCULE_0,
            CommonConsultationPeer::VARIANTE_CALCULE_1,
        ),
        CommonConsultationPeer::CONSULTATION_ANNULEE => array(
            CommonConsultationPeer::CONSULTATION_ANNULEE_0,
            CommonConsultationPeer::CONSULTATION_ANNULEE_1,
        ),
        CommonConsultationPeer::ACCESSIBILITE_IT => array(
            CommonConsultationPeer::ACCESSIBILITE_IT_0,
            CommonConsultationPeer::ACCESSIBILITE_IT_1,
        ),
        CommonConsultationPeer::CLAUSE_SOCIALE => array(
            CommonConsultationPeer::CLAUSE_SOCIALE_0,
            CommonConsultationPeer::CLAUSE_SOCIALE_1,
            CommonConsultationPeer::CLAUSE_SOCIALE_2,
        ),
        CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE => array(
            CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE_0,
            CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE_1,
            CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE_2,
        ),
        CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT => array(
            CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT_0,
            CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT_1,
        ),
        CommonConsultationPeer::DECISION_PARTIELLE => array(
            CommonConsultationPeer::DECISION_PARTIELLE_0,
            CommonConsultationPeer::DECISION_PARTIELLE_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER => array(
            CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER_0,
            CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE => array(
            CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE_0,
            CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE => array(
            CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE_0,
            CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX => array(
            CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX_0,
            CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE => array(
            CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE_0,
            CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE => array(
            CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE_0,
            CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD => array(
            CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD_0,
            CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD_1,
        ),
        CommonConsultationPeer::TYPE_DECISION_AUTRE => array(
            CommonConsultationPeer::TYPE_DECISION_AUTRE_0,
            CommonConsultationPeer::TYPE_DECISION_AUTRE_1,
        ),
        CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION => array(
            CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION_0,
            CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION_1,
        ),
        CommonConsultationPeer::DOSSIER_ADDITIF => array(
            CommonConsultationPeer::DOSSIER_ADDITIF_0,
            CommonConsultationPeer::DOSSIER_ADDITIF_1,
        ),
        CommonConsultationPeer::DELAI_PARTIEL => array(
            CommonConsultationPeer::DELAI_PARTIEL_0,
            CommonConsultationPeer::DELAI_PARTIEL_1,
        ),
        CommonConsultationPeer::ALERTE => array(
            CommonConsultationPeer::ALERTE_0,
            CommonConsultationPeer::ALERTE_1,
        ),
        CommonConsultationPeer::DOUBLON => array(
            CommonConsultationPeer::DOUBLON_0,
            CommonConsultationPeer::DOUBLON_1,
        ),
        CommonConsultationPeer::ENTITE_ADJUDICATRICE => array(
            CommonConsultationPeer::ENTITE_ADJUDICATRICE_0,
            CommonConsultationPeer::ENTITE_ADJUDICATRICE_1,
        ),
        CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE => array(
            CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE_0,
            CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE_1,
        ),
        CommonConsultationPeer::MODE_OUVERTURE_REPONSE => array(
            CommonConsultationPeer::MODE_OUVERTURE_REPONSE_0,
            CommonConsultationPeer::MODE_OUVERTURE_REPONSE_1,
        ),
        CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE => array(
            CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE_0,
            CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonConsultationPeer::getFieldNames($toType);
        $key = isset(CommonConsultationPeer::$fieldKeys[$fromType][$name]) ? CommonConsultationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonConsultationPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonConsultationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonConsultationPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonConsultationPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonConsultationPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonConsultationPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonConsultationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonConsultationPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonConsultationPeer::REFERENCE);
            $criteria->addSelectColumn(CommonConsultationPeer::ORGANISME);
            $criteria->addSelectColumn(CommonConsultationPeer::REFERENCE_UTILISATEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::CATEGORIE);
            $criteria->addSelectColumn(CommonConsultationPeer::TITRE);
            $criteria->addSelectColumn(CommonConsultationPeer::RESUME);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEDEBUT);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEFIN);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEVALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonConsultationPeer::CODE_PROCEDURE);
            $criteria->addSelectColumn(CommonConsultationPeer::REPONSE_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonConsultationPeer::NUM_PROCEDURE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TYPE_AVIS);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_EXECUTION);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_MISE_EN_LIGNE);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEMISEENLIGNE);
            $criteria->addSelectColumn(CommonConsultationPeer::IS_TIERS_AVIS);
            $criteria->addSelectColumn(CommonConsultationPeer::URL);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEFIN_SAD);
            $criteria->addSelectColumn(CommonConsultationPeer::IS_SYS_ACQ_DYN);
            $criteria->addSelectColumn(CommonConsultationPeer::REFERENCE_CONSULTATION_INIT);
            $criteria->addSelectColumn(CommonConsultationPeer::SIGNATURE_OFFRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TYPE_VALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::ETAT_APPROBATION);
            $criteria->addSelectColumn(CommonConsultationPeer::ETAT_VALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::CHAMP_SUPP_INVISIBLE);
            $criteria->addSelectColumn(CommonConsultationPeer::CODE_CPV_1);
            $criteria->addSelectColumn(CommonConsultationPeer::CODE_CPV_2);
            $criteria->addSelectColumn(CommonConsultationPeer::PUBLICATION_EUROPE);
            $criteria->addSelectColumn(CommonConsultationPeer::ETAT_PUBLICATION);
            $criteria->addSelectColumn(CommonConsultationPeer::POURSUIVRE_AFFICHAGE);
            $criteria->addSelectColumn(CommonConsultationPeer::NBR_TELECHARGEMENT_DCE);
            $criteria->addSelectColumn(CommonConsultationPeer::SERVICE_ID);
            $criteria->addSelectColumn(CommonConsultationPeer::SERVICE_ASSOCIE_ID);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_FIN_AFFICHAGE);
            $criteria->addSelectColumn(CommonConsultationPeer::DEPOUILLABLE_PHASE_CONSULTATION);
            $criteria->addSelectColumn(CommonConsultationPeer::CONSULTATION_TRANSVERSE);
            $criteria->addSelectColumn(CommonConsultationPeer::CONSULTATION_ACHAT_PUBLIQUE);
            $criteria->addSelectColumn(CommonConsultationPeer::URL_CONSULTATION_ACHAT_PUBLIQUE);
            $criteria->addSelectColumn(CommonConsultationPeer::PARTIAL_DCE_DOWNLOAD);
            $criteria->addSelectColumn(CommonConsultationPeer::TIRAGE_PLAN);
            $criteria->addSelectColumn(CommonConsultationPeer::TIREUR_PLAN);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_MISE_EN_LIGNE_CALCULE);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::NBR_REPONSE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TYPE_PROCEDURE_ORG);
            $criteria->addSelectColumn(CommonConsultationPeer::ORGANISME_CONSULTATION_INIT);
            $criteria->addSelectColumn(CommonConsultationPeer::TIRAGE_DESCRIPTIF);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_VALIDATION_INTERMEDIAIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TR_ACCESSIBILITE);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::ALLOTI);
            $criteria->addSelectColumn(CommonConsultationPeer::NUMERO_PHASE);
            $criteria->addSelectColumn(CommonConsultationPeer::CONSULTATION_EXTERNE);
            $criteria->addSelectColumn(CommonConsultationPeer::URL_CONSULTATION_EXTERNE);
            $criteria->addSelectColumn(CommonConsultationPeer::ORG_DENOMINATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DOMAINES_ACTIVITES);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_AFFAIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS);
            $criteria->addSelectColumn(CommonConsultationPeer::CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS);
            $criteria->addSelectColumn(CommonConsultationPeer::PRIX_AQUISITION_PLANS);
            $criteria->addSelectColumn(CommonConsultationPeer::QUALIFICATION);
            $criteria->addSelectColumn(CommonConsultationPeer::AGREMENTS);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_LIMITE_ECHANTILLION);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_REUNION);
            $criteria->addSelectColumn(CommonConsultationPeer::VARIANTES);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_RPA);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::ECHANTILLON);
            $criteria->addSelectColumn(CommonConsultationPeer::REUNION);
            $criteria->addSelectColumn(CommonConsultationPeer::VISITES_LIEUX);
            $criteria->addSelectColumn(CommonConsultationPeer::VARIANTE_CALCULE);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::MODE_PASSATION);
            $criteria->addSelectColumn(CommonConsultationPeer::CONSULTATION_ANNULEE);
            $criteria->addSelectColumn(CommonConsultationPeer::COMPTE_BOAMP_ASSOCIE);
            $criteria->addSelectColumn(CommonConsultationPeer::ACCESSIBILITE_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_DEPOT_OFFRES_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEU_OUVERTURE_PLIS_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::ADRESSE_RETRAIS_DOSSIERS_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADMIN_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_TECH_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::PIECES_DOSSIER_ADDITIF_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::DETAIL_CONSULTATION_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_ECHANTILLION_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::ADD_REUNION_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::CODES_NUTS);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TR_INTITULE);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_TR_OBJET);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_DECISION);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_ACCES);
            $criteria->addSelectColumn(CommonConsultationPeer::AUTORISER_REPONSE_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonConsultationPeer::REGLE_MISE_EN_LIGNE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_REGLE_VALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::INTITULE_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_FR);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_EN);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_ES);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_SU);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_DU);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_CZ);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_AR);
            $criteria->addSelectColumn(CommonConsultationPeer::OBJET_IT);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_SOCIALE);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_ENVIRONNEMENTALE);
            $criteria->addSelectColumn(CommonConsultationPeer::REPONSE_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::AUTORISER_PUBLICITE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_ENVOI);
            $criteria->addSelectColumn(CommonConsultationPeer::CHIFFREMENT_OFFRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ENV_CANDIDATURE);
            $criteria->addSelectColumn(CommonConsultationPeer::ENV_OFFRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ENV_ANONYMAT);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_ETAT_CONSULTATION);
            $criteria->addSelectColumn(CommonConsultationPeer::REFERENCE_CONNECTEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::CONS_STATUT);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_APPROBATEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_VALIDEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::SERVICE_VALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_CREATEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::NOM_CREATEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::PRENOM_CREATEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::SIGNATURE_ACTE_ENGAGEMENT);
            $criteria->addSelectColumn(CommonConsultationPeer::ARCHIVEMETADESCRIPTION);
            $criteria->addSelectColumn(CommonConsultationPeer::ARCHIVEMETAMOTSCLEF);
            $criteria->addSelectColumn(CommonConsultationPeer::ARCHIVEIDBLOBZIP);
            $criteria->addSelectColumn(CommonConsultationPeer::DECISION_PARTIELLE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_A_RENSEIGNER);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_MARCHE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_DECLARATION_SANS_SUITE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_DECLARATION_INFRUCTUEUX);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_SELECTION_ENTREPRISE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_ATTRIBUTION_ACCORD_CADRE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_ADMISSION_SAD);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_DECISION_AUTRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_ARCHIVEUR);
            $criteria->addSelectColumn(CommonConsultationPeer::PRENOM_NOM_AGENT_TELECHARGEMENT_PLIS);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_AGENT_TELECHARGEMENT_PLIS);
            $criteria->addSelectColumn(CommonConsultationPeer::PATH_TELECHARGEMENT_PLIS);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_TELECHARGEMENT_PLIS);
            $criteria->addSelectColumn(CommonConsultationPeer::SERVICE_VALIDATION_INTERMEDIAIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::ENV_OFFRE_TECHNIQUE);
            $criteria->addSelectColumn(CommonConsultationPeer::REF_ORG_PARTENAIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_ARCHIVAGE);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_DECISION_ANNULATION);
            $criteria->addSelectColumn(CommonConsultationPeer::COMMENTAIRE_ANNULATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_MISE_EN_LIGNE_SOUHAITEE);
            $criteria->addSelectColumn(CommonConsultationPeer::ETAT_EN_ATTENTE_VALIDATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DOSSIER_ADDITIF);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_MARCHE);
            $criteria->addSelectColumn(CommonConsultationPeer::TYPE_PRESTATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonConsultationPeer::DELAI_PARTIEL);
            $criteria->addSelectColumn(CommonConsultationPeer::DATEFINLOCALE);
            $criteria->addSelectColumn(CommonConsultationPeer::LIEURESIDENCE);
            $criteria->addSelectColumn(CommonConsultationPeer::ALERTE);
            $criteria->addSelectColumn(CommonConsultationPeer::DOUBLON);
            $criteria->addSelectColumn(CommonConsultationPeer::DENOMINATION_ADAPTE);
            $criteria->addSelectColumn(CommonConsultationPeer::URL_CONSULTATION_AVIS_PUB);
            $criteria->addSelectColumn(CommonConsultationPeer::DOUBLON_DE);
            $criteria->addSelectColumn(CommonConsultationPeer::ENTITE_ADJUDICATRICE);
            $criteria->addSelectColumn(CommonConsultationPeer::CODE_OPERATION);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_SOCIALE_INSERTION);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_ENV_SPECS_TECHNIQUES);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_ENV_COND_EXECUTION);
            $criteria->addSelectColumn(CommonConsultationPeer::CLAUSE_ENV_CRITERES_SELECT);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_DONNEE_COMPLEMENTAIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::DONNEE_COMPLEMENTAIRE_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConsultationPeer::MODE_OUVERTURE_REPONSE);
            $criteria->addSelectColumn(CommonConsultationPeer::ID_FICHIER_ANNULATION);
            $criteria->addSelectColumn(CommonConsultationPeer::IDOPERATION);
            $criteria->addSelectColumn(CommonConsultationPeer::MARCHE_PUBLIC_SIMPLIFIE);
            $criteria->addSelectColumn(CommonConsultationPeer::INFOS_BLOCS_ATLAS);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_FIN_UNIX);
            $criteria->addSelectColumn(CommonConsultationPeer::DATE_ACHEVEMENT);
            $criteria->addSelectColumn(CommonConsultationPeer::NOMBRE_DE_LOTS);
        } else {
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.reference_utilisateur');
            $criteria->addSelectColumn($alias . '.categorie');
            $criteria->addSelectColumn($alias . '.titre');
            $criteria->addSelectColumn($alias . '.resume');
            $criteria->addSelectColumn($alias . '.datedebut');
            $criteria->addSelectColumn($alias . '.datefin');
            $criteria->addSelectColumn($alias . '.datevalidation');
            $criteria->addSelectColumn($alias . '.type_procedure');
            $criteria->addSelectColumn($alias . '.code_procedure');
            $criteria->addSelectColumn($alias . '.reponse_electronique');
            $criteria->addSelectColumn($alias . '.num_procedure');
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.id_type_avis');
            $criteria->addSelectColumn($alias . '.lieu_execution');
            $criteria->addSelectColumn($alias . '.type_mise_en_ligne');
            $criteria->addSelectColumn($alias . '.datemiseenligne');
            $criteria->addSelectColumn($alias . '.is_tiers_avis');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.datefin_sad');
            $criteria->addSelectColumn($alias . '.is_sys_acq_dyn');
            $criteria->addSelectColumn($alias . '.reference_consultation_init');
            $criteria->addSelectColumn($alias . '.signature_offre');
            $criteria->addSelectColumn($alias . '.id_type_validation');
            $criteria->addSelectColumn($alias . '.etat_approbation');
            $criteria->addSelectColumn($alias . '.etat_validation');
            $criteria->addSelectColumn($alias . '.champ_supp_invisible');
            $criteria->addSelectColumn($alias . '.code_cpv_1');
            $criteria->addSelectColumn($alias . '.code_cpv_2');
            $criteria->addSelectColumn($alias . '.publication_europe');
            $criteria->addSelectColumn($alias . '.etat_publication');
            $criteria->addSelectColumn($alias . '.poursuivre_affichage');
            $criteria->addSelectColumn($alias . '.nbr_telechargement_dce');
            $criteria->addSelectColumn($alias . '.service_id');
            $criteria->addSelectColumn($alias . '.service_associe_id');
            $criteria->addSelectColumn($alias . '.detail_consultation');
            $criteria->addSelectColumn($alias . '.date_fin_affichage');
            $criteria->addSelectColumn($alias . '.depouillable_phase_consultation');
            $criteria->addSelectColumn($alias . '.consultation_transverse');
            $criteria->addSelectColumn($alias . '.consultation_achat_publique');
            $criteria->addSelectColumn($alias . '.url_consultation_achat_publique');
            $criteria->addSelectColumn($alias . '.partial_dce_download');
            $criteria->addSelectColumn($alias . '.tirage_plan');
            $criteria->addSelectColumn($alias . '.tireur_plan');
            $criteria->addSelectColumn($alias . '.date_mise_en_ligne_calcule');
            $criteria->addSelectColumn($alias . '.accessibilite_en');
            $criteria->addSelectColumn($alias . '.accessibilite_es');
            $criteria->addSelectColumn($alias . '.nbr_reponse');
            $criteria->addSelectColumn($alias . '.id_type_procedure_org');
            $criteria->addSelectColumn($alias . '.organisme_consultation_init');
            $criteria->addSelectColumn($alias . '.tirage_descriptif');
            $criteria->addSelectColumn($alias . '.date_validation_intermediaire');
            $criteria->addSelectColumn($alias . '.accessibilite_fr');
            $criteria->addSelectColumn($alias . '.id_tr_accessibilite');
            $criteria->addSelectColumn($alias . '.accessibilite_cz');
            $criteria->addSelectColumn($alias . '.accessibilite_du');
            $criteria->addSelectColumn($alias . '.accessibilite_su');
            $criteria->addSelectColumn($alias . '.accessibilite_ar');
            $criteria->addSelectColumn($alias . '.alloti');
            $criteria->addSelectColumn($alias . '.numero_phase');
            $criteria->addSelectColumn($alias . '.consultation_externe');
            $criteria->addSelectColumn($alias . '.url_consultation_externe');
            $criteria->addSelectColumn($alias . '.org_denomination');
            $criteria->addSelectColumn($alias . '.domaines_activites');
            $criteria->addSelectColumn($alias . '.id_affaire');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers');
            $criteria->addSelectColumn($alias . '.caution_provisoire');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis');
            $criteria->addSelectColumn($alias . '.prix_aquisition_plans');
            $criteria->addSelectColumn($alias . '.qualification');
            $criteria->addSelectColumn($alias . '.agrements');
            $criteria->addSelectColumn($alias . '.add_echantillion');
            $criteria->addSelectColumn($alias . '.date_limite_echantillion');
            $criteria->addSelectColumn($alias . '.add_reunion');
            $criteria->addSelectColumn($alias . '.date_reunion');
            $criteria->addSelectColumn($alias . '.variantes');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_ar');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_ar');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_ar');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_fr');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_en');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_es');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_su');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_du');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_cz');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_ar');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_fr');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_en');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_es');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_su');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_du');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_cz');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_ar');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_fr');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_en');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_es');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_su');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_du');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_cz');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_ar');
            $criteria->addSelectColumn($alias . '.id_rpa');
            $criteria->addSelectColumn($alias . '.detail_consultation_fr');
            $criteria->addSelectColumn($alias . '.detail_consultation_en');
            $criteria->addSelectColumn($alias . '.detail_consultation_es');
            $criteria->addSelectColumn($alias . '.detail_consultation_su');
            $criteria->addSelectColumn($alias . '.detail_consultation_du');
            $criteria->addSelectColumn($alias . '.detail_consultation_cz');
            $criteria->addSelectColumn($alias . '.detail_consultation_ar');
            $criteria->addSelectColumn($alias . '.echantillon');
            $criteria->addSelectColumn($alias . '.reunion');
            $criteria->addSelectColumn($alias . '.visites_lieux');
            $criteria->addSelectColumn($alias . '.variante_calcule');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_fr');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_en');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_es');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_su');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_du');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_cz');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_fr');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_en');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_es');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_su');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_du');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_cz');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_fr');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_en');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_es');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_su');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_du');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_cz');
            $criteria->addSelectColumn($alias . '.add_echantillion_fr');
            $criteria->addSelectColumn($alias . '.add_echantillion_en');
            $criteria->addSelectColumn($alias . '.add_echantillion_es');
            $criteria->addSelectColumn($alias . '.add_echantillion_su');
            $criteria->addSelectColumn($alias . '.add_echantillion_du');
            $criteria->addSelectColumn($alias . '.add_echantillion_cz');
            $criteria->addSelectColumn($alias . '.add_echantillion_ar');
            $criteria->addSelectColumn($alias . '.add_reunion_fr');
            $criteria->addSelectColumn($alias . '.add_reunion_en');
            $criteria->addSelectColumn($alias . '.add_reunion_es');
            $criteria->addSelectColumn($alias . '.add_reunion_su');
            $criteria->addSelectColumn($alias . '.add_reunion_du');
            $criteria->addSelectColumn($alias . '.add_reunion_cz');
            $criteria->addSelectColumn($alias . '.add_reunion_ar');
            $criteria->addSelectColumn($alias . '.mode_passation');
            $criteria->addSelectColumn($alias . '.consultation_annulee');
            $criteria->addSelectColumn($alias . '.Compte_Boamp_Associe');
            $criteria->addSelectColumn($alias . '.accessibilite_it');
            $criteria->addSelectColumn($alias . '.adresse_depot_offres_it');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_it');
            $criteria->addSelectColumn($alias . '.adresse_retrais_dossiers_it');
            $criteria->addSelectColumn($alias . '.pieces_dossier_admin_it');
            $criteria->addSelectColumn($alias . '.pieces_dossier_tech_it');
            $criteria->addSelectColumn($alias . '.pieces_dossier_additif_it');
            $criteria->addSelectColumn($alias . '.detail_consultation_it');
            $criteria->addSelectColumn($alias . '.add_echantillion_it');
            $criteria->addSelectColumn($alias . '.add_reunion_it');
            $criteria->addSelectColumn($alias . '.codes_nuts');
            $criteria->addSelectColumn($alias . '.intitule');
            $criteria->addSelectColumn($alias . '.id_tr_intitule');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.id_tr_objet');
            $criteria->addSelectColumn($alias . '.date_decision');
            $criteria->addSelectColumn($alias . '.type_acces');
            $criteria->addSelectColumn($alias . '.autoriser_reponse_electronique');
            $criteria->addSelectColumn($alias . '.regle_mise_en_ligne');
            $criteria->addSelectColumn($alias . '.id_regle_validation');
            $criteria->addSelectColumn($alias . '.intitule_fr');
            $criteria->addSelectColumn($alias . '.intitule_en');
            $criteria->addSelectColumn($alias . '.intitule_es');
            $criteria->addSelectColumn($alias . '.intitule_su');
            $criteria->addSelectColumn($alias . '.intitule_du');
            $criteria->addSelectColumn($alias . '.intitule_cz');
            $criteria->addSelectColumn($alias . '.intitule_ar');
            $criteria->addSelectColumn($alias . '.intitule_it');
            $criteria->addSelectColumn($alias . '.objet_fr');
            $criteria->addSelectColumn($alias . '.objet_en');
            $criteria->addSelectColumn($alias . '.objet_es');
            $criteria->addSelectColumn($alias . '.objet_su');
            $criteria->addSelectColumn($alias . '.objet_du');
            $criteria->addSelectColumn($alias . '.objet_cz');
            $criteria->addSelectColumn($alias . '.objet_ar');
            $criteria->addSelectColumn($alias . '.objet_it');
            $criteria->addSelectColumn($alias . '.clause_sociale');
            $criteria->addSelectColumn($alias . '.clause_environnementale');
            $criteria->addSelectColumn($alias . '.reponse_obligatoire');
            $criteria->addSelectColumn($alias . '.autoriser_publicite');
            $criteria->addSelectColumn($alias . '.type_envoi');
            $criteria->addSelectColumn($alias . '.chiffrement_offre');
            $criteria->addSelectColumn($alias . '.env_candidature');
            $criteria->addSelectColumn($alias . '.env_offre');
            $criteria->addSelectColumn($alias . '.env_anonymat');
            $criteria->addSelectColumn($alias . '.id_etat_consultation');
            $criteria->addSelectColumn($alias . '.reference_connecteur');
            $criteria->addSelectColumn($alias . '.cons_statut');
            $criteria->addSelectColumn($alias . '.id_approbateur');
            $criteria->addSelectColumn($alias . '.id_valideur');
            $criteria->addSelectColumn($alias . '.service_validation');
            $criteria->addSelectColumn($alias . '.id_createur');
            $criteria->addSelectColumn($alias . '.nom_createur');
            $criteria->addSelectColumn($alias . '.prenom_createur');
            $criteria->addSelectColumn($alias . '.signature_acte_engagement');
            $criteria->addSelectColumn($alias . '.archiveMetaDescription');
            $criteria->addSelectColumn($alias . '.archiveMetaMotsClef');
            $criteria->addSelectColumn($alias . '.archiveIdBlobZip');
            $criteria->addSelectColumn($alias . '.decision_partielle');
            $criteria->addSelectColumn($alias . '.type_decision_a_renseigner');
            $criteria->addSelectColumn($alias . '.type_decision_attribution_marche');
            $criteria->addSelectColumn($alias . '.type_decision_declaration_sans_suite');
            $criteria->addSelectColumn($alias . '.type_decision_declaration_infructueux');
            $criteria->addSelectColumn($alias . '.type_decision_selection_entreprise');
            $criteria->addSelectColumn($alias . '.type_decision_attribution_accord_cadre');
            $criteria->addSelectColumn($alias . '.type_decision_admission_sad');
            $criteria->addSelectColumn($alias . '.type_decision_autre');
            $criteria->addSelectColumn($alias . '.id_archiveur');
            $criteria->addSelectColumn($alias . '.prenom_nom_agent_telechargement_plis');
            $criteria->addSelectColumn($alias . '.id_agent_telechargement_plis');
            $criteria->addSelectColumn($alias . '.path_telechargement_plis');
            $criteria->addSelectColumn($alias . '.date_telechargement_plis');
            $criteria->addSelectColumn($alias . '.service_validation_intermediaire');
            $criteria->addSelectColumn($alias . '.env_offre_technique');
            $criteria->addSelectColumn($alias . '.ref_org_partenaire');
            $criteria->addSelectColumn($alias . '.date_archivage');
            $criteria->addSelectColumn($alias . '.date_decision_annulation');
            $criteria->addSelectColumn($alias . '.commentaire_annulation');
            $criteria->addSelectColumn($alias . '.date_mise_en_ligne_souhaitee');
            $criteria->addSelectColumn($alias . '.etat_en_attente_validation');
            $criteria->addSelectColumn($alias . '.dossier_additif');
            $criteria->addSelectColumn($alias . '.type_marche');
            $criteria->addSelectColumn($alias . '.type_prestation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.delai_partiel');
            $criteria->addSelectColumn($alias . '.dateFinLocale');
            $criteria->addSelectColumn($alias . '.lieuResidence');
            $criteria->addSelectColumn($alias . '.alerte');
            $criteria->addSelectColumn($alias . '.doublon');
            $criteria->addSelectColumn($alias . '.denomination_adapte');
            $criteria->addSelectColumn($alias . '.url_consultation_avis_pub');
            $criteria->addSelectColumn($alias . '.doublon_de');
            $criteria->addSelectColumn($alias . '.entite_adjudicatrice');
            $criteria->addSelectColumn($alias . '.code_operation');
            $criteria->addSelectColumn($alias . '.clause_sociale_condition_execution');
            $criteria->addSelectColumn($alias . '.clause_sociale_insertion');
            $criteria->addSelectColumn($alias . '.clause_sociale_ateliers_proteges');
            $criteria->addSelectColumn($alias . '.clause_env_specs_techniques');
            $criteria->addSelectColumn($alias . '.clause_env_cond_execution');
            $criteria->addSelectColumn($alias . '.clause_env_criteres_select');
            $criteria->addSelectColumn($alias . '.id_donnee_complementaire');
            $criteria->addSelectColumn($alias . '.donnee_complementaire_obligatoire');
            $criteria->addSelectColumn($alias . '.mode_ouverture_reponse');
            $criteria->addSelectColumn($alias . '.id_fichier_annulation');
            $criteria->addSelectColumn($alias . '.idOperation');
            $criteria->addSelectColumn($alias . '.marche_public_simplifie');
            $criteria->addSelectColumn($alias . '.infos_blocs_atlas');
            $criteria->addSelectColumn($alias . '.DATE_FIN_UNIX');
            $criteria->addSelectColumn($alias . '.date_achevement');
            $criteria->addSelectColumn($alias . '.nombre_de_lots');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonConsultation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonConsultationPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonConsultationPeer::populateObjects(CommonConsultationPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonConsultation $obj A CommonConsultation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getReference(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonConsultationPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonConsultation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonConsultation) {
                $key = serialize(array((string) $value->getReference(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonConsultation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonConsultationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonConsultation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonConsultationPeer::$instances[$key])) {
                return CommonConsultationPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonConsultationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonConsultationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to consultation
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonAVISPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonAVISPeer::clearInstancePool();
        // Invalidate objects in CommonAnnoncePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonAnnoncePeer::clearInstancePool();
        // Invalidate objects in CommonAvisPubPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonAvisPubPeer::clearInstancePool();
        // Invalidate objects in CommonCategorieLotPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonCategorieLotPeer::clearInstancePool();
        // Invalidate objects in CommonComplementPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonComplementPeer::clearInstancePool();
        // Invalidate objects in CommonDATEFINPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonDATEFINPeer::clearInstancePool();
        // Invalidate objects in CommonDCEPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonDCEPeer::clearInstancePool();
        // Invalidate objects in CommonDocumentExternePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonDocumentExternePeer::clearInstancePool();
        // Invalidate objects in CommonHeliosPiecePublicitePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonHeliosPiecePublicitePeer::clearInstancePool();
        // Invalidate objects in CommonHeliosPvConsultationPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonHeliosPvConsultationPeer::clearInstancePool();
        // Invalidate objects in CommonHeliosRapportPrefetPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonHeliosRapportPrefetPeer::clearInstancePool();
        // Invalidate objects in CommonHeliosTableauArPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonHeliosTableauArPeer::clearInstancePool();
        // Invalidate objects in CommonHeliosTeletransmissionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonHeliosTeletransmissionPeer::clearInstancePool();
        // Invalidate objects in CommonInterneConsultationPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonInterneConsultationPeer::clearInstancePool();
        // Invalidate objects in CommonInterneConsultationSuiviSeulPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonInterneConsultationSuiviSeulPeer::clearInstancePool();
        // Invalidate objects in CommonOffrePapierPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonOffrePapierPeer::clearInstancePool();
        // Invalidate objects in CommonOffresPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonOffresPeer::clearInstancePool();
        // Invalidate objects in CommonPanierEntreprisePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPanierEntreprisePeer::clearInstancePool();
        // Invalidate objects in CommonPiecesDCEPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPiecesDCEPeer::clearInstancePool();
        // Invalidate objects in CommonPiecesDCEPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPiecesDCEPeer::clearInstancePool();
        // Invalidate objects in CommonRGPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonRGPeer::clearInstancePool();
        // Invalidate objects in CommonRetraitPapierPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonRetraitPapierPeer::clearInstancePool();
        // Invalidate objects in CommonSupportPublicationPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonSupportPublicationPeer::clearInstancePool();
        // Invalidate objects in CommonTelechargementPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTelechargementPeer::clearInstancePool();
        // Invalidate objects in CommonTelechargementAnonymePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTelechargementAnonymePeer::clearInstancePool();
        // Invalidate objects in CommonConsultationDocumentCfePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonConsultationDocumentCfePeer::clearInstancePool();
        // Invalidate objects in CommonTCalendrierPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTCalendrierPeer::clearInstancePool();
        // Invalidate objects in CommonVisiteLieuxPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonVisiteLieuxPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonConsultationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonConsultationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonConsultationPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonConsultation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonConsultationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonConsultationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonConsultationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOperations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CommonConsultation objects pre-filled with their CommonOperations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);
        }

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol = CommonConsultationPeer::NUM_HYDRATE_COLUMNS;
        CommonOperationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonOperationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonOperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonOperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonConsultation) to $obj2 (CommonOperations)
                $obj2->addCommonConsultation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonConsultation objects pre-filled with their CommonOrganisme objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);
        }

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol = CommonConsultationPeer::NUM_HYDRATE_COLUMNS;
        CommonOrganismePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonConsultation) to $obj2 (CommonOrganisme)
                $obj2->addCommonConsultation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);

        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of CommonConsultation objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);
        }

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonOperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOperationsPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);

        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonOperations rows

            $key2 = CommonOperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonOperationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonOperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonOperationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonConsultation) to the collection in $obj2 (CommonOperations)
                $obj2->addCommonConsultation($obj1);
            } // if joined row not null

            // Add objects for joined CommonOrganisme rows

            $key3 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonOrganismePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonOrganismePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonOrganismePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonConsultation) to the collection in $obj3 (CommonOrganisme)
                $obj3->addCommonConsultation($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOperations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonOperations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonOrganisme table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonOrganisme(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CommonConsultation objects pre-filled with all related objects except CommonOperations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonOperations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);
        }

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonOrganismePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOrganismePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonConsultationPeer::ORGANISME, CommonOrganismePeer::ACRONYME, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonOrganisme rows

                $key2 = CommonOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonOrganismePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonOrganismePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonOrganismePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonConsultation) to the collection in $obj2 (CommonOrganisme)
                $obj2->addCommonConsultation($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonConsultation objects pre-filled with all related objects except CommonOrganisme.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonConsultation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonOrganisme(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);
        }

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol2 = CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonOperationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonOperationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonConsultationPeer::IDOPERATION, CommonOperationsPeer::ID_OPERATION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonConsultationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonConsultationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonConsultationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonOperations rows

                $key2 = CommonOperationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonOperationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonOperationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonOperationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonConsultation) to the collection in $obj2 (CommonOperations)
                $obj2->addCommonConsultation($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonConsultationPeer::DATABASE_NAME)->getTable(CommonConsultationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonConsultationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonConsultationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonConsultationTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonConsultationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonConsultation object
        }

        if ($criteria->containsKey(CommonConsultationPeer::REFERENCE) && $criteria->keyContainsValue(CommonConsultationPeer::REFERENCE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonConsultationPeer::REFERENCE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConsultation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonConsultationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonConsultationPeer::REFERENCE);
            $value = $criteria->remove(CommonConsultationPeer::REFERENCE);
            if ($value) {
                $selectCriteria->add(CommonConsultationPeer::REFERENCE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonConsultationPeer::ORGANISME);
            $value = $criteria->remove(CommonConsultationPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonConsultationPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConsultationPeer::TABLE_NAME);
            }

        } else { // $values is CommonConsultation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the consultation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonConsultationPeer::doOnDeleteCascade(new Criteria(CommonConsultationPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonConsultationPeer::TABLE_NAME, $con, CommonConsultationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonConsultationPeer::clearInstancePool();
            CommonConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonConsultation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonConsultation object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonConsultation) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonConsultationPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonConsultationPeer::REFERENCE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonConsultationPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConsultationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonConsultationPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonConsultationPeer::clearInstancePool();
            } elseif ($values instanceof CommonConsultation) { // it's a model object
                CommonConsultationPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonConsultationPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonConsultationPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonAVIS objects
            $criteria = new Criteria(CommonAVISPeer::DATABASE_NAME);
            
            $criteria->add(CommonAVISPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonAVISPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonAVISPeer::doDelete($criteria, $con);

            // delete related CommonAnnonce objects
            $criteria = new Criteria(CommonAnnoncePeer::DATABASE_NAME);
            
            $criteria->add(CommonAnnoncePeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonAnnoncePeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonAnnoncePeer::doDelete($criteria, $con);

            // delete related CommonAvisPub objects
            $criteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);
            
            $criteria->add(CommonAvisPubPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonAvisPubPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonAvisPubPeer::doDelete($criteria, $con);

            // delete related CommonCategorieLot objects
            $criteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);
            
            $criteria->add(CommonCategorieLotPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonCategorieLotPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonCategorieLotPeer::doDelete($criteria, $con);

            // delete related CommonComplement objects
            $criteria = new Criteria(CommonComplementPeer::DATABASE_NAME);
            
            $criteria->add(CommonComplementPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonComplementPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonComplementPeer::doDelete($criteria, $con);

            // delete related CommonDATEFIN objects
            $criteria = new Criteria(CommonDATEFINPeer::DATABASE_NAME);
            
            $criteria->add(CommonDATEFINPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonDATEFINPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonDATEFINPeer::doDelete($criteria, $con);

            // delete related CommonDCE objects
            $criteria = new Criteria(CommonDCEPeer::DATABASE_NAME);
            
            $criteria->add(CommonDCEPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonDCEPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonDCEPeer::doDelete($criteria, $con);

            // delete related CommonDocumentExterne objects
            $criteria = new Criteria(CommonDocumentExternePeer::DATABASE_NAME);
            
            $criteria->add(CommonDocumentExternePeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonDocumentExternePeer::REFCONSULTATION, $obj->getReference());
            $affectedRows += CommonDocumentExternePeer::doDelete($criteria, $con);

            // delete related CommonHeliosPiecePublicite objects
            $criteria = new Criteria(CommonHeliosPiecePublicitePeer::DATABASE_NAME);
            
            $criteria->add(CommonHeliosPiecePublicitePeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonHeliosPiecePublicitePeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonHeliosPiecePublicitePeer::doDelete($criteria, $con);

            // delete related CommonHeliosPvConsultation objects
            $criteria = new Criteria(CommonHeliosPvConsultationPeer::DATABASE_NAME);
            
            $criteria->add(CommonHeliosPvConsultationPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonHeliosPvConsultationPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonHeliosPvConsultationPeer::doDelete($criteria, $con);

            // delete related CommonHeliosRapportPrefet objects
            $criteria = new Criteria(CommonHeliosRapportPrefetPeer::DATABASE_NAME);
            
            $criteria->add(CommonHeliosRapportPrefetPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonHeliosRapportPrefetPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonHeliosRapportPrefetPeer::doDelete($criteria, $con);

            // delete related CommonHeliosTableauAr objects
            $criteria = new Criteria(CommonHeliosTableauArPeer::DATABASE_NAME);
            
            $criteria->add(CommonHeliosTableauArPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonHeliosTableauArPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonHeliosTableauArPeer::doDelete($criteria, $con);

            // delete related CommonHeliosTeletransmission objects
            $criteria = new Criteria(CommonHeliosTeletransmissionPeer::DATABASE_NAME);
            
            $criteria->add(CommonHeliosTeletransmissionPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonHeliosTeletransmissionPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonHeliosTeletransmissionPeer::doDelete($criteria, $con);

            // delete related CommonInterneConsultation objects
            $criteria = new Criteria(CommonInterneConsultationPeer::DATABASE_NAME);
            
            $criteria->add(CommonInterneConsultationPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonInterneConsultationPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonInterneConsultationPeer::doDelete($criteria, $con);

            // delete related CommonInterneConsultationSuiviSeul objects
            $criteria = new Criteria(CommonInterneConsultationSuiviSeulPeer::DATABASE_NAME);
            
            $criteria->add(CommonInterneConsultationSuiviSeulPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonInterneConsultationSuiviSeulPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonInterneConsultationSuiviSeulPeer::doDelete($criteria, $con);

            // delete related CommonOffrePapier objects
            $criteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);
            
            $criteria->add(CommonOffrePapierPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonOffrePapierPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonOffrePapierPeer::doDelete($criteria, $con);

            // delete related CommonOffres objects
            $criteria = new Criteria(CommonOffresPeer::DATABASE_NAME);
            
            $criteria->add(CommonOffresPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonOffresPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonOffresPeer::doDelete($criteria, $con);

            // delete related CommonPanierEntreprise objects
            $criteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);
            
            $criteria->add(CommonPanierEntreprisePeer::REF_CONSULTATION, $obj->getReference());
            $affectedRows += CommonPanierEntreprisePeer::doDelete($criteria, $con);

            // delete related CommonPiecesDCE objects
            $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
            
            $criteria->add(CommonPiecesDCEPeer::REF_CONSULTATION, $obj->getReference());
            $affectedRows += CommonPiecesDCEPeer::doDelete($criteria, $con);

            // delete related CommonPiecesDCE objects
            $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
            
            $criteria->add(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, $obj->getOrganisme());
            $affectedRows += CommonPiecesDCEPeer::doDelete($criteria, $con);

            // delete related CommonRG objects
            $criteria = new Criteria(CommonRGPeer::DATABASE_NAME);
            
            $criteria->add(CommonRGPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonRGPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonRGPeer::doDelete($criteria, $con);

            // delete related CommonRetraitPapier objects
            $criteria = new Criteria(CommonRetraitPapierPeer::DATABASE_NAME);
            
            $criteria->add(CommonRetraitPapierPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonRetraitPapierPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonRetraitPapierPeer::doDelete($criteria, $con);

            // delete related CommonSupportPublication objects
            $criteria = new Criteria(CommonSupportPublicationPeer::DATABASE_NAME);
            
            $criteria->add(CommonSupportPublicationPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonSupportPublicationPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonSupportPublicationPeer::doDelete($criteria, $con);

            // delete related CommonTelechargement objects
            $criteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);
            
            $criteria->add(CommonTelechargementPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonTelechargementPeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonTelechargementPeer::doDelete($criteria, $con);

            // delete related CommonTelechargementAnonyme objects
            $criteria = new Criteria(CommonTelechargementAnonymePeer::DATABASE_NAME);
            
            $criteria->add(CommonTelechargementAnonymePeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonTelechargementAnonymePeer::CONSULTATION_REF, $obj->getReference());
            $affectedRows += CommonTelechargementAnonymePeer::doDelete($criteria, $con);

            // delete related CommonConsultationDocumentCfe objects
            $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);
            
            $criteria->add(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $obj->getReference());
            $affectedRows += CommonConsultationDocumentCfePeer::doDelete($criteria, $con);

            // delete related CommonTCalendrier objects
            $criteria = new Criteria(CommonTCalendrierPeer::DATABASE_NAME);
            
            $criteria->add(CommonTCalendrierPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonTCalendrierPeer::REFERENCE, $obj->getReference());
            $affectedRows += CommonTCalendrierPeer::doDelete($criteria, $con);

            // delete related CommonVisiteLieux objects
            $criteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);
            
            $criteria->add(CommonVisiteLieuxPeer::ORGANISME, $obj->getOrganisme());
            $criteria->add(CommonVisiteLieuxPeer::REFERENCE, $obj->getReference());
            $affectedRows += CommonVisiteLieuxPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonConsultation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonConsultation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonConsultationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonConsultationPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonConsultationPeer::DATABASE_NAME, CommonConsultationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $reference
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonConsultation
     */
    public static function retrieveByPK($reference, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $reference, (string) $organisme));
         if (null !== ($obj = CommonConsultationPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonConsultationPeer::REFERENCE, $reference);
        $criteria->add(CommonConsultationPeer::ORGANISME, $organisme);
        $v = CommonConsultationPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonConsultationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonConsultationPeer::buildTableMap();

