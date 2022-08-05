<?php


/**
 * Base class that represents a query for the 'Historique_Avis_Pub' table.
 *
 * 
 *
 * @method CommonHistoriqueAvisPubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonHistoriqueAvisPubQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHistoriqueAvisPubQuery orderByIdAvis($order = Criteria::ASC) Order by the id_avis column
 * @method CommonHistoriqueAvisPubQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonHistoriqueAvisPubQuery orderByDetailStatut($order = Criteria::ASC) Order by the detail_statut column
 * @method CommonHistoriqueAvisPubQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonHistoriqueAvisPubQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonHistoriqueAvisPubQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonHistoriqueAvisPubQuery orderByTypeHistorique($order = Criteria::ASC) Order by the type_historique column
 *
 * @method CommonHistoriqueAvisPubQuery groupById() Group by the id column
 * @method CommonHistoriqueAvisPubQuery groupByOrganisme() Group by the organisme column
 * @method CommonHistoriqueAvisPubQuery groupByIdAvis() Group by the id_avis column
 * @method CommonHistoriqueAvisPubQuery groupByDateModification() Group by the date_modification column
 * @method CommonHistoriqueAvisPubQuery groupByDetailStatut() Group by the detail_statut column
 * @method CommonHistoriqueAvisPubQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonHistoriqueAvisPubQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonHistoriqueAvisPubQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonHistoriqueAvisPubQuery groupByTypeHistorique() Group by the type_historique column
 *
 * @method CommonHistoriqueAvisPubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHistoriqueAvisPubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHistoriqueAvisPubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHistoriqueAvisPub findOne(PropelPDO $con = null) Return the first CommonHistoriqueAvisPub matching the query
 * @method CommonHistoriqueAvisPub findOneOrCreate(PropelPDO $con = null) Return the first CommonHistoriqueAvisPub matching the query, or a new CommonHistoriqueAvisPub object populated from the query conditions when no match is found
 *
 * @method CommonHistoriqueAvisPub findOneById(int $id) Return the first CommonHistoriqueAvisPub filtered by the id column
 * @method CommonHistoriqueAvisPub findOneByOrganisme(string $organisme) Return the first CommonHistoriqueAvisPub filtered by the organisme column
 * @method CommonHistoriqueAvisPub findOneByIdAvis(int $id_avis) Return the first CommonHistoriqueAvisPub filtered by the id_avis column
 * @method CommonHistoriqueAvisPub findOneByDateModification(string $date_modification) Return the first CommonHistoriqueAvisPub filtered by the date_modification column
 * @method CommonHistoriqueAvisPub findOneByDetailStatut(int $detail_statut) Return the first CommonHistoriqueAvisPub filtered by the detail_statut column
 * @method CommonHistoriqueAvisPub findOneByMotifRejet(string $motif_rejet) Return the first CommonHistoriqueAvisPub filtered by the motif_rejet column
 * @method CommonHistoriqueAvisPub findOneByPrenomAgent(string $prenom_agent) Return the first CommonHistoriqueAvisPub filtered by the prenom_agent column
 * @method CommonHistoriqueAvisPub findOneByNomAgent(string $nom_agent) Return the first CommonHistoriqueAvisPub filtered by the nom_agent column
 * @method CommonHistoriqueAvisPub findOneByTypeHistorique(int $type_historique) Return the first CommonHistoriqueAvisPub filtered by the type_historique column
 *
 * @method array findById(int $id) Return CommonHistoriqueAvisPub objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonHistoriqueAvisPub objects filtered by the organisme column
 * @method array findByIdAvis(int $id_avis) Return CommonHistoriqueAvisPub objects filtered by the id_avis column
 * @method array findByDateModification(string $date_modification) Return CommonHistoriqueAvisPub objects filtered by the date_modification column
 * @method array findByDetailStatut(int $detail_statut) Return CommonHistoriqueAvisPub objects filtered by the detail_statut column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonHistoriqueAvisPub objects filtered by the motif_rejet column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonHistoriqueAvisPub objects filtered by the prenom_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonHistoriqueAvisPub objects filtered by the nom_agent column
 * @method array findByTypeHistorique(int $type_historique) Return CommonHistoriqueAvisPub objects filtered by the type_historique column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHistoriqueAvisPubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHistoriqueAvisPubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHistoriqueAvisPub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHistoriqueAvisPubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHistoriqueAvisPubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHistoriqueAvisPubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHistoriqueAvisPubQuery) {
            return $criteria;
        }
        $query = new CommonHistoriqueAvisPubQuery();
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
     * @return   CommonHistoriqueAvisPub|CommonHistoriqueAvisPub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHistoriqueAvisPubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHistoriqueAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHistoriqueAvisPub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_avis`, `date_modification`, `detail_statut`, `motif_rejet`, `prenom_agent`, `nom_agent`, `type_historique` FROM `Historique_Avis_Pub` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonHistoriqueAvisPub();
            $obj->hydrate($row);
            CommonHistoriqueAvisPubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonHistoriqueAvisPub|CommonHistoriqueAvisPub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHistoriqueAvisPub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHistoriqueAvisPubPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHistoriqueAvisPubPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID, $id, $comparison);
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
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvis(1234); // WHERE id_avis = 1234
     * $query->filterByIdAvis(array(12, 34)); // WHERE id_avis IN (12, 34)
     * $query->filterByIdAvis(array('min' => 12)); // WHERE id_avis >= 12
     * $query->filterByIdAvis(array('max' => 12)); // WHERE id_avis <= 12
     * </code>
     *
     * @param     mixed $idAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAvis($idAvis = null, $comparison = null)
    {
        if (is_array($idAvis)) {
            $useMinMax = false;
            if (isset($idAvis['min'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID_AVIS, $idAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvis['max'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID_AVIS, $idAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::ID_AVIS, $idAvis, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the detail_statut column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailStatut(1234); // WHERE detail_statut = 1234
     * $query->filterByDetailStatut(array(12, 34)); // WHERE detail_statut IN (12, 34)
     * $query->filterByDetailStatut(array('min' => 12)); // WHERE detail_statut >= 12
     * $query->filterByDetailStatut(array('max' => 12)); // WHERE detail_statut <= 12
     * </code>
     *
     * @param     mixed $detailStatut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByDetailStatut($detailStatut = null, $comparison = null)
    {
        if (is_array($detailStatut)) {
            $useMinMax = false;
            if (isset($detailStatut['min'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::DETAIL_STATUT, $detailStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($detailStatut['max'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::DETAIL_STATUT, $detailStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::DETAIL_STATUT, $detailStatut, $comparison);
    }

    /**
     * Filter the query on the motif_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejet('fooValue');   // WHERE motif_rejet = 'fooValue'
     * $query->filterByMotifRejet('%fooValue%'); // WHERE motif_rejet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByMotifRejet($motifRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejet)) {
                $motifRejet = str_replace('*', '%', $motifRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::MOTIF_REJET, $motifRejet, $comparison);
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
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::PRENOM_AGENT, $prenomAgent, $comparison);
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
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the type_historique column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeHistorique(1234); // WHERE type_historique = 1234
     * $query->filterByTypeHistorique(array(12, 34)); // WHERE type_historique IN (12, 34)
     * $query->filterByTypeHistorique(array('min' => 12)); // WHERE type_historique >= 12
     * $query->filterByTypeHistorique(array('max' => 12)); // WHERE type_historique <= 12
     * </code>
     *
     * @param     mixed $typeHistorique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function filterByTypeHistorique($typeHistorique = null, $comparison = null)
    {
        if (is_array($typeHistorique)) {
            $useMinMax = false;
            if (isset($typeHistorique['min'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE, $typeHistorique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeHistorique['max'])) {
                $this->addUsingAlias(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE, $typeHistorique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE, $typeHistorique, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHistoriqueAvisPub $commonHistoriqueAvisPub Object to remove from the list of results
     *
     * @return CommonHistoriqueAvisPubQuery The current query, for fluid interface
     */
    public function prune($commonHistoriqueAvisPub = null)
    {
        if ($commonHistoriqueAvisPub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHistoriqueAvisPubPeer::ID), $commonHistoriqueAvisPub->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHistoriqueAvisPubPeer::ORGANISME), $commonHistoriqueAvisPub->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
