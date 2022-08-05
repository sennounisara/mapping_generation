<?php


/**
 * Base static class for performing query and update operations on the 'Type_Procedure_Organisme' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTypeProcedureOrganismePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Type_Procedure_Organisme';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTypeProcedureOrganisme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTypeProcedureOrganismeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 37;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 37;

    /** the column name for the id_type_procedure field */
    const ID_TYPE_PROCEDURE = 'Type_Procedure_Organisme.id_type_procedure';

    /** the column name for the organisme field */
    const ORGANISME = 'Type_Procedure_Organisme.organisme';

    /** the column name for the libelle_type_procedure field */
    const LIBELLE_TYPE_PROCEDURE = 'Type_Procedure_Organisme.libelle_type_procedure';

    /** the column name for the abbreviation field */
    const ABBREVIATION = 'Type_Procedure_Organisme.abbreviation';

    /** the column name for the type_boamp field */
    const TYPE_BOAMP = 'Type_Procedure_Organisme.type_boamp';

    /** the column name for the id_type_procedure_portail field */
    const ID_TYPE_PROCEDURE_PORTAIL = 'Type_Procedure_Organisme.id_type_procedure_portail';

    /** the column name for the categorie_procedure field */
    const CATEGORIE_PROCEDURE = 'Type_Procedure_Organisme.categorie_procedure';

    /** the column name for the delai_alerte field */
    const DELAI_ALERTE = 'Type_Procedure_Organisme.delai_alerte';

    /** the column name for the id_type_validation field */
    const ID_TYPE_VALIDATION = 'Type_Procedure_Organisme.id_type_validation';

    /** the column name for the service_validation field */
    const SERVICE_VALIDATION = 'Type_Procedure_Organisme.service_validation';

    /** the column name for the mapa field */
    const MAPA = 'Type_Procedure_Organisme.mapa';

    /** the column name for the activer_mapa field */
    const ACTIVER_MAPA = 'Type_Procedure_Organisme.activer_mapa';

    /** the column name for the libelle_type_procedure_fr field */
    const LIBELLE_TYPE_PROCEDURE_FR = 'Type_Procedure_Organisme.libelle_type_procedure_fr';

    /** the column name for the libelle_type_procedure_en field */
    const LIBELLE_TYPE_PROCEDURE_EN = 'Type_Procedure_Organisme.libelle_type_procedure_en';

    /** the column name for the libelle_type_procedure_es field */
    const LIBELLE_TYPE_PROCEDURE_ES = 'Type_Procedure_Organisme.libelle_type_procedure_es';

    /** the column name for the libelle_type_procedure_su field */
    const LIBELLE_TYPE_PROCEDURE_SU = 'Type_Procedure_Organisme.libelle_type_procedure_su';

    /** the column name for the libelle_type_procedure_du field */
    const LIBELLE_TYPE_PROCEDURE_DU = 'Type_Procedure_Organisme.libelle_type_procedure_du';

    /** the column name for the libelle_type_procedure_cz field */
    const LIBELLE_TYPE_PROCEDURE_CZ = 'Type_Procedure_Organisme.libelle_type_procedure_cz';

    /** the column name for the libelle_type_procedure_ar field */
    const LIBELLE_TYPE_PROCEDURE_AR = 'Type_Procedure_Organisme.libelle_type_procedure_ar';

    /** the column name for the id_montant_mapa field */
    const ID_MONTANT_MAPA = 'Type_Procedure_Organisme.id_montant_mapa';

    /** the column name for the code_recensement field */
    const CODE_RECENSEMENT = 'Type_Procedure_Organisme.code_recensement';

    /** the column name for the depouillable_phase_consultation field */
    const DEPOUILLABLE_PHASE_CONSULTATION = 'Type_Procedure_Organisme.depouillable_phase_consultation';

    /** the column name for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE = 'Type_Procedure_Organisme.consultation_transverse';

    /** the column name for the tag_Boamp field */
    const TAG_BOAMP = 'Type_Procedure_Organisme.tag_Boamp';

    /** the column name for the ao field */
    const AO = 'Type_Procedure_Organisme.ao';

    /** the column name for the mn field */
    const MN = 'Type_Procedure_Organisme.mn';

    /** the column name for the dc field */
    const DC = 'Type_Procedure_Organisme.dc';

    /** the column name for the autre field */
    const AUTRE = 'Type_Procedure_Organisme.autre';

    /** the column name for the sad field */
    const SAD = 'Type_Procedure_Organisme.sad';

    /** the column name for the accord_cadre field */
    const ACCORD_CADRE = 'Type_Procedure_Organisme.accord_cadre';

    /** the column name for the tag_name_mesure_avancement field */
    const TAG_NAME_MESURE_AVANCEMENT = 'Type_Procedure_Organisme.tag_name_mesure_avancement';

    /** the column name for the abreviation_interface field */
    const ABREVIATION_INTERFACE = 'Type_Procedure_Organisme.abreviation_interface';

    /** the column name for the libelle_type_procedure_it field */
    const LIBELLE_TYPE_PROCEDURE_IT = 'Type_Procedure_Organisme.libelle_type_procedure_it';

    /** the column name for the publicite_types_form_xml field */
    const PUBLICITE_TYPES_FORM_XML = 'Type_Procedure_Organisme.publicite_types_form_xml';

    /** the column name for the tag_name_chorus field */
    const TAG_NAME_CHORUS = 'Type_Procedure_Organisme.tag_name_chorus';

    /** the column name for the equivalent_opoce field */
    const EQUIVALENT_OPOCE = 'Type_Procedure_Organisme.equivalent_opoce';

    /** the column name for the equivalent_boamp field */
    const EQUIVALENT_BOAMP = 'Type_Procedure_Organisme.equivalent_boamp';

    /** The enumerated values for the mapa field */
    const MAPA_0 = '0';
    const MAPA_1 = '1';

    /** The enumerated values for the activer_mapa field */
    const ACTIVER_MAPA_0 = '0';
    const ACTIVER_MAPA_1 = '1';

    /** The enumerated values for the depouillable_phase_consultation field */
    const DEPOUILLABLE_PHASE_CONSULTATION_0 = '0';
    const DEPOUILLABLE_PHASE_CONSULTATION_1 = '1';

    /** The enumerated values for the consultation_transverse field */
    const CONSULTATION_TRANSVERSE_0 = '0';
    const CONSULTATION_TRANSVERSE_1 = '1';

    /** The enumerated values for the ao field */
    const AO_0 = '0';
    const AO_1 = '1';

    /** The enumerated values for the mn field */
    const MN_0 = '0';
    const MN_1 = '1';

    /** The enumerated values for the dc field */
    const DC_0 = '0';
    const DC_1 = '1';

    /** The enumerated values for the autre field */
    const AUTRE_0 = '0';
    const AUTRE_1 = '1';

    /** The enumerated values for the sad field */
    const SAD_0 = '0';
    const SAD_1 = '1';

    /** The enumerated values for the accord_cadre field */
    const ACCORD_CADRE_0 = '0';
    const ACCORD_CADRE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTypeProcedureOrganisme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTypeProcedureOrganisme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeProcedureOrganismePeer::$fieldNames[CommonTypeProcedureOrganismePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure', 'Organisme', 'LibelleTypeProcedure', 'Abbreviation', 'TypeBoamp', 'IdTypeProcedurePortail', 'CategorieProcedure', 'DelaiAlerte', 'IdTypeValidation', 'ServiceValidation', 'Mapa', 'ActiverMapa', 'LibelleTypeProcedureFr', 'LibelleTypeProcedureEn', 'LibelleTypeProcedureEs', 'LibelleTypeProcedureSu', 'LibelleTypeProcedureDu', 'LibelleTypeProcedureCz', 'LibelleTypeProcedureAr', 'IdMontantMapa', 'CodeRecensement', 'DepouillablePhaseConsultation', 'ConsultationTransverse', 'TagBoamp', 'Ao', 'Mn', 'Dc', 'Autre', 'Sad', 'AccordCadre', 'TagNameMesureAvancement', 'AbreviationInterface', 'LibelleTypeProcedureIt', 'PubliciteTypesFormXml', 'TagNameChorus', 'EquivalentOpoce', 'EquivalentBoamp', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure', 'organisme', 'libelleTypeProcedure', 'abbreviation', 'typeBoamp', 'idTypeProcedurePortail', 'categorieProcedure', 'delaiAlerte', 'idTypeValidation', 'serviceValidation', 'mapa', 'activerMapa', 'libelleTypeProcedureFr', 'libelleTypeProcedureEn', 'libelleTypeProcedureEs', 'libelleTypeProcedureSu', 'libelleTypeProcedureDu', 'libelleTypeProcedureCz', 'libelleTypeProcedureAr', 'idMontantMapa', 'codeRecensement', 'depouillablePhaseConsultation', 'consultationTransverse', 'tagBoamp', 'ao', 'mn', 'dc', 'autre', 'sad', 'accordCadre', 'tagNameMesureAvancement', 'abreviationInterface', 'libelleTypeProcedureIt', 'publiciteTypesFormXml', 'tagNameChorus', 'equivalentOpoce', 'equivalentBoamp', ),
        BasePeer::TYPE_COLNAME => array (CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ORGANISME, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE, CommonTypeProcedureOrganismePeer::ABBREVIATION, CommonTypeProcedureOrganismePeer::TYPE_BOAMP, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL, CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE, CommonTypeProcedureOrganismePeer::DELAI_ALERTE, CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION, CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION, CommonTypeProcedureOrganismePeer::MAPA, CommonTypeProcedureOrganismePeer::ACTIVER_MAPA, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR, CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA, CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT, CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION, CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE, CommonTypeProcedureOrganismePeer::TAG_BOAMP, CommonTypeProcedureOrganismePeer::AO, CommonTypeProcedureOrganismePeer::MN, CommonTypeProcedureOrganismePeer::DC, CommonTypeProcedureOrganismePeer::AUTRE, CommonTypeProcedureOrganismePeer::SAD, CommonTypeProcedureOrganismePeer::ACCORD_CADRE, CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT, CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT, CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML, CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS, CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE, CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE', 'ORGANISME', 'LIBELLE_TYPE_PROCEDURE', 'ABBREVIATION', 'TYPE_BOAMP', 'ID_TYPE_PROCEDURE_PORTAIL', 'CATEGORIE_PROCEDURE', 'DELAI_ALERTE', 'ID_TYPE_VALIDATION', 'SERVICE_VALIDATION', 'MAPA', 'ACTIVER_MAPA', 'LIBELLE_TYPE_PROCEDURE_FR', 'LIBELLE_TYPE_PROCEDURE_EN', 'LIBELLE_TYPE_PROCEDURE_ES', 'LIBELLE_TYPE_PROCEDURE_SU', 'LIBELLE_TYPE_PROCEDURE_DU', 'LIBELLE_TYPE_PROCEDURE_CZ', 'LIBELLE_TYPE_PROCEDURE_AR', 'ID_MONTANT_MAPA', 'CODE_RECENSEMENT', 'DEPOUILLABLE_PHASE_CONSULTATION', 'CONSULTATION_TRANSVERSE', 'TAG_BOAMP', 'AO', 'MN', 'DC', 'AUTRE', 'SAD', 'ACCORD_CADRE', 'TAG_NAME_MESURE_AVANCEMENT', 'ABREVIATION_INTERFACE', 'LIBELLE_TYPE_PROCEDURE_IT', 'PUBLICITE_TYPES_FORM_XML', 'TAG_NAME_CHORUS', 'EQUIVALENT_OPOCE', 'EQUIVALENT_BOAMP', ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure', 'organisme', 'libelle_type_procedure', 'abbreviation', 'type_boamp', 'id_type_procedure_portail', 'categorie_procedure', 'delai_alerte', 'id_type_validation', 'service_validation', 'mapa', 'activer_mapa', 'libelle_type_procedure_fr', 'libelle_type_procedure_en', 'libelle_type_procedure_es', 'libelle_type_procedure_su', 'libelle_type_procedure_du', 'libelle_type_procedure_cz', 'libelle_type_procedure_ar', 'id_montant_mapa', 'code_recensement', 'depouillable_phase_consultation', 'consultation_transverse', 'tag_Boamp', 'ao', 'mn', 'dc', 'autre', 'sad', 'accord_cadre', 'tag_name_mesure_avancement', 'abreviation_interface', 'libelle_type_procedure_it', 'publicite_types_form_xml', 'tag_name_chorus', 'equivalent_opoce', 'equivalent_boamp', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTypeProcedureOrganismePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdTypeProcedure' => 0, 'Organisme' => 1, 'LibelleTypeProcedure' => 2, 'Abbreviation' => 3, 'TypeBoamp' => 4, 'IdTypeProcedurePortail' => 5, 'CategorieProcedure' => 6, 'DelaiAlerte' => 7, 'IdTypeValidation' => 8, 'ServiceValidation' => 9, 'Mapa' => 10, 'ActiverMapa' => 11, 'LibelleTypeProcedureFr' => 12, 'LibelleTypeProcedureEn' => 13, 'LibelleTypeProcedureEs' => 14, 'LibelleTypeProcedureSu' => 15, 'LibelleTypeProcedureDu' => 16, 'LibelleTypeProcedureCz' => 17, 'LibelleTypeProcedureAr' => 18, 'IdMontantMapa' => 19, 'CodeRecensement' => 20, 'DepouillablePhaseConsultation' => 21, 'ConsultationTransverse' => 22, 'TagBoamp' => 23, 'Ao' => 24, 'Mn' => 25, 'Dc' => 26, 'Autre' => 27, 'Sad' => 28, 'AccordCadre' => 29, 'TagNameMesureAvancement' => 30, 'AbreviationInterface' => 31, 'LibelleTypeProcedureIt' => 32, 'PubliciteTypesFormXml' => 33, 'TagNameChorus' => 34, 'EquivalentOpoce' => 35, 'EquivalentBoamp' => 36, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idTypeProcedure' => 0, 'organisme' => 1, 'libelleTypeProcedure' => 2, 'abbreviation' => 3, 'typeBoamp' => 4, 'idTypeProcedurePortail' => 5, 'categorieProcedure' => 6, 'delaiAlerte' => 7, 'idTypeValidation' => 8, 'serviceValidation' => 9, 'mapa' => 10, 'activerMapa' => 11, 'libelleTypeProcedureFr' => 12, 'libelleTypeProcedureEn' => 13, 'libelleTypeProcedureEs' => 14, 'libelleTypeProcedureSu' => 15, 'libelleTypeProcedureDu' => 16, 'libelleTypeProcedureCz' => 17, 'libelleTypeProcedureAr' => 18, 'idMontantMapa' => 19, 'codeRecensement' => 20, 'depouillablePhaseConsultation' => 21, 'consultationTransverse' => 22, 'tagBoamp' => 23, 'ao' => 24, 'mn' => 25, 'dc' => 26, 'autre' => 27, 'sad' => 28, 'accordCadre' => 29, 'tagNameMesureAvancement' => 30, 'abreviationInterface' => 31, 'libelleTypeProcedureIt' => 32, 'publiciteTypesFormXml' => 33, 'tagNameChorus' => 34, 'equivalentOpoce' => 35, 'equivalentBoamp' => 36, ),
        BasePeer::TYPE_COLNAME => array (CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE => 0, CommonTypeProcedureOrganismePeer::ORGANISME => 1, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE => 2, CommonTypeProcedureOrganismePeer::ABBREVIATION => 3, CommonTypeProcedureOrganismePeer::TYPE_BOAMP => 4, CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL => 5, CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE => 6, CommonTypeProcedureOrganismePeer::DELAI_ALERTE => 7, CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION => 8, CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION => 9, CommonTypeProcedureOrganismePeer::MAPA => 10, CommonTypeProcedureOrganismePeer::ACTIVER_MAPA => 11, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR => 12, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN => 13, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES => 14, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU => 15, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU => 16, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ => 17, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR => 18, CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA => 19, CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT => 20, CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION => 21, CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE => 22, CommonTypeProcedureOrganismePeer::TAG_BOAMP => 23, CommonTypeProcedureOrganismePeer::AO => 24, CommonTypeProcedureOrganismePeer::MN => 25, CommonTypeProcedureOrganismePeer::DC => 26, CommonTypeProcedureOrganismePeer::AUTRE => 27, CommonTypeProcedureOrganismePeer::SAD => 28, CommonTypeProcedureOrganismePeer::ACCORD_CADRE => 29, CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT => 30, CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE => 31, CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT => 32, CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML => 33, CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS => 34, CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE => 35, CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP => 36, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_TYPE_PROCEDURE' => 0, 'ORGANISME' => 1, 'LIBELLE_TYPE_PROCEDURE' => 2, 'ABBREVIATION' => 3, 'TYPE_BOAMP' => 4, 'ID_TYPE_PROCEDURE_PORTAIL' => 5, 'CATEGORIE_PROCEDURE' => 6, 'DELAI_ALERTE' => 7, 'ID_TYPE_VALIDATION' => 8, 'SERVICE_VALIDATION' => 9, 'MAPA' => 10, 'ACTIVER_MAPA' => 11, 'LIBELLE_TYPE_PROCEDURE_FR' => 12, 'LIBELLE_TYPE_PROCEDURE_EN' => 13, 'LIBELLE_TYPE_PROCEDURE_ES' => 14, 'LIBELLE_TYPE_PROCEDURE_SU' => 15, 'LIBELLE_TYPE_PROCEDURE_DU' => 16, 'LIBELLE_TYPE_PROCEDURE_CZ' => 17, 'LIBELLE_TYPE_PROCEDURE_AR' => 18, 'ID_MONTANT_MAPA' => 19, 'CODE_RECENSEMENT' => 20, 'DEPOUILLABLE_PHASE_CONSULTATION' => 21, 'CONSULTATION_TRANSVERSE' => 22, 'TAG_BOAMP' => 23, 'AO' => 24, 'MN' => 25, 'DC' => 26, 'AUTRE' => 27, 'SAD' => 28, 'ACCORD_CADRE' => 29, 'TAG_NAME_MESURE_AVANCEMENT' => 30, 'ABREVIATION_INTERFACE' => 31, 'LIBELLE_TYPE_PROCEDURE_IT' => 32, 'PUBLICITE_TYPES_FORM_XML' => 33, 'TAG_NAME_CHORUS' => 34, 'EQUIVALENT_OPOCE' => 35, 'EQUIVALENT_BOAMP' => 36, ),
        BasePeer::TYPE_FIELDNAME => array ('id_type_procedure' => 0, 'organisme' => 1, 'libelle_type_procedure' => 2, 'abbreviation' => 3, 'type_boamp' => 4, 'id_type_procedure_portail' => 5, 'categorie_procedure' => 6, 'delai_alerte' => 7, 'id_type_validation' => 8, 'service_validation' => 9, 'mapa' => 10, 'activer_mapa' => 11, 'libelle_type_procedure_fr' => 12, 'libelle_type_procedure_en' => 13, 'libelle_type_procedure_es' => 14, 'libelle_type_procedure_su' => 15, 'libelle_type_procedure_du' => 16, 'libelle_type_procedure_cz' => 17, 'libelle_type_procedure_ar' => 18, 'id_montant_mapa' => 19, 'code_recensement' => 20, 'depouillable_phase_consultation' => 21, 'consultation_transverse' => 22, 'tag_Boamp' => 23, 'ao' => 24, 'mn' => 25, 'dc' => 26, 'autre' => 27, 'sad' => 28, 'accord_cadre' => 29, 'tag_name_mesure_avancement' => 30, 'abreviation_interface' => 31, 'libelle_type_procedure_it' => 32, 'publicite_types_form_xml' => 33, 'tag_name_chorus' => 34, 'equivalent_opoce' => 35, 'equivalent_boamp' => 36, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTypeProcedureOrganismePeer::MAPA => array(
            CommonTypeProcedureOrganismePeer::MAPA_0,
            CommonTypeProcedureOrganismePeer::MAPA_1,
        ),
        CommonTypeProcedureOrganismePeer::ACTIVER_MAPA => array(
            CommonTypeProcedureOrganismePeer::ACTIVER_MAPA_0,
            CommonTypeProcedureOrganismePeer::ACTIVER_MAPA_1,
        ),
        CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION => array(
            CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION_0,
            CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION_1,
        ),
        CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE => array(
            CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE_0,
            CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE_1,
        ),
        CommonTypeProcedureOrganismePeer::AO => array(
            CommonTypeProcedureOrganismePeer::AO_0,
            CommonTypeProcedureOrganismePeer::AO_1,
        ),
        CommonTypeProcedureOrganismePeer::MN => array(
            CommonTypeProcedureOrganismePeer::MN_0,
            CommonTypeProcedureOrganismePeer::MN_1,
        ),
        CommonTypeProcedureOrganismePeer::DC => array(
            CommonTypeProcedureOrganismePeer::DC_0,
            CommonTypeProcedureOrganismePeer::DC_1,
        ),
        CommonTypeProcedureOrganismePeer::AUTRE => array(
            CommonTypeProcedureOrganismePeer::AUTRE_0,
            CommonTypeProcedureOrganismePeer::AUTRE_1,
        ),
        CommonTypeProcedureOrganismePeer::SAD => array(
            CommonTypeProcedureOrganismePeer::SAD_0,
            CommonTypeProcedureOrganismePeer::SAD_1,
        ),
        CommonTypeProcedureOrganismePeer::ACCORD_CADRE => array(
            CommonTypeProcedureOrganismePeer::ACCORD_CADRE_0,
            CommonTypeProcedureOrganismePeer::ACCORD_CADRE_1,
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
        $toNames = CommonTypeProcedureOrganismePeer::getFieldNames($toType);
        $key = isset(CommonTypeProcedureOrganismePeer::$fieldKeys[$fromType][$name]) ? CommonTypeProcedureOrganismePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTypeProcedureOrganismePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTypeProcedureOrganismePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTypeProcedureOrganismePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTypeProcedureOrganismePeer::$enumValueSets;
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
        $valueSets = CommonTypeProcedureOrganismePeer::getValueSets();

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
        $values = CommonTypeProcedureOrganismePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTypeProcedureOrganismePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTypeProcedureOrganismePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ORGANISME);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ABBREVIATION);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::TYPE_BOAMP);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::DELAI_ALERTE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::MAPA);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ACTIVER_MAPA);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::TAG_BOAMP);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::AO);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::MN);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::DC);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::AUTRE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::SAD);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ACCORD_CADRE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE);
            $criteria->addSelectColumn(CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP);
        } else {
            $criteria->addSelectColumn($alias . '.id_type_procedure');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure');
            $criteria->addSelectColumn($alias . '.abbreviation');
            $criteria->addSelectColumn($alias . '.type_boamp');
            $criteria->addSelectColumn($alias . '.id_type_procedure_portail');
            $criteria->addSelectColumn($alias . '.categorie_procedure');
            $criteria->addSelectColumn($alias . '.delai_alerte');
            $criteria->addSelectColumn($alias . '.id_type_validation');
            $criteria->addSelectColumn($alias . '.service_validation');
            $criteria->addSelectColumn($alias . '.mapa');
            $criteria->addSelectColumn($alias . '.activer_mapa');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_fr');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_en');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_es');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_su');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_du');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_cz');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_ar');
            $criteria->addSelectColumn($alias . '.id_montant_mapa');
            $criteria->addSelectColumn($alias . '.code_recensement');
            $criteria->addSelectColumn($alias . '.depouillable_phase_consultation');
            $criteria->addSelectColumn($alias . '.consultation_transverse');
            $criteria->addSelectColumn($alias . '.tag_Boamp');
            $criteria->addSelectColumn($alias . '.ao');
            $criteria->addSelectColumn($alias . '.mn');
            $criteria->addSelectColumn($alias . '.dc');
            $criteria->addSelectColumn($alias . '.autre');
            $criteria->addSelectColumn($alias . '.sad');
            $criteria->addSelectColumn($alias . '.accord_cadre');
            $criteria->addSelectColumn($alias . '.tag_name_mesure_avancement');
            $criteria->addSelectColumn($alias . '.abreviation_interface');
            $criteria->addSelectColumn($alias . '.libelle_type_procedure_it');
            $criteria->addSelectColumn($alias . '.publicite_types_form_xml');
            $criteria->addSelectColumn($alias . '.tag_name_chorus');
            $criteria->addSelectColumn($alias . '.equivalent_opoce');
            $criteria->addSelectColumn($alias . '.equivalent_boamp');
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
        $criteria->setPrimaryTableName(CommonTypeProcedureOrganismePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTypeProcedureOrganismePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTypeProcedureOrganismePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeProcedureOrganisme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTypeProcedureOrganismePeer::doSelect($critcopy, $con);
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
        return CommonTypeProcedureOrganismePeer::populateObjects(CommonTypeProcedureOrganismePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTypeProcedureOrganismePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

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
     * @param      CommonTypeProcedureOrganisme $obj A CommonTypeProcedureOrganisme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdTypeProcedure(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTypeProcedureOrganismePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTypeProcedureOrganisme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTypeProcedureOrganisme) {
                $key = serialize(array((string) $value->getIdTypeProcedure(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTypeProcedureOrganisme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTypeProcedureOrganismePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTypeProcedureOrganisme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTypeProcedureOrganismePeer::$instances[$key])) {
                return CommonTypeProcedureOrganismePeer::$instances[$key];
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
        foreach (CommonTypeProcedureOrganismePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTypeProcedureOrganismePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Type_Procedure_Organisme
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonTCalendrierEtapeReferentielPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonTCalendrierEtapeReferentielPeer::clearInstancePool();
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
        $cls = CommonTypeProcedureOrganismePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTypeProcedureOrganismePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTypeProcedureOrganismePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTypeProcedureOrganismePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTypeProcedureOrganisme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTypeProcedureOrganismePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTypeProcedureOrganismePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTypeProcedureOrganismePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTypeProcedureOrganismePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTypeProcedureOrganismePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTypeProcedureOrganismePeer::DATABASE_NAME)->getTable(CommonTypeProcedureOrganismePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTypeProcedureOrganismePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTypeProcedureOrganismePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTypeProcedureOrganismeTableMap());
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
        return CommonTypeProcedureOrganismePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTypeProcedureOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeProcedureOrganisme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTypeProcedureOrganisme object
        }

        if ($criteria->containsKey(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE) && $criteria->keyContainsValue(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTypeProcedureOrganisme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTypeProcedureOrganisme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE);
            $value = $criteria->remove(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE);
            if ($value) {
                $selectCriteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTypeProcedureOrganismePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTypeProcedureOrganismePeer::ORGANISME);
            $value = $criteria->remove(CommonTypeProcedureOrganismePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTypeProcedureOrganismePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTypeProcedureOrganismePeer::TABLE_NAME);
            }

        } else { // $values is CommonTypeProcedureOrganisme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Type_Procedure_Organisme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonTypeProcedureOrganismePeer::doOnDeleteCascade(new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonTypeProcedureOrganismePeer::TABLE_NAME, $con, CommonTypeProcedureOrganismePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTypeProcedureOrganismePeer::clearInstancePool();
            CommonTypeProcedureOrganismePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTypeProcedureOrganisme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTypeProcedureOrganisme object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTypeProcedureOrganisme) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTypeProcedureOrganismePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonTypeProcedureOrganismePeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonTypeProcedureOrganismePeer::clearInstancePool();
            } elseif ($values instanceof CommonTypeProcedureOrganisme) { // it's a model object
                CommonTypeProcedureOrganismePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonTypeProcedureOrganismePeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTypeProcedureOrganismePeer::clearRelatedInstancePool();
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
        $objects = CommonTypeProcedureOrganismePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonTCalendrierEtapeReferentiel objects
            $criteria = new Criteria(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME);
            
            $criteria->add(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $obj->getIdTypeProcedure());
            $criteria->add(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $obj->getOrganisme());
            $affectedRows += CommonTCalendrierEtapeReferentielPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonTypeProcedureOrganisme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTypeProcedureOrganisme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTypeProcedureOrganismePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTypeProcedureOrganismePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTypeProcedureOrganismePeer::DATABASE_NAME, CommonTypeProcedureOrganismePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_type_procedure
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTypeProcedureOrganisme
     */
    public static function retrieveByPK($id_type_procedure, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_type_procedure, (string) $organisme));
         if (null !== ($obj = CommonTypeProcedureOrganismePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $id_type_procedure);
        $criteria->add(CommonTypeProcedureOrganismePeer::ORGANISME, $organisme);
        $v = CommonTypeProcedureOrganismePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTypeProcedureOrganismePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTypeProcedureOrganismePeer::buildTableMap();

