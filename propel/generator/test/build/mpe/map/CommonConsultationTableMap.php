<?php



/**
 * This class defines the structure of the 'consultation' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonConsultationTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('consultation');
        $this->setPhpName('CommonConsultation');
        $this->setClassname('CommonConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('reference', 'Reference', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, '');
        $this->addColumn('reference_utilisateur', 'ReferenceUtilisateur', 'VARCHAR', true, 255, '');
        $this->addColumn('categorie', 'Categorie', 'VARCHAR', true, 30, '0');
        $this->addColumn('titre', 'Titre', 'CLOB', false, null, null);
        $this->addColumn('resume', 'Resume', 'CLOB', false, null, null);
        $this->addColumn('datedebut', 'Datedebut', 'DATE', true, null, '0000-00-00');
        $this->addColumn('datefin', 'Datefin', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('datevalidation', 'Datevalidation', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('type_procedure', 'TypeProcedure', 'CHAR', true, null, '');
        $this->addColumn('code_procedure', 'CodeProcedure', 'VARCHAR', false, 15, null);
        $this->addColumn('reponse_electronique', 'ReponseElectronique', 'CHAR', true, null, '1');
        $this->addColumn('num_procedure', 'NumProcedure', 'INTEGER', true, 1, 0);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, 1, 0);
        $this->addColumn('id_type_avis', 'IdTypeAvis', 'INTEGER', true, 2, 0);
        $this->addColumn('lieu_execution', 'LieuExecution', 'LONGVARCHAR', true, null, null);
        $this->addColumn('type_mise_en_ligne', 'TypeMiseEnLigne', 'INTEGER', true, null, 1);
        $this->addColumn('datemiseenligne', 'Datemiseenligne', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('is_tiers_avis', 'IsTiersAvis', 'CHAR', true, null, '0');
        $this->addColumn('url', 'Url', 'VARCHAR', true, 255, '');
        $this->addColumn('datefin_sad', 'DatefinSad', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('is_sys_acq_dyn', 'IsSysAcqDyn', 'INTEGER', true, null, 0);
        $this->addColumn('reference_consultation_init', 'ReferenceConsultationInit', 'VARCHAR', true, 250, '');
        $this->addColumn('signature_offre', 'SignatureOffre', 'CHAR', false, null, null);
        $this->addColumn('id_type_validation', 'IdTypeValidation', 'INTEGER', true, null, 2);
        $this->addColumn('etat_approbation', 'EtatApprobation', 'CHAR', true, null, '0');
        $this->getColumn('etat_approbation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('etat_validation', 'EtatValidation', 'CHAR', true, null, '0');
        $this->getColumn('etat_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('champ_supp_invisible', 'ChampSuppInvisible', 'LONGVARCHAR', true, null, null);
        $this->addColumn('code_cpv_1', 'CodeCpv1', 'VARCHAR', false, 8, null);
        $this->addColumn('code_cpv_2', 'CodeCpv2', 'VARCHAR', false, 255, null);
        $this->addColumn('publication_europe', 'PublicationEurope', 'CHAR', false, null, '0');
        $this->getColumn('publication_europe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('etat_publication', 'EtatPublication', 'INTEGER', true, null, 0);
        $this->addColumn('poursuivre_affichage', 'PoursuivreAffichage', 'INTEGER', true, null, 0);
        $this->addColumn('nbr_telechargement_dce', 'NbrTelechargementDce', 'INTEGER', false, 5, null);
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', false, null, null);
        $this->addColumn('service_associe_id', 'ServiceAssocieId', 'INTEGER', false, null, null);
        $this->addColumn('detail_consultation', 'DetailConsultation', 'LONGVARCHAR', true, null, null);
        $this->addColumn('date_fin_affichage', 'DateFinAffichage', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('depouillable_phase_consultation', 'DepouillablePhaseConsultation', 'CHAR', true, null, '0');
        $this->getColumn('depouillable_phase_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_transverse', 'ConsultationTransverse', 'CHAR', true, null, '0');
        $this->getColumn('consultation_transverse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_achat_publique', 'ConsultationAchatPublique', 'CHAR', true, null, '0');
        $this->getColumn('consultation_achat_publique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('url_consultation_achat_publique', 'UrlConsultationAchatPublique', 'LONGVARCHAR', false, null, null);
        $this->addColumn('partial_dce_download', 'PartialDceDownload', 'CHAR', true, null, '0');
        $this->addColumn('tirage_plan', 'TiragePlan', 'INTEGER', true, null, 0);
        $this->addColumn('tireur_plan', 'TireurPlan', 'INTEGER', true, null, 0);
        $this->addColumn('date_mise_en_ligne_calcule', 'DateMiseEnLigneCalcule', 'TIMESTAMP', false, null, null);
        $this->addColumn('accessibilite_en', 'AccessibiliteEn', 'CHAR', true, null, '0');
        $this->addColumn('accessibilite_es', 'AccessibiliteEs', 'CHAR', true, null, '0');
        $this->addColumn('nbr_reponse', 'NbrReponse', 'INTEGER', false, 5, null);
        $this->addColumn('id_type_procedure_org', 'IdTypeProcedureOrg', 'INTEGER', true, 1, 0);
        $this->addColumn('organisme_consultation_init', 'OrganismeConsultationInit', 'VARCHAR', true, 255, '');
        $this->addColumn('tirage_descriptif', 'TirageDescriptif', 'LONGVARCHAR', true, null, null);
        $this->addColumn('date_validation_intermediaire', 'DateValidationIntermediaire', 'VARCHAR', false, 20, null);
        $this->addColumn('accessibilite_fr', 'AccessibiliteFr', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_fr', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_tr_accessibilite', 'IdTrAccessibilite', 'INTEGER', false, null, null);
        $this->addColumn('accessibilite_cz', 'AccessibiliteCz', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_cz', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('accessibilite_du', 'AccessibiliteDu', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_du', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('accessibilite_su', 'AccessibiliteSu', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_su', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('accessibilite_ar', 'AccessibiliteAr', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_ar', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alloti', 'Alloti', 'CHAR', true, null, '0');
        $this->getColumn('alloti', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('numero_phase', 'NumeroPhase', 'INTEGER', true, 3, 0);
        $this->addColumn('consultation_externe', 'ConsultationExterne', 'CHAR', true, null, '0');
        $this->getColumn('consultation_externe', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('url_consultation_externe', 'UrlConsultationExterne', 'LONGVARCHAR', false, null, null);
        $this->addColumn('org_denomination', 'OrgDenomination', 'VARCHAR', false, 250, null);
        $this->addColumn('domaines_activites', 'DomainesActivites', 'VARCHAR', false, 250, '');
        $this->addColumn('id_affaire', 'IdAffaire', 'INTEGER', false, null, null);
        $this->addColumn('adresse_retrais_dossiers', 'AdresseRetraisDossiers', 'CLOB', false, null, null);
        $this->addColumn('caution_provisoire', 'CautionProvisoire', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres', 'AdresseDepotOffres', 'CLOB', false, null, null);
        $this->addColumn('lieu_ouverture_plis', 'LieuOuverturePlis', 'CLOB', false, null, null);
        $this->addColumn('prix_aquisition_plans', 'PrixAquisitionPlans', 'VARCHAR', false, 255, null);
        $this->addColumn('qualification', 'Qualification', 'VARCHAR', false, 255, null);
        $this->addColumn('agrements', 'Agrements', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion', 'AddEchantillion', 'VARCHAR', false, 255, null);
        $this->addColumn('date_limite_echantillion', 'DateLimiteEchantillion', 'VARCHAR', false, 50, null);
        $this->addColumn('add_reunion', 'AddReunion', 'VARCHAR', false, 255, null);
        $this->addColumn('date_reunion', 'DateReunion', 'VARCHAR', false, 50, null);
        $this->addColumn('variantes', 'Variantes', 'CHAR', false, null, null);
        $this->addColumn('adresse_retrais_dossiers_ar', 'AdresseRetraisDossiersAr', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_ar', 'AdresseDepotOffresAr', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_ar', 'LieuOuverturePlisAr', 'VARCHAR', false, 255, null);
        $this->addColumn('pieces_dossier_admin', 'PiecesDossierAdmin', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_fr', 'PiecesDossierAdminFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_en', 'PiecesDossierAdminEn', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_es', 'PiecesDossierAdminEs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_su', 'PiecesDossierAdminSu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_du', 'PiecesDossierAdminDu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_cz', 'PiecesDossierAdminCz', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_admin_ar', 'PiecesDossierAdminAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech', 'PiecesDossierTech', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_fr', 'PiecesDossierTechFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_en', 'PiecesDossierTechEn', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_es', 'PiecesDossierTechEs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_su', 'PiecesDossierTechSu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_du', 'PiecesDossierTechDu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_cz', 'PiecesDossierTechCz', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_tech_ar', 'PiecesDossierTechAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif', 'PiecesDossierAdditif', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_fr', 'PiecesDossierAdditifFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_en', 'PiecesDossierAdditifEn', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_es', 'PiecesDossierAdditifEs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_su', 'PiecesDossierAdditifSu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_du', 'PiecesDossierAdditifDu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_cz', 'PiecesDossierAdditifCz', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pieces_dossier_additif_ar', 'PiecesDossierAdditifAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_rpa', 'IdRpa', 'INTEGER', false, null, null);
        $this->addColumn('detail_consultation_fr', 'DetailConsultationFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_en', 'DetailConsultationEn', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_es', 'DetailConsultationEs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_su', 'DetailConsultationSu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_du', 'DetailConsultationDu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_cz', 'DetailConsultationCz', 'LONGVARCHAR', false, null, null);
        $this->addColumn('detail_consultation_ar', 'DetailConsultationAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('echantillon', 'Echantillon', 'CHAR', true, null, null);
        $this->getColumn('echantillon', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('reunion', 'Reunion', 'CHAR', true, null, null);
        $this->getColumn('reunion', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visites_lieux', 'VisitesLieux', 'CHAR', true, null, null);
        $this->getColumn('visites_lieux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('variante_calcule', 'VarianteCalcule', 'CHAR', true, null, '0');
        $this->getColumn('variante_calcule', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('adresse_retrais_dossiers_fr', 'AdresseRetraisDossiersFr', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_retrais_dossiers_en', 'AdresseRetraisDossiersEn', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_retrais_dossiers_es', 'AdresseRetraisDossiersEs', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_retrais_dossiers_su', 'AdresseRetraisDossiersSu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_retrais_dossiers_du', 'AdresseRetraisDossiersDu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_retrais_dossiers_cz', 'AdresseRetraisDossiersCz', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_fr', 'AdresseDepotOffresFr', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_en', 'AdresseDepotOffresEn', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_es', 'AdresseDepotOffresEs', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_su', 'AdresseDepotOffresSu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_du', 'AdresseDepotOffresDu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_depot_offres_cz', 'AdresseDepotOffresCz', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_fr', 'LieuOuverturePlisFr', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_en', 'LieuOuverturePlisEn', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_es', 'LieuOuverturePlisEs', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_su', 'LieuOuverturePlisSu', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_du', 'LieuOuverturePlisDu', 'VARCHAR', false, 255, null);
        $this->addColumn('lieu_ouverture_plis_cz', 'LieuOuverturePlisCz', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_fr', 'AddEchantillionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_en', 'AddEchantillionEn', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_es', 'AddEchantillionEs', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_su', 'AddEchantillionSu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_du', 'AddEchantillionDu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_cz', 'AddEchantillionCz', 'VARCHAR', false, 255, null);
        $this->addColumn('add_echantillion_ar', 'AddEchantillionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_fr', 'AddReunionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_en', 'AddReunionEn', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_es', 'AddReunionEs', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_su', 'AddReunionSu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_du', 'AddReunionDu', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_cz', 'AddReunionCz', 'VARCHAR', false, 255, null);
        $this->addColumn('add_reunion_ar', 'AddReunionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('mode_passation', 'ModePassation', 'VARCHAR', false, 1, null);
        $this->addColumn('consultation_annulee', 'ConsultationAnnulee', 'CHAR', true, null, '0');
        $this->getColumn('consultation_annulee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('Compte_Boamp_Associe', 'CompteBoampAssocie', 'INTEGER', false, null, null);
        $this->addColumn('accessibilite_it', 'AccessibiliteIt', 'CHAR', true, null, '0');
        $this->getColumn('accessibilite_it', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('adresse_depot_offres_it', 'AdresseDepotOffresIt', 'VARCHAR', true, 255, '');
        $this->addColumn('lieu_ouverture_plis_it', 'LieuOuverturePlisIt', 'VARCHAR', true, 255, '');
        $this->addColumn('adresse_retrais_dossiers_it', 'AdresseRetraisDossiersIt', 'VARCHAR', true, 255, '');
        $this->addColumn('pieces_dossier_admin_it', 'PiecesDossierAdminIt', 'VARCHAR', true, 255, '');
        $this->addColumn('pieces_dossier_tech_it', 'PiecesDossierTechIt', 'VARCHAR', true, 255, '');
        $this->addColumn('pieces_dossier_additif_it', 'PiecesDossierAdditifIt', 'VARCHAR', true, 255, '');
        $this->addColumn('detail_consultation_it', 'DetailConsultationIt', 'LONGVARCHAR', false, null, null);
        $this->addColumn('add_echantillion_it', 'AddEchantillionIt', 'VARCHAR', true, 250, '');
        $this->addColumn('add_reunion_it', 'AddReunionIt', 'VARCHAR', true, 250, '');
        $this->addColumn('codes_nuts', 'CodesNuts', 'LONGVARCHAR', false, null, null);
        $this->addColumn('intitule', 'Intitule', 'CLOB', true, null, null);
        $this->addColumn('id_tr_intitule', 'IdTrIntitule', 'INTEGER', false, null, null);
        $this->addColumn('objet', 'Objet', 'CLOB', true, null, null);
        $this->addColumn('id_tr_objet', 'IdTrObjet', 'INTEGER', false, null, null);
        $this->addColumn('date_decision', 'DateDecision', 'VARCHAR', true, 10, '');
        $this->addColumn('type_acces', 'TypeAcces', 'CHAR', true, null, null);
        $this->addColumn('autoriser_reponse_electronique', 'AutoriserReponseElectronique', 'CHAR', true, null, '1');
        $this->addColumn('regle_mise_en_ligne', 'RegleMiseEnLigne', 'INTEGER', true, null, 1);
        $this->addColumn('id_regle_validation', 'IdRegleValidation', 'INTEGER', true, null, 2);
        $this->addColumn('intitule_fr', 'IntituleFr', 'CLOB', true, null, null);
        $this->addColumn('intitule_en', 'IntituleEn', 'CLOB', true, null, null);
        $this->addColumn('intitule_es', 'IntituleEs', 'CLOB', false, null, null);
        $this->addColumn('intitule_su', 'IntituleSu', 'CLOB', false, null, null);
        $this->addColumn('intitule_du', 'IntituleDu', 'CLOB', false, null, null);
        $this->addColumn('intitule_cz', 'IntituleCz', 'CLOB', false, null, null);
        $this->addColumn('intitule_ar', 'IntituleAr', 'CLOB', true, null, null);
        $this->addColumn('intitule_it', 'IntituleIt', 'CLOB', false, null, null);
        $this->addColumn('objet_fr', 'ObjetFr', 'CLOB', true, null, null);
        $this->addColumn('objet_en', 'ObjetEn', 'CLOB', true, null, null);
        $this->addColumn('objet_es', 'ObjetEs', 'CLOB', false, null, null);
        $this->addColumn('objet_su', 'ObjetSu', 'CLOB', false, null, null);
        $this->addColumn('objet_du', 'ObjetDu', 'CLOB', false, null, null);
        $this->addColumn('objet_cz', 'ObjetCz', 'CLOB', false, null, null);
        $this->addColumn('objet_ar', 'ObjetAr', 'CLOB', true, null, null);
        $this->addColumn('objet_it', 'ObjetIt', 'CLOB', false, null, null);
        $this->addColumn('clause_sociale', 'ClauseSociale', 'CHAR', true, null, '0');
        $this->getColumn('clause_sociale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('clause_environnementale', 'ClauseEnvironnementale', 'CHAR', true, null, '0');
        $this->getColumn('clause_environnementale', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('reponse_obligatoire', 'ReponseObligatoire', 'CHAR', true, null, '0');
        $this->addColumn('autoriser_publicite', 'AutoriserPublicite', 'INTEGER', true, 2, 1);
        $this->addColumn('type_envoi', 'TypeEnvoi', 'CHAR', true, null, '');
        $this->addColumn('chiffrement_offre', 'ChiffrementOffre', 'CHAR', true, null, '');
        $this->addColumn('env_candidature', 'EnvCandidature', 'INTEGER', true, 1, 0);
        $this->addColumn('env_offre', 'EnvOffre', 'INTEGER', true, 3, 0);
        $this->addColumn('env_anonymat', 'EnvAnonymat', 'INTEGER', true, 1, 0);
        $this->addColumn('id_etat_consultation', 'IdEtatConsultation', 'INTEGER', true, null, 0);
        $this->addColumn('reference_connecteur', 'ReferenceConnecteur', 'VARCHAR', true, 255, '');
        $this->addColumn('cons_statut', 'ConsStatut', 'CHAR', true, null, '0');
        $this->addColumn('id_approbateur', 'IdApprobateur', 'INTEGER', true, null, 0);
        $this->addColumn('id_valideur', 'IdValideur', 'INTEGER', true, null, 0);
        $this->addColumn('service_validation', 'ServiceValidation', 'INTEGER', true, null, 0);
        $this->addColumn('id_createur', 'IdCreateur', 'INTEGER', true, null, 0);
        $this->addColumn('nom_createur', 'NomCreateur', 'VARCHAR', false, 100, null);
        $this->addColumn('prenom_createur', 'PrenomCreateur', 'VARCHAR', false, 100, null);
        $this->addColumn('signature_acte_engagement', 'SignatureActeEngagement', 'CHAR', true, null, '0');
        $this->getColumn('signature_acte_engagement', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('archiveMetaDescription', 'Archivemetadescription', 'CLOB', false, null, null);
        $this->addColumn('archiveMetaMotsClef', 'Archivemetamotsclef', 'CLOB', false, null, null);
        $this->addColumn('archiveIdBlobZip', 'Archiveidblobzip', 'INTEGER', false, null, null);
        $this->addColumn('decision_partielle', 'DecisionPartielle', 'CHAR', true, null, '0');
        $this->getColumn('decision_partielle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_a_renseigner', 'TypeDecisionARenseigner', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_a_renseigner', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_attribution_marche', 'TypeDecisionAttributionMarche', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_attribution_marche', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_declaration_sans_suite', 'TypeDecisionDeclarationSansSuite', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_declaration_sans_suite', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_declaration_infructueux', 'TypeDecisionDeclarationInfructueux', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_declaration_infructueux', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_selection_entreprise', 'TypeDecisionSelectionEntreprise', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_selection_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_attribution_accord_cadre', 'TypeDecisionAttributionAccordCadre', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_attribution_accord_cadre', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_admission_sad', 'TypeDecisionAdmissionSad', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_admission_sad', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_decision_autre', 'TypeDecisionAutre', 'CHAR', true, null, '1');
        $this->getColumn('type_decision_autre', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_archiveur', 'IdArchiveur', 'INTEGER', false, null, null);
        $this->addColumn('prenom_nom_agent_telechargement_plis', 'PrenomNomAgentTelechargementPlis', 'VARCHAR', false, 255, null);
        $this->addColumn('id_agent_telechargement_plis', 'IdAgentTelechargementPlis', 'INTEGER', true, null, 0);
        $this->addColumn('path_telechargement_plis', 'PathTelechargementPlis', 'VARCHAR', false, 255, null);
        $this->addColumn('date_telechargement_plis', 'DateTelechargementPlis', 'VARCHAR', false, 20, null);
        $this->addColumn('service_validation_intermediaire', 'ServiceValidationIntermediaire', 'INTEGER', false, null, null);
        $this->addColumn('env_offre_technique', 'EnvOffreTechnique', 'INTEGER', true, 3, 0);
        $this->addColumn('ref_org_partenaire', 'RefOrgPartenaire', 'VARCHAR', true, 250, '');
        $this->addColumn('date_archivage', 'DateArchivage', 'VARCHAR', false, 20, null);
        $this->addColumn('date_decision_annulation', 'DateDecisionAnnulation', 'VARCHAR', false, 20, null);
        $this->addColumn('commentaire_annulation', 'CommentaireAnnulation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_mise_en_ligne_souhaitee', 'DateMiseEnLigneSouhaitee', 'VARCHAR', false, 20, null);
        $this->addColumn('etat_en_attente_validation', 'EtatEnAttenteValidation', 'CHAR', true, null, '1');
        $this->getColumn('etat_en_attente_validation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('dossier_additif', 'DossierAdditif', 'CHAR', true, null, '0');
        $this->getColumn('dossier_additif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_marche', 'TypeMarche', 'INTEGER', true, null, 0);
        $this->addColumn('type_prestation', 'TypePrestation', 'INTEGER', true, null, 1);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        $this->addColumn('delai_partiel', 'DelaiPartiel', 'CHAR', true, null, '0');
        $this->getColumn('delai_partiel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('dateFinLocale', 'Datefinlocale', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        $this->addColumn('lieuResidence', 'Lieuresidence', 'VARCHAR', false, 255, null);
        $this->addColumn('alerte', 'Alerte', 'CHAR', true, null, '0');
        $this->getColumn('alerte', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('doublon', 'Doublon', 'CHAR', true, null, '0');
        $this->getColumn('doublon', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('denomination_adapte', 'DenominationAdapte', 'VARCHAR', false, 250, null);
        $this->addColumn('url_consultation_avis_pub', 'UrlConsultationAvisPub', 'LONGVARCHAR', true, null, null);
        $this->addColumn('doublon_de', 'DoublonDe', 'VARCHAR', false, 250, null);
        $this->addColumn('entite_adjudicatrice', 'EntiteAdjudicatrice', 'CHAR', false, null, null);
        $this->getColumn('entite_adjudicatrice', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('code_operation', 'CodeOperation', 'VARCHAR', false, 255, null);
        $this->addColumn('clause_sociale_condition_execution', 'ClauseSocialeConditionExecution', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_sociale_insertion', 'ClauseSocialeInsertion', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_sociale_ateliers_proteges', 'ClauseSocialeAteliersProteges', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_specs_techniques', 'ClauseEnvSpecsTechniques', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_cond_execution', 'ClauseEnvCondExecution', 'VARCHAR', false, 10, '0');
        $this->addColumn('clause_env_criteres_select', 'ClauseEnvCriteresSelect', 'VARCHAR', false, 10, '0');
        $this->addColumn('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', false, null, null);
        $this->addColumn('donnee_complementaire_obligatoire', 'DonneeComplementaireObligatoire', 'CHAR', true, null, '0');
        $this->getColumn('donnee_complementaire_obligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mode_ouverture_reponse', 'ModeOuvertureReponse', 'CHAR', true, null, '0');
        $this->getColumn('mode_ouverture_reponse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_fichier_annulation', 'IdFichierAnnulation', 'INTEGER', false, null, null);
        $this->addForeignKey('idOperation', 'Idoperation', 'INTEGER', 'Operations', 'id_operation', false, null, null);
        $this->addColumn('marche_public_simplifie', 'MarchePublicSimplifie', 'CHAR', true, null, '0');
        $this->getColumn('marche_public_simplifie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('infos_blocs_atlas', 'InfosBlocsAtlas', 'VARCHAR', true, 10, '0##0');
        $this->addColumn('DATE_FIN_UNIX', 'DateFinUnix', 'VARCHAR', false, 20, '0');
        $this->addColumn('date_achevement', 'DateAchevement', 'TIMESTAMP', false, null, null);
        $this->addColumn('nombre_de_lots', 'NombreDeLots', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonOperations', 'CommonOperations', RelationMap::MANY_TO_ONE, array('idOperation' => 'id_operation', ), null, null);
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonAVIS', 'CommonAVIS', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonAVISs');
        $this->addRelation('CommonAnnonce', 'CommonAnnonce', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonAnnonces');
        $this->addRelation('CommonAnnonceBoampRelatedByOrganismeConsultationRef', 'CommonAnnonceBoamp', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), null, null, 'CommonAnnonceBoampsRelatedByOrganismeConsultationRef');
        $this->addRelation('CommonAnnonceBoampRelatedByConsultationRef', 'CommonAnnonceBoamp', RelationMap::ONE_TO_MANY, array('reference' => 'consultation_ref', ), null, null, 'CommonAnnonceBoampsRelatedByConsultationRef');
        $this->addRelation('CommonAvisPub', 'CommonAvisPub', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonAvisPubs');
        $this->addRelation('CommonCategorieLot', 'CommonCategorieLot', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonCategorieLots');
        $this->addRelation('CommonComplement', 'CommonComplement', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonComplements');
        $this->addRelation('CommonConsultationHistoriqueEtat', 'CommonConsultationHistoriqueEtat', RelationMap::ONE_TO_MANY, array('reference' => 'consultation_ref', ), null, null, 'CommonConsultationHistoriqueEtats');
        $this->addRelation('CommonDATEFIN', 'CommonDATEFIN', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonDATEFINs');
        $this->addRelation('CommonDAConsultation', 'CommonDAConsultation', RelationMap::ONE_TO_MANY, array('reference' => 'consultation_ref', ), null, null, 'CommonDAConsultations');
        $this->addRelation('CommonDCE', 'CommonDCE', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonDCEs');
        $this->addRelation('CommonDocumentExterne', 'CommonDocumentExterne', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'refConsultation', ), 'CASCADE', 'CASCADE', 'CommonDocumentExternes');
        $this->addRelation('CommonHeliosPiecePublicite', 'CommonHeliosPiecePublicite', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonHeliosPiecePublicites');
        $this->addRelation('CommonHeliosPvConsultation', 'CommonHeliosPvConsultation', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonHeliosPvConsultations');
        $this->addRelation('CommonHeliosRapportPrefet', 'CommonHeliosRapportPrefet', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonHeliosRapportPrefets');
        $this->addRelation('CommonHeliosTableauAr', 'CommonHeliosTableauAr', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonHeliosTableauArs');
        $this->addRelation('CommonHeliosTeletransmission', 'CommonHeliosTeletransmission', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonHeliosTeletransmissions');
        $this->addRelation('CommonInterneConsultation', 'CommonInterneConsultation', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonInterneConsultations');
        $this->addRelation('CommonInterneConsultationSuiviSeul', 'CommonInterneConsultationSuiviSeul', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonInterneConsultationSuiviSeuls');
        $this->addRelation('CommonOffrePapier', 'CommonOffrePapier', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonOffrePapiers');
        $this->addRelation('CommonOffres', 'CommonOffres', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonOffress');
        $this->addRelation('CommonPanierEntreprise', 'CommonPanierEntreprise', RelationMap::ONE_TO_MANY, array('reference' => 'ref_consultation', ), 'CASCADE', 'CASCADE', 'CommonPanierEntreprises');
        $this->addRelation('CommonPiecesDCERelatedByRefConsultation', 'CommonPiecesDCE', RelationMap::ONE_TO_MANY, array('reference' => 'ref_consultation', ), 'CASCADE', 'CASCADE', 'CommonPiecesDCEsRelatedByRefConsultation');
        $this->addRelation('CommonPiecesDCERelatedByOrganismeConsultation', 'CommonPiecesDCE', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme_consultation', ), 'CASCADE', 'CASCADE', 'CommonPiecesDCEsRelatedByOrganismeConsultation');
        $this->addRelation('CommonRG', 'CommonRG', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonRGs');
        $this->addRelation('CommonRetraitPapier', 'CommonRetraitPapier', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonRetraitPapiers');
        $this->addRelation('CommonSupportPublication', 'CommonSupportPublication', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonSupportPublications');
        $this->addRelation('CommonTelechargement', 'CommonTelechargement', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonTelechargements');
        $this->addRelation('CommonTelechargementAnonymeRelatedByOrganismeConsultationRef', 'CommonTelechargementAnonyme', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), 'CASCADE', 'CASCADE', 'CommonTelechargementAnonymesRelatedByOrganismeConsultationRef');
        $this->addRelation('CommonTelechargementAnonymeRelatedByConsultationRef', 'CommonTelechargementAnonyme', RelationMap::ONE_TO_MANY, array('reference' => 'consultation_ref', ), null, null, 'CommonTelechargementAnonymesRelatedByConsultationRef');
        $this->addRelation('CommonConsultationDocumentCfe', 'CommonConsultationDocumentCfe', RelationMap::ONE_TO_MANY, array('reference' => 'ref_consultation', ), 'CASCADE', 'CASCADE', 'CommonConsultationDocumentCfes');
        $this->addRelation('CommonTCalendrier', 'CommonTCalendrier', RelationMap::ONE_TO_MANY, array('organisme' => 'ORGANISME', 'reference' => 'REFERENCE', ), 'CASCADE', 'CASCADE', 'CommonTCalendriers');
        $this->addRelation('CommonTParamDossierFormulaire', 'CommonTParamDossierFormulaire', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), null, null, 'CommonTParamDossierFormulaires');
        $this->addRelation('CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaire', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'consultation_ref', ), null, null, 'CommonTReponseElecFormulaires');
        $this->addRelation('CommonVisiteLieux', 'CommonVisiteLieux', RelationMap::ONE_TO_MANY, array('organisme' => 'organisme', 'reference' => 'reference', ), 'CASCADE', 'CASCADE', 'CommonVisiteLieuxs');
    } // buildRelations()

} // CommonConsultationTableMap
