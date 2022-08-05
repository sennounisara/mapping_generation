<?php


/**
 * Base class that represents a query for the 'Lt_Referentiel' table.
 *
 * 
 *
 * @method CommonLtReferentielQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonLtReferentielQuery orderByCodeLibelle($order = Criteria::ASC) Order by the code_libelle column
 * @method CommonLtReferentielQuery orderByEntreprise($order = Criteria::ASC) Order by the entreprise column
 * @method CommonLtReferentielQuery orderByConsultation($order = Criteria::ASC) Order by the consultation column
 * @method CommonLtReferentielQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonLtReferentielQuery orderByAgent($order = Criteria::ASC) Order by the agent column
 * @method CommonLtReferentielQuery orderByObligatoire($order = Criteria::ASC) Order by the obligatoire column
 * @method CommonLtReferentielQuery orderByTypeSearch($order = Criteria::ASC) Order by the type_search column
 * @method CommonLtReferentielQuery orderByPages($order = Criteria::ASC) Order by the pages column
 * @method CommonLtReferentielQuery orderByPathConfig($order = Criteria::ASC) Order by the path_config column
 * @method CommonLtReferentielQuery orderByModeAffichage($order = Criteria::ASC) Order by the mode_affichage column
 * @method CommonLtReferentielQuery orderByModeModification($order = Criteria::ASC) Order by the mode_modification column
 * @method CommonLtReferentielQuery orderByModeRecherche($order = Criteria::ASC) Order by the mode_recherche column
 * @method CommonLtReferentielQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method CommonLtReferentielQuery orderByOrganismes($order = Criteria::ASC) Order by the organismes column
 * @method CommonLtReferentielQuery orderByLibelleInfoBulle($order = Criteria::ASC) Order by the libelle_info_bulle column
 * @method CommonLtReferentielQuery orderByLogo($order = Criteria::ASC) Order by the logo column
 * @method CommonLtReferentielQuery orderByDefaultvalue($order = Criteria::ASC) Order by the defaultValue column
 * @method CommonLtReferentielQuery orderByDependanceAllotissement($order = Criteria::ASC) Order by the dependance_allotissement column
 * @method CommonLtReferentielQuery orderByDataType($order = Criteria::ASC) Order by the data_type column
 *
 * @method CommonLtReferentielQuery groupById() Group by the id column
 * @method CommonLtReferentielQuery groupByCodeLibelle() Group by the code_libelle column
 * @method CommonLtReferentielQuery groupByEntreprise() Group by the entreprise column
 * @method CommonLtReferentielQuery groupByConsultation() Group by the consultation column
 * @method CommonLtReferentielQuery groupByLot() Group by the lot column
 * @method CommonLtReferentielQuery groupByAgent() Group by the agent column
 * @method CommonLtReferentielQuery groupByObligatoire() Group by the obligatoire column
 * @method CommonLtReferentielQuery groupByTypeSearch() Group by the type_search column
 * @method CommonLtReferentielQuery groupByPages() Group by the pages column
 * @method CommonLtReferentielQuery groupByPathConfig() Group by the path_config column
 * @method CommonLtReferentielQuery groupByModeAffichage() Group by the mode_affichage column
 * @method CommonLtReferentielQuery groupByModeModification() Group by the mode_modification column
 * @method CommonLtReferentielQuery groupByModeRecherche() Group by the mode_recherche column
 * @method CommonLtReferentielQuery groupByType() Group by the Type column
 * @method CommonLtReferentielQuery groupByOrganismes() Group by the organismes column
 * @method CommonLtReferentielQuery groupByLibelleInfoBulle() Group by the libelle_info_bulle column
 * @method CommonLtReferentielQuery groupByLogo() Group by the logo column
 * @method CommonLtReferentielQuery groupByDefaultvalue() Group by the defaultValue column
 * @method CommonLtReferentielQuery groupByDependanceAllotissement() Group by the dependance_allotissement column
 * @method CommonLtReferentielQuery groupByDataType() Group by the data_type column
 *
 * @method CommonLtReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonLtReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonLtReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonLtReferentiel findOne(PropelPDO $con = null) Return the first CommonLtReferentiel matching the query
 * @method CommonLtReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonLtReferentiel matching the query, or a new CommonLtReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonLtReferentiel findOneByCodeLibelle(string $code_libelle) Return the first CommonLtReferentiel filtered by the code_libelle column
 * @method CommonLtReferentiel findOneByEntreprise(string $entreprise) Return the first CommonLtReferentiel filtered by the entreprise column
 * @method CommonLtReferentiel findOneByConsultation(string $consultation) Return the first CommonLtReferentiel filtered by the consultation column
 * @method CommonLtReferentiel findOneByLot(string $lot) Return the first CommonLtReferentiel filtered by the lot column
 * @method CommonLtReferentiel findOneByAgent(string $agent) Return the first CommonLtReferentiel filtered by the agent column
 * @method CommonLtReferentiel findOneByObligatoire(string $obligatoire) Return the first CommonLtReferentiel filtered by the obligatoire column
 * @method CommonLtReferentiel findOneByTypeSearch(string $type_search) Return the first CommonLtReferentiel filtered by the type_search column
 * @method CommonLtReferentiel findOneByPages(string $pages) Return the first CommonLtReferentiel filtered by the pages column
 * @method CommonLtReferentiel findOneByPathConfig(string $path_config) Return the first CommonLtReferentiel filtered by the path_config column
 * @method CommonLtReferentiel findOneByModeAffichage(string $mode_affichage) Return the first CommonLtReferentiel filtered by the mode_affichage column
 * @method CommonLtReferentiel findOneByModeModification(string $mode_modification) Return the first CommonLtReferentiel filtered by the mode_modification column
 * @method CommonLtReferentiel findOneByModeRecherche(string $mode_recherche) Return the first CommonLtReferentiel filtered by the mode_recherche column
 * @method CommonLtReferentiel findOneByType(string $Type) Return the first CommonLtReferentiel filtered by the Type column
 * @method CommonLtReferentiel findOneByOrganismes(string $organismes) Return the first CommonLtReferentiel filtered by the organismes column
 * @method CommonLtReferentiel findOneByLibelleInfoBulle(string $libelle_info_bulle) Return the first CommonLtReferentiel filtered by the libelle_info_bulle column
 * @method CommonLtReferentiel findOneByLogo(string $logo) Return the first CommonLtReferentiel filtered by the logo column
 * @method CommonLtReferentiel findOneByDefaultvalue(string $defaultValue) Return the first CommonLtReferentiel filtered by the defaultValue column
 * @method CommonLtReferentiel findOneByDependanceAllotissement(string $dependance_allotissement) Return the first CommonLtReferentiel filtered by the dependance_allotissement column
 * @method CommonLtReferentiel findOneByDataType(string $data_type) Return the first CommonLtReferentiel filtered by the data_type column
 *
 * @method array findById(int $id) Return CommonLtReferentiel objects filtered by the id column
 * @method array findByCodeLibelle(string $code_libelle) Return CommonLtReferentiel objects filtered by the code_libelle column
 * @method array findByEntreprise(string $entreprise) Return CommonLtReferentiel objects filtered by the entreprise column
 * @method array findByConsultation(string $consultation) Return CommonLtReferentiel objects filtered by the consultation column
 * @method array findByLot(string $lot) Return CommonLtReferentiel objects filtered by the lot column
 * @method array findByAgent(string $agent) Return CommonLtReferentiel objects filtered by the agent column
 * @method array findByObligatoire(string $obligatoire) Return CommonLtReferentiel objects filtered by the obligatoire column
 * @method array findByTypeSearch(string $type_search) Return CommonLtReferentiel objects filtered by the type_search column
 * @method array findByPages(string $pages) Return CommonLtReferentiel objects filtered by the pages column
 * @method array findByPathConfig(string $path_config) Return CommonLtReferentiel objects filtered by the path_config column
 * @method array findByModeAffichage(string $mode_affichage) Return CommonLtReferentiel objects filtered by the mode_affichage column
 * @method array findByModeModification(string $mode_modification) Return CommonLtReferentiel objects filtered by the mode_modification column
 * @method array findByModeRecherche(string $mode_recherche) Return CommonLtReferentiel objects filtered by the mode_recherche column
 * @method array findByType(string $Type) Return CommonLtReferentiel objects filtered by the Type column
 * @method array findByOrganismes(string $organismes) Return CommonLtReferentiel objects filtered by the organismes column
 * @method array findByLibelleInfoBulle(string $libelle_info_bulle) Return CommonLtReferentiel objects filtered by the libelle_info_bulle column
 * @method array findByLogo(string $logo) Return CommonLtReferentiel objects filtered by the logo column
 * @method array findByDefaultvalue(string $defaultValue) Return CommonLtReferentiel objects filtered by the defaultValue column
 * @method array findByDependanceAllotissement(string $dependance_allotissement) Return CommonLtReferentiel objects filtered by the dependance_allotissement column
 * @method array findByDataType(string $data_type) Return CommonLtReferentiel objects filtered by the data_type column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonLtReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonLtReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonLtReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonLtReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonLtReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonLtReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonLtReferentielQuery) {
            return $criteria;
        }
        $query = new CommonLtReferentielQuery();
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
     * @return   CommonLtReferentiel|CommonLtReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonLtReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLtReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 CommonLtReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `code_libelle`, `entreprise`, `consultation`, `lot`, `agent`, `obligatoire`, `type_search`, `pages`, `path_config`, `mode_affichage`, `mode_modification`, `mode_recherche`, `Type`, `organismes`, `libelle_info_bulle`, `logo`, `defaultValue`, `dependance_allotissement`, `data_type` FROM `Lt_Referentiel` WHERE `id` = :p0';
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
            $obj = new CommonLtReferentiel();
            $obj->hydrate($row);
            CommonLtReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonLtReferentiel|CommonLtReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonLtReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonLtReferentielPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonLtReferentielPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonLtReferentielPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonLtReferentielPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeLibelle('fooValue');   // WHERE code_libelle = 'fooValue'
     * $query->filterByCodeLibelle('%fooValue%'); // WHERE code_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByCodeLibelle($codeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeLibelle)) {
                $codeLibelle = str_replace('*', '%', $codeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::CODE_LIBELLE, $codeLibelle, $comparison);
    }

    /**
     * Filter the query on the entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByEntreprise('fooValue');   // WHERE entreprise = 'fooValue'
     * $query->filterByEntreprise('%fooValue%'); // WHERE entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByEntreprise($entreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entreprise)) {
                $entreprise = str_replace('*', '%', $entreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::ENTREPRISE, $entreprise, $comparison);
    }

    /**
     * Filter the query on the consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultation('fooValue');   // WHERE consultation = 'fooValue'
     * $query->filterByConsultation('%fooValue%'); // WHERE consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByConsultation($consultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultation)) {
                $consultation = str_replace('*', '%', $consultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::CONSULTATION, $consultation, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot('fooValue');   // WHERE lot = 'fooValue'
     * $query->filterByLot('%fooValue%'); // WHERE lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lot)) {
                $lot = str_replace('*', '%', $lot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the agent column
     *
     * Example usage:
     * <code>
     * $query->filterByAgent('fooValue');   // WHERE agent = 'fooValue'
     * $query->filterByAgent('%fooValue%'); // WHERE agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByAgent($agent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agent)) {
                $agent = str_replace('*', '%', $agent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::AGENT, $agent, $comparison);
    }

    /**
     * Filter the query on the obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire('fooValue');   // WHERE obligatoire = 'fooValue'
     * $query->filterByObligatoire('%fooValue%'); // WHERE obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByObligatoire($obligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire)) {
                $obligatoire = str_replace('*', '%', $obligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::OBLIGATOIRE, $obligatoire, $comparison);
    }

    /**
     * Filter the query on the type_search column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeSearch('fooValue');   // WHERE type_search = 'fooValue'
     * $query->filterByTypeSearch('%fooValue%'); // WHERE type_search LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeSearch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByTypeSearch($typeSearch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeSearch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeSearch)) {
                $typeSearch = str_replace('*', '%', $typeSearch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::TYPE_SEARCH, $typeSearch, $comparison);
    }

    /**
     * Filter the query on the pages column
     *
     * Example usage:
     * <code>
     * $query->filterByPages('fooValue');   // WHERE pages = 'fooValue'
     * $query->filterByPages('%fooValue%'); // WHERE pages LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pages The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByPages($pages = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pages)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pages)) {
                $pages = str_replace('*', '%', $pages);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::PAGES, $pages, $comparison);
    }

    /**
     * Filter the query on the path_config column
     *
     * Example usage:
     * <code>
     * $query->filterByPathConfig('fooValue');   // WHERE path_config = 'fooValue'
     * $query->filterByPathConfig('%fooValue%'); // WHERE path_config LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathConfig The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByPathConfig($pathConfig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathConfig)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathConfig)) {
                $pathConfig = str_replace('*', '%', $pathConfig);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::PATH_CONFIG, $pathConfig, $comparison);
    }

    /**
     * Filter the query on the mode_affichage column
     *
     * Example usage:
     * <code>
     * $query->filterByModeAffichage('fooValue');   // WHERE mode_affichage = 'fooValue'
     * $query->filterByModeAffichage('%fooValue%'); // WHERE mode_affichage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeAffichage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByModeAffichage($modeAffichage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeAffichage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeAffichage)) {
                $modeAffichage = str_replace('*', '%', $modeAffichage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::MODE_AFFICHAGE, $modeAffichage, $comparison);
    }

    /**
     * Filter the query on the mode_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByModeModification('fooValue');   // WHERE mode_modification = 'fooValue'
     * $query->filterByModeModification('%fooValue%'); // WHERE mode_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByModeModification($modeModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeModification)) {
                $modeModification = str_replace('*', '%', $modeModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::MODE_MODIFICATION, $modeModification, $comparison);
    }

    /**
     * Filter the query on the mode_recherche column
     *
     * Example usage:
     * <code>
     * $query->filterByModeRecherche('fooValue');   // WHERE mode_recherche = 'fooValue'
     * $query->filterByModeRecherche('%fooValue%'); // WHERE mode_recherche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modeRecherche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByModeRecherche($modeRecherche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modeRecherche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modeRecherche)) {
                $modeRecherche = str_replace('*', '%', $modeRecherche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::MODE_RECHERCHE, $modeRecherche, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the organismes column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismes('fooValue');   // WHERE organismes = 'fooValue'
     * $query->filterByOrganismes('%fooValue%'); // WHERE organismes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByOrganismes($organismes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismes)) {
                $organismes = str_replace('*', '%', $organismes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::ORGANISMES, $organismes, $comparison);
    }

    /**
     * Filter the query on the libelle_info_bulle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleInfoBulle('fooValue');   // WHERE libelle_info_bulle = 'fooValue'
     * $query->filterByLibelleInfoBulle('%fooValue%'); // WHERE libelle_info_bulle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleInfoBulle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleInfoBulle($libelleInfoBulle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleInfoBulle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleInfoBulle)) {
                $libelleInfoBulle = str_replace('*', '%', $libelleInfoBulle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::LIBELLE_INFO_BULLE, $libelleInfoBulle, $comparison);
    }

    /**
     * Filter the query on the logo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogo('fooValue');   // WHERE logo = 'fooValue'
     * $query->filterByLogo('%fooValue%'); // WHERE logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logo)) {
                $logo = str_replace('*', '%', $logo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::LOGO, $logo, $comparison);
    }

    /**
     * Filter the query on the defaultValue column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultvalue('fooValue');   // WHERE defaultValue = 'fooValue'
     * $query->filterByDefaultvalue('%fooValue%'); // WHERE defaultValue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defaultvalue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByDefaultvalue($defaultvalue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defaultvalue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defaultvalue)) {
                $defaultvalue = str_replace('*', '%', $defaultvalue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::DEFAULTVALUE, $defaultvalue, $comparison);
    }

    /**
     * Filter the query on the dependance_allotissement column
     *
     * Example usage:
     * <code>
     * $query->filterByDependanceAllotissement('fooValue');   // WHERE dependance_allotissement = 'fooValue'
     * $query->filterByDependanceAllotissement('%fooValue%'); // WHERE dependance_allotissement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dependanceAllotissement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByDependanceAllotissement($dependanceAllotissement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dependanceAllotissement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dependanceAllotissement)) {
                $dependanceAllotissement = str_replace('*', '%', $dependanceAllotissement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT, $dependanceAllotissement, $comparison);
    }

    /**
     * Filter the query on the data_type column
     *
     * Example usage:
     * <code>
     * $query->filterByDataType('fooValue');   // WHERE data_type = 'fooValue'
     * $query->filterByDataType('%fooValue%'); // WHERE data_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dataType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function filterByDataType($dataType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dataType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dataType)) {
                $dataType = str_replace('*', '%', $dataType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLtReferentielPeer::DATA_TYPE, $dataType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonLtReferentiel $commonLtReferentiel Object to remove from the list of results
     *
     * @return CommonLtReferentielQuery The current query, for fluid interface
     */
    public function prune($commonLtReferentiel = null)
    {
        if ($commonLtReferentiel) {
            $this->addUsingAlias(CommonLtReferentielPeer::ID, $commonLtReferentiel->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
