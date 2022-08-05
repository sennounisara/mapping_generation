<?php


/**
 * Base class that represents a query for the 'detail_seance' table.
 *
 * 
 *
 * @method CommonDetailSeanceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDetailSeanceQuery orderByRapporteurPvJugement($order = Criteria::ASC) Order by the rapporteur_pv_jugement column
 * @method CommonDetailSeanceQuery orderByDateRendementPvJugement($order = Criteria::ASC) Order by the date_rendement_pv_jugement column
 * @method CommonDetailSeanceQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonDetailSeanceQuery orderByMembreExamenEchantillon($order = Criteria::ASC) Order by the membre_examen_echantillon column
 * @method CommonDetailSeanceQuery orderByMembreExamenDossierTechnique($order = Criteria::ASC) Order by the membre_examen_dossier_technique column
 * @method CommonDetailSeanceQuery orderByObservation($order = Criteria::ASC) Order by the observation column
 * @method CommonDetailSeanceQuery orderByMembreExamenOffreTechnique($order = Criteria::ASC) Order by the membre_examen_offre_technique column
 *
 * @method CommonDetailSeanceQuery groupById() Group by the id column
 * @method CommonDetailSeanceQuery groupByRapporteurPvJugement() Group by the rapporteur_pv_jugement column
 * @method CommonDetailSeanceQuery groupByDateRendementPvJugement() Group by the date_rendement_pv_jugement column
 * @method CommonDetailSeanceQuery groupByIdSeance() Group by the id_seance column
 * @method CommonDetailSeanceQuery groupByMembreExamenEchantillon() Group by the membre_examen_echantillon column
 * @method CommonDetailSeanceQuery groupByMembreExamenDossierTechnique() Group by the membre_examen_dossier_technique column
 * @method CommonDetailSeanceQuery groupByObservation() Group by the observation column
 * @method CommonDetailSeanceQuery groupByMembreExamenOffreTechnique() Group by the membre_examen_offre_technique column
 *
 * @method CommonDetailSeanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDetailSeanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDetailSeanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDetailSeance findOne(PropelPDO $con = null) Return the first CommonDetailSeance matching the query
 * @method CommonDetailSeance findOneOrCreate(PropelPDO $con = null) Return the first CommonDetailSeance matching the query, or a new CommonDetailSeance object populated from the query conditions when no match is found
 *
 * @method CommonDetailSeance findOneByRapporteurPvJugement(string $rapporteur_pv_jugement) Return the first CommonDetailSeance filtered by the rapporteur_pv_jugement column
 * @method CommonDetailSeance findOneByDateRendementPvJugement(string $date_rendement_pv_jugement) Return the first CommonDetailSeance filtered by the date_rendement_pv_jugement column
 * @method CommonDetailSeance findOneByIdSeance(int $id_seance) Return the first CommonDetailSeance filtered by the id_seance column
 * @method CommonDetailSeance findOneByMembreExamenEchantillon(string $membre_examen_echantillon) Return the first CommonDetailSeance filtered by the membre_examen_echantillon column
 * @method CommonDetailSeance findOneByMembreExamenDossierTechnique(string $membre_examen_dossier_technique) Return the first CommonDetailSeance filtered by the membre_examen_dossier_technique column
 * @method CommonDetailSeance findOneByObservation(string $observation) Return the first CommonDetailSeance filtered by the observation column
 * @method CommonDetailSeance findOneByMembreExamenOffreTechnique(string $membre_examen_offre_technique) Return the first CommonDetailSeance filtered by the membre_examen_offre_technique column
 *
 * @method array findById(int $id) Return CommonDetailSeance objects filtered by the id column
 * @method array findByRapporteurPvJugement(string $rapporteur_pv_jugement) Return CommonDetailSeance objects filtered by the rapporteur_pv_jugement column
 * @method array findByDateRendementPvJugement(string $date_rendement_pv_jugement) Return CommonDetailSeance objects filtered by the date_rendement_pv_jugement column
 * @method array findByIdSeance(int $id_seance) Return CommonDetailSeance objects filtered by the id_seance column
 * @method array findByMembreExamenEchantillon(string $membre_examen_echantillon) Return CommonDetailSeance objects filtered by the membre_examen_echantillon column
 * @method array findByMembreExamenDossierTechnique(string $membre_examen_dossier_technique) Return CommonDetailSeance objects filtered by the membre_examen_dossier_technique column
 * @method array findByObservation(string $observation) Return CommonDetailSeance objects filtered by the observation column
 * @method array findByMembreExamenOffreTechnique(string $membre_examen_offre_technique) Return CommonDetailSeance objects filtered by the membre_examen_offre_technique column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDetailSeanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDetailSeanceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDetailSeance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDetailSeanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDetailSeanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDetailSeanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDetailSeanceQuery) {
            return $criteria;
        }
        $query = new CommonDetailSeanceQuery();
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
     * @return   CommonDetailSeance|CommonDetailSeance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDetailSeancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDetailSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDetailSeance A model object, or null if the key is not found
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
     * @return                 CommonDetailSeance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `rapporteur_pv_jugement`, `date_rendement_pv_jugement`, `id_seance`, `membre_examen_echantillon`, `membre_examen_dossier_technique`, `observation`, `membre_examen_offre_technique` FROM `detail_seance` WHERE `id` = :p0';
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
            $obj = new CommonDetailSeance();
            $obj->hydrate($row);
            CommonDetailSeancePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDetailSeance|CommonDetailSeance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDetailSeance[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDetailSeancePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDetailSeancePeer::ID, $keys, Criteria::IN);
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
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the rapporteur_pv_jugement column
     *
     * Example usage:
     * <code>
     * $query->filterByRapporteurPvJugement('fooValue');   // WHERE rapporteur_pv_jugement = 'fooValue'
     * $query->filterByRapporteurPvJugement('%fooValue%'); // WHERE rapporteur_pv_jugement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rapporteurPvJugement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByRapporteurPvJugement($rapporteurPvJugement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rapporteurPvJugement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rapporteurPvJugement)) {
                $rapporteurPvJugement = str_replace('*', '%', $rapporteurPvJugement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::RAPPORTEUR_PV_JUGEMENT, $rapporteurPvJugement, $comparison);
    }

    /**
     * Filter the query on the date_rendement_pv_jugement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRendementPvJugement('2011-03-14'); // WHERE date_rendement_pv_jugement = '2011-03-14'
     * $query->filterByDateRendementPvJugement('now'); // WHERE date_rendement_pv_jugement = '2011-03-14'
     * $query->filterByDateRendementPvJugement(array('max' => 'yesterday')); // WHERE date_rendement_pv_jugement > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRendementPvJugement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByDateRendementPvJugement($dateRendementPvJugement = null, $comparison = null)
    {
        if (is_array($dateRendementPvJugement)) {
            $useMinMax = false;
            if (isset($dateRendementPvJugement['min'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::DATE_RENDEMENT_PV_JUGEMENT, $dateRendementPvJugement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRendementPvJugement['max'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::DATE_RENDEMENT_PV_JUGEMENT, $dateRendementPvJugement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::DATE_RENDEMENT_PV_JUGEMENT, $dateRendementPvJugement, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonDetailSeancePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::ID_SEANCE, $idSeance, $comparison);
    }

    /**
     * Filter the query on the membre_examen_echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByMembreExamenEchantillon('fooValue');   // WHERE membre_examen_echantillon = 'fooValue'
     * $query->filterByMembreExamenEchantillon('%fooValue%'); // WHERE membre_examen_echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membreExamenEchantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByMembreExamenEchantillon($membreExamenEchantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membreExamenEchantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membreExamenEchantillon)) {
                $membreExamenEchantillon = str_replace('*', '%', $membreExamenEchantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::MEMBRE_EXAMEN_ECHANTILLON, $membreExamenEchantillon, $comparison);
    }

    /**
     * Filter the query on the membre_examen_dossier_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByMembreExamenDossierTechnique('fooValue');   // WHERE membre_examen_dossier_technique = 'fooValue'
     * $query->filterByMembreExamenDossierTechnique('%fooValue%'); // WHERE membre_examen_dossier_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membreExamenDossierTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByMembreExamenDossierTechnique($membreExamenDossierTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membreExamenDossierTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membreExamenDossierTechnique)) {
                $membreExamenDossierTechnique = str_replace('*', '%', $membreExamenDossierTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::MEMBRE_EXAMEN_DOSSIER_TECHNIQUE, $membreExamenDossierTechnique, $comparison);
    }

    /**
     * Filter the query on the observation column
     *
     * Example usage:
     * <code>
     * $query->filterByObservation('fooValue');   // WHERE observation = 'fooValue'
     * $query->filterByObservation('%fooValue%'); // WHERE observation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByObservation($observation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observation)) {
                $observation = str_replace('*', '%', $observation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::OBSERVATION, $observation, $comparison);
    }

    /**
     * Filter the query on the membre_examen_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByMembreExamenOffreTechnique('fooValue');   // WHERE membre_examen_offre_technique = 'fooValue'
     * $query->filterByMembreExamenOffreTechnique('%fooValue%'); // WHERE membre_examen_offre_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membreExamenOffreTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function filterByMembreExamenOffreTechnique($membreExamenOffreTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membreExamenOffreTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $membreExamenOffreTechnique)) {
                $membreExamenOffreTechnique = str_replace('*', '%', $membreExamenOffreTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailSeancePeer::MEMBRE_EXAMEN_OFFRE_TECHNIQUE, $membreExamenOffreTechnique, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDetailSeance $commonDetailSeance Object to remove from the list of results
     *
     * @return CommonDetailSeanceQuery The current query, for fluid interface
     */
    public function prune($commonDetailSeance = null)
    {
        if ($commonDetailSeance) {
            $this->addUsingAlias(CommonDetailSeancePeer::ID, $commonDetailSeance->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
