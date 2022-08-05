<?php


/**
 * Base class that represents a query for the 'backup_Intervenant_Ordre_Du_Jour' table.
 *
 * 
 *
 * @method CommonBackupIntervenantOrdreDuJourQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByIdOrdreDuJour($order = Criteria::ASC) Order by the id_ordre_du_jour column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByIdIntervenant($order = Criteria::ASC) Order by the id_intervenant column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByConvocation($order = Criteria::ASC) Order by the convocation column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByConvocSend($order = Criteria::ASC) Order by the convoc_send column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByNomConvoc($order = Criteria::ASC) Order by the nom_convoc column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByContenuEnvoi($order = Criteria::ASC) Order by the contenu_envoi column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByNomFichierEnvoye($order = Criteria::ASC) Order by the nom_fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByFichierEnvoye($order = Criteria::ASC) Order by the fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonBackupIntervenantOrdreDuJourQuery orderByTypeVoix($order = Criteria::ASC) Order by the type_voix column
 *
 * @method CommonBackupIntervenantOrdreDuJourQuery groupById() Group by the id column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByIdOrdreDuJour() Group by the id_ordre_du_jour column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByIdIntervenant() Group by the id_intervenant column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByIdAgent() Group by the id_agent column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByConvocation() Group by the convocation column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByConvocSend() Group by the convoc_send column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByNomConvoc() Group by the nom_convoc column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByContenuEnvoi() Group by the contenu_envoi column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByNomFichierEnvoye() Group by the nom_fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByFichierEnvoye() Group by the fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonBackupIntervenantOrdreDuJourQuery groupByTypeVoix() Group by the type_voix column
 *
 * @method CommonBackupIntervenantOrdreDuJourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupIntervenantOrdreDuJourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupIntervenantOrdreDuJourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupIntervenantOrdreDuJour findOne(PropelPDO $con = null) Return the first CommonBackupIntervenantOrdreDuJour matching the query
 * @method CommonBackupIntervenantOrdreDuJour findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupIntervenantOrdreDuJour matching the query, or a new CommonBackupIntervenantOrdreDuJour object populated from the query conditions when no match is found
 *
 * @method CommonBackupIntervenantOrdreDuJour findOneById(int $id) Return the first CommonBackupIntervenantOrdreDuJour filtered by the id column
 * @method CommonBackupIntervenantOrdreDuJour findOneByOrganisme(string $organisme) Return the first CommonBackupIntervenantOrdreDuJour filtered by the organisme column
 * @method CommonBackupIntervenantOrdreDuJour findOneByIdOrdreDuJour(int $id_ordre_du_jour) Return the first CommonBackupIntervenantOrdreDuJour filtered by the id_ordre_du_jour column
 * @method CommonBackupIntervenantOrdreDuJour findOneByIdIntervenant(int $id_intervenant) Return the first CommonBackupIntervenantOrdreDuJour filtered by the id_intervenant column
 * @method CommonBackupIntervenantOrdreDuJour findOneByIdAgent(int $id_agent) Return the first CommonBackupIntervenantOrdreDuJour filtered by the id_agent column
 * @method CommonBackupIntervenantOrdreDuJour findOneByConvocation(resource $convocation) Return the first CommonBackupIntervenantOrdreDuJour filtered by the convocation column
 * @method CommonBackupIntervenantOrdreDuJour findOneByConvocSend(string $convoc_send) Return the first CommonBackupIntervenantOrdreDuJour filtered by the convoc_send column
 * @method CommonBackupIntervenantOrdreDuJour findOneByNomConvoc(string $nom_convoc) Return the first CommonBackupIntervenantOrdreDuJour filtered by the nom_convoc column
 * @method CommonBackupIntervenantOrdreDuJour findOneByContenuEnvoi(string $contenu_envoi) Return the first CommonBackupIntervenantOrdreDuJour filtered by the contenu_envoi column
 * @method CommonBackupIntervenantOrdreDuJour findOneByNomFichierEnvoye(string $nom_fichier_envoye) Return the first CommonBackupIntervenantOrdreDuJour filtered by the nom_fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJour findOneByFichierEnvoye(resource $fichier_envoye) Return the first CommonBackupIntervenantOrdreDuJour filtered by the fichier_envoye column
 * @method CommonBackupIntervenantOrdreDuJour findOneByDateEnvoi(string $date_envoi) Return the first CommonBackupIntervenantOrdreDuJour filtered by the date_envoi column
 * @method CommonBackupIntervenantOrdreDuJour findOneByTypeVoix(string $type_voix) Return the first CommonBackupIntervenantOrdreDuJour filtered by the type_voix column
 *
 * @method array findById(int $id) Return CommonBackupIntervenantOrdreDuJour objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBackupIntervenantOrdreDuJour objects filtered by the organisme column
 * @method array findByIdOrdreDuJour(int $id_ordre_du_jour) Return CommonBackupIntervenantOrdreDuJour objects filtered by the id_ordre_du_jour column
 * @method array findByIdIntervenant(int $id_intervenant) Return CommonBackupIntervenantOrdreDuJour objects filtered by the id_intervenant column
 * @method array findByIdAgent(int $id_agent) Return CommonBackupIntervenantOrdreDuJour objects filtered by the id_agent column
 * @method array findByConvocation(resource $convocation) Return CommonBackupIntervenantOrdreDuJour objects filtered by the convocation column
 * @method array findByConvocSend(string $convoc_send) Return CommonBackupIntervenantOrdreDuJour objects filtered by the convoc_send column
 * @method array findByNomConvoc(string $nom_convoc) Return CommonBackupIntervenantOrdreDuJour objects filtered by the nom_convoc column
 * @method array findByContenuEnvoi(string $contenu_envoi) Return CommonBackupIntervenantOrdreDuJour objects filtered by the contenu_envoi column
 * @method array findByNomFichierEnvoye(string $nom_fichier_envoye) Return CommonBackupIntervenantOrdreDuJour objects filtered by the nom_fichier_envoye column
 * @method array findByFichierEnvoye(resource $fichier_envoye) Return CommonBackupIntervenantOrdreDuJour objects filtered by the fichier_envoye column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonBackupIntervenantOrdreDuJour objects filtered by the date_envoi column
 * @method array findByTypeVoix(string $type_voix) Return CommonBackupIntervenantOrdreDuJour objects filtered by the type_voix column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupIntervenantOrdreDuJourQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupIntervenantOrdreDuJourQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupIntervenantOrdreDuJour', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupIntervenantOrdreDuJourQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupIntervenantOrdreDuJourQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupIntervenantOrdreDuJourQuery) {
            return $criteria;
        }
        $query = new CommonBackupIntervenantOrdreDuJourQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBackupIntervenantOrdreDuJour|CommonBackupIntervenantOrdreDuJour[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupIntervenantOrdreDuJourPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupIntervenantOrdreDuJour A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_ordre_du_jour`, `id_intervenant`, `id_agent`, `convocation`, `convoc_send`, `nom_convoc`, `contenu_envoi`, `nom_fichier_envoye`, `fichier_envoye`, `date_envoi`, `type_voix` FROM `backup_Intervenant_Ordre_Du_Jour` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonBackupIntervenantOrdreDuJour();
            $obj->hydrate($row);
            CommonBackupIntervenantOrdreDuJourPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBackupIntervenantOrdreDuJour|CommonBackupIntervenantOrdreDuJour[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBackupIntervenantOrdreDuJour[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupIntervenantOrdreDuJourPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID, $id, $comparison);
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
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_ordre_du_jour column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrdreDuJour(1234); // WHERE id_ordre_du_jour = 1234
     * $query->filterByIdOrdreDuJour(array(12, 34)); // WHERE id_ordre_du_jour IN (12, 34)
     * $query->filterByIdOrdreDuJour(array('min' => 12)); // WHERE id_ordre_du_jour >= 12
     * $query->filterByIdOrdreDuJour(array('max' => 12)); // WHERE id_ordre_du_jour <= 12
     * </code>
     *
     * @param     mixed $idOrdreDuJour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdOrdreDuJour($idOrdreDuJour = null, $comparison = null)
    {
        if (is_array($idOrdreDuJour)) {
            $useMinMax = false;
            if (isset($idOrdreDuJour['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR, $idOrdreDuJour['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrdreDuJour['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR, $idOrdreDuJour['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR, $idOrdreDuJour, $comparison);
    }

    /**
     * Filter the query on the id_intervenant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIntervenant(1234); // WHERE id_intervenant = 1234
     * $query->filterByIdIntervenant(array(12, 34)); // WHERE id_intervenant IN (12, 34)
     * $query->filterByIdIntervenant(array('min' => 12)); // WHERE id_intervenant >= 12
     * $query->filterByIdIntervenant(array('max' => 12)); // WHERE id_intervenant <= 12
     * </code>
     *
     * @param     mixed $idIntervenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdIntervenant($idIntervenant = null, $comparison = null)
    {
        if (is_array($idIntervenant)) {
            $useMinMax = false;
            if (isset($idIntervenant['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT, $idIntervenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenant['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT, $idIntervenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT, $idIntervenant, $comparison);
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
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the convocation column
     *
     * @param     mixed $convocation The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByConvocation($convocation = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION, $convocation, $comparison);
    }

    /**
     * Filter the query on the convoc_send column
     *
     * Example usage:
     * <code>
     * $query->filterByConvocSend('fooValue');   // WHERE convoc_send = 'fooValue'
     * $query->filterByConvocSend('%fooValue%'); // WHERE convoc_send LIKE '%fooValue%'
     * </code>
     *
     * @param     string $convocSend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByConvocSend($convocSend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($convocSend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $convocSend)) {
                $convocSend = str_replace('*', '%', $convocSend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND, $convocSend, $comparison);
    }

    /**
     * Filter the query on the nom_convoc column
     *
     * Example usage:
     * <code>
     * $query->filterByNomConvoc('fooValue');   // WHERE nom_convoc = 'fooValue'
     * $query->filterByNomConvoc('%fooValue%'); // WHERE nom_convoc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomConvoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByNomConvoc($nomConvoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomConvoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomConvoc)) {
                $nomConvoc = str_replace('*', '%', $nomConvoc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC, $nomConvoc, $comparison);
    }

    /**
     * Filter the query on the contenu_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByContenuEnvoi('fooValue');   // WHERE contenu_envoi = 'fooValue'
     * $query->filterByContenuEnvoi('%fooValue%'); // WHERE contenu_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenuEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByContenuEnvoi($contenuEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenuEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenuEnvoi)) {
                $contenuEnvoi = str_replace('*', '%', $contenuEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI, $contenuEnvoi, $comparison);
    }

    /**
     * Filter the query on the nom_fichier_envoye column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichierEnvoye('fooValue');   // WHERE nom_fichier_envoye = 'fooValue'
     * $query->filterByNomFichierEnvoye('%fooValue%'); // WHERE nom_fichier_envoye LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichierEnvoye The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByNomFichierEnvoye($nomFichierEnvoye = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichierEnvoye)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichierEnvoye)) {
                $nomFichierEnvoye = str_replace('*', '%', $nomFichierEnvoye);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE, $nomFichierEnvoye, $comparison);
    }

    /**
     * Filter the query on the fichier_envoye column
     *
     * @param     mixed $fichierEnvoye The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByFichierEnvoye($fichierEnvoye = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE, $fichierEnvoye, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('2011-03-14'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi('now'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi(array('max' => 'yesterday')); // WHERE date_envoi > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the type_voix column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeVoix('fooValue');   // WHERE type_voix = 'fooValue'
     * $query->filterByTypeVoix('%fooValue%'); // WHERE type_voix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeVoix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByTypeVoix($typeVoix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeVoix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeVoix)) {
                $typeVoix = str_replace('*', '%', $typeVoix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX, $typeVoix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupIntervenantOrdreDuJour $commonBackupIntervenantOrdreDuJour Object to remove from the list of results
     *
     * @return CommonBackupIntervenantOrdreDuJourQuery The current query, for fluid interface
     */
    public function prune($commonBackupIntervenantOrdreDuJour = null)
    {
        if ($commonBackupIntervenantOrdreDuJour) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupIntervenantOrdreDuJourPeer::ID), $commonBackupIntervenantOrdreDuJour->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME), $commonBackupIntervenantOrdreDuJour->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
