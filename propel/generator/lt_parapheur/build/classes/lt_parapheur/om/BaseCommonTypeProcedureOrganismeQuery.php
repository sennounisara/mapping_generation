<?php


/**
 * Base class that represents a query for the 'Type_Procedure_Organisme' table.
 *
 * 
 *
 * @method CommonTypeProcedureOrganismeQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonTypeProcedureOrganismeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedure($order = Criteria::ASC) Order by the libelle_type_procedure column
 * @method CommonTypeProcedureOrganismeQuery orderByAbbreviation($order = Criteria::ASC) Order by the abbreviation column
 * @method CommonTypeProcedureOrganismeQuery orderByTypeBoamp($order = Criteria::ASC) Order by the type_boamp column
 * @method CommonTypeProcedureOrganismeQuery orderByIdTypeProcedurePortail($order = Criteria::ASC) Order by the id_type_procedure_portail column
 * @method CommonTypeProcedureOrganismeQuery orderByCategorieProcedure($order = Criteria::ASC) Order by the categorie_procedure column
 * @method CommonTypeProcedureOrganismeQuery orderByDelaiAlerte($order = Criteria::ASC) Order by the delai_alerte column
 * @method CommonTypeProcedureOrganismeQuery orderByIdTypeValidation($order = Criteria::ASC) Order by the id_type_validation column
 * @method CommonTypeProcedureOrganismeQuery orderByServiceValidation($order = Criteria::ASC) Order by the service_validation column
 * @method CommonTypeProcedureOrganismeQuery orderByMapa($order = Criteria::ASC) Order by the mapa column
 * @method CommonTypeProcedureOrganismeQuery orderByActiverMapa($order = Criteria::ASC) Order by the activer_mapa column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureFr($order = Criteria::ASC) Order by the libelle_type_procedure_fr column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureEn($order = Criteria::ASC) Order by the libelle_type_procedure_en column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureEs($order = Criteria::ASC) Order by the libelle_type_procedure_es column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureSu($order = Criteria::ASC) Order by the libelle_type_procedure_su column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureDu($order = Criteria::ASC) Order by the libelle_type_procedure_du column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureCz($order = Criteria::ASC) Order by the libelle_type_procedure_cz column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureAr($order = Criteria::ASC) Order by the libelle_type_procedure_ar column
 * @method CommonTypeProcedureOrganismeQuery orderByIdMontantMapa($order = Criteria::ASC) Order by the id_montant_mapa column
 * @method CommonTypeProcedureOrganismeQuery orderByCodeRecensement($order = Criteria::ASC) Order by the code_recensement column
 * @method CommonTypeProcedureOrganismeQuery orderByDepouillablePhaseConsultation($order = Criteria::ASC) Order by the depouillable_phase_consultation column
 * @method CommonTypeProcedureOrganismeQuery orderByConsultationTransverse($order = Criteria::ASC) Order by the consultation_transverse column
 * @method CommonTypeProcedureOrganismeQuery orderByTagBoamp($order = Criteria::ASC) Order by the tag_Boamp column
 * @method CommonTypeProcedureOrganismeQuery orderByAo($order = Criteria::ASC) Order by the ao column
 * @method CommonTypeProcedureOrganismeQuery orderByMn($order = Criteria::ASC) Order by the mn column
 * @method CommonTypeProcedureOrganismeQuery orderByDc($order = Criteria::ASC) Order by the dc column
 * @method CommonTypeProcedureOrganismeQuery orderByAutre($order = Criteria::ASC) Order by the autre column
 * @method CommonTypeProcedureOrganismeQuery orderBySad($order = Criteria::ASC) Order by the sad column
 * @method CommonTypeProcedureOrganismeQuery orderByAccordCadre($order = Criteria::ASC) Order by the accord_cadre column
 * @method CommonTypeProcedureOrganismeQuery orderByTagNameMesureAvancement($order = Criteria::ASC) Order by the tag_name_mesure_avancement column
 * @method CommonTypeProcedureOrganismeQuery orderByAbreviationInterface($order = Criteria::ASC) Order by the abreviation_interface column
 * @method CommonTypeProcedureOrganismeQuery orderByLibelleTypeProcedureIt($order = Criteria::ASC) Order by the libelle_type_procedure_it column
 * @method CommonTypeProcedureOrganismeQuery orderByPubliciteTypesFormXml($order = Criteria::ASC) Order by the publicite_types_form_xml column
 * @method CommonTypeProcedureOrganismeQuery orderByTagNameChorus($order = Criteria::ASC) Order by the tag_name_chorus column
 * @method CommonTypeProcedureOrganismeQuery orderByEquivalentOpoce($order = Criteria::ASC) Order by the equivalent_opoce column
 * @method CommonTypeProcedureOrganismeQuery orderByEquivalentBoamp($order = Criteria::ASC) Order by the equivalent_boamp column
 *
 * @method CommonTypeProcedureOrganismeQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonTypeProcedureOrganismeQuery groupByOrganisme() Group by the organisme column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedure() Group by the libelle_type_procedure column
 * @method CommonTypeProcedureOrganismeQuery groupByAbbreviation() Group by the abbreviation column
 * @method CommonTypeProcedureOrganismeQuery groupByTypeBoamp() Group by the type_boamp column
 * @method CommonTypeProcedureOrganismeQuery groupByIdTypeProcedurePortail() Group by the id_type_procedure_portail column
 * @method CommonTypeProcedureOrganismeQuery groupByCategorieProcedure() Group by the categorie_procedure column
 * @method CommonTypeProcedureOrganismeQuery groupByDelaiAlerte() Group by the delai_alerte column
 * @method CommonTypeProcedureOrganismeQuery groupByIdTypeValidation() Group by the id_type_validation column
 * @method CommonTypeProcedureOrganismeQuery groupByServiceValidation() Group by the service_validation column
 * @method CommonTypeProcedureOrganismeQuery groupByMapa() Group by the mapa column
 * @method CommonTypeProcedureOrganismeQuery groupByActiverMapa() Group by the activer_mapa column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureFr() Group by the libelle_type_procedure_fr column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureEn() Group by the libelle_type_procedure_en column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureEs() Group by the libelle_type_procedure_es column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureSu() Group by the libelle_type_procedure_su column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureDu() Group by the libelle_type_procedure_du column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureCz() Group by the libelle_type_procedure_cz column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureAr() Group by the libelle_type_procedure_ar column
 * @method CommonTypeProcedureOrganismeQuery groupByIdMontantMapa() Group by the id_montant_mapa column
 * @method CommonTypeProcedureOrganismeQuery groupByCodeRecensement() Group by the code_recensement column
 * @method CommonTypeProcedureOrganismeQuery groupByDepouillablePhaseConsultation() Group by the depouillable_phase_consultation column
 * @method CommonTypeProcedureOrganismeQuery groupByConsultationTransverse() Group by the consultation_transverse column
 * @method CommonTypeProcedureOrganismeQuery groupByTagBoamp() Group by the tag_Boamp column
 * @method CommonTypeProcedureOrganismeQuery groupByAo() Group by the ao column
 * @method CommonTypeProcedureOrganismeQuery groupByMn() Group by the mn column
 * @method CommonTypeProcedureOrganismeQuery groupByDc() Group by the dc column
 * @method CommonTypeProcedureOrganismeQuery groupByAutre() Group by the autre column
 * @method CommonTypeProcedureOrganismeQuery groupBySad() Group by the sad column
 * @method CommonTypeProcedureOrganismeQuery groupByAccordCadre() Group by the accord_cadre column
 * @method CommonTypeProcedureOrganismeQuery groupByTagNameMesureAvancement() Group by the tag_name_mesure_avancement column
 * @method CommonTypeProcedureOrganismeQuery groupByAbreviationInterface() Group by the abreviation_interface column
 * @method CommonTypeProcedureOrganismeQuery groupByLibelleTypeProcedureIt() Group by the libelle_type_procedure_it column
 * @method CommonTypeProcedureOrganismeQuery groupByPubliciteTypesFormXml() Group by the publicite_types_form_xml column
 * @method CommonTypeProcedureOrganismeQuery groupByTagNameChorus() Group by the tag_name_chorus column
 * @method CommonTypeProcedureOrganismeQuery groupByEquivalentOpoce() Group by the equivalent_opoce column
 * @method CommonTypeProcedureOrganismeQuery groupByEquivalentBoamp() Group by the equivalent_boamp column
 *
 * @method CommonTypeProcedureOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeProcedureOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeProcedureOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeProcedureOrganisme findOne(PropelPDO $con = null) Return the first CommonTypeProcedureOrganisme matching the query
 * @method CommonTypeProcedureOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeProcedureOrganisme matching the query, or a new CommonTypeProcedureOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonTypeProcedureOrganisme findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonTypeProcedureOrganisme filtered by the id_type_procedure column
 * @method CommonTypeProcedureOrganisme findOneByOrganisme(string $organisme) Return the first CommonTypeProcedureOrganisme filtered by the organisme column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedure(string $libelle_type_procedure) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure column
 * @method CommonTypeProcedureOrganisme findOneByAbbreviation(string $abbreviation) Return the first CommonTypeProcedureOrganisme filtered by the abbreviation column
 * @method CommonTypeProcedureOrganisme findOneByTypeBoamp(int $type_boamp) Return the first CommonTypeProcedureOrganisme filtered by the type_boamp column
 * @method CommonTypeProcedureOrganisme findOneByIdTypeProcedurePortail(int $id_type_procedure_portail) Return the first CommonTypeProcedureOrganisme filtered by the id_type_procedure_portail column
 * @method CommonTypeProcedureOrganisme findOneByCategorieProcedure(int $categorie_procedure) Return the first CommonTypeProcedureOrganisme filtered by the categorie_procedure column
 * @method CommonTypeProcedureOrganisme findOneByDelaiAlerte(int $delai_alerte) Return the first CommonTypeProcedureOrganisme filtered by the delai_alerte column
 * @method CommonTypeProcedureOrganisme findOneByIdTypeValidation(int $id_type_validation) Return the first CommonTypeProcedureOrganisme filtered by the id_type_validation column
 * @method CommonTypeProcedureOrganisme findOneByServiceValidation(int $service_validation) Return the first CommonTypeProcedureOrganisme filtered by the service_validation column
 * @method CommonTypeProcedureOrganisme findOneByMapa(string $mapa) Return the first CommonTypeProcedureOrganisme filtered by the mapa column
 * @method CommonTypeProcedureOrganisme findOneByActiverMapa(string $activer_mapa) Return the first CommonTypeProcedureOrganisme filtered by the activer_mapa column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureFr(string $libelle_type_procedure_fr) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_fr column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureEn(string $libelle_type_procedure_en) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_en column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureEs(string $libelle_type_procedure_es) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_es column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureSu(string $libelle_type_procedure_su) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_su column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureDu(string $libelle_type_procedure_du) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_du column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureCz(string $libelle_type_procedure_cz) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_cz column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureAr(string $libelle_type_procedure_ar) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_ar column
 * @method CommonTypeProcedureOrganisme findOneByIdMontantMapa(int $id_montant_mapa) Return the first CommonTypeProcedureOrganisme filtered by the id_montant_mapa column
 * @method CommonTypeProcedureOrganisme findOneByCodeRecensement(string $code_recensement) Return the first CommonTypeProcedureOrganisme filtered by the code_recensement column
 * @method CommonTypeProcedureOrganisme findOneByDepouillablePhaseConsultation(string $depouillable_phase_consultation) Return the first CommonTypeProcedureOrganisme filtered by the depouillable_phase_consultation column
 * @method CommonTypeProcedureOrganisme findOneByConsultationTransverse(string $consultation_transverse) Return the first CommonTypeProcedureOrganisme filtered by the consultation_transverse column
 * @method CommonTypeProcedureOrganisme findOneByTagBoamp(string $tag_Boamp) Return the first CommonTypeProcedureOrganisme filtered by the tag_Boamp column
 * @method CommonTypeProcedureOrganisme findOneByAo(string $ao) Return the first CommonTypeProcedureOrganisme filtered by the ao column
 * @method CommonTypeProcedureOrganisme findOneByMn(string $mn) Return the first CommonTypeProcedureOrganisme filtered by the mn column
 * @method CommonTypeProcedureOrganisme findOneByDc(string $dc) Return the first CommonTypeProcedureOrganisme filtered by the dc column
 * @method CommonTypeProcedureOrganisme findOneByAutre(string $autre) Return the first CommonTypeProcedureOrganisme filtered by the autre column
 * @method CommonTypeProcedureOrganisme findOneBySad(string $sad) Return the first CommonTypeProcedureOrganisme filtered by the sad column
 * @method CommonTypeProcedureOrganisme findOneByAccordCadre(string $accord_cadre) Return the first CommonTypeProcedureOrganisme filtered by the accord_cadre column
 * @method CommonTypeProcedureOrganisme findOneByTagNameMesureAvancement(string $tag_name_mesure_avancement) Return the first CommonTypeProcedureOrganisme filtered by the tag_name_mesure_avancement column
 * @method CommonTypeProcedureOrganisme findOneByAbreviationInterface(string $abreviation_interface) Return the first CommonTypeProcedureOrganisme filtered by the abreviation_interface column
 * @method CommonTypeProcedureOrganisme findOneByLibelleTypeProcedureIt(string $libelle_type_procedure_it) Return the first CommonTypeProcedureOrganisme filtered by the libelle_type_procedure_it column
 * @method CommonTypeProcedureOrganisme findOneByPubliciteTypesFormXml(string $publicite_types_form_xml) Return the first CommonTypeProcedureOrganisme filtered by the publicite_types_form_xml column
 * @method CommonTypeProcedureOrganisme findOneByTagNameChorus(string $tag_name_chorus) Return the first CommonTypeProcedureOrganisme filtered by the tag_name_chorus column
 * @method CommonTypeProcedureOrganisme findOneByEquivalentOpoce(string $equivalent_opoce) Return the first CommonTypeProcedureOrganisme filtered by the equivalent_opoce column
 * @method CommonTypeProcedureOrganisme findOneByEquivalentBoamp(string $equivalent_boamp) Return the first CommonTypeProcedureOrganisme filtered by the equivalent_boamp column
 *
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonTypeProcedureOrganisme objects filtered by the id_type_procedure column
 * @method array findByOrganisme(string $organisme) Return CommonTypeProcedureOrganisme objects filtered by the organisme column
 * @method array findByLibelleTypeProcedure(string $libelle_type_procedure) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure column
 * @method array findByAbbreviation(string $abbreviation) Return CommonTypeProcedureOrganisme objects filtered by the abbreviation column
 * @method array findByTypeBoamp(int $type_boamp) Return CommonTypeProcedureOrganisme objects filtered by the type_boamp column
 * @method array findByIdTypeProcedurePortail(int $id_type_procedure_portail) Return CommonTypeProcedureOrganisme objects filtered by the id_type_procedure_portail column
 * @method array findByCategorieProcedure(int $categorie_procedure) Return CommonTypeProcedureOrganisme objects filtered by the categorie_procedure column
 * @method array findByDelaiAlerte(int $delai_alerte) Return CommonTypeProcedureOrganisme objects filtered by the delai_alerte column
 * @method array findByIdTypeValidation(int $id_type_validation) Return CommonTypeProcedureOrganisme objects filtered by the id_type_validation column
 * @method array findByServiceValidation(int $service_validation) Return CommonTypeProcedureOrganisme objects filtered by the service_validation column
 * @method array findByMapa(string $mapa) Return CommonTypeProcedureOrganisme objects filtered by the mapa column
 * @method array findByActiverMapa(string $activer_mapa) Return CommonTypeProcedureOrganisme objects filtered by the activer_mapa column
 * @method array findByLibelleTypeProcedureFr(string $libelle_type_procedure_fr) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_fr column
 * @method array findByLibelleTypeProcedureEn(string $libelle_type_procedure_en) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_en column
 * @method array findByLibelleTypeProcedureEs(string $libelle_type_procedure_es) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_es column
 * @method array findByLibelleTypeProcedureSu(string $libelle_type_procedure_su) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_su column
 * @method array findByLibelleTypeProcedureDu(string $libelle_type_procedure_du) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_du column
 * @method array findByLibelleTypeProcedureCz(string $libelle_type_procedure_cz) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_cz column
 * @method array findByLibelleTypeProcedureAr(string $libelle_type_procedure_ar) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_ar column
 * @method array findByIdMontantMapa(int $id_montant_mapa) Return CommonTypeProcedureOrganisme objects filtered by the id_montant_mapa column
 * @method array findByCodeRecensement(string $code_recensement) Return CommonTypeProcedureOrganisme objects filtered by the code_recensement column
 * @method array findByDepouillablePhaseConsultation(string $depouillable_phase_consultation) Return CommonTypeProcedureOrganisme objects filtered by the depouillable_phase_consultation column
 * @method array findByConsultationTransverse(string $consultation_transverse) Return CommonTypeProcedureOrganisme objects filtered by the consultation_transverse column
 * @method array findByTagBoamp(string $tag_Boamp) Return CommonTypeProcedureOrganisme objects filtered by the tag_Boamp column
 * @method array findByAo(string $ao) Return CommonTypeProcedureOrganisme objects filtered by the ao column
 * @method array findByMn(string $mn) Return CommonTypeProcedureOrganisme objects filtered by the mn column
 * @method array findByDc(string $dc) Return CommonTypeProcedureOrganisme objects filtered by the dc column
 * @method array findByAutre(string $autre) Return CommonTypeProcedureOrganisme objects filtered by the autre column
 * @method array findBySad(string $sad) Return CommonTypeProcedureOrganisme objects filtered by the sad column
 * @method array findByAccordCadre(string $accord_cadre) Return CommonTypeProcedureOrganisme objects filtered by the accord_cadre column
 * @method array findByTagNameMesureAvancement(string $tag_name_mesure_avancement) Return CommonTypeProcedureOrganisme objects filtered by the tag_name_mesure_avancement column
 * @method array findByAbreviationInterface(string $abreviation_interface) Return CommonTypeProcedureOrganisme objects filtered by the abreviation_interface column
 * @method array findByLibelleTypeProcedureIt(string $libelle_type_procedure_it) Return CommonTypeProcedureOrganisme objects filtered by the libelle_type_procedure_it column
 * @method array findByPubliciteTypesFormXml(string $publicite_types_form_xml) Return CommonTypeProcedureOrganisme objects filtered by the publicite_types_form_xml column
 * @method array findByTagNameChorus(string $tag_name_chorus) Return CommonTypeProcedureOrganisme objects filtered by the tag_name_chorus column
 * @method array findByEquivalentOpoce(string $equivalent_opoce) Return CommonTypeProcedureOrganisme objects filtered by the equivalent_opoce column
 * @method array findByEquivalentBoamp(string $equivalent_boamp) Return CommonTypeProcedureOrganisme objects filtered by the equivalent_boamp column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeProcedureOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeProcedureOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeProcedureOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeProcedureOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeProcedureOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeProcedureOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeProcedureOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonTypeProcedureOrganismeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_type_procedure, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTypeProcedureOrganisme|CommonTypeProcedureOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeProcedureOrganismePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTypeProcedureOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_procedure`, `organisme`, `libelle_type_procedure`, `abbreviation`, `type_boamp`, `id_type_procedure_portail`, `categorie_procedure`, `delai_alerte`, `id_type_validation`, `service_validation`, `mapa`, `activer_mapa`, `libelle_type_procedure_fr`, `libelle_type_procedure_en`, `libelle_type_procedure_es`, `libelle_type_procedure_su`, `libelle_type_procedure_du`, `libelle_type_procedure_cz`, `libelle_type_procedure_ar`, `id_montant_mapa`, `code_recensement`, `depouillable_phase_consultation`, `consultation_transverse`, `tag_Boamp`, `ao`, `mn`, `dc`, `autre`, `sad`, `accord_cadre`, `tag_name_mesure_avancement`, `abreviation_interface`, `libelle_type_procedure_it`, `publicite_types_form_xml`, `tag_name_chorus`, `equivalent_opoce`, `equivalent_boamp` FROM `Type_Procedure_Organisme` WHERE `id_type_procedure` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTypeProcedureOrganisme();
            $obj->hydrate($row);
            CommonTypeProcedureOrganismePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonTypeProcedureOrganisme|CommonTypeProcedureOrganisme[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTypeProcedureOrganisme[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTypeProcedureOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedure('fooValue');   // WHERE libelle_type_procedure = 'fooValue'
     * $query->filterByLibelleTypeProcedure('%fooValue%'); // WHERE libelle_type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedure($libelleTypeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedure)) {
                $libelleTypeProcedure = str_replace('*', '%', $libelleTypeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE, $libelleTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the abbreviation column
     *
     * Example usage:
     * <code>
     * $query->filterByAbbreviation('fooValue');   // WHERE abbreviation = 'fooValue'
     * $query->filterByAbbreviation('%fooValue%'); // WHERE abbreviation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abbreviation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByAbbreviation($abbreviation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abbreviation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abbreviation)) {
                $abbreviation = str_replace('*', '%', $abbreviation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ABBREVIATION, $abbreviation, $comparison);
    }

    /**
     * Filter the query on the type_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeBoamp(1234); // WHERE type_boamp = 1234
     * $query->filterByTypeBoamp(array(12, 34)); // WHERE type_boamp IN (12, 34)
     * $query->filterByTypeBoamp(array('min' => 12)); // WHERE type_boamp >= 12
     * $query->filterByTypeBoamp(array('max' => 12)); // WHERE type_boamp <= 12
     * </code>
     *
     * @param     mixed $typeBoamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByTypeBoamp($typeBoamp = null, $comparison = null)
    {
        if (is_array($typeBoamp)) {
            $useMinMax = false;
            if (isset($typeBoamp['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TYPE_BOAMP, $typeBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeBoamp['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TYPE_BOAMP, $typeBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TYPE_BOAMP, $typeBoamp, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure_portail column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedurePortail(1234); // WHERE id_type_procedure_portail = 1234
     * $query->filterByIdTypeProcedurePortail(array(12, 34)); // WHERE id_type_procedure_portail IN (12, 34)
     * $query->filterByIdTypeProcedurePortail(array('min' => 12)); // WHERE id_type_procedure_portail >= 12
     * $query->filterByIdTypeProcedurePortail(array('max' => 12)); // WHERE id_type_procedure_portail <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedurePortail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedurePortail($idTypeProcedurePortail = null, $comparison = null)
    {
        if (is_array($idTypeProcedurePortail)) {
            $useMinMax = false;
            if (isset($idTypeProcedurePortail['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL, $idTypeProcedurePortail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedurePortail['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL, $idTypeProcedurePortail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL, $idTypeProcedurePortail, $comparison);
    }

    /**
     * Filter the query on the categorie_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorieProcedure(1234); // WHERE categorie_procedure = 1234
     * $query->filterByCategorieProcedure(array(12, 34)); // WHERE categorie_procedure IN (12, 34)
     * $query->filterByCategorieProcedure(array('min' => 12)); // WHERE categorie_procedure >= 12
     * $query->filterByCategorieProcedure(array('max' => 12)); // WHERE categorie_procedure <= 12
     * </code>
     *
     * @param     mixed $categorieProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByCategorieProcedure($categorieProcedure = null, $comparison = null)
    {
        if (is_array($categorieProcedure)) {
            $useMinMax = false;
            if (isset($categorieProcedure['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE, $categorieProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorieProcedure['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE, $categorieProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE, $categorieProcedure, $comparison);
    }

    /**
     * Filter the query on the delai_alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiAlerte(1234); // WHERE delai_alerte = 1234
     * $query->filterByDelaiAlerte(array(12, 34)); // WHERE delai_alerte IN (12, 34)
     * $query->filterByDelaiAlerte(array('min' => 12)); // WHERE delai_alerte >= 12
     * $query->filterByDelaiAlerte(array('max' => 12)); // WHERE delai_alerte <= 12
     * </code>
     *
     * @param     mixed $delaiAlerte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByDelaiAlerte($delaiAlerte = null, $comparison = null)
    {
        if (is_array($delaiAlerte)) {
            $useMinMax = false;
            if (isset($delaiAlerte['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::DELAI_ALERTE, $delaiAlerte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiAlerte['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::DELAI_ALERTE, $delaiAlerte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::DELAI_ALERTE, $delaiAlerte, $comparison);
    }

    /**
     * Filter the query on the id_type_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeValidation(1234); // WHERE id_type_validation = 1234
     * $query->filterByIdTypeValidation(array(12, 34)); // WHERE id_type_validation IN (12, 34)
     * $query->filterByIdTypeValidation(array('min' => 12)); // WHERE id_type_validation >= 12
     * $query->filterByIdTypeValidation(array('max' => 12)); // WHERE id_type_validation <= 12
     * </code>
     *
     * @param     mixed $idTypeValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeValidation($idTypeValidation = null, $comparison = null)
    {
        if (is_array($idTypeValidation)) {
            $useMinMax = false;
            if (isset($idTypeValidation['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION, $idTypeValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeValidation['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION, $idTypeValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION, $idTypeValidation, $comparison);
    }

    /**
     * Filter the query on the service_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceValidation(1234); // WHERE service_validation = 1234
     * $query->filterByServiceValidation(array(12, 34)); // WHERE service_validation IN (12, 34)
     * $query->filterByServiceValidation(array('min' => 12)); // WHERE service_validation >= 12
     * $query->filterByServiceValidation(array('max' => 12)); // WHERE service_validation <= 12
     * </code>
     *
     * @param     mixed $serviceValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByServiceValidation($serviceValidation = null, $comparison = null)
    {
        if (is_array($serviceValidation)) {
            $useMinMax = false;
            if (isset($serviceValidation['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION, $serviceValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceValidation['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION, $serviceValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION, $serviceValidation, $comparison);
    }

    /**
     * Filter the query on the mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByMapa('fooValue');   // WHERE mapa = 'fooValue'
     * $query->filterByMapa('%fooValue%'); // WHERE mapa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mapa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByMapa($mapa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mapa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mapa)) {
                $mapa = str_replace('*', '%', $mapa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::MAPA, $mapa, $comparison);
    }

    /**
     * Filter the query on the activer_mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByActiverMapa('fooValue');   // WHERE activer_mapa = 'fooValue'
     * $query->filterByActiverMapa('%fooValue%'); // WHERE activer_mapa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activerMapa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByActiverMapa($activerMapa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activerMapa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activerMapa)) {
                $activerMapa = str_replace('*', '%', $activerMapa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ACTIVER_MAPA, $activerMapa, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureFr('fooValue');   // WHERE libelle_type_procedure_fr = 'fooValue'
     * $query->filterByLibelleTypeProcedureFr('%fooValue%'); // WHERE libelle_type_procedure_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureFr($libelleTypeProcedureFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureFr)) {
                $libelleTypeProcedureFr = str_replace('*', '%', $libelleTypeProcedureFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR, $libelleTypeProcedureFr, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureEn('fooValue');   // WHERE libelle_type_procedure_en = 'fooValue'
     * $query->filterByLibelleTypeProcedureEn('%fooValue%'); // WHERE libelle_type_procedure_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureEn($libelleTypeProcedureEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureEn)) {
                $libelleTypeProcedureEn = str_replace('*', '%', $libelleTypeProcedureEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN, $libelleTypeProcedureEn, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureEs('fooValue');   // WHERE libelle_type_procedure_es = 'fooValue'
     * $query->filterByLibelleTypeProcedureEs('%fooValue%'); // WHERE libelle_type_procedure_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureEs($libelleTypeProcedureEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureEs)) {
                $libelleTypeProcedureEs = str_replace('*', '%', $libelleTypeProcedureEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES, $libelleTypeProcedureEs, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureSu('fooValue');   // WHERE libelle_type_procedure_su = 'fooValue'
     * $query->filterByLibelleTypeProcedureSu('%fooValue%'); // WHERE libelle_type_procedure_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureSu($libelleTypeProcedureSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureSu)) {
                $libelleTypeProcedureSu = str_replace('*', '%', $libelleTypeProcedureSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU, $libelleTypeProcedureSu, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureDu('fooValue');   // WHERE libelle_type_procedure_du = 'fooValue'
     * $query->filterByLibelleTypeProcedureDu('%fooValue%'); // WHERE libelle_type_procedure_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureDu($libelleTypeProcedureDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureDu)) {
                $libelleTypeProcedureDu = str_replace('*', '%', $libelleTypeProcedureDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU, $libelleTypeProcedureDu, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureCz('fooValue');   // WHERE libelle_type_procedure_cz = 'fooValue'
     * $query->filterByLibelleTypeProcedureCz('%fooValue%'); // WHERE libelle_type_procedure_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureCz($libelleTypeProcedureCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureCz)) {
                $libelleTypeProcedureCz = str_replace('*', '%', $libelleTypeProcedureCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ, $libelleTypeProcedureCz, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureAr('fooValue');   // WHERE libelle_type_procedure_ar = 'fooValue'
     * $query->filterByLibelleTypeProcedureAr('%fooValue%'); // WHERE libelle_type_procedure_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureAr($libelleTypeProcedureAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureAr)) {
                $libelleTypeProcedureAr = str_replace('*', '%', $libelleTypeProcedureAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR, $libelleTypeProcedureAr, $comparison);
    }

    /**
     * Filter the query on the id_montant_mapa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMontantMapa(1234); // WHERE id_montant_mapa = 1234
     * $query->filterByIdMontantMapa(array(12, 34)); // WHERE id_montant_mapa IN (12, 34)
     * $query->filterByIdMontantMapa(array('min' => 12)); // WHERE id_montant_mapa >= 12
     * $query->filterByIdMontantMapa(array('max' => 12)); // WHERE id_montant_mapa <= 12
     * </code>
     *
     * @param     mixed $idMontantMapa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdMontantMapa($idMontantMapa = null, $comparison = null)
    {
        if (is_array($idMontantMapa)) {
            $useMinMax = false;
            if (isset($idMontantMapa['min'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA, $idMontantMapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMontantMapa['max'])) {
                $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA, $idMontantMapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA, $idMontantMapa, $comparison);
    }

    /**
     * Filter the query on the code_recensement column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeRecensement('fooValue');   // WHERE code_recensement = 'fooValue'
     * $query->filterByCodeRecensement('%fooValue%'); // WHERE code_recensement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeRecensement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByCodeRecensement($codeRecensement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeRecensement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeRecensement)) {
                $codeRecensement = str_replace('*', '%', $codeRecensement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT, $codeRecensement, $comparison);
    }

    /**
     * Filter the query on the depouillable_phase_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByDepouillablePhaseConsultation('fooValue');   // WHERE depouillable_phase_consultation = 'fooValue'
     * $query->filterByDepouillablePhaseConsultation('%fooValue%'); // WHERE depouillable_phase_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depouillablePhaseConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByDepouillablePhaseConsultation($depouillablePhaseConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depouillablePhaseConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depouillablePhaseConsultation)) {
                $depouillablePhaseConsultation = str_replace('*', '%', $depouillablePhaseConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION, $depouillablePhaseConsultation, $comparison);
    }

    /**
     * Filter the query on the consultation_transverse column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationTransverse('fooValue');   // WHERE consultation_transverse = 'fooValue'
     * $query->filterByConsultationTransverse('%fooValue%'); // WHERE consultation_transverse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationTransverse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByConsultationTransverse($consultationTransverse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationTransverse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationTransverse)) {
                $consultationTransverse = str_replace('*', '%', $consultationTransverse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE, $consultationTransverse, $comparison);
    }

    /**
     * Filter the query on the tag_Boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByTagBoamp('fooValue');   // WHERE tag_Boamp = 'fooValue'
     * $query->filterByTagBoamp('%fooValue%'); // WHERE tag_Boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByTagBoamp($tagBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagBoamp)) {
                $tagBoamp = str_replace('*', '%', $tagBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TAG_BOAMP, $tagBoamp, $comparison);
    }

    /**
     * Filter the query on the ao column
     *
     * Example usage:
     * <code>
     * $query->filterByAo('fooValue');   // WHERE ao = 'fooValue'
     * $query->filterByAo('%fooValue%'); // WHERE ao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByAo($ao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ao)) {
                $ao = str_replace('*', '%', $ao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::AO, $ao, $comparison);
    }

    /**
     * Filter the query on the mn column
     *
     * Example usage:
     * <code>
     * $query->filterByMn('fooValue');   // WHERE mn = 'fooValue'
     * $query->filterByMn('%fooValue%'); // WHERE mn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByMn($mn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mn)) {
                $mn = str_replace('*', '%', $mn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::MN, $mn, $comparison);
    }

    /**
     * Filter the query on the dc column
     *
     * Example usage:
     * <code>
     * $query->filterByDc('fooValue');   // WHERE dc = 'fooValue'
     * $query->filterByDc('%fooValue%'); // WHERE dc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByDc($dc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dc)) {
                $dc = str_replace('*', '%', $dc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::DC, $dc, $comparison);
    }

    /**
     * Filter the query on the autre column
     *
     * Example usage:
     * <code>
     * $query->filterByAutre('fooValue');   // WHERE autre = 'fooValue'
     * $query->filterByAutre('%fooValue%'); // WHERE autre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByAutre($autre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autre)) {
                $autre = str_replace('*', '%', $autre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::AUTRE, $autre, $comparison);
    }

    /**
     * Filter the query on the sad column
     *
     * Example usage:
     * <code>
     * $query->filterBySad('fooValue');   // WHERE sad = 'fooValue'
     * $query->filterBySad('%fooValue%'); // WHERE sad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterBySad($sad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sad)) {
                $sad = str_replace('*', '%', $sad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::SAD, $sad, $comparison);
    }

    /**
     * Filter the query on the accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByAccordCadre('fooValue');   // WHERE accord_cadre = 'fooValue'
     * $query->filterByAccordCadre('%fooValue%'); // WHERE accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByAccordCadre($accordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accordCadre)) {
                $accordCadre = str_replace('*', '%', $accordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ACCORD_CADRE, $accordCadre, $comparison);
    }

    /**
     * Filter the query on the tag_name_mesure_avancement column
     *
     * Example usage:
     * <code>
     * $query->filterByTagNameMesureAvancement('fooValue');   // WHERE tag_name_mesure_avancement = 'fooValue'
     * $query->filterByTagNameMesureAvancement('%fooValue%'); // WHERE tag_name_mesure_avancement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagNameMesureAvancement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByTagNameMesureAvancement($tagNameMesureAvancement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagNameMesureAvancement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagNameMesureAvancement)) {
                $tagNameMesureAvancement = str_replace('*', '%', $tagNameMesureAvancement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT, $tagNameMesureAvancement, $comparison);
    }

    /**
     * Filter the query on the abreviation_interface column
     *
     * Example usage:
     * <code>
     * $query->filterByAbreviationInterface('fooValue');   // WHERE abreviation_interface = 'fooValue'
     * $query->filterByAbreviationInterface('%fooValue%'); // WHERE abreviation_interface LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abreviationInterface The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByAbreviationInterface($abreviationInterface = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abreviationInterface)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abreviationInterface)) {
                $abreviationInterface = str_replace('*', '%', $abreviationInterface);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE, $abreviationInterface, $comparison);
    }

    /**
     * Filter the query on the libelle_type_procedure_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeProcedureIt('fooValue');   // WHERE libelle_type_procedure_it = 'fooValue'
     * $query->filterByLibelleTypeProcedureIt('%fooValue%'); // WHERE libelle_type_procedure_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeProcedureIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeProcedureIt($libelleTypeProcedureIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeProcedureIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeProcedureIt)) {
                $libelleTypeProcedureIt = str_replace('*', '%', $libelleTypeProcedureIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT, $libelleTypeProcedureIt, $comparison);
    }

    /**
     * Filter the query on the publicite_types_form_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByPubliciteTypesFormXml('fooValue');   // WHERE publicite_types_form_xml = 'fooValue'
     * $query->filterByPubliciteTypesFormXml('%fooValue%'); // WHERE publicite_types_form_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $publiciteTypesFormXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByPubliciteTypesFormXml($publiciteTypesFormXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($publiciteTypesFormXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $publiciteTypesFormXml)) {
                $publiciteTypesFormXml = str_replace('*', '%', $publiciteTypesFormXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML, $publiciteTypesFormXml, $comparison);
    }

    /**
     * Filter the query on the tag_name_chorus column
     *
     * Example usage:
     * <code>
     * $query->filterByTagNameChorus('fooValue');   // WHERE tag_name_chorus = 'fooValue'
     * $query->filterByTagNameChorus('%fooValue%'); // WHERE tag_name_chorus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagNameChorus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByTagNameChorus($tagNameChorus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagNameChorus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagNameChorus)) {
                $tagNameChorus = str_replace('*', '%', $tagNameChorus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS, $tagNameChorus, $comparison);
    }

    /**
     * Filter the query on the equivalent_opoce column
     *
     * Example usage:
     * <code>
     * $query->filterByEquivalentOpoce('fooValue');   // WHERE equivalent_opoce = 'fooValue'
     * $query->filterByEquivalentOpoce('%fooValue%'); // WHERE equivalent_opoce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $equivalentOpoce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByEquivalentOpoce($equivalentOpoce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($equivalentOpoce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $equivalentOpoce)) {
                $equivalentOpoce = str_replace('*', '%', $equivalentOpoce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE, $equivalentOpoce, $comparison);
    }

    /**
     * Filter the query on the equivalent_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByEquivalentBoamp('fooValue');   // WHERE equivalent_boamp = 'fooValue'
     * $query->filterByEquivalentBoamp('%fooValue%'); // WHERE equivalent_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $equivalentBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function filterByEquivalentBoamp($equivalentBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($equivalentBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $equivalentBoamp)) {
                $equivalentBoamp = str_replace('*', '%', $equivalentBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP, $equivalentBoamp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeProcedureOrganisme $commonTypeProcedureOrganisme Object to remove from the list of results
     *
     * @return CommonTypeProcedureOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonTypeProcedureOrganisme = null)
    {
        if ($commonTypeProcedureOrganisme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE), $commonTypeProcedureOrganisme->getIdTypeProcedure(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTypeProcedureOrganismePeer::ORGANISME), $commonTypeProcedureOrganisme->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
