<?php


/**
 * Base class that represents a query for the 'TypeProcedure' table.
 *
 * 
 *
 * @method CommonTypeProcedureQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedure($order = Criteria::ASC) Order by the libelle_type_procedure column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureFr($order = Criteria::ASC) Order by the libelle_type_procedure_fr column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureEn($order = Criteria::ASC) Order by the libelle_type_procedure_en column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureEs($order = Criteria::ASC) Order by the libelle_type_procedure_es column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureSu($order = Criteria::ASC) Order by the libelle_type_procedure_su column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureDu($order = Criteria::ASC) Order by the libelle_type_procedure_du column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureCz($order = Criteria::ASC) Order by the libelle_type_procedure_cz column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureAr($order = Criteria::ASC) Order by the libelle_type_procedure_ar column
 * @method CommonTypeProcedureQuery orderByAbbreviation($order = Criteria::ASC) Order by the abbreviation column
 * @method CommonTypeProcedureQuery orderByTypeBoamp($order = Criteria::ASC) Order by the type_boamp column
 * @method CommonTypeProcedureQuery orderByCategorieProcedure($order = Criteria::ASC) Order by the categorie_procedure column
 * @method CommonTypeProcedureQuery orderByIdTypeProcedureAnm($order = Criteria::ASC) Order by the id_type_procedure_ANM column
 * @method CommonTypeProcedureQuery orderByDelaiAlerte($order = Criteria::ASC) Order by the delai_alerte column
 * @method CommonTypeProcedureQuery orderByMapa($order = Criteria::ASC) Order by the mapa column
 * @method CommonTypeProcedureQuery orderByConsultationTransverse($order = Criteria::ASC) Order by the consultation_transverse column
 * @method CommonTypeProcedureQuery orderByCodeRecensement($order = Criteria::ASC) Order by the code_recensement column
 * @method CommonTypeProcedureQuery orderByAbbreviationPortailAnm($order = Criteria::ASC) Order by the abbreviation_portail_ANM column
 * @method CommonTypeProcedureQuery orderByIdModele($order = Criteria::ASC) Order by the id_modele column
 * @method CommonTypeProcedureQuery orderByLibelleTypeProcedureIt($order = Criteria::ASC) Order by the libelle_type_procedure_it column
 * @method CommonTypeProcedureQuery orderByAffichageCaution($order = Criteria::ASC) Order by the affichage_caution column
 *
 * @method CommonTypeProcedureQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedure() Group by the libelle_type_procedure column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureFr() Group by the libelle_type_procedure_fr column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureEn() Group by the libelle_type_procedure_en column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureEs() Group by the libelle_type_procedure_es column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureSu() Group by the libelle_type_procedure_su column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureDu() Group by the libelle_type_procedure_du column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureCz() Group by the libelle_type_procedure_cz column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureAr() Group by the libelle_type_procedure_ar column
 * @method CommonTypeProcedureQuery groupByAbbreviation() Group by the abbreviation column
 * @method CommonTypeProcedureQuery groupByTypeBoamp() Group by the type_boamp column
 * @method CommonTypeProcedureQuery groupByCategorieProcedure() Group by the categorie_procedure column
 * @method CommonTypeProcedureQuery groupByIdTypeProcedureAnm() Group by the id_type_procedure_ANM column
 * @method CommonTypeProcedureQuery groupByDelaiAlerte() Group by the delai_alerte column
 * @method CommonTypeProcedureQuery groupByMapa() Group by the mapa column
 * @method CommonTypeProcedureQuery groupByConsultationTransverse() Group by the consultation_transverse column
 * @method CommonTypeProcedureQuery groupByCodeRecensement() Group by the code_recensement column
 * @method CommonTypeProcedureQuery groupByAbbreviationPortailAnm() Group by the abbreviation_portail_ANM column
 * @method CommonTypeProcedureQuery groupByIdModele() Group by the id_modele column
 * @method CommonTypeProcedureQuery groupByLibelleTypeProcedureIt() Group by the libelle_type_procedure_it column
 * @method CommonTypeProcedureQuery groupByAffichageCaution() Group by the affichage_caution column
 *
 * @method CommonTypeProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeProcedure findOne(PropelPDO $con = null) Return the first CommonTypeProcedure matching the query
 * @method CommonTypeProcedure findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeProcedure matching the query, or a new CommonTypeProcedure object populated from the query conditions when no match is found
 *
 * @method CommonTypeProcedure findOneByLibelleTypeProcedure(string $libelle_type_procedure) Return the first CommonTypeProcedure filtered by the libelle_type_procedure column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureFr(string $libelle_type_procedure_fr) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_fr column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureEn(string $libelle_type_procedure_en) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_en column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureEs(string $libelle_type_procedure_es) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_es column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureSu(string $libelle_type_procedure_su) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_su column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureDu(string $libelle_type_procedure_du) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_du column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureCz(string $libelle_type_procedure_cz) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_cz column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureAr(string $libelle_type_procedure_ar) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_ar column
 * @method CommonTypeProcedure findOneByAbbreviation(string $abbreviation) Return the first CommonTypeProcedure filtered by the abbreviation column
 * @method CommonTypeProcedure findOneByTypeBoamp(int $type_boamp) Return the first CommonTypeProcedure filtered by the type_boamp column
 * @method CommonTypeProcedure findOneByCategorieProcedure(int $categorie_procedure) Return the first CommonTypeProcedure filtered by the categorie_procedure column
 * @method CommonTypeProcedure findOneByIdTypeProcedureAnm(int $id_type_procedure_ANM) Return the first CommonTypeProcedure filtered by the id_type_procedure_ANM column
 * @method CommonTypeProcedure findOneByDelaiAlerte(int $delai_alerte) Return the first CommonTypeProcedure filtered by the delai_alerte column
 * @method CommonTypeProcedure findOneByMapa(string $mapa) Return the first CommonTypeProcedure filtered by the mapa column
 * @method CommonTypeProcedure findOneByConsultationTransverse(string $consultation_transverse) Return the first CommonTypeProcedure filtered by the consultation_transverse column
 * @method CommonTypeProcedure findOneByCodeRecensement(string $code_recensement) Return the first CommonTypeProcedure filtered by the code_recensement column
 * @method CommonTypeProcedure findOneByAbbreviationPortailAnm(string $abbreviation_portail_ANM) Return the first CommonTypeProcedure filtered by the abbreviation_portail_ANM column
 * @method CommonTypeProcedure findOneByIdModele(int $id_modele) Return the first CommonTypeProcedure filtered by the id_modele column
 * @method CommonTypeProcedure findOneByLibelleTypeProcedureIt(string $libelle_type_procedure_it) Return the first CommonTypeProcedure filtered by the libelle_type_procedure_it column
 * @method CommonTypeProcedure findOneByAffichageCaution(int $affichage_caution) Return the first CommonTypeProcedure filtered by the affichage_caution column
 *
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonTypeProcedure objects filtered by the id_type_procedure column
 * @method array findByLibelleTypeProcedure(string $libelle_type_procedure) Return CommonTypeProcedure objects filtered by the libelle_type_procedure column
 * @method array findByLibelleTypeProcedureFr(string $libelle_type_procedure_fr) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_fr column
 * @method array findByLibelleTypeProcedureEn(string $libelle_type_procedure_en) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_en column
 * @method array findByLibelleTypeProcedureEs(string $libelle_type_procedure_es) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_es column
 * @method array findByLibelleTypeProcedureSu(string $libelle_type_procedure_su) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_su column
 * @method array findByLibelleTypeProcedureDu(string $libelle_type_procedure_du) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_du column
 * @method array findByLibelleTypeProcedureCz(string $libelle_type_procedure_cz) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_cz column
 * @method array findByLibelleTypeProcedureAr(string $libelle_type_procedure_ar) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_ar column
 * @method array findByAbbreviation(string $abbreviation) Return CommonTypeProcedure objects filtered by the abbreviation column
 * @method array findByTypeBoamp(int $type_boamp) Return CommonTypeProcedure objects filtered by the type_boamp column
 * @method array findByCategorieProcedure(int $categorie_procedure) Return CommonTypeProcedure objects filtered by the categorie_procedure column
 * @method array findByIdTypeProcedureAnm(int $id_type_procedure_ANM) Return CommonTypeProcedure objects filtered by the id_type_procedure_ANM column
 * @method array findByDelaiAlerte(int $delai_alerte) Return CommonTypeProcedure objects filtered by the delai_alerte column
 * @method array findByMapa(string $mapa) Return CommonTypeProcedure objects filtered by the mapa column
 * @method array findByConsultationTransverse(string $consultation_transverse) Return CommonTypeProcedure objects filtered by the consultation_transverse column
 * @method array findByCodeRecensement(string $code_recensement) Return CommonTypeProcedure objects filtered by the code_recensement column
 * @method array findByAbbreviationPortailAnm(string $abbreviation_portail_ANM) Return CommonTypeProcedure objects filtered by the abbreviation_portail_ANM column
 * @method array findByIdModele(int $id_modele) Return CommonTypeProcedure objects filtered by the id_modele column
 * @method array findByLibelleTypeProcedureIt(string $libelle_type_procedure_it) Return CommonTypeProcedure objects filtered by the libelle_type_procedure_it column
 * @method array findByAffichageCaution(int $affichage_caution) Return CommonTypeProcedure objects filtered by the affichage_caution column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeProcedureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeProcedureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeProcedureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeProcedureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeProcedureQuery) {
            return $criteria;
        }
        $query = new CommonTypeProcedureQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTypeProcedure|CommonTypeProcedure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeProcedurePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTypeProcedure A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTypeProcedure($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTypeProcedure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_procedure`, `libelle_type_procedure`, `libelle_type_procedure_fr`, `libelle_type_procedure_en`, `libelle_type_procedure_es`, `libelle_type_procedure_su`, `libelle_type_procedure_du`, `libelle_type_procedure_cz`, `libelle_type_procedure_ar`, `abbreviation`, `type_boamp`, `categorie_procedure`, `id_type_procedure_ANM`, `delai_alerte`, `mapa`, `consultation_transverse`, `code_recensement`, `abbreviation_portail_ANM`, `id_modele`, `libelle_type_procedure_it`, `affichage_caution` FROM `TypeProcedure` WHERE `id_type_procedure` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTypeProcedure();
            $obj->hydrate($row);
            CommonTypeProcedurePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTypeProcedure|CommonTypeProcedure[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTypeProcedure[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $keys, Criteria::IN);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE, $libelleTypeProcedure, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR, $libelleTypeProcedureFr, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN, $libelleTypeProcedureEn, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES, $libelleTypeProcedureEs, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU, $libelleTypeProcedureSu, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU, $libelleTypeProcedureDu, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ, $libelleTypeProcedureCz, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR, $libelleTypeProcedureAr, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::ABBREVIATION, $abbreviation, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByTypeBoamp($typeBoamp = null, $comparison = null)
    {
        if (is_array($typeBoamp)) {
            $useMinMax = false;
            if (isset($typeBoamp['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::TYPE_BOAMP, $typeBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeBoamp['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::TYPE_BOAMP, $typeBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::TYPE_BOAMP, $typeBoamp, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByCategorieProcedure($categorieProcedure = null, $comparison = null)
    {
        if (is_array($categorieProcedure)) {
            $useMinMax = false;
            if (isset($categorieProcedure['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE, $categorieProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorieProcedure['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE, $categorieProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE, $categorieProcedure, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedureAnm(1234); // WHERE id_type_procedure_ANM = 1234
     * $query->filterByIdTypeProcedureAnm(array(12, 34)); // WHERE id_type_procedure_ANM IN (12, 34)
     * $query->filterByIdTypeProcedureAnm(array('min' => 12)); // WHERE id_type_procedure_ANM >= 12
     * $query->filterByIdTypeProcedureAnm(array('max' => 12)); // WHERE id_type_procedure_ANM <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedureAnm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedureAnm($idTypeProcedureAnm = null, $comparison = null)
    {
        if (is_array($idTypeProcedureAnm)) {
            $useMinMax = false;
            if (isset($idTypeProcedureAnm['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM, $idTypeProcedureAnm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedureAnm['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM, $idTypeProcedureAnm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM, $idTypeProcedureAnm, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByDelaiAlerte($delaiAlerte = null, $comparison = null)
    {
        if (is_array($delaiAlerte)) {
            $useMinMax = false;
            if (isset($delaiAlerte['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::DELAI_ALERTE, $delaiAlerte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiAlerte['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::DELAI_ALERTE, $delaiAlerte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::DELAI_ALERTE, $delaiAlerte, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::MAPA, $mapa, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE, $consultationTransverse, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::CODE_RECENSEMENT, $codeRecensement, $comparison);
    }

    /**
     * Filter the query on the abbreviation_portail_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByAbbreviationPortailAnm('fooValue');   // WHERE abbreviation_portail_ANM = 'fooValue'
     * $query->filterByAbbreviationPortailAnm('%fooValue%'); // WHERE abbreviation_portail_ANM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abbreviationPortailAnm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByAbbreviationPortailAnm($abbreviationPortailAnm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abbreviationPortailAnm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abbreviationPortailAnm)) {
                $abbreviationPortailAnm = str_replace('*', '%', $abbreviationPortailAnm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM, $abbreviationPortailAnm, $comparison);
    }

    /**
     * Filter the query on the id_modele column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModele(1234); // WHERE id_modele = 1234
     * $query->filterByIdModele(array(12, 34)); // WHERE id_modele IN (12, 34)
     * $query->filterByIdModele(array('min' => 12)); // WHERE id_modele >= 12
     * $query->filterByIdModele(array('max' => 12)); // WHERE id_modele <= 12
     * </code>
     *
     * @param     mixed $idModele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByIdModele($idModele = null, $comparison = null)
    {
        if (is_array($idModele)) {
            $useMinMax = false;
            if (isset($idModele['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_MODELE, $idModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModele['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::ID_MODELE, $idModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::ID_MODELE, $idModele, $comparison);
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
     * @return CommonTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT, $libelleTypeProcedureIt, $comparison);
    }

    /**
     * Filter the query on the affichage_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageCaution(1234); // WHERE affichage_caution = 1234
     * $query->filterByAffichageCaution(array(12, 34)); // WHERE affichage_caution IN (12, 34)
     * $query->filterByAffichageCaution(array('min' => 12)); // WHERE affichage_caution >= 12
     * $query->filterByAffichageCaution(array('max' => 12)); // WHERE affichage_caution <= 12
     * </code>
     *
     * @param     mixed $affichageCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByAffichageCaution($affichageCaution = null, $comparison = null)
    {
        if (is_array($affichageCaution)) {
            $useMinMax = false;
            if (isset($affichageCaution['min'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::AFFICHAGE_CAUTION, $affichageCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($affichageCaution['max'])) {
                $this->addUsingAlias(CommonTypeProcedurePeer::AFFICHAGE_CAUTION, $affichageCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeProcedurePeer::AFFICHAGE_CAUTION, $affichageCaution, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeProcedure $commonTypeProcedure Object to remove from the list of results
     *
     * @return CommonTypeProcedureQuery The current query, for fluid interface
     */
    public function prune($commonTypeProcedure = null)
    {
        if ($commonTypeProcedure) {
            $this->addUsingAlias(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $commonTypeProcedure->getIdTypeProcedure(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
