<?php


/**
 * Base static class for performing query and update operations on the 'Entreprise' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEntreprisePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Entreprise';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEntreprise';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEntrepriseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 103;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 103;

    /** the column name for the id field */
    const ID = 'Entreprise.id';

    /** the column name for the admin_id field */
    const ADMIN_ID = 'Entreprise.admin_id';

    /** the column name for the siren field */
    const SIREN = 'Entreprise.siren';

    /** the column name for the repmetiers field */
    const REPMETIERS = 'Entreprise.repmetiers';

    /** the column name for the nom field */
    const NOM = 'Entreprise.nom';

    /** the column name for the adresse field */
    const ADRESSE = 'Entreprise.adresse';

    /** the column name for the codepostal field */
    const CODEPOSTAL = 'Entreprise.codepostal';

    /** the column name for the villeadresse field */
    const VILLEADRESSE = 'Entreprise.villeadresse';

    /** the column name for the paysadresse field */
    const PAYSADRESSE = 'Entreprise.paysadresse';

    /** the column name for the email field */
    const EMAIL = 'Entreprise.email';

    /** the column name for the taille field */
    const TAILLE = 'Entreprise.taille';

    /** the column name for the formejuridique field */
    const FORMEJURIDIQUE = 'Entreprise.formejuridique';

    /** the column name for the villeenregistrement field */
    const VILLEENREGISTREMENT = 'Entreprise.villeenregistrement';

    /** the column name for the motifNonIndNum field */
    const MOTIFNONINDNUM = 'Entreprise.motifNonIndNum';

    /** the column name for the ordreProfOuAgrement field */
    const ORDREPROFOUAGREMENT = 'Entreprise.ordreProfOuAgrement';

    /** the column name for the dateConstSociete field */
    const DATECONSTSOCIETE = 'Entreprise.dateConstSociete';

    /** the column name for the nomOrgInscription field */
    const NOMORGINSCRIPTION = 'Entreprise.nomOrgInscription';

    /** the column name for the adrOrgInscription field */
    const ADRORGINSCRIPTION = 'Entreprise.adrOrgInscription';

    /** the column name for the dateConstAssoc field */
    const DATECONSTASSOC = 'Entreprise.dateConstAssoc';

    /** the column name for the dateConstAssocEtrangere field */
    const DATECONSTASSOCETRANGERE = 'Entreprise.dateConstAssocEtrangere';

    /** the column name for the nomPersonnePublique field */
    const NOMPERSONNEPUBLIQUE = 'Entreprise.nomPersonnePublique';

    /** the column name for the nationalite field */
    const NATIONALITE = 'Entreprise.nationalite';

    /** the column name for the redressement field */
    const REDRESSEMENT = 'Entreprise.redressement';

    /** the column name for the paysenregistrement field */
    const PAYSENREGISTREMENT = 'Entreprise.paysenregistrement';

    /** the column name for the sirenEtranger field */
    const SIRENETRANGER = 'Entreprise.sirenEtranger';

    /** the column name for the numAssoEtrangere field */
    const NUMASSOETRANGERE = 'Entreprise.numAssoEtrangere';

    /** the column name for the debutExerciceGlob1 field */
    const DEBUTEXERCICEGLOB1 = 'Entreprise.debutExerciceGlob1';

    /** the column name for the finExerciceGlob1 field */
    const FINEXERCICEGLOB1 = 'Entreprise.finExerciceGlob1';

    /** the column name for the debutExerciceGlob2 field */
    const DEBUTEXERCICEGLOB2 = 'Entreprise.debutExerciceGlob2';

    /** the column name for the finExerciceGlob2 field */
    const FINEXERCICEGLOB2 = 'Entreprise.finExerciceGlob2';

    /** the column name for the debutExerciceGlob3 field */
    const DEBUTEXERCICEGLOB3 = 'Entreprise.debutExerciceGlob3';

    /** the column name for the finExerciceGlob3 field */
    const FINEXERCICEGLOB3 = 'Entreprise.finExerciceGlob3';

    /** the column name for the ventesGlob1 field */
    const VENTESGLOB1 = 'Entreprise.ventesGlob1';

    /** the column name for the ventesGlob2 field */
    const VENTESGLOB2 = 'Entreprise.ventesGlob2';

    /** the column name for the ventesGlob3 field */
    const VENTESGLOB3 = 'Entreprise.ventesGlob3';

    /** the column name for the biensGlob1 field */
    const BIENSGLOB1 = 'Entreprise.biensGlob1';

    /** the column name for the biensGlob2 field */
    const BIENSGLOB2 = 'Entreprise.biensGlob2';

    /** the column name for the biensGlob3 field */
    const BIENSGLOB3 = 'Entreprise.biensGlob3';

    /** the column name for the servicesGlob1 field */
    const SERVICESGLOB1 = 'Entreprise.servicesGlob1';

    /** the column name for the servicesGlob2 field */
    const SERVICESGLOB2 = 'Entreprise.servicesGlob2';

    /** the column name for the servicesGlob3 field */
    const SERVICESGLOB3 = 'Entreprise.servicesGlob3';

    /** the column name for the totalGlob1 field */
    const TOTALGLOB1 = 'Entreprise.totalGlob1';

    /** the column name for the totalGlob2 field */
    const TOTALGLOB2 = 'Entreprise.totalGlob2';

    /** the column name for the totalGlob3 field */
    const TOTALGLOB3 = 'Entreprise.totalGlob3';

    /** the column name for the codeape field */
    const CODEAPE = 'Entreprise.codeape';

    /** the column name for the origine_compte field */
    const ORIGINE_COMPTE = 'Entreprise.origine_compte';

    /** the column name for the telephone field */
    const TELEPHONE = 'Entreprise.telephone';

    /** the column name for the fax field */
    const FAX = 'Entreprise.fax';

    /** the column name for the site_internet field */
    const SITE_INTERNET = 'Entreprise.site_internet';

    /** the column name for the description_activite field */
    const DESCRIPTION_ACTIVITE = 'Entreprise.description_activite';

    /** the column name for the activite_domaine_defense field */
    const ACTIVITE_DOMAINE_DEFENSE = 'Entreprise.activite_domaine_defense';

    /** the column name for the annee_cloture_exercice1 field */
    const ANNEE_CLOTURE_EXERCICE1 = 'Entreprise.annee_cloture_exercice1';

    /** the column name for the annee_cloture_exercice2 field */
    const ANNEE_CLOTURE_EXERCICE2 = 'Entreprise.annee_cloture_exercice2';

    /** the column name for the annee_cloture_exercice3 field */
    const ANNEE_CLOTURE_EXERCICE3 = 'Entreprise.annee_cloture_exercice3';

    /** the column name for the effectif_moyen1 field */
    const EFFECTIF_MOYEN1 = 'Entreprise.effectif_moyen1';

    /** the column name for the effectif_moyen2 field */
    const EFFECTIF_MOYEN2 = 'Entreprise.effectif_moyen2';

    /** the column name for the effectif_moyen3 field */
    const EFFECTIF_MOYEN3 = 'Entreprise.effectif_moyen3';

    /** the column name for the effectif_encadrement1 field */
    const EFFECTIF_ENCADREMENT1 = 'Entreprise.effectif_encadrement1';

    /** the column name for the effectif_encadrement2 field */
    const EFFECTIF_ENCADREMENT2 = 'Entreprise.effectif_encadrement2';

    /** the column name for the effectif_encadrement3 field */
    const EFFECTIF_ENCADREMENT3 = 'Entreprise.effectif_encadrement3';

    /** the column name for the pme1 field */
    const PME1 = 'Entreprise.pme1';

    /** the column name for the pme2 field */
    const PME2 = 'Entreprise.pme2';

    /** the column name for the pme3 field */
    const PME3 = 'Entreprise.pme3';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Entreprise.adresse2';

    /** the column name for the nicSiege field */
    const NICSIEGE = 'Entreprise.nicSiege';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'Entreprise.acronyme_pays';

    /** the column name for the date_creation field */
    const DATE_CREATION = 'Entreprise.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 'Entreprise.date_modification';

    /** the column name for the id_initial field */
    const ID_INITIAL = 'Entreprise.id_initial';

    /** the column name for the region field */
    const REGION = 'Entreprise.region';

    /** the column name for the province field */
    const PROVINCE = 'Entreprise.province';

    /** the column name for the telephone2 field */
    const TELEPHONE2 = 'Entreprise.telephone2';

    /** the column name for the telephone3 field */
    const TELEPHONE3 = 'Entreprise.telephone3';

    /** the column name for the cnss field */
    const CNSS = 'Entreprise.cnss';

    /** the column name for the rc_num field */
    const RC_NUM = 'Entreprise.rc_num';

    /** the column name for the rc_ville field */
    const RC_VILLE = 'Entreprise.rc_ville';

    /** the column name for the domaines_activites field */
    const DOMAINES_ACTIVITES = 'Entreprise.domaines_activites';

    /** the column name for the num_tax field */
    const NUM_TAX = 'Entreprise.num_tax';

    /** the column name for the documents_commerciaux field */
    const DOCUMENTS_COMMERCIAUX = 'Entreprise.documents_commerciaux';

    /** the column name for the intitule_documents_commerciaux field */
    const INTITULE_DOCUMENTS_COMMERCIAUX = 'Entreprise.intitule_documents_commerciaux';

    /** the column name for the taille_documents_commerciaux field */
    const TAILLE_DOCUMENTS_COMMERCIAUX = 'Entreprise.taille_documents_commerciaux';

    /** the column name for the qualification field */
    const QUALIFICATION = 'Entreprise.qualification';

    /** the column name for the agrement field */
    const AGREMENT = 'Entreprise.agrement';

    /** the column name for the moyens_technique field */
    const MOYENS_TECHNIQUE = 'Entreprise.moyens_technique';

    /** the column name for the moyens_humains field */
    const MOYENS_HUMAINS = 'Entreprise.moyens_humains';

    /** the column name for the compte_actif field */
    const COMPTE_ACTIF = 'Entreprise.compte_actif';

    /** the column name for the capital_social field */
    const CAPITAL_SOCIAL = 'Entreprise.capital_social';

    /** the column name for the ifu field */
    const IFU = 'Entreprise.ifu';

    /** the column name for the id_agent_createur field */
    const ID_AGENT_CREATEUR = 'Entreprise.id_agent_createur';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 'Entreprise.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 'Entreprise.prenom_agent';

    /** the column name for the adresses_electroniques field */
    const ADRESSES_ELECTRONIQUES = 'Entreprise.adresses_electroniques';

    /** the column name for the visible_bourse field */
    const VISIBLE_BOURSE = 'Entreprise.visible_bourse';

    /** the column name for the type_collaboration field */
    const TYPE_COLLABORATION = 'Entreprise.type_collaboration';

    /** the column name for the entreprise_EA field */
    const ENTREPRISE_EA = 'Entreprise.entreprise_EA';

    /** the column name for the entreprise_SIAE field */
    const ENTREPRISE_SIAE = 'Entreprise.entreprise_SIAE';

    /** the column name for the type_entreprise field */
    const TYPE_ENTREPRISE = 'Entreprise.type_entreprise';

    /** the column name for the note field */
    const NOTE = 'Entreprise.note';

    /** the column name for the code_cpv field */
    const CODE_CPV = 'Entreprise.code_cpv';

    /** the column name for the statut_referencement field */
    const STATUT_REFERENCEMENT = 'Entreprise.statut_referencement';

    /** the column name for the taille_entreprise field */
    const TAILLE_ENTREPRISE = 'Entreprise.taille_entreprise';

    /** the column name for the identifiant_fiscale field */
    const IDENTIFIANT_FISCALE = 'Entreprise.identifiant_fiscale';

    /** the column name for the valide field */
    const VALIDE = 'Entreprise.valide';

    /** The enumerated values for the pme1 field */
    const PME1_1 = '1';
    const PME1_0 = '0';

    /** The enumerated values for the pme2 field */
    const PME2_1 = '1';
    const PME2_0 = '0';

    /** The enumerated values for the pme3 field */
    const PME3_1 = '1';
    const PME3_0 = '0';

    /** The enumerated values for the entreprise_EA field */
    const ENTREPRISE_EA_0 = '0';
    const ENTREPRISE_EA_1 = '1';

    /** The enumerated values for the entreprise_SIAE field */
    const ENTREPRISE_SIAE_0 = '0';
    const ENTREPRISE_SIAE_1 = '1';

    /** The enumerated values for the type_entreprise field */
    const TYPE_ENTREPRISE_0 = '0';
    const TYPE_ENTREPRISE_1 = '1';
    const TYPE_ENTREPRISE_2 = '2';
    const TYPE_ENTREPRISE_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEntreprise objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEntreprise[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEntreprisePeer::$fieldNames[CommonEntreprisePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'AdminId', 'Siren', 'Repmetiers', 'Nom', 'Adresse', 'Codepostal', 'Villeadresse', 'Paysadresse', 'Email', 'Taille', 'Formejuridique', 'Villeenregistrement', 'Motifnonindnum', 'Ordreprofouagrement', 'Dateconstsociete', 'Nomorginscription', 'Adrorginscription', 'Dateconstassoc', 'Dateconstassocetrangere', 'Nompersonnepublique', 'Nationalite', 'Redressement', 'Paysenregistrement', 'Sirenetranger', 'Numassoetrangere', 'Debutexerciceglob1', 'Finexerciceglob1', 'Debutexerciceglob2', 'Finexerciceglob2', 'Debutexerciceglob3', 'Finexerciceglob3', 'Ventesglob1', 'Ventesglob2', 'Ventesglob3', 'Biensglob1', 'Biensglob2', 'Biensglob3', 'Servicesglob1', 'Servicesglob2', 'Servicesglob3', 'Totalglob1', 'Totalglob2', 'Totalglob3', 'Codeape', 'OrigineCompte', 'Telephone', 'Fax', 'SiteInternet', 'DescriptionActivite', 'ActiviteDomaineDefense', 'AnneeClotureExercice1', 'AnneeClotureExercice2', 'AnneeClotureExercice3', 'EffectifMoyen1', 'EffectifMoyen2', 'EffectifMoyen3', 'EffectifEncadrement1', 'EffectifEncadrement2', 'EffectifEncadrement3', 'Pme1', 'Pme2', 'Pme3', 'Adresse2', 'Nicsiege', 'AcronymePays', 'DateCreation', 'DateModification', 'IdInitial', 'Region', 'Province', 'Telephone2', 'Telephone3', 'Cnss', 'RcNum', 'RcVille', 'DomainesActivites', 'NumTax', 'DocumentsCommerciaux', 'IntituleDocumentsCommerciaux', 'TailleDocumentsCommerciaux', 'Qualification', 'Agrement', 'MoyensTechnique', 'MoyensHumains', 'CompteActif', 'CapitalSocial', 'Ifu', 'IdAgentCreateur', 'NomAgent', 'PrenomAgent', 'AdressesElectroniques', 'VisibleBourse', 'TypeCollaboration', 'EntrepriseEa', 'EntrepriseSiae', 'TypeEntreprise', 'Note', 'CodeCpv', 'StatutReferencement', 'TailleEntreprise', 'IdentifiantFiscale', 'Valide', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'adminId', 'siren', 'repmetiers', 'nom', 'adresse', 'codepostal', 'villeadresse', 'paysadresse', 'email', 'taille', 'formejuridique', 'villeenregistrement', 'motifnonindnum', 'ordreprofouagrement', 'dateconstsociete', 'nomorginscription', 'adrorginscription', 'dateconstassoc', 'dateconstassocetrangere', 'nompersonnepublique', 'nationalite', 'redressement', 'paysenregistrement', 'sirenetranger', 'numassoetrangere', 'debutexerciceglob1', 'finexerciceglob1', 'debutexerciceglob2', 'finexerciceglob2', 'debutexerciceglob3', 'finexerciceglob3', 'ventesglob1', 'ventesglob2', 'ventesglob3', 'biensglob1', 'biensglob2', 'biensglob3', 'servicesglob1', 'servicesglob2', 'servicesglob3', 'totalglob1', 'totalglob2', 'totalglob3', 'codeape', 'origineCompte', 'telephone', 'fax', 'siteInternet', 'descriptionActivite', 'activiteDomaineDefense', 'anneeClotureExercice1', 'anneeClotureExercice2', 'anneeClotureExercice3', 'effectifMoyen1', 'effectifMoyen2', 'effectifMoyen3', 'effectifEncadrement1', 'effectifEncadrement2', 'effectifEncadrement3', 'pme1', 'pme2', 'pme3', 'adresse2', 'nicsiege', 'acronymePays', 'dateCreation', 'dateModification', 'idInitial', 'region', 'province', 'telephone2', 'telephone3', 'cnss', 'rcNum', 'rcVille', 'domainesActivites', 'numTax', 'documentsCommerciaux', 'intituleDocumentsCommerciaux', 'tailleDocumentsCommerciaux', 'qualification', 'agrement', 'moyensTechnique', 'moyensHumains', 'compteActif', 'capitalSocial', 'ifu', 'idAgentCreateur', 'nomAgent', 'prenomAgent', 'adressesElectroniques', 'visibleBourse', 'typeCollaboration', 'entrepriseEa', 'entrepriseSiae', 'typeEntreprise', 'note', 'codeCpv', 'statutReferencement', 'tailleEntreprise', 'identifiantFiscale', 'valide', ),
        BasePeer::TYPE_COLNAME => array (CommonEntreprisePeer::ID, CommonEntreprisePeer::ADMIN_ID, CommonEntreprisePeer::SIREN, CommonEntreprisePeer::REPMETIERS, CommonEntreprisePeer::NOM, CommonEntreprisePeer::ADRESSE, CommonEntreprisePeer::CODEPOSTAL, CommonEntreprisePeer::VILLEADRESSE, CommonEntreprisePeer::PAYSADRESSE, CommonEntreprisePeer::EMAIL, CommonEntreprisePeer::TAILLE, CommonEntreprisePeer::FORMEJURIDIQUE, CommonEntreprisePeer::VILLEENREGISTREMENT, CommonEntreprisePeer::MOTIFNONINDNUM, CommonEntreprisePeer::ORDREPROFOUAGREMENT, CommonEntreprisePeer::DATECONSTSOCIETE, CommonEntreprisePeer::NOMORGINSCRIPTION, CommonEntreprisePeer::ADRORGINSCRIPTION, CommonEntreprisePeer::DATECONSTASSOC, CommonEntreprisePeer::DATECONSTASSOCETRANGERE, CommonEntreprisePeer::NOMPERSONNEPUBLIQUE, CommonEntreprisePeer::NATIONALITE, CommonEntreprisePeer::REDRESSEMENT, CommonEntreprisePeer::PAYSENREGISTREMENT, CommonEntreprisePeer::SIRENETRANGER, CommonEntreprisePeer::NUMASSOETRANGERE, CommonEntreprisePeer::DEBUTEXERCICEGLOB1, CommonEntreprisePeer::FINEXERCICEGLOB1, CommonEntreprisePeer::DEBUTEXERCICEGLOB2, CommonEntreprisePeer::FINEXERCICEGLOB2, CommonEntreprisePeer::DEBUTEXERCICEGLOB3, CommonEntreprisePeer::FINEXERCICEGLOB3, CommonEntreprisePeer::VENTESGLOB1, CommonEntreprisePeer::VENTESGLOB2, CommonEntreprisePeer::VENTESGLOB3, CommonEntreprisePeer::BIENSGLOB1, CommonEntreprisePeer::BIENSGLOB2, CommonEntreprisePeer::BIENSGLOB3, CommonEntreprisePeer::SERVICESGLOB1, CommonEntreprisePeer::SERVICESGLOB2, CommonEntreprisePeer::SERVICESGLOB3, CommonEntreprisePeer::TOTALGLOB1, CommonEntreprisePeer::TOTALGLOB2, CommonEntreprisePeer::TOTALGLOB3, CommonEntreprisePeer::CODEAPE, CommonEntreprisePeer::ORIGINE_COMPTE, CommonEntreprisePeer::TELEPHONE, CommonEntreprisePeer::FAX, CommonEntreprisePeer::SITE_INTERNET, CommonEntreprisePeer::DESCRIPTION_ACTIVITE, CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3, CommonEntreprisePeer::EFFECTIF_MOYEN1, CommonEntreprisePeer::EFFECTIF_MOYEN2, CommonEntreprisePeer::EFFECTIF_MOYEN3, CommonEntreprisePeer::EFFECTIF_ENCADREMENT1, CommonEntreprisePeer::EFFECTIF_ENCADREMENT2, CommonEntreprisePeer::EFFECTIF_ENCADREMENT3, CommonEntreprisePeer::PME1, CommonEntreprisePeer::PME2, CommonEntreprisePeer::PME3, CommonEntreprisePeer::ADRESSE2, CommonEntreprisePeer::NICSIEGE, CommonEntreprisePeer::ACRONYME_PAYS, CommonEntreprisePeer::DATE_CREATION, CommonEntreprisePeer::DATE_MODIFICATION, CommonEntreprisePeer::ID_INITIAL, CommonEntreprisePeer::REGION, CommonEntreprisePeer::PROVINCE, CommonEntreprisePeer::TELEPHONE2, CommonEntreprisePeer::TELEPHONE3, CommonEntreprisePeer::CNSS, CommonEntreprisePeer::RC_NUM, CommonEntreprisePeer::RC_VILLE, CommonEntreprisePeer::DOMAINES_ACTIVITES, CommonEntreprisePeer::NUM_TAX, CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX, CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX, CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX, CommonEntreprisePeer::QUALIFICATION, CommonEntreprisePeer::AGREMENT, CommonEntreprisePeer::MOYENS_TECHNIQUE, CommonEntreprisePeer::MOYENS_HUMAINS, CommonEntreprisePeer::COMPTE_ACTIF, CommonEntreprisePeer::CAPITAL_SOCIAL, CommonEntreprisePeer::IFU, CommonEntreprisePeer::ID_AGENT_CREATEUR, CommonEntreprisePeer::NOM_AGENT, CommonEntreprisePeer::PRENOM_AGENT, CommonEntreprisePeer::ADRESSES_ELECTRONIQUES, CommonEntreprisePeer::VISIBLE_BOURSE, CommonEntreprisePeer::TYPE_COLLABORATION, CommonEntreprisePeer::ENTREPRISE_EA, CommonEntreprisePeer::ENTREPRISE_SIAE, CommonEntreprisePeer::TYPE_ENTREPRISE, CommonEntreprisePeer::NOTE, CommonEntreprisePeer::CODE_CPV, CommonEntreprisePeer::STATUT_REFERENCEMENT, CommonEntreprisePeer::TAILLE_ENTREPRISE, CommonEntreprisePeer::IDENTIFIANT_FISCALE, CommonEntreprisePeer::VALIDE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ADMIN_ID', 'SIREN', 'REPMETIERS', 'NOM', 'ADRESSE', 'CODEPOSTAL', 'VILLEADRESSE', 'PAYSADRESSE', 'EMAIL', 'TAILLE', 'FORMEJURIDIQUE', 'VILLEENREGISTREMENT', 'MOTIFNONINDNUM', 'ORDREPROFOUAGREMENT', 'DATECONSTSOCIETE', 'NOMORGINSCRIPTION', 'ADRORGINSCRIPTION', 'DATECONSTASSOC', 'DATECONSTASSOCETRANGERE', 'NOMPERSONNEPUBLIQUE', 'NATIONALITE', 'REDRESSEMENT', 'PAYSENREGISTREMENT', 'SIRENETRANGER', 'NUMASSOETRANGERE', 'DEBUTEXERCICEGLOB1', 'FINEXERCICEGLOB1', 'DEBUTEXERCICEGLOB2', 'FINEXERCICEGLOB2', 'DEBUTEXERCICEGLOB3', 'FINEXERCICEGLOB3', 'VENTESGLOB1', 'VENTESGLOB2', 'VENTESGLOB3', 'BIENSGLOB1', 'BIENSGLOB2', 'BIENSGLOB3', 'SERVICESGLOB1', 'SERVICESGLOB2', 'SERVICESGLOB3', 'TOTALGLOB1', 'TOTALGLOB2', 'TOTALGLOB3', 'CODEAPE', 'ORIGINE_COMPTE', 'TELEPHONE', 'FAX', 'SITE_INTERNET', 'DESCRIPTION_ACTIVITE', 'ACTIVITE_DOMAINE_DEFENSE', 'ANNEE_CLOTURE_EXERCICE1', 'ANNEE_CLOTURE_EXERCICE2', 'ANNEE_CLOTURE_EXERCICE3', 'EFFECTIF_MOYEN1', 'EFFECTIF_MOYEN2', 'EFFECTIF_MOYEN3', 'EFFECTIF_ENCADREMENT1', 'EFFECTIF_ENCADREMENT2', 'EFFECTIF_ENCADREMENT3', 'PME1', 'PME2', 'PME3', 'ADRESSE2', 'NICSIEGE', 'ACRONYME_PAYS', 'DATE_CREATION', 'DATE_MODIFICATION', 'ID_INITIAL', 'REGION', 'PROVINCE', 'TELEPHONE2', 'TELEPHONE3', 'CNSS', 'RC_NUM', 'RC_VILLE', 'DOMAINES_ACTIVITES', 'NUM_TAX', 'DOCUMENTS_COMMERCIAUX', 'INTITULE_DOCUMENTS_COMMERCIAUX', 'TAILLE_DOCUMENTS_COMMERCIAUX', 'QUALIFICATION', 'AGREMENT', 'MOYENS_TECHNIQUE', 'MOYENS_HUMAINS', 'COMPTE_ACTIF', 'CAPITAL_SOCIAL', 'IFU', 'ID_AGENT_CREATEUR', 'NOM_AGENT', 'PRENOM_AGENT', 'ADRESSES_ELECTRONIQUES', 'VISIBLE_BOURSE', 'TYPE_COLLABORATION', 'ENTREPRISE_EA', 'ENTREPRISE_SIAE', 'TYPE_ENTREPRISE', 'NOTE', 'CODE_CPV', 'STATUT_REFERENCEMENT', 'TAILLE_ENTREPRISE', 'IDENTIFIANT_FISCALE', 'VALIDE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'admin_id', 'siren', 'repmetiers', 'nom', 'adresse', 'codepostal', 'villeadresse', 'paysadresse', 'email', 'taille', 'formejuridique', 'villeenregistrement', 'motifNonIndNum', 'ordreProfOuAgrement', 'dateConstSociete', 'nomOrgInscription', 'adrOrgInscription', 'dateConstAssoc', 'dateConstAssocEtrangere', 'nomPersonnePublique', 'nationalite', 'redressement', 'paysenregistrement', 'sirenEtranger', 'numAssoEtrangere', 'debutExerciceGlob1', 'finExerciceGlob1', 'debutExerciceGlob2', 'finExerciceGlob2', 'debutExerciceGlob3', 'finExerciceGlob3', 'ventesGlob1', 'ventesGlob2', 'ventesGlob3', 'biensGlob1', 'biensGlob2', 'biensGlob3', 'servicesGlob1', 'servicesGlob2', 'servicesGlob3', 'totalGlob1', 'totalGlob2', 'totalGlob3', 'codeape', 'origine_compte', 'telephone', 'fax', 'site_internet', 'description_activite', 'activite_domaine_defense', 'annee_cloture_exercice1', 'annee_cloture_exercice2', 'annee_cloture_exercice3', 'effectif_moyen1', 'effectif_moyen2', 'effectif_moyen3', 'effectif_encadrement1', 'effectif_encadrement2', 'effectif_encadrement3', 'pme1', 'pme2', 'pme3', 'adresse2', 'nicSiege', 'acronyme_pays', 'date_creation', 'date_modification', 'id_initial', 'region', 'province', 'telephone2', 'telephone3', 'cnss', 'rc_num', 'rc_ville', 'domaines_activites', 'num_tax', 'documents_commerciaux', 'intitule_documents_commerciaux', 'taille_documents_commerciaux', 'qualification', 'agrement', 'moyens_technique', 'moyens_humains', 'compte_actif', 'capital_social', 'ifu', 'id_agent_createur', 'nom_agent', 'prenom_agent', 'adresses_electroniques', 'visible_bourse', 'type_collaboration', 'entreprise_EA', 'entreprise_SIAE', 'type_entreprise', 'note', 'code_cpv', 'statut_referencement', 'taille_entreprise', 'identifiant_fiscale', 'valide', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEntreprisePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'AdminId' => 1, 'Siren' => 2, 'Repmetiers' => 3, 'Nom' => 4, 'Adresse' => 5, 'Codepostal' => 6, 'Villeadresse' => 7, 'Paysadresse' => 8, 'Email' => 9, 'Taille' => 10, 'Formejuridique' => 11, 'Villeenregistrement' => 12, 'Motifnonindnum' => 13, 'Ordreprofouagrement' => 14, 'Dateconstsociete' => 15, 'Nomorginscription' => 16, 'Adrorginscription' => 17, 'Dateconstassoc' => 18, 'Dateconstassocetrangere' => 19, 'Nompersonnepublique' => 20, 'Nationalite' => 21, 'Redressement' => 22, 'Paysenregistrement' => 23, 'Sirenetranger' => 24, 'Numassoetrangere' => 25, 'Debutexerciceglob1' => 26, 'Finexerciceglob1' => 27, 'Debutexerciceglob2' => 28, 'Finexerciceglob2' => 29, 'Debutexerciceglob3' => 30, 'Finexerciceglob3' => 31, 'Ventesglob1' => 32, 'Ventesglob2' => 33, 'Ventesglob3' => 34, 'Biensglob1' => 35, 'Biensglob2' => 36, 'Biensglob3' => 37, 'Servicesglob1' => 38, 'Servicesglob2' => 39, 'Servicesglob3' => 40, 'Totalglob1' => 41, 'Totalglob2' => 42, 'Totalglob3' => 43, 'Codeape' => 44, 'OrigineCompte' => 45, 'Telephone' => 46, 'Fax' => 47, 'SiteInternet' => 48, 'DescriptionActivite' => 49, 'ActiviteDomaineDefense' => 50, 'AnneeClotureExercice1' => 51, 'AnneeClotureExercice2' => 52, 'AnneeClotureExercice3' => 53, 'EffectifMoyen1' => 54, 'EffectifMoyen2' => 55, 'EffectifMoyen3' => 56, 'EffectifEncadrement1' => 57, 'EffectifEncadrement2' => 58, 'EffectifEncadrement3' => 59, 'Pme1' => 60, 'Pme2' => 61, 'Pme3' => 62, 'Adresse2' => 63, 'Nicsiege' => 64, 'AcronymePays' => 65, 'DateCreation' => 66, 'DateModification' => 67, 'IdInitial' => 68, 'Region' => 69, 'Province' => 70, 'Telephone2' => 71, 'Telephone3' => 72, 'Cnss' => 73, 'RcNum' => 74, 'RcVille' => 75, 'DomainesActivites' => 76, 'NumTax' => 77, 'DocumentsCommerciaux' => 78, 'IntituleDocumentsCommerciaux' => 79, 'TailleDocumentsCommerciaux' => 80, 'Qualification' => 81, 'Agrement' => 82, 'MoyensTechnique' => 83, 'MoyensHumains' => 84, 'CompteActif' => 85, 'CapitalSocial' => 86, 'Ifu' => 87, 'IdAgentCreateur' => 88, 'NomAgent' => 89, 'PrenomAgent' => 90, 'AdressesElectroniques' => 91, 'VisibleBourse' => 92, 'TypeCollaboration' => 93, 'EntrepriseEa' => 94, 'EntrepriseSiae' => 95, 'TypeEntreprise' => 96, 'Note' => 97, 'CodeCpv' => 98, 'StatutReferencement' => 99, 'TailleEntreprise' => 100, 'IdentifiantFiscale' => 101, 'Valide' => 102, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'adminId' => 1, 'siren' => 2, 'repmetiers' => 3, 'nom' => 4, 'adresse' => 5, 'codepostal' => 6, 'villeadresse' => 7, 'paysadresse' => 8, 'email' => 9, 'taille' => 10, 'formejuridique' => 11, 'villeenregistrement' => 12, 'motifnonindnum' => 13, 'ordreprofouagrement' => 14, 'dateconstsociete' => 15, 'nomorginscription' => 16, 'adrorginscription' => 17, 'dateconstassoc' => 18, 'dateconstassocetrangere' => 19, 'nompersonnepublique' => 20, 'nationalite' => 21, 'redressement' => 22, 'paysenregistrement' => 23, 'sirenetranger' => 24, 'numassoetrangere' => 25, 'debutexerciceglob1' => 26, 'finexerciceglob1' => 27, 'debutexerciceglob2' => 28, 'finexerciceglob2' => 29, 'debutexerciceglob3' => 30, 'finexerciceglob3' => 31, 'ventesglob1' => 32, 'ventesglob2' => 33, 'ventesglob3' => 34, 'biensglob1' => 35, 'biensglob2' => 36, 'biensglob3' => 37, 'servicesglob1' => 38, 'servicesglob2' => 39, 'servicesglob3' => 40, 'totalglob1' => 41, 'totalglob2' => 42, 'totalglob3' => 43, 'codeape' => 44, 'origineCompte' => 45, 'telephone' => 46, 'fax' => 47, 'siteInternet' => 48, 'descriptionActivite' => 49, 'activiteDomaineDefense' => 50, 'anneeClotureExercice1' => 51, 'anneeClotureExercice2' => 52, 'anneeClotureExercice3' => 53, 'effectifMoyen1' => 54, 'effectifMoyen2' => 55, 'effectifMoyen3' => 56, 'effectifEncadrement1' => 57, 'effectifEncadrement2' => 58, 'effectifEncadrement3' => 59, 'pme1' => 60, 'pme2' => 61, 'pme3' => 62, 'adresse2' => 63, 'nicsiege' => 64, 'acronymePays' => 65, 'dateCreation' => 66, 'dateModification' => 67, 'idInitial' => 68, 'region' => 69, 'province' => 70, 'telephone2' => 71, 'telephone3' => 72, 'cnss' => 73, 'rcNum' => 74, 'rcVille' => 75, 'domainesActivites' => 76, 'numTax' => 77, 'documentsCommerciaux' => 78, 'intituleDocumentsCommerciaux' => 79, 'tailleDocumentsCommerciaux' => 80, 'qualification' => 81, 'agrement' => 82, 'moyensTechnique' => 83, 'moyensHumains' => 84, 'compteActif' => 85, 'capitalSocial' => 86, 'ifu' => 87, 'idAgentCreateur' => 88, 'nomAgent' => 89, 'prenomAgent' => 90, 'adressesElectroniques' => 91, 'visibleBourse' => 92, 'typeCollaboration' => 93, 'entrepriseEa' => 94, 'entrepriseSiae' => 95, 'typeEntreprise' => 96, 'note' => 97, 'codeCpv' => 98, 'statutReferencement' => 99, 'tailleEntreprise' => 100, 'identifiantFiscale' => 101, 'valide' => 102, ),
        BasePeer::TYPE_COLNAME => array (CommonEntreprisePeer::ID => 0, CommonEntreprisePeer::ADMIN_ID => 1, CommonEntreprisePeer::SIREN => 2, CommonEntreprisePeer::REPMETIERS => 3, CommonEntreprisePeer::NOM => 4, CommonEntreprisePeer::ADRESSE => 5, CommonEntreprisePeer::CODEPOSTAL => 6, CommonEntreprisePeer::VILLEADRESSE => 7, CommonEntreprisePeer::PAYSADRESSE => 8, CommonEntreprisePeer::EMAIL => 9, CommonEntreprisePeer::TAILLE => 10, CommonEntreprisePeer::FORMEJURIDIQUE => 11, CommonEntreprisePeer::VILLEENREGISTREMENT => 12, CommonEntreprisePeer::MOTIFNONINDNUM => 13, CommonEntreprisePeer::ORDREPROFOUAGREMENT => 14, CommonEntreprisePeer::DATECONSTSOCIETE => 15, CommonEntreprisePeer::NOMORGINSCRIPTION => 16, CommonEntreprisePeer::ADRORGINSCRIPTION => 17, CommonEntreprisePeer::DATECONSTASSOC => 18, CommonEntreprisePeer::DATECONSTASSOCETRANGERE => 19, CommonEntreprisePeer::NOMPERSONNEPUBLIQUE => 20, CommonEntreprisePeer::NATIONALITE => 21, CommonEntreprisePeer::REDRESSEMENT => 22, CommonEntreprisePeer::PAYSENREGISTREMENT => 23, CommonEntreprisePeer::SIRENETRANGER => 24, CommonEntreprisePeer::NUMASSOETRANGERE => 25, CommonEntreprisePeer::DEBUTEXERCICEGLOB1 => 26, CommonEntreprisePeer::FINEXERCICEGLOB1 => 27, CommonEntreprisePeer::DEBUTEXERCICEGLOB2 => 28, CommonEntreprisePeer::FINEXERCICEGLOB2 => 29, CommonEntreprisePeer::DEBUTEXERCICEGLOB3 => 30, CommonEntreprisePeer::FINEXERCICEGLOB3 => 31, CommonEntreprisePeer::VENTESGLOB1 => 32, CommonEntreprisePeer::VENTESGLOB2 => 33, CommonEntreprisePeer::VENTESGLOB3 => 34, CommonEntreprisePeer::BIENSGLOB1 => 35, CommonEntreprisePeer::BIENSGLOB2 => 36, CommonEntreprisePeer::BIENSGLOB3 => 37, CommonEntreprisePeer::SERVICESGLOB1 => 38, CommonEntreprisePeer::SERVICESGLOB2 => 39, CommonEntreprisePeer::SERVICESGLOB3 => 40, CommonEntreprisePeer::TOTALGLOB1 => 41, CommonEntreprisePeer::TOTALGLOB2 => 42, CommonEntreprisePeer::TOTALGLOB3 => 43, CommonEntreprisePeer::CODEAPE => 44, CommonEntreprisePeer::ORIGINE_COMPTE => 45, CommonEntreprisePeer::TELEPHONE => 46, CommonEntreprisePeer::FAX => 47, CommonEntreprisePeer::SITE_INTERNET => 48, CommonEntreprisePeer::DESCRIPTION_ACTIVITE => 49, CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE => 50, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1 => 51, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2 => 52, CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3 => 53, CommonEntreprisePeer::EFFECTIF_MOYEN1 => 54, CommonEntreprisePeer::EFFECTIF_MOYEN2 => 55, CommonEntreprisePeer::EFFECTIF_MOYEN3 => 56, CommonEntreprisePeer::EFFECTIF_ENCADREMENT1 => 57, CommonEntreprisePeer::EFFECTIF_ENCADREMENT2 => 58, CommonEntreprisePeer::EFFECTIF_ENCADREMENT3 => 59, CommonEntreprisePeer::PME1 => 60, CommonEntreprisePeer::PME2 => 61, CommonEntreprisePeer::PME3 => 62, CommonEntreprisePeer::ADRESSE2 => 63, CommonEntreprisePeer::NICSIEGE => 64, CommonEntreprisePeer::ACRONYME_PAYS => 65, CommonEntreprisePeer::DATE_CREATION => 66, CommonEntreprisePeer::DATE_MODIFICATION => 67, CommonEntreprisePeer::ID_INITIAL => 68, CommonEntreprisePeer::REGION => 69, CommonEntreprisePeer::PROVINCE => 70, CommonEntreprisePeer::TELEPHONE2 => 71, CommonEntreprisePeer::TELEPHONE3 => 72, CommonEntreprisePeer::CNSS => 73, CommonEntreprisePeer::RC_NUM => 74, CommonEntreprisePeer::RC_VILLE => 75, CommonEntreprisePeer::DOMAINES_ACTIVITES => 76, CommonEntreprisePeer::NUM_TAX => 77, CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX => 78, CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX => 79, CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX => 80, CommonEntreprisePeer::QUALIFICATION => 81, CommonEntreprisePeer::AGREMENT => 82, CommonEntreprisePeer::MOYENS_TECHNIQUE => 83, CommonEntreprisePeer::MOYENS_HUMAINS => 84, CommonEntreprisePeer::COMPTE_ACTIF => 85, CommonEntreprisePeer::CAPITAL_SOCIAL => 86, CommonEntreprisePeer::IFU => 87, CommonEntreprisePeer::ID_AGENT_CREATEUR => 88, CommonEntreprisePeer::NOM_AGENT => 89, CommonEntreprisePeer::PRENOM_AGENT => 90, CommonEntreprisePeer::ADRESSES_ELECTRONIQUES => 91, CommonEntreprisePeer::VISIBLE_BOURSE => 92, CommonEntreprisePeer::TYPE_COLLABORATION => 93, CommonEntreprisePeer::ENTREPRISE_EA => 94, CommonEntreprisePeer::ENTREPRISE_SIAE => 95, CommonEntreprisePeer::TYPE_ENTREPRISE => 96, CommonEntreprisePeer::NOTE => 97, CommonEntreprisePeer::CODE_CPV => 98, CommonEntreprisePeer::STATUT_REFERENCEMENT => 99, CommonEntreprisePeer::TAILLE_ENTREPRISE => 100, CommonEntreprisePeer::IDENTIFIANT_FISCALE => 101, CommonEntreprisePeer::VALIDE => 102, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ADMIN_ID' => 1, 'SIREN' => 2, 'REPMETIERS' => 3, 'NOM' => 4, 'ADRESSE' => 5, 'CODEPOSTAL' => 6, 'VILLEADRESSE' => 7, 'PAYSADRESSE' => 8, 'EMAIL' => 9, 'TAILLE' => 10, 'FORMEJURIDIQUE' => 11, 'VILLEENREGISTREMENT' => 12, 'MOTIFNONINDNUM' => 13, 'ORDREPROFOUAGREMENT' => 14, 'DATECONSTSOCIETE' => 15, 'NOMORGINSCRIPTION' => 16, 'ADRORGINSCRIPTION' => 17, 'DATECONSTASSOC' => 18, 'DATECONSTASSOCETRANGERE' => 19, 'NOMPERSONNEPUBLIQUE' => 20, 'NATIONALITE' => 21, 'REDRESSEMENT' => 22, 'PAYSENREGISTREMENT' => 23, 'SIRENETRANGER' => 24, 'NUMASSOETRANGERE' => 25, 'DEBUTEXERCICEGLOB1' => 26, 'FINEXERCICEGLOB1' => 27, 'DEBUTEXERCICEGLOB2' => 28, 'FINEXERCICEGLOB2' => 29, 'DEBUTEXERCICEGLOB3' => 30, 'FINEXERCICEGLOB3' => 31, 'VENTESGLOB1' => 32, 'VENTESGLOB2' => 33, 'VENTESGLOB3' => 34, 'BIENSGLOB1' => 35, 'BIENSGLOB2' => 36, 'BIENSGLOB3' => 37, 'SERVICESGLOB1' => 38, 'SERVICESGLOB2' => 39, 'SERVICESGLOB3' => 40, 'TOTALGLOB1' => 41, 'TOTALGLOB2' => 42, 'TOTALGLOB3' => 43, 'CODEAPE' => 44, 'ORIGINE_COMPTE' => 45, 'TELEPHONE' => 46, 'FAX' => 47, 'SITE_INTERNET' => 48, 'DESCRIPTION_ACTIVITE' => 49, 'ACTIVITE_DOMAINE_DEFENSE' => 50, 'ANNEE_CLOTURE_EXERCICE1' => 51, 'ANNEE_CLOTURE_EXERCICE2' => 52, 'ANNEE_CLOTURE_EXERCICE3' => 53, 'EFFECTIF_MOYEN1' => 54, 'EFFECTIF_MOYEN2' => 55, 'EFFECTIF_MOYEN3' => 56, 'EFFECTIF_ENCADREMENT1' => 57, 'EFFECTIF_ENCADREMENT2' => 58, 'EFFECTIF_ENCADREMENT3' => 59, 'PME1' => 60, 'PME2' => 61, 'PME3' => 62, 'ADRESSE2' => 63, 'NICSIEGE' => 64, 'ACRONYME_PAYS' => 65, 'DATE_CREATION' => 66, 'DATE_MODIFICATION' => 67, 'ID_INITIAL' => 68, 'REGION' => 69, 'PROVINCE' => 70, 'TELEPHONE2' => 71, 'TELEPHONE3' => 72, 'CNSS' => 73, 'RC_NUM' => 74, 'RC_VILLE' => 75, 'DOMAINES_ACTIVITES' => 76, 'NUM_TAX' => 77, 'DOCUMENTS_COMMERCIAUX' => 78, 'INTITULE_DOCUMENTS_COMMERCIAUX' => 79, 'TAILLE_DOCUMENTS_COMMERCIAUX' => 80, 'QUALIFICATION' => 81, 'AGREMENT' => 82, 'MOYENS_TECHNIQUE' => 83, 'MOYENS_HUMAINS' => 84, 'COMPTE_ACTIF' => 85, 'CAPITAL_SOCIAL' => 86, 'IFU' => 87, 'ID_AGENT_CREATEUR' => 88, 'NOM_AGENT' => 89, 'PRENOM_AGENT' => 90, 'ADRESSES_ELECTRONIQUES' => 91, 'VISIBLE_BOURSE' => 92, 'TYPE_COLLABORATION' => 93, 'ENTREPRISE_EA' => 94, 'ENTREPRISE_SIAE' => 95, 'TYPE_ENTREPRISE' => 96, 'NOTE' => 97, 'CODE_CPV' => 98, 'STATUT_REFERENCEMENT' => 99, 'TAILLE_ENTREPRISE' => 100, 'IDENTIFIANT_FISCALE' => 101, 'VALIDE' => 102, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'admin_id' => 1, 'siren' => 2, 'repmetiers' => 3, 'nom' => 4, 'adresse' => 5, 'codepostal' => 6, 'villeadresse' => 7, 'paysadresse' => 8, 'email' => 9, 'taille' => 10, 'formejuridique' => 11, 'villeenregistrement' => 12, 'motifNonIndNum' => 13, 'ordreProfOuAgrement' => 14, 'dateConstSociete' => 15, 'nomOrgInscription' => 16, 'adrOrgInscription' => 17, 'dateConstAssoc' => 18, 'dateConstAssocEtrangere' => 19, 'nomPersonnePublique' => 20, 'nationalite' => 21, 'redressement' => 22, 'paysenregistrement' => 23, 'sirenEtranger' => 24, 'numAssoEtrangere' => 25, 'debutExerciceGlob1' => 26, 'finExerciceGlob1' => 27, 'debutExerciceGlob2' => 28, 'finExerciceGlob2' => 29, 'debutExerciceGlob3' => 30, 'finExerciceGlob3' => 31, 'ventesGlob1' => 32, 'ventesGlob2' => 33, 'ventesGlob3' => 34, 'biensGlob1' => 35, 'biensGlob2' => 36, 'biensGlob3' => 37, 'servicesGlob1' => 38, 'servicesGlob2' => 39, 'servicesGlob3' => 40, 'totalGlob1' => 41, 'totalGlob2' => 42, 'totalGlob3' => 43, 'codeape' => 44, 'origine_compte' => 45, 'telephone' => 46, 'fax' => 47, 'site_internet' => 48, 'description_activite' => 49, 'activite_domaine_defense' => 50, 'annee_cloture_exercice1' => 51, 'annee_cloture_exercice2' => 52, 'annee_cloture_exercice3' => 53, 'effectif_moyen1' => 54, 'effectif_moyen2' => 55, 'effectif_moyen3' => 56, 'effectif_encadrement1' => 57, 'effectif_encadrement2' => 58, 'effectif_encadrement3' => 59, 'pme1' => 60, 'pme2' => 61, 'pme3' => 62, 'adresse2' => 63, 'nicSiege' => 64, 'acronyme_pays' => 65, 'date_creation' => 66, 'date_modification' => 67, 'id_initial' => 68, 'region' => 69, 'province' => 70, 'telephone2' => 71, 'telephone3' => 72, 'cnss' => 73, 'rc_num' => 74, 'rc_ville' => 75, 'domaines_activites' => 76, 'num_tax' => 77, 'documents_commerciaux' => 78, 'intitule_documents_commerciaux' => 79, 'taille_documents_commerciaux' => 80, 'qualification' => 81, 'agrement' => 82, 'moyens_technique' => 83, 'moyens_humains' => 84, 'compte_actif' => 85, 'capital_social' => 86, 'ifu' => 87, 'id_agent_createur' => 88, 'nom_agent' => 89, 'prenom_agent' => 90, 'adresses_electroniques' => 91, 'visible_bourse' => 92, 'type_collaboration' => 93, 'entreprise_EA' => 94, 'entreprise_SIAE' => 95, 'type_entreprise' => 96, 'note' => 97, 'code_cpv' => 98, 'statut_referencement' => 99, 'taille_entreprise' => 100, 'identifiant_fiscale' => 101, 'valide' => 102, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEntreprisePeer::PME1 => array(
            CommonEntreprisePeer::PME1_1,
            CommonEntreprisePeer::PME1_0,
        ),
        CommonEntreprisePeer::PME2 => array(
            CommonEntreprisePeer::PME2_1,
            CommonEntreprisePeer::PME2_0,
        ),
        CommonEntreprisePeer::PME3 => array(
            CommonEntreprisePeer::PME3_1,
            CommonEntreprisePeer::PME3_0,
        ),
        CommonEntreprisePeer::ENTREPRISE_EA => array(
            CommonEntreprisePeer::ENTREPRISE_EA_0,
            CommonEntreprisePeer::ENTREPRISE_EA_1,
        ),
        CommonEntreprisePeer::ENTREPRISE_SIAE => array(
            CommonEntreprisePeer::ENTREPRISE_SIAE_0,
            CommonEntreprisePeer::ENTREPRISE_SIAE_1,
        ),
        CommonEntreprisePeer::TYPE_ENTREPRISE => array(
            CommonEntreprisePeer::TYPE_ENTREPRISE_0,
            CommonEntreprisePeer::TYPE_ENTREPRISE_1,
            CommonEntreprisePeer::TYPE_ENTREPRISE_2,
            CommonEntreprisePeer::TYPE_ENTREPRISE_3,
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
        $toNames = CommonEntreprisePeer::getFieldNames($toType);
        $key = isset(CommonEntreprisePeer::$fieldKeys[$fromType][$name]) ? CommonEntreprisePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEntreprisePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEntreprisePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEntreprisePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEntreprisePeer::$enumValueSets;
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
        $valueSets = CommonEntreprisePeer::getValueSets();

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
        $values = CommonEntreprisePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEntreprisePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEntreprisePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEntreprisePeer::ID);
            $criteria->addSelectColumn(CommonEntreprisePeer::ADMIN_ID);
            $criteria->addSelectColumn(CommonEntreprisePeer::SIREN);
            $criteria->addSelectColumn(CommonEntreprisePeer::REPMETIERS);
            $criteria->addSelectColumn(CommonEntreprisePeer::NOM);
            $criteria->addSelectColumn(CommonEntreprisePeer::ADRESSE);
            $criteria->addSelectColumn(CommonEntreprisePeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonEntreprisePeer::VILLEADRESSE);
            $criteria->addSelectColumn(CommonEntreprisePeer::PAYSADRESSE);
            $criteria->addSelectColumn(CommonEntreprisePeer::EMAIL);
            $criteria->addSelectColumn(CommonEntreprisePeer::TAILLE);
            $criteria->addSelectColumn(CommonEntreprisePeer::FORMEJURIDIQUE);
            $criteria->addSelectColumn(CommonEntreprisePeer::VILLEENREGISTREMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::MOTIFNONINDNUM);
            $criteria->addSelectColumn(CommonEntreprisePeer::ORDREPROFOUAGREMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::DATECONSTSOCIETE);
            $criteria->addSelectColumn(CommonEntreprisePeer::NOMORGINSCRIPTION);
            $criteria->addSelectColumn(CommonEntreprisePeer::ADRORGINSCRIPTION);
            $criteria->addSelectColumn(CommonEntreprisePeer::DATECONSTASSOC);
            $criteria->addSelectColumn(CommonEntreprisePeer::DATECONSTASSOCETRANGERE);
            $criteria->addSelectColumn(CommonEntreprisePeer::NOMPERSONNEPUBLIQUE);
            $criteria->addSelectColumn(CommonEntreprisePeer::NATIONALITE);
            $criteria->addSelectColumn(CommonEntreprisePeer::REDRESSEMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::PAYSENREGISTREMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::SIRENETRANGER);
            $criteria->addSelectColumn(CommonEntreprisePeer::NUMASSOETRANGERE);
            $criteria->addSelectColumn(CommonEntreprisePeer::DEBUTEXERCICEGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::FINEXERCICEGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::DEBUTEXERCICEGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::FINEXERCICEGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::DEBUTEXERCICEGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::FINEXERCICEGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::VENTESGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::VENTESGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::VENTESGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::BIENSGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::BIENSGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::BIENSGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::SERVICESGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::SERVICESGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::SERVICESGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::TOTALGLOB1);
            $criteria->addSelectColumn(CommonEntreprisePeer::TOTALGLOB2);
            $criteria->addSelectColumn(CommonEntreprisePeer::TOTALGLOB3);
            $criteria->addSelectColumn(CommonEntreprisePeer::CODEAPE);
            $criteria->addSelectColumn(CommonEntreprisePeer::ORIGINE_COMPTE);
            $criteria->addSelectColumn(CommonEntreprisePeer::TELEPHONE);
            $criteria->addSelectColumn(CommonEntreprisePeer::FAX);
            $criteria->addSelectColumn(CommonEntreprisePeer::SITE_INTERNET);
            $criteria->addSelectColumn(CommonEntreprisePeer::DESCRIPTION_ACTIVITE);
            $criteria->addSelectColumn(CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE);
            $criteria->addSelectColumn(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1);
            $criteria->addSelectColumn(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2);
            $criteria->addSelectColumn(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_MOYEN1);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_MOYEN2);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_MOYEN3);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2);
            $criteria->addSelectColumn(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3);
            $criteria->addSelectColumn(CommonEntreprisePeer::PME1);
            $criteria->addSelectColumn(CommonEntreprisePeer::PME2);
            $criteria->addSelectColumn(CommonEntreprisePeer::PME3);
            $criteria->addSelectColumn(CommonEntreprisePeer::ADRESSE2);
            $criteria->addSelectColumn(CommonEntreprisePeer::NICSIEGE);
            $criteria->addSelectColumn(CommonEntreprisePeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonEntreprisePeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonEntreprisePeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonEntreprisePeer::ID_INITIAL);
            $criteria->addSelectColumn(CommonEntreprisePeer::REGION);
            $criteria->addSelectColumn(CommonEntreprisePeer::PROVINCE);
            $criteria->addSelectColumn(CommonEntreprisePeer::TELEPHONE2);
            $criteria->addSelectColumn(CommonEntreprisePeer::TELEPHONE3);
            $criteria->addSelectColumn(CommonEntreprisePeer::CNSS);
            $criteria->addSelectColumn(CommonEntreprisePeer::RC_NUM);
            $criteria->addSelectColumn(CommonEntreprisePeer::RC_VILLE);
            $criteria->addSelectColumn(CommonEntreprisePeer::DOMAINES_ACTIVITES);
            $criteria->addSelectColumn(CommonEntreprisePeer::NUM_TAX);
            $criteria->addSelectColumn(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX);
            $criteria->addSelectColumn(CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX);
            $criteria->addSelectColumn(CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX);
            $criteria->addSelectColumn(CommonEntreprisePeer::QUALIFICATION);
            $criteria->addSelectColumn(CommonEntreprisePeer::AGREMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::MOYENS_TECHNIQUE);
            $criteria->addSelectColumn(CommonEntreprisePeer::MOYENS_HUMAINS);
            $criteria->addSelectColumn(CommonEntreprisePeer::COMPTE_ACTIF);
            $criteria->addSelectColumn(CommonEntreprisePeer::CAPITAL_SOCIAL);
            $criteria->addSelectColumn(CommonEntreprisePeer::IFU);
            $criteria->addSelectColumn(CommonEntreprisePeer::ID_AGENT_CREATEUR);
            $criteria->addSelectColumn(CommonEntreprisePeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::ADRESSES_ELECTRONIQUES);
            $criteria->addSelectColumn(CommonEntreprisePeer::VISIBLE_BOURSE);
            $criteria->addSelectColumn(CommonEntreprisePeer::TYPE_COLLABORATION);
            $criteria->addSelectColumn(CommonEntreprisePeer::ENTREPRISE_EA);
            $criteria->addSelectColumn(CommonEntreprisePeer::ENTREPRISE_SIAE);
            $criteria->addSelectColumn(CommonEntreprisePeer::TYPE_ENTREPRISE);
            $criteria->addSelectColumn(CommonEntreprisePeer::NOTE);
            $criteria->addSelectColumn(CommonEntreprisePeer::CODE_CPV);
            $criteria->addSelectColumn(CommonEntreprisePeer::STATUT_REFERENCEMENT);
            $criteria->addSelectColumn(CommonEntreprisePeer::TAILLE_ENTREPRISE);
            $criteria->addSelectColumn(CommonEntreprisePeer::IDENTIFIANT_FISCALE);
            $criteria->addSelectColumn(CommonEntreprisePeer::VALIDE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.admin_id');
            $criteria->addSelectColumn($alias . '.siren');
            $criteria->addSelectColumn($alias . '.repmetiers');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.codepostal');
            $criteria->addSelectColumn($alias . '.villeadresse');
            $criteria->addSelectColumn($alias . '.paysadresse');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.formejuridique');
            $criteria->addSelectColumn($alias . '.villeenregistrement');
            $criteria->addSelectColumn($alias . '.motifNonIndNum');
            $criteria->addSelectColumn($alias . '.ordreProfOuAgrement');
            $criteria->addSelectColumn($alias . '.dateConstSociete');
            $criteria->addSelectColumn($alias . '.nomOrgInscription');
            $criteria->addSelectColumn($alias . '.adrOrgInscription');
            $criteria->addSelectColumn($alias . '.dateConstAssoc');
            $criteria->addSelectColumn($alias . '.dateConstAssocEtrangere');
            $criteria->addSelectColumn($alias . '.nomPersonnePublique');
            $criteria->addSelectColumn($alias . '.nationalite');
            $criteria->addSelectColumn($alias . '.redressement');
            $criteria->addSelectColumn($alias . '.paysenregistrement');
            $criteria->addSelectColumn($alias . '.sirenEtranger');
            $criteria->addSelectColumn($alias . '.numAssoEtrangere');
            $criteria->addSelectColumn($alias . '.debutExerciceGlob1');
            $criteria->addSelectColumn($alias . '.finExerciceGlob1');
            $criteria->addSelectColumn($alias . '.debutExerciceGlob2');
            $criteria->addSelectColumn($alias . '.finExerciceGlob2');
            $criteria->addSelectColumn($alias . '.debutExerciceGlob3');
            $criteria->addSelectColumn($alias . '.finExerciceGlob3');
            $criteria->addSelectColumn($alias . '.ventesGlob1');
            $criteria->addSelectColumn($alias . '.ventesGlob2');
            $criteria->addSelectColumn($alias . '.ventesGlob3');
            $criteria->addSelectColumn($alias . '.biensGlob1');
            $criteria->addSelectColumn($alias . '.biensGlob2');
            $criteria->addSelectColumn($alias . '.biensGlob3');
            $criteria->addSelectColumn($alias . '.servicesGlob1');
            $criteria->addSelectColumn($alias . '.servicesGlob2');
            $criteria->addSelectColumn($alias . '.servicesGlob3');
            $criteria->addSelectColumn($alias . '.totalGlob1');
            $criteria->addSelectColumn($alias . '.totalGlob2');
            $criteria->addSelectColumn($alias . '.totalGlob3');
            $criteria->addSelectColumn($alias . '.codeape');
            $criteria->addSelectColumn($alias . '.origine_compte');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.site_internet');
            $criteria->addSelectColumn($alias . '.description_activite');
            $criteria->addSelectColumn($alias . '.activite_domaine_defense');
            $criteria->addSelectColumn($alias . '.annee_cloture_exercice1');
            $criteria->addSelectColumn($alias . '.annee_cloture_exercice2');
            $criteria->addSelectColumn($alias . '.annee_cloture_exercice3');
            $criteria->addSelectColumn($alias . '.effectif_moyen1');
            $criteria->addSelectColumn($alias . '.effectif_moyen2');
            $criteria->addSelectColumn($alias . '.effectif_moyen3');
            $criteria->addSelectColumn($alias . '.effectif_encadrement1');
            $criteria->addSelectColumn($alias . '.effectif_encadrement2');
            $criteria->addSelectColumn($alias . '.effectif_encadrement3');
            $criteria->addSelectColumn($alias . '.pme1');
            $criteria->addSelectColumn($alias . '.pme2');
            $criteria->addSelectColumn($alias . '.pme3');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.nicSiege');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.id_initial');
            $criteria->addSelectColumn($alias . '.region');
            $criteria->addSelectColumn($alias . '.province');
            $criteria->addSelectColumn($alias . '.telephone2');
            $criteria->addSelectColumn($alias . '.telephone3');
            $criteria->addSelectColumn($alias . '.cnss');
            $criteria->addSelectColumn($alias . '.rc_num');
            $criteria->addSelectColumn($alias . '.rc_ville');
            $criteria->addSelectColumn($alias . '.domaines_activites');
            $criteria->addSelectColumn($alias . '.num_tax');
            $criteria->addSelectColumn($alias . '.documents_commerciaux');
            $criteria->addSelectColumn($alias . '.intitule_documents_commerciaux');
            $criteria->addSelectColumn($alias . '.taille_documents_commerciaux');
            $criteria->addSelectColumn($alias . '.qualification');
            $criteria->addSelectColumn($alias . '.agrement');
            $criteria->addSelectColumn($alias . '.moyens_technique');
            $criteria->addSelectColumn($alias . '.moyens_humains');
            $criteria->addSelectColumn($alias . '.compte_actif');
            $criteria->addSelectColumn($alias . '.capital_social');
            $criteria->addSelectColumn($alias . '.ifu');
            $criteria->addSelectColumn($alias . '.id_agent_createur');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.adresses_electroniques');
            $criteria->addSelectColumn($alias . '.visible_bourse');
            $criteria->addSelectColumn($alias . '.type_collaboration');
            $criteria->addSelectColumn($alias . '.entreprise_EA');
            $criteria->addSelectColumn($alias . '.entreprise_SIAE');
            $criteria->addSelectColumn($alias . '.type_entreprise');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.code_cpv');
            $criteria->addSelectColumn($alias . '.statut_referencement');
            $criteria->addSelectColumn($alias . '.taille_entreprise');
            $criteria->addSelectColumn($alias . '.identifiant_fiscale');
            $criteria->addSelectColumn($alias . '.valide');
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
        $criteria->setPrimaryTableName(CommonEntreprisePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEntreprisePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEntreprisePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEntreprise
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEntreprisePeer::doSelect($critcopy, $con);
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
        return CommonEntreprisePeer::populateObjects(CommonEntreprisePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEntreprisePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntreprisePeer::DATABASE_NAME);

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
     * @param      CommonEntreprise $obj A CommonEntreprise object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonEntreprisePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEntreprise object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEntreprise) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEntreprise object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEntreprisePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEntreprise Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEntreprisePeer::$instances[$key])) {
                return CommonEntreprisePeer::$instances[$key];
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
        foreach (CommonEntreprisePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEntreprisePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Entreprise
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonPanierEntreprisePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPanierEntreprisePeer::clearInstancePool();
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (int) $row[$startcol];
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
        $cls = CommonEntreprisePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEntreprisePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEntreprisePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEntreprise object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEntreprisePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEntreprisePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEntreprisePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEntreprisePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEntreprisePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(CommonEntreprisePeer::DATABASE_NAME)->getTable(CommonEntreprisePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEntreprisePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEntreprisePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEntrepriseTableMap());
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
        return CommonEntreprisePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntreprise object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEntreprise object
        }

        if ($criteria->containsKey(CommonEntreprisePeer::ID) && $criteria->keyContainsValue(CommonEntreprisePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEntreprisePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEntreprisePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEntreprise or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEntreprise object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEntreprisePeer::ID);
            $value = $criteria->remove(CommonEntreprisePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEntreprisePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEntreprisePeer::TABLE_NAME);
            }

        } else { // $values is CommonEntreprise object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEntreprisePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Entreprise table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonEntreprisePeer::doOnDeleteCascade(new Criteria(CommonEntreprisePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonEntreprisePeer::TABLE_NAME, $con, CommonEntreprisePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEntreprisePeer::clearInstancePool();
            CommonEntreprisePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEntreprise or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEntreprise object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEntreprise) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonEntreprisePeer::ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEntreprisePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonEntreprisePeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonEntreprisePeer::clearInstancePool();
            } elseif ($values instanceof CommonEntreprise) { // it's a model object
                CommonEntreprisePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonEntreprisePeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEntreprisePeer::clearRelatedInstancePool();
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
        $objects = CommonEntreprisePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonPanierEntreprise objects
            $criteria = new Criteria(CommonPanierEntreprisePeer::DATABASE_NAME);
            
            $criteria->add(CommonPanierEntreprisePeer::ID_ENTREPRISE, $obj->getId());
            $affectedRows += CommonPanierEntreprisePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonEntreprise object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEntreprise $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEntreprisePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEntreprisePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEntreprisePeer::DATABASE_NAME, CommonEntreprisePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonEntreprise
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonEntreprisePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonEntreprisePeer::ID, $pk);

        $v = CommonEntreprisePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonEntreprise[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);
            $criteria->add(CommonEntreprisePeer::ID, $pks, Criteria::IN);
            $objs = CommonEntreprisePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonEntreprisePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEntreprisePeer::buildTableMap();

