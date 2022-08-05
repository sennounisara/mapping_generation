<?php


/**
 * Base class that represents a query for the 'Avis_Membres_CAO' table.
 *
 * 
 *
 * @method CommonAvisMembresCAOQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAvisMembresCAOQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonAvisMembresCAOQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 * @method CommonAvisMembresCAOQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonAvisMembresCAOQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonAvisMembresCAOQuery orderByDateAction($order = Criteria::ASC) Order by the date_action column
 * @method CommonAvisMembresCAOQuery orderByAdmissibilite($order = Criteria::ASC) Order by the admissibilite column
 * @method CommonAvisMembresCAOQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonAvisMembresCAOQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonAvisMembresCAOQuery orderByTypeDepotReponse($order = Criteria::ASC) Order by the type_depot_reponse column
 *
 * @method CommonAvisMembresCAOQuery groupById() Group by the id column
 * @method CommonAvisMembresCAOQuery groupByIdAgent() Group by the id_agent column
 * @method CommonAvisMembresCAOQuery groupByIdEnveloppe() Group by the id_enveloppe column
 * @method CommonAvisMembresCAOQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonAvisMembresCAOQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonAvisMembresCAOQuery groupByDateAction() Group by the date_action column
 * @method CommonAvisMembresCAOQuery groupByAdmissibilite() Group by the admissibilite column
 * @method CommonAvisMembresCAOQuery groupByCommentaire() Group by the commentaire column
 * @method CommonAvisMembresCAOQuery groupBySousPli() Group by the sous_pli column
 * @method CommonAvisMembresCAOQuery groupByTypeDepotReponse() Group by the type_depot_reponse column
 *
 * @method CommonAvisMembresCAOQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAvisMembresCAOQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAvisMembresCAOQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAvisMembresCAO findOne(PropelPDO $con = null) Return the first CommonAvisMembresCAO matching the query
 * @method CommonAvisMembresCAO findOneOrCreate(PropelPDO $con = null) Return the first CommonAvisMembresCAO matching the query, or a new CommonAvisMembresCAO object populated from the query conditions when no match is found
 *
 * @method CommonAvisMembresCAO findOneByIdAgent(int $id_agent) Return the first CommonAvisMembresCAO filtered by the id_agent column
 * @method CommonAvisMembresCAO findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonAvisMembresCAO filtered by the id_enveloppe column
 * @method CommonAvisMembresCAO findOneByNomAgent(string $nom_agent) Return the first CommonAvisMembresCAO filtered by the nom_agent column
 * @method CommonAvisMembresCAO findOneByPrenomAgent(string $prenom_agent) Return the first CommonAvisMembresCAO filtered by the prenom_agent column
 * @method CommonAvisMembresCAO findOneByDateAction(string $date_action) Return the first CommonAvisMembresCAO filtered by the date_action column
 * @method CommonAvisMembresCAO findOneByAdmissibilite(int $admissibilite) Return the first CommonAvisMembresCAO filtered by the admissibilite column
 * @method CommonAvisMembresCAO findOneByCommentaire(string $commentaire) Return the first CommonAvisMembresCAO filtered by the commentaire column
 * @method CommonAvisMembresCAO findOneBySousPli(int $sous_pli) Return the first CommonAvisMembresCAO filtered by the sous_pli column
 * @method CommonAvisMembresCAO findOneByTypeDepotReponse(int $type_depot_reponse) Return the first CommonAvisMembresCAO filtered by the type_depot_reponse column
 *
 * @method array findById(int $id) Return CommonAvisMembresCAO objects filtered by the id column
 * @method array findByIdAgent(int $id_agent) Return CommonAvisMembresCAO objects filtered by the id_agent column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonAvisMembresCAO objects filtered by the id_enveloppe column
 * @method array findByNomAgent(string $nom_agent) Return CommonAvisMembresCAO objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonAvisMembresCAO objects filtered by the prenom_agent column
 * @method array findByDateAction(string $date_action) Return CommonAvisMembresCAO objects filtered by the date_action column
 * @method array findByAdmissibilite(int $admissibilite) Return CommonAvisMembresCAO objects filtered by the admissibilite column
 * @method array findByCommentaire(string $commentaire) Return CommonAvisMembresCAO objects filtered by the commentaire column
 * @method array findBySousPli(int $sous_pli) Return CommonAvisMembresCAO objects filtered by the sous_pli column
 * @method array findByTypeDepotReponse(int $type_depot_reponse) Return CommonAvisMembresCAO objects filtered by the type_depot_reponse column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAvisMembresCAOQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAvisMembresCAOQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAvisMembresCAO', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAvisMembresCAOQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAvisMembresCAOQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAvisMembresCAOQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAvisMembresCAOQuery) {
            return $criteria;
        }
        $query = new CommonAvisMembresCAOQuery();
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
     * @return   CommonAvisMembresCAO|CommonAvisMembresCAO[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAvisMembresCAOPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAvisMembresCAOPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAvisMembresCAO A model object, or null if the key is not found
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
     * @return                 CommonAvisMembresCAO A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_agent`, `id_enveloppe`, `nom_agent`, `prenom_agent`, `date_action`, `admissibilite`, `commentaire`, `sous_pli`, `type_depot_reponse` FROM `Avis_Membres_CAO` WHERE `id` = :p0';
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
            $obj = new CommonAvisMembresCAO();
            $obj->hydrate($row);
            CommonAvisMembresCAOPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAvisMembresCAO|CommonAvisMembresCAO[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAvisMembresCAO[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $keys, Criteria::IN);
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
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the date_action column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAction('fooValue');   // WHERE date_action = 'fooValue'
     * $query->filterByDateAction('%fooValue%'); // WHERE date_action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByDateAction($dateAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAction)) {
                $dateAction = str_replace('*', '%', $dateAction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::DATE_ACTION, $dateAction, $comparison);
    }

    /**
     * Filter the query on the admissibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmissibilite(1234); // WHERE admissibilite = 1234
     * $query->filterByAdmissibilite(array(12, 34)); // WHERE admissibilite IN (12, 34)
     * $query->filterByAdmissibilite(array('min' => 12)); // WHERE admissibilite >= 12
     * $query->filterByAdmissibilite(array('max' => 12)); // WHERE admissibilite <= 12
     * </code>
     *
     * @param     mixed $admissibilite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByAdmissibilite($admissibilite = null, $comparison = null)
    {
        if (is_array($admissibilite)) {
            $useMinMax = false;
            if (isset($admissibilite['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ADMISSIBILITE, $admissibilite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admissibilite['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::ADMISSIBILITE, $admissibilite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::ADMISSIBILITE, $admissibilite, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the type_depot_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDepotReponse(1234); // WHERE type_depot_reponse = 1234
     * $query->filterByTypeDepotReponse(array(12, 34)); // WHERE type_depot_reponse IN (12, 34)
     * $query->filterByTypeDepotReponse(array('min' => 12)); // WHERE type_depot_reponse >= 12
     * $query->filterByTypeDepotReponse(array('max' => 12)); // WHERE type_depot_reponse <= 12
     * </code>
     *
     * @param     mixed $typeDepotReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function filterByTypeDepotReponse($typeDepotReponse = null, $comparison = null)
    {
        if (is_array($typeDepotReponse)) {
            $useMinMax = false;
            if (isset($typeDepotReponse['min'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE, $typeDepotReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDepotReponse['max'])) {
                $this->addUsingAlias(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE, $typeDepotReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE, $typeDepotReponse, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAvisMembresCAO $commonAvisMembresCAO Object to remove from the list of results
     *
     * @return CommonAvisMembresCAOQuery The current query, for fluid interface
     */
    public function prune($commonAvisMembresCAO = null)
    {
        if ($commonAvisMembresCAO) {
            $this->addUsingAlias(CommonAvisMembresCAOPeer::ID, $commonAvisMembresCAO->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
